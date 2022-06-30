<?php

$servername = "localhost";  
$username = "root";
$password = ""; 
$dbname = "newed";
  $msg = "";
  
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "product_images/".$filename;
          
    $db = mysqli_connect("localhost", "root", "", "newed");
    $id = $_POST['pro_id'];
    

  
        // Get all the submitted data from the form
        $sql = "INSERT INTO images ( product_ID, imagepath) VALUES ('$id','$filename')";
        
       // $sql="UPDATE student_basic_table SET photo=$filename WHERE Roll_No=$id";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM products");
  while($data = mysqli_fetch_array($result))
  {
    
        ?>
  <img src="<?php echo $data['photo']; ?>">
    
  <?php
  }
  ?>