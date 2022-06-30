<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "newed";


$product_id = $_POST['product_id'];
$product_name=$_POST['product_name'];
$Product_price=$_POST['Product_price'];
$Product_type_id=$_POST['Product_type_id'];






$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO products( product_id, product_name, product_price, product_color)
 VALUES ('".$product_id."', '".$product_name."', '".$Product_price."', '".$Product_type_id."')";

 

if ($conn->query($sql) === TRUE) {
    header('Location:img_upload.php?id='.$product_id.'');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 