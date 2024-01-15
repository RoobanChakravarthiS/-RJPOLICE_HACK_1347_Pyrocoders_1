<?php
include("logincon.php");

if(isset($_POST['send'])) {
    $comments = $_POST['comments'];

    $stmt = $conn->prepare("INSERT INTO `comments` (comments) VALUES (?)");
    if ($stmt) {
        $stmt->bind_param("s", $comments);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "     Data inserted successfully!";
            header("Location: Mainpage.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["pass"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];

    // You may want to hash the password before comparing it with the database
    // For example, using password_hash() function for hashing
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT Username, Pass FROM admindetails WHERE Username = ?"; 
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $details = $result->fetch_assoc();

        // Use password_verify() if you hashed the password before storing it in the database
        if ($password == $details['Pass']) {
            // Authentication successful
            // Redirect to Admin.php
            header("Location: Admin.php");
            exit(); // Make sure to exit after the header to prevent further script execution
        } else {
            // Incorrect password
            http_response_code(401);
            echo "Incorrect password";
        }
    } else {
        // User not found
        http_response_code(404);
        echo "User not found";
    }
} else {
    // Handle invalid request
    http_response_code(400);
    echo "Invalid request";
}
$conn->close();
?>
