<?php
    include("connection.php");

    if(isset($_POST['submit'])) {
        $firno = $_POST['firno'];
        $mobile = $_POST['mobile'];
        $officer = $_POST['offname'];
        $feedback = $_POST['feedback'];
        $stmt = $conn->prepare("INSERT INTO `fir feedback` (FIRno, MobileNumber, HandlingOfficer, Feedback) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssss", $firno, $mobile, $officer, $feedback);
            $stmt->execute();
            if ($stmt->affected_rows > 0) {
                echo "     Data inserted successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    }
    $conn->close();
?>
