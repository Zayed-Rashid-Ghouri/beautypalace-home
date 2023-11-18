<?php
$conn = mysqli_connect("localhost","root","","project");

$id = $_GET['id'];
$query = "DELETE from `cart` WHERE `id`='$id'";

mysqli_query($conn,$query);


if ($conn->query($query) === TRUE) {
    header('Location: http://localhost/beautypalace/frontend/cart.php');
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>