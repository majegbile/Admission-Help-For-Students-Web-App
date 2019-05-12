<?php
session_start();
include("../config.php");
include("adminheader.php");
$title="ADMIN LOGIN";
if (isset($_POST["submit"])){
    $username=$_POST["adun"];
    $password=$_POST["pass"];
}
$query="SELECT * FROM admin WHERE username='$username' AND password=SHA('$password')";
$result=$mysqli->query($query);
if (mysqli->num_rows==1){
    $row=$result->fetch_assos();
    $adminId=$row["adminId"];
    $adminFirstname=$row["firstname"];
    $_SESSION["adminId"]=$adminId;
    $_SESSION["firstname"]=$adminFirstname;
    header("Location:adminindex.php")
    echo "<a href='adminindex.php'>Click here to go to admin Page</a>";
}
else{
    echo "Invalid login Details";
}
?>