<?php
// Retrieve data from POST request
$personId = $_POST['personId'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$securityKey = $_POST['securityKey'];

// Database connection details
$serverName = "localhost";
$username = "your_username";
$password = "your_password";
$dbName = "your_database_name";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query
$sql = "INSERT INTO Users (PersonId, UserName, Password, SequrityKey, RegisterDate, IsActive)
        VALUES ($personId, '$userName', '$password', '$securityKey', GETDATE(), 1)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>