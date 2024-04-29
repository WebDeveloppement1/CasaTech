<?php 
include 'CoonectDb.php';

// Assuming you have already established a database connection

// Get the values from the form
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Prepare the SQL statement
$sql = "INSERT INTO contact (username, email, phone, message) VALUES (?, ?, ?, ?)";

// Prepare the statement
$stmt = $connexion->prepare($sql);

// Bind the parameters
$stmt->bind_param("ssss", $username, $email, $phone, $message);

// Execute the statement
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    header("Location: ../front-end/index.php");
} else {
    echo "Failed to insert data.";
}

// Close the statement and the database connection
$stmt->close();
$connexion->close();


?>