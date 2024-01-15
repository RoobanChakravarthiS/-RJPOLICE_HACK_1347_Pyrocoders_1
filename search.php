<?php
include("connection.php");

// Set the Content-Type header to application/json
header("Content-Type: application/json");

// Parse the request data
$inputData = json_decode(file_get_contents("php://input"), true);

// Check if the request data is valid
if (!isset($inputData['firNumber'])) {
    http_response_code(400);
    echo json_encode(["error" => "Missing 'firNumber' value"]);
    exit;
}

// Get the input data
$input1Value = $inputData['firNumber'];

// Prepare the SQL query
$stmt = $conn->prepare("SELECT HandlingOfficer, MobileNumber, Station FROM firdetails WHERE FIRnum = ?");

// Bind the input data to the query
$stmt->bind_param("s", $input1Value);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if the query was successful
if ($result) {
    // Check if there is any data
    if ($row = $result->fetch_assoc()) {
        // Send the JSON response
        http_response_code(200);
        echo json_encode($row);
    } else {
        // No data found
        http_response_code(404);
        echo json_encode(["error" => "No data found"]);
    }
} else {
    // Query failed
    http_response_code(500);
    echo json_encode(["error" => $conn->error]);
}

// Close the database connection
$stmt->close();
$conn->close();
?>
