<?php
include("logincon.php");
session_start();
if(isset($_POST['send'])) {
    $comments = $_POST['comments'];
    $lat = $_POST['lat'] ?? null;
    $lon = $_POST['lon'] ?? null;
    $stmt = $conn->prepare("INSERT INTO `comments` (comments, latitude, longitude) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sdd", $comments, $lat, $lon);
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


    if ($stm) {
        $stm->bind_param("", $lat, $lon);
        $stm->execute();
        $stm->close();
        echo "Data inserted successfully!";
    } else {
        echo "Error preparing SQL statement: " . $conn->error;
    }

}





if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["pass"])) {
    $username1 = $_POST["username"];
    $_SESSION['username'] = $username1;
    $password1 = $_POST["pass"];

    // You may want to hash the password before comparing it with the database
    // For example, using password_hash() function for hashing
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT Username, Pass FROM admindetails WHERE Username = ?"; 
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username1);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $details = $result->fetch_assoc();

        // Use password_verify() if you hashed the password before storing it in the database
        if ($password1 == $details['Pass']) {
            // Authentication successful
            // Redirect to Admin.php
            header("Location: dashboard.php");
            exit(); // Make sure to exit after the header to prevent further script execution
        } else {
            // Incorrect password
            
            echo "<script>alert('Incorrect password');</script>";
            header("Location: loginpage.php");
            exit;
        }
    } else {
        // User not found
        http_response_code(404);
        echo "<script>alert('User not found');</script>";
        header("Location: loginpage.php");
        exit;
    }
} else {
    // Handle invalid request
    http_response_code(400);
    echo "";
}
$conn->close();
?>
