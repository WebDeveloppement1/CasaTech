<?php
//start the session 
session_start();
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeweb";

// Create a connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " .$connection->connect_error);
}
?>