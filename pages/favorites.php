<br><br><br><br>

<?php

include('db/dbConnect.php');

if (isset($_SESSION['username'])) {


    $username = $_SESSION['username'];
    $image_id = $_GET['p'];
    $sql = "SELECT id FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
} else {

    header('Location: index2.php?p=login');
}

$sql = "SELECT DISTINCT * FROM favorites AS f INNER JOIN images AS i ON f.image_id = i.id WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<div class='row'>";

    while ($row = $result->fetch_assoc()) {

        echo "<div class='col'>";
        echo "<img src='{$row['image']}' width='200px' height = '180px'>";
        echo "<br><br>";
        echo "<h5 style='margin-left:17px'>{$row['description']}</h5>";
        echo "<h5 style='margin-left:17px'>{$row['price']}</h5>";
        echo "<a class='nav-link' style='width:300px; color:red' href='db/removeFavorite.php?p={$row['id']}'>Remover</a>";
        echo "<a class='nav-link' style='width:300px' href=''>Comprar <i class='fa fa-solid fa-cart-arrow-down'></i></a>";
        echo "<br><br>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<h4>Sem Favoritos ainda</h4>";
    echo "<br><br>";
}
$conn->close();
?>