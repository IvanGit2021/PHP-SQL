<?php

session_start();
session_destroy();

include('dbConnect.php');

$username = $_POST['form-username'];
$password = $_POST['form-password'];
$name = $_POST['form-name'];
$email = $_POST['form-email'];

$sql = "INSERT INTO users (username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['username'] = $username;
    header('Location:../minhaConta.php');
} else {
    echo "Dados já existentes";
    header('refresh:1;url=../index2.php?p=criarConta');
}

$conn->close();


