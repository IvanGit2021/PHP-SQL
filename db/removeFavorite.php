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
}
$sql = "DELETE FROM favorites  WHERE (image_id = $image_id AND user_id = $user_id)";

if ($conn->query($sql) === TRUE) {
    echo "<h4>Removido com sucesso</h4>";
} else {
    echo "algum erro";
}

header("refresh:1;url=../index2.php?p=favorites");
