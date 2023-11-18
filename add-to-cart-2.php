<?php
$conn = mysqli_connect("localhost","root","","project");

$id = $_GET['id'];
$quantity = 1;
$product = mysqli_fetch_assoc(mysqli_query($conn, "select * from jewellery where id='$id'"));
$name = $product['name'];

$price = $product['price'];
$total = $price * $quantity;
$url = 'http://localhost/beautypalace/frontend/detail.php?id=$id';

$sql = "INSERT INTO cart (id, product_id, products, price, quantity, total)
VALUES ('null', '$id', '$name', '$price', '$quantity', '$total')";



if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/beautypalace/frontend/cart.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

