<?php
session_start();
include("connection2.php");
$OTP = $_SESSION['OTP'];
if(isset($_POST['submit'])) {
    $district = $_POST['district'];
    $police = $_POST['policeStation'];
    $subotp = $_POST['otp'];
    $mobile = $_POST['mobile'];
    $officer = $_POST['offname'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['starRating'];
    
    $rating_increase_map = [
        1 => 5,  
        2 => 4,  
        3 => 3,  
        4 => 2,  
        5 => 1
    ];
    $nrating = $rating_increase_map[$rating];

    if($subotp == $OTP){
        $reward = 



        $stmt = $conn->prepare("INSERT INTO `fir feedback` (district, station, MobileNumber, HandlingOfficer, Feedback, rating) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sssssi", $district, $police, $mobile, $officer, $feedback, $nrating);
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Data inserted successfully!')</script>";
            } else {
                echo "<script>alert('Error: " . $stmt->error . "')</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error: " . $conn->error . "')</script>";
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
                        echo "<script>alert('Data updated successfully!')</script>";
                    } else {
                        echo "<script>alert('Error: " . $sql_update->error . "')</script>";
                    }
                    $sql_update->close();
                } else {
                    echo "<script>alert('Error: " . $conn->error . "')</script>";
                }
            } else {
                // Officer's record not found, insert new row
                $sql_insert = $conn->prepare("INSERT INTO `credits` (Officer_Name, Station, Credit, District) VALUES (?, ?, ?, ?)");
                if ($sql_insert) {
                    $sql_insert->bind_param("ssis", $officer, $police, $nrating, $district);
                    $sql_insert->execute();

                    if ($sql_insert->affected_rows > 0) {
                        echo "<script>alert('Data inserted successfully!')</script>";
                    } else {
                        echo "<script>alert('Error: " . $sql_insert->error . "')</script>";
                    }
                    $sql_insert->close();
                } else {
                    echo "<script>alert('Error: " . $conn->error . "')</script>";
                }
            }
            $sql_check->close();
        } else {
            echo "<script>alert('Error: " . $conn->error . "')</script>";
        }
    }
    else{
        echo "<script>alert('Invalid OTP')</script>";
    }
    $conn->close();
}
?>