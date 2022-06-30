<?php
$id = $_GET['id'];
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "newed";







$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "DELETE FROM `cart` WHERE product_id=$id";

 

if ($conn->query($sql) === TRUE) {
    header('Location:cart.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 