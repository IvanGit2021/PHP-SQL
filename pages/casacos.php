
<br><br><br><br>
 
 <?php
 
 include('db/dbConnect.php');
 $sql = "SELECT * FROM images WHERE name ='casaco'";
 $result = $conn->query($sql);
 
 
 
 if ($result->num_rows > 0) {
 
     echo "<div class='row'>";
   
   while($row = $result->fetch_assoc()) {
     
     echo "<div class='col'>";
     echo "<img src='{$row['image']}' width='200px' height = '180px'>";
     echo "<br><br>";
     echo "<h5 style='margin-left:17px'>{$row['description']}</h5>";
     echo "<h5 style='margin-left:17px'>{$row['price']}</h5>";
     echo "<a class='nav-link' style='width:300px' href='db/insertFavorite.php?p={$row['id']}&r=casacos'>Favoritos <i class='fa fa-solid fa-heart'></i></a>";
     echo "<a class='nav-link' style='width:300px' href=''>Comprar <i class='fa fa-solid fa-cart-arrow-down'></i></a>";
     echo "</div>";
     
   
   } echo "</div>";
 } else {
   echo "0 results";
 }
 $conn->close();
 ?>
 
 
 
 
 
 <br><br><br>
 
 
     <br><br><br><br><br>
    

    