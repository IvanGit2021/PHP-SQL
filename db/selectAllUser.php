<?php
 
include('dbConnect.php');

$sql = "SELECT * FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo "<h2>{$row['name']}</h2>";
    echo "<h2>{$row['description']}</h2>";
    echo "<h2>{$row['price']}</h2>";
    echo "<img src='{$row['image']}' width='20%' height = '30%'>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

