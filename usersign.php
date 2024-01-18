<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connection.php"); // Assuming you have a $conn connection variable

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validate passwords match
    if ($password !== $confirmPassword) {
        header("Location: signup.php?error=password_mismatch");
        exit;
    }

    // Assuming you have a 'users' table in your database with columns 'username', 'email', and 'password'
    $stmt = mysqli_prepare($conn, "INSERT INTO users (username, email, pass) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
    mysqli_stmt_execute($stmt);

    // Redirect to login page after successful signup
    header("Location: userlogin.php");
    exit;

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
