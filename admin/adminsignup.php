<?php
include("../config.php");
$uploads="../uploads/";
if (isset($_POST["submit"])){
    $username=$_POST["adun"];
    $password1=$_POST["pass1"];
    $password2=$_POST["pass2"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    if $password1==$password2{
        $sql="SELECT FROM admin WHERE username='$username'";
        $result =$mysqli->query($query);
        if ($result->num_row==0){
            $query="INSERT INTO admin VALUES(NULL, '$username',SHA('$password'),'$fname','$lname')"; 
            $result =$mysqli->query($query);
            echo "You can now log in "."<a href='adminlogin.php'>HERE</a>";  
        }
    }
}
?>