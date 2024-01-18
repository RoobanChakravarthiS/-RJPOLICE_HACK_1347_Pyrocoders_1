<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connection.php"); // Assuming you have a $conn connection variable

if(isset($_POST['submit'])) {
    $username = $_POST['signin-username'];
    $pass = $_POST['password'];

    // Assuming you have a 'users' table in your database with columns 'username' and 'pass'
    $stmt = mysqli_prepare($conn, "SELECT username,pass FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username); // Assuming 's' is the data type for the username (string)
    mysqli_stmt_execute($stmt);

    // Fetch the user data
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $dbUsername, $dbPass);

    if (mysqli_stmt_fetch($stmt) && $pass === $dbPass) {
        // Login successful
        header("Location: Mainpage.php");
        exit;
    } else {
        // Login failed
        header("Location: userlogin.php");
        exit;
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
