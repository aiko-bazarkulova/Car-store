<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websitedatabase";
$login= $_POST['login'];
$email = $_POST['email'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$pass = $_POST['pass'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users(login, email, name, lastname, pass)
VALUES ('$login', '$email', '$name', '$lastname', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "You have created your account!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>