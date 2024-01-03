<?php
    include("connection2.php");

    if(isset($_POST['submit'])) {
        $district = $_POST['district'];
        $police = $_POST['policeStation'];
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
        $stmt = $conn->prepare("INSERT INTO `fir feedback` (district, station, MobileNumber, HandlingOfficer, Feedback, rating) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sssssi", $district, $police, $mobile, $officer, $feedback, $nrating);
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
        $targetTable = $_POST['policeStation'];
        $credit_increase_map = [
            1 => 5,  
            2 => 4,  
            3 => 3,  
            4 => 2,  
            5 => 1  
        ];
        $credit_increase = $credit_increase_map[$rating];
        $sql = $conn->prepare("UPDATE `$targetTable` SET Credit = Credit + $credit_increase WHERE officer = ?") ;
        if($sql){
            $sql->bind_param("s", $officer);     
            $sql->execute();
            if ($sql->affected_rows > 0) {
                echo "     Data inserted successfully!";
            } else {
                echo "Error: " . $sql->error;
            }
            $sql->close();
        }else {
            echo "Error: " . $conn->error;
        }}
        $conn->close();
?>