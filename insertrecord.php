<?php
$host = "localhost";
$usename = "root";
$passwd = "";
$dbname = "db_bakecorner";
$connection = mysqli_connect("localhost","root","","db_bakecorner");

if ($_POST){
    $customer_id=$_POST['customer_id'];
    $customer_name=$_POST['customer_name'];
    $customer_gender=$_POST['customer_gender'];
    $customer_mobile=$_POST['customer_mobile'];
    
    
        $sql="insert into tbl_customer(customer_id,customer_name,customer_gender,customer_mobile)"
                . "values('$customer_id','$customer_name','$customer_gender','$customer_mobile')";
            //or die("Error".mysqli_error($connection)); 
            $q=mysqli_query($connection,$sql);
        if($q){
            echo"<script>alert('Record Added');</script>";
        }
        else {
            print mysqli_error($connection);
        }   
}
?>

<html>
    <body>
        <form method="post">
            Id : <input type="text" name="customer_id"/>
            Name : <input type="text" name="customer_name"/>
            Gender : <input type="radio"name="customer_gender"value="Male"/>Male<input type="radio"name="customer_gender"value="Female"/>Female
            Mobile No : <input type="number" name="customer_mobile"/>
            <input type="submit"/>
            
            
        </form>
    </body>
</html>
