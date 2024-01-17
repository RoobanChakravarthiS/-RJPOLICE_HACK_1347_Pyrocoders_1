<?php
session_start();
include("connection2.php");

if (isset($_POST['submit'])) {
    $firno = $_POST['firno'];
    $police = $_POST['policeStation'];
    $mobile = $_POST['mobile'];
    $officer = $_POST['offname'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['starRating'];
    $rating_increase_map = [1 => 5, 2 => 4, 3 => 3, 4 => 2, 5 => 1];
    $nrating = $rating_increase_map[$rating];

    $check_firno_query = $conn->prepare("SELECT FIRno FROM `fir feedback` WHERE FIRno = ?");
    $check_firno_query->bind_param("s", $firno);
    $check_firno_query->execute();
    $check_firno_query->store_result();

    if ($check_firno_query->num_rows > 0) {
        echo "<script>alert('Error: FIRno already exists in the database.');</script>";
        $check_firno_query->close();
        exit; // Stop further execution
    }

    $check_firno_query->close();


    function generateCode()
    {
        return mt_rand(10000000, 99999999);
    }

    function codeExists($code, $conn)
    {
        $sql = "SELECT * FROM `fir feedback` WHERE code = $code";
        $result = $conn->query($sql);
        return ($result->num_rows > 0);
    }

    if (!isset($_SESSION['generated_code'])) {
        do {
            $newCode = generateCode();
        } while (codeExists($newCode, $conn));
        $_SESSION['generated_code'] = $newCode;
    } else {
        $newCode = $_SESSION['generated_code'];
    }

    $stmt = $conn->prepare("INSERT INTO `fir feedback` (FIRno, station, MobileNumber, HandlingOfficer, Feedback, rating,code) VALUES (?, ?, ?, ?, ?, ?,?)");

    if ($stmt) {
        $stmt->bind_param("sssssii",$firno, $police, $mobile, $officer, $feedback, $nrating, $newCode);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        if ($stmt->affected_rows > 0) {
            unset($_SESSION['generated_code']); // Reset the session variable
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    // Update or insert into credits table
    $sql_check = $conn->prepare("SELECT Officer_Name FROM `credits` WHERE Officer_Name = ? AND Station = ?");

    if ($sql_check) {
        $sql_check->bind_param("ss", $officer, $police);
        $sql_check->execute();
        $sql_check->store_result();

        if ($sql_check->num_rows > 0) {
            // Officer's record found, update credits
            $sql_update = $conn->prepare("UPDATE `credits` SET Credit = Credit + ? WHERE Officer_Name = ? AND Station = ?");

            if ($sql_update) {
                $sql_update->bind_param("iss", $nrating, $officer, $police);
                $sql_update->execute();

                if ($sql_update->affected_rows > 0) {
                    echo "";
                } else {
                    echo "<script>alert('Error: " . $sql_update->error . "');</script>";
                }

                $sql_update->close();
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        } else {
            // Officer's record not found, insert new row
            $sql_insert = $conn->prepare("INSERT INTO `credits` (Officer_Name, Station, Credit) VALUES (?, ?, ?)");

            if ($sql_insert) {
                $sql_insert->bind_param("ssi", $officer, $police, $nrating);
                $sql_insert->execute();

                if ($sql_insert->affected_rows > 0) {
                    echo "";
                } else {
                    echo "<script>alert('Error: " . $sql_insert->error . "');</script>";
                }

                $sql_insert->close();
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        }

        $sql_check->close();
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
    // ... (previous code)



// ... (remaining code)


    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            width: 100%;
            margin: 0;
            background-color: cornsilk;
        }

        #coupon {
            margin: auto;
            width: 290px;
            height: 410px;
            background-image: url(coupon.jpg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        #coupon-code {
            text-align: center;
            margin-top: 270px;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div id="coupon">
        <p id="coupon-code"><?php echo $newCode; ?></p>
    </div>
</body>

</html>
