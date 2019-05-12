<?php
$schoolId=$_GET["id"];
$schoolId=(int)$schoolId;
include("config.php");
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$query="DELETE FROM school WHERE schoolId='$schoolId'";
$sql="DELETE FROM course WHERE schoolId='$schoolId'";
$result =$mysqli->query($query);
?>