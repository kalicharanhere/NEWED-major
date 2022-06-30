<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "newed";


$first_name = $_POST['Name'];
$user_email = $_POST['mail'];
$user_password=$_POST['pass'];





$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO profiles (Name,Email,Password)
 VALUES ('".$first_name."','".$user_email."', '".$user_password."')";

 

if ($conn->query($sql) === TRUE) {
    header('Location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 