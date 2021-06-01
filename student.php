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
    <body>
        <form method="post">
            Id : <input type="text" name="std_id"/><br>
            Name : <input type="text" name="std_name"/><br>
            Gender : <select type="text" name="std_gender"/>
            <option>Male</option>
            <option>Female</option> </select><br>
            DOB : <input type="text" name="std_dob"/><br>
            Email : <input type="text" name="std_email"/><br>
            Mobile No : <input type="number" name="std_mobile"/><br>
            Address : <input type="text" name="std_address"/><br>
            Password : <input type="text" name="std_password"/><br>
            Pincode : <input type="text" name="std_pincode"/><br>
            Blood Group : <input type="text" name="std_bloodgroup"/><br>
            <input type="submit"/>
            
            
        </form>
    </body>
</html>


