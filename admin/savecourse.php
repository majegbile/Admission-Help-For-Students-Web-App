<?php
include("../config.php");
if (isset($_POST["submit"])){
    $courseName=$_POST["cname"];
    $schId=$_POST["schId"];
    $cdesc=$_POST["cdesc"];
    $gre=$_POST["gre"];
}
$query="INSERT INTO course VALUES (NULL,'$courseName','$schId','$cdesc','$gre')";
$process=$mysqli->query($query);
echo "Course Added Successfully";
?>
