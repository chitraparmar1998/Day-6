<?php
$host = "localhost";
$usename = "root";
$passwd = "";
$dbname = "db_bakecorner";
//connection function
$connection = mysqli_connect("localhost","root","","db_bakecorner");

$q = mysqli_query($connection,
        "insert into tbl_customer(customer_id,customer_name,customer_gender,customer_mobile) values('chitra','female','123')") 
        or die("Error".mysqli_error($connection)); 

if($q)
{
    echo"<script>alert('Record Added');</script>";
}



