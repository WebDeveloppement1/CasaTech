<?php 
include "CoonectDb.php";

// Assuming you have a database connection established

// Get the values from the form or wherever you have them
$type = $_POST['type'];
$typologie = $_POST['typologie'];
$agence = $_POST['agence'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$message = $_POST['message'];

// Prepare the SQL statement
$sql = "INSERT INTO evaluation (type, typologie, agence, nom, prenom, email, tel, message) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $connection->prepare($sql);

// Bind the parameters
$stmt->bind_param("ssssssss", $type, $typologie, $agence, $nom, $prenom, $mail, $tel, $message);

// Execute the statement
$stmt->execute();

// Close the statement and the database connection
$stmt->close();
$connection->close();

?> 