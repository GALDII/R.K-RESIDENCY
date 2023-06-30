<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "gladis";

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

// Insert data into the "hotel" table
$sql = "INSERT INTO hotel (name1, email, checkin, checkout) VALUES ('$name', '$email', '$checkin', '$checkout')";

if ($conn->query($sql) === true) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
