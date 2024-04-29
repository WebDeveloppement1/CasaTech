<?php
//start the session 
session_start();
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
// Get the username from the front end
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$tel = $_POST["tel"];

// Execute the statement
if ($stmt->execute()) {
    $_SESSION["username"] = $username;
    header("Location: ../front-end/index.php");
    exit();
} else {
    echo "Error inserting data: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>