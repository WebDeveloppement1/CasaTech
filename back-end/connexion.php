<?php
include 'CoonectDb.php';
// Prepare and bind the SQL statement
$stmt = $connection->prepare("INSERT INTO users (username, email, password, tel) VALUES (?, ?, ?, ?)");
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
    $_SESSION["message_inscr"] = "Erreur lors de l'inscription";
    header("Location: ../front-end/sign-in-page.php");
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>