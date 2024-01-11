<?php
// Include your database connection file here
// Example: include('db_connection.php');
include('connection.php');

function isValidMobileNumber($number) {
    // Check if the number is exactly 10 digits
    return preg_match('/^\d{10}$/', $number);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['ename'];
    $number = $_POST['number'];
    echo"$number";
    $preferred_model = $_POST['model'];
    $city = $_POST['city'];

    // Validate data
    if (!isValidMobileNumber($number)) {
        die("Error: Mobile number must be exactly 10 digits.");
    }

    // Include your database connection file here
    // Example: include('db_connection.php');

    // Connect to the database


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO `modelquery` (`id`, `first_name`, `last_name`, `email`, `number`, `preferred_model`, `city`) VALUES (NULL, '$first_name', '$last_name', '$email', '$number', '$preferred_model', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>