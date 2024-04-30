<?php
include 'CoonectDb.php';
$email = $_POST["email"];
// Prepare and bind the SQL statement
// Check if the email already exists in the database
$checkStmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
$checkStmt->bind_param("s", $email);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();


// If the email already exists, redirect to sign-in page
if ( $checkResult->fetch_row()) {
    $_SESSION["message_inscr"] = "Email already exists";
    header("Location: ../front-end/sign-in-page.php");
    exit();
}
$stmt = $connection->prepare("INSERT INTO users (username, email, password, tel) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $email, $password, $tel);

// Set the values for the parameters
// Get the username from the front end
$username = $_POST["username"];

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

$checkStmt->close();

?>