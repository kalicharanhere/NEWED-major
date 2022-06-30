<?php      
    include('connection.php');  
    
$email = $_POST['email'];
$password=$_POST['password'];



      
        $sql = "select * from profiles where Email = '$email' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            
            $_SESSION["email"]=$row['Email'];
            $_SESSION["name"]=$row['Name'];
            header('Location:index.php');
        }
        else{
            echo '<script>alert("Invalid mail and password")</script>';
            echo '<script>window.location= "loginui.php"</script>';
            
              
        }     
?>  