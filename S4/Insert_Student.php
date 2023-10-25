<?php
    // Retrieve data from POST method
    $national_code = $_POST['NationalCode'];
    $name = $_POST['Name'];
    $last_name = $_POST['Lastname'];
    $father_name = $_POST['Fathername'];
    $grade = $_POST['Grade'];
    $address = $_POST['Address'];
    $mobile = $_POST['Mobile'];

    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbScoreRegistration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into Students table
    $sql = "INSERT INTO Students (NationalCode, Name, Lastname, Fathername, Grade, Address, Mobile)
            VALUES ('$national_code', '$name', '$last_name', '$father_name', '$grade', '$address', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
?>
