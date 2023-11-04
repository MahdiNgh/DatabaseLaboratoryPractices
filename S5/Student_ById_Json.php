<?php
// Define the database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbScoreRegistration";
$id=$_GET['id'];

// Create a new mysqli object and connect to the database
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// Define the query to get the list of students
$query = "SELECT [S].[Id]
	, [S].[NationalCode]
	, [S].[Name]
	, [S].[Lastname]
	, [S].[Fathername]
	, [S].[Grade]
	, [S].[Address]
	, [S].[Mobile] FROM [Students] AS [S] Where [S].[Id]= $id";

// Execute the query and get the result object
$result = $mysqli->query($query);

// Check if the query was successful and returned some rows
if ($result && $result->num_rows > 0) {
  // Fetch all the rows as an associative array
  $rows = $result->fetch_all(MYSQLI_ASSOC);

  // Encode the array as a JSON string
  $json = json_encode($rows);

  // Echo the JSON string
  echo $json;
} else {
  // Echo an error message
  echo "No results found or query failed";
}

// Close the connection
$mysqli->close();
?>
