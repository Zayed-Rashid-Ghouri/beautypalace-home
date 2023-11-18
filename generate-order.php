<?php


// error_reporting(0);
$code = $_POST['code'];
$productno = $_POST['productno'];
$productname = $_POST['productname'];
$description = $_POST['description'];
$price = $_POST['price'];
$imageName = $_FILES['image']["name"];
$imageTmp = $_FILES['image']["tmp_name"];

$path = "../img/" . $imageName;

move_uploaded_file($imageTmp, $path);

$conn = mysqli_connect("localhost", "root", "", "project");         //hostname username password databasename
if (!$conn) {
  echo "connection refuse";
}

$query = "INSERT INTO `products`(`id`, `code`, `product_no`, `product_name`, `description`, `price`, `product_image`) VALUES ('null','$code','$productno','$productname','$description','$price','$imageName')";
$q = mysqli_query($conn, $query);
if (!$q) {
  echo "query not exectired";
} else {
  echo "query executed successfully";
}

?>