<?php
session_start();
?>
<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "newed";







$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql="DELETE FROM cart where cus_name='".$_SESSION['name']."'";

 

if ($conn->query($sql) === TRUE) {
    
    header('Location:shop.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 