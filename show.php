<?php
    require_once("fetch_data.php");

    if(isset($_POST['submit'])) {
    $station = $_POST['station'];
    $sql = "SELECT * FROM `station 1``";
    $result = mysqli_query($conn,$sql);
    }
?>