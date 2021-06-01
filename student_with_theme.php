<?php
$host = "localhost";
$usename = "root";
$passwd = "";
$dbname = "db_webinar";
$connection = mysqli_connect("localhost","root","","db_webinar");

if ($_POST){
    $std_id=$_POST['std_id'];
    $std_name=$_POST['std_name'];
    $std_gender=$_POST['std_gender'];
    $std_dob=$_POST['std_dob'];
    $std_email=$_POST['std_email'];
    $std_mobile=$_POST['std_mobile'];
    $std_address=$_POST['std_address'];
    $std_password=$_POST['std_password'];
    $std_pincode=$_POST['std_pincode'];
    $std_bloodgroup=$_POST['std_bloodgroup'];
    
        $sql="insert into tbl_student(std_id,std_name,std_gender,std_dob,std_email,std_mobile,std_address,std_password,std_pincode,std_bloodgroup)"
                . "values('$std_id','$std_name','$std_gender','$std_dob','$std_email','$std_mobile','$std_address','$std_password','$std_pincode','$std_bloodgroup')";
            //or die("Error".mysqli_error($connection)); 
            $q=mysqli_query($connection,$sql);
        if($q){
            echo"<script>alert('Data added succsessfully ');</script>";
        }
        else {
            print mysqli_error($connection);
        }   
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Student Details</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
<form action="/action_page.php">
  <div class="container">
    <h1>Registration Form</h1>
    <hr>
   
    <label for="id"><b>Id</b></label>
    <input type="text" placeholder="Enter Id" name="id" required>
    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    
    <label for="gender"><b>Gender</b></label>
    <!--select type="text" name="std_gender" placeholder="Enter Your Gender"/>
            <option>Male</option>
            <option>Female</option> </select-->
    <input type="radio"name="customer_gender"value="Male"/>Male<input type="radio"name="customer_gender"value="Female"/>Female <br>
    <!--input type="" placeholder="Enter Password" name="psw" required-->
  
    <label for="dob"><b>Date Of Birth</b></label>
    <input type="text" placeholder="Enter Birth Date" name="dob" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="mobile"><b>Mobil No.</b></label>
    <input type="text" placeholder="Enter Mobile No." name="mobile" required>
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    <label for="pincode"><b>Pincode</b></label>
    <input type="text" placeholder="Enter Pincode" name="pincode" required>
    
    <label for="bloodgroup"><b>Blood Group</b></label>
    <input type="text" placeholder="Enter Blood Group" name="bloodgroup" required>
    
    
    <div class="clearfix">
      <button type="submit" class="signupbtn">Register</button>
    </div>
  </div>
</form>
  </body>
</html>


