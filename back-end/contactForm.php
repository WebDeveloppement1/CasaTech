<?php
include 'CoonectDb.php';
// Prepare and bind the SQL statement
$stmt = $connection->prepare("INSERT INTO contact (username, email, tel, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $email, $tel, $message);

// Set the values for the parameters
// Get the username from the front end
$username = $_POST["username"];
$email = $_POST["email"];
$tel = $_POST["phone"];
$message = $_POST["message"];

// Execute the statement
if ($stmt->execute()) {
    header("Location: ../front-end/index.php");
    exit();
} else {
    header("Location: ../front-end/contact.php");
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>