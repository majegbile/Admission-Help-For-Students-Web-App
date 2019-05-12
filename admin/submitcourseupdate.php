<?php
include("../config.php");
if (isset($_POST["submit"])){
    $courseName=$_POST["cname"];
    $schId=$_POST["schId"];
    $cdesc=$_POST["cdesc"];
    $gre=$_POST["gre"];
    $courseId=$_POST["courseId"];
}
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$query="UPDATE course SET courseName="$courseName", schoolId="$schId", courseDesc="$cdesc",grescore="$gre" WHERE courseid="$courseId"";
$process=$mysqli->query($query);
?>