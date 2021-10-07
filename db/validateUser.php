<?php
 
include('dbConnect.php');

$username = $_POST['form-username'];
$password = $_POST['form-password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows ==1) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['username'] = $username;
    header('Location: ../minhaConta.php');
  
} else {
    header('Location: ../index2.php?p=login');
}
$conn->close();
?>