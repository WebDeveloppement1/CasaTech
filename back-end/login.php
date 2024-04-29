<?php
 
include 'CoonectDb.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    // User exists and password is correct, redirect to index page
    $_SESSION['username'] = $username;
     header("Location: ../front-end/index.php");
} else {
    // User does not exist or password is incorrect
    $_SESSION['login_error'] = 'Invalid username or password';
    header("Location: ../front-end/connecter.php");
 
}
?>