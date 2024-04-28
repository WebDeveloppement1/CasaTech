<?php
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "casateck";
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
if ($conn->connect_error) {
    die("ERROR ! : " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['number'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    $sql = "INSERT INTO `user` (`username`, `email`, `password`, `number`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erreur de préparation de la requête : " . $conn->error);
    }
    $stmt->bind_param("sssi", $username, $email, $password, $number);

    if ($stmt->execute()) {
        echo "<script type='text/javascript'>alert('Votre compte a été créé avec succès.');
              window.location='client.php';
              </script>";
    } else {
        echo "<script type='text/javascript'>alert('Une erreur est survenue lors de la création de votre compte.');
              window.location='inscription.php';
              </script>";
    }
}

$conn->close();
?>
