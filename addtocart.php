<?php
session_start();
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "newed";

$product_id=$_POST['id'];
$product_name = $_POST['pro_name'];
$product_price = $_POST['pro_price'];
$product_file=$_POST['pro_file'];
$product_quantity=$_POST['quantity'];
$product_size=$_POST['size'];




$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "INSERT INTO `cart`(`product_id`,`name`, `price`, `image`,`quantity`,`size`, `cus_name`)
VALUES ('".$product_id."','".$product_name."','".$product_price."', '".$product_file."', '".$product_quantity."', '".$product_size."','" . $_SESSION['name'] . "')";

 

if ($conn->query($sql) === TRUE) {
    header('Location:cart.php');
} else {
echo "Error: " . $sql . "<br>" . $conn->error;}

$conn->close();
?> 