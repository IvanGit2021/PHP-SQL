<?php
 
include('dbConnect.php');

$sql = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows ==1) {
    $row = $result->fetch_assoc();
    
  
} else {
  echo "0 results";
}
$conn->close();
?>