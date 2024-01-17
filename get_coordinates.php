<?php
include("logincon.php");

if (isset($_GET['comment'])) {
    $comment = $_GET['comment'];
    $stmt = $conn->prepare("SELECT latitude, longitude FROM comments WHERE comments = ?");

    if ($stmt) {
        $stmt->bind_param("s", $comment);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $coordinates = $result->fetch_assoc();
            echo json_encode($coordinates);
        } else {
            echo json_encode(['error' => 'Coordinates not found']);
        }
        $stmt->close();
    } else {
        echo json_encode(['error' => 'Error preparing SQL statement: ' . $conn->error]);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>

