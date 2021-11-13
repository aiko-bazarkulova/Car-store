<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websitedatabase";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact(name, email, phone, message)
VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Your message delivered!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>