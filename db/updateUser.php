<?php
 
include('dbConnect.php');

$id = $_POST['id'];
$username = $_POST['form-username'];
$password = $_POST['form-password'];
$name = $_POST['form-name'];
$email = $_POST['form-email'];

$sql = "UPDATE users SET username = '$username', password = '$password', name ='$name', email = '$email' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Dados alterados com sucesso";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>