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

// sql query to select a record
$sql = "SELECT product_id  FROM products where product_id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { //fetches all the tuple's data
        $id = $row["product_id"];
       
        
        break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">
  
  <form method="POST" action="./img_upload_input.php" enctype="multipart/form-data">
  <label for="Employee ID"><b>Product id</b></label>
            <input type="text" 
            placeholder="Enter Your Product ID Here" 
            name="pro_id" 
            id="emp_id"
            value="<?php echo $id; ?>"
            readonly>
      <input type="file" name="uploadfile" value=""/>
        
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>
