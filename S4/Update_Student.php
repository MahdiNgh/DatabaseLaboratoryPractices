<?php
    // Retrieve data from POST method
    $national_code = $_POST['NationalCode'];
    $name = $_POST['Name'];
    $last_name = $_POST['Lastname'];
    $father_name = $_POST['Fathername'];
    $grade = $_POST['Grade'];
    $address = $_POST['Address'];
    $mobile = $_POST['Mobile'];
    $id = $_POST['Id'];

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

    // Update data in Students table
    $sql = "UPDATE Students SET NationalCode='$national_code', Name='$name', Lastname='$last_name', Fathername='$father_name', Grade='$grade', Address='$address', Mobile='$mobile' WHERE Id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
