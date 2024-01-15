<?php
$servername = "localhost";
$username = "Feedback";
$password = "rjpolice";
$db_name = "feedbacks";
$conn = new mysqli($servername , $username , $password , $db_name);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
else{
    echo "connected";
}

?>
