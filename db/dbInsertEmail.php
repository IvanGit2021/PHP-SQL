<?php

include('dbConnect.php');

$email = $_POST['subscrever-email'];

$sql = "INSERT INTO emails (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Obrigado pela subscrição</h1>";
  header('refresh:1;url=../index.php?e=ok#cards');

  
} else {
  echo "<h1>Já subscrito, obrigado</h1>";
  header('refresh:1;url=../index.php?e=erro#cards');
}

$conn->close();
?>