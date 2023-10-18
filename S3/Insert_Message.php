<?php
// Retrieve data from POST request
$senderUserId = $_POST['senderUserId'];
$receiverUserId = $_POST['receiverUserId'];
$text = $_POST['text'];

// Database connection details
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "DatabaseLabratoryPractices";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query
$sql = "INSERT INTO Messages (SenderUserId, ReciverUserId, Text, CreatedDate)
        VALUES ($senderUserId, $receiverUserId, '$text', GETDATE())";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>