 <?php      
 
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "newed";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    if(isset($_POST['payment_id']) &&isset($_POST['amt']) &&isset($_POST['name'])){
        $payment_id=$_POST['payment_id'];
        $amt=$_POST['amt'];
        $name=$_POST['name'];
        $payment_status='completed';
        $added_on=date('Y-m-d h:i:s');
        $query="INSERT INTO `payment`(`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES('$name','$amt','$payment_status','$payment_id','$added_on')";
        mysqli_query($con,$query);
        /*mysqli_query($con,"insert into payment(name,amount,payment_status,payment_id,added_on) values('$name','$amt','$payment_status','$payment_id','$added_on')");*/
    }
?>  