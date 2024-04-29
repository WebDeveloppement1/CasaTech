<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeweb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO users (username, email, password, tel) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $email, $password, $tel);

// Set the values for the parameters
$username = "JohnDoe";
$email = "johndoe@example.com";
$password = "password123";
$tel = "12345678";

// Execute the statement
if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>