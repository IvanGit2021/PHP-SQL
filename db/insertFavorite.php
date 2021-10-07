<?php

include('dbConnect.php');
session_start();

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    $image_id = $_GET['p'];
    $sql = "SELECT id FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
} else {

    header('Location: ../index2.php?p=login');
}

$sql = "INSERT INTO favorites (image_id, user_id) VALUES ('$image_id', '$user_id')";

if ($conn->query($sql) === TRUE) {
    echo "<h4>Inserido com sucesso</h4>";
}

$returnPage = $_GET['r'];

header("refresh:1;url=../index2.php?p=$returnPage");
