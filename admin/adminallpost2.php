<?php
include("../config.php");
$title="ALL SCHOOLS";
include("adminheader.php");
$sql="SELECT * FROM school";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$result=$mysqli->query($sql);
var_dump($result);
?>
<div class="container"> 
     <div class="row">
 <ul>
 <?php
if ($result->num_rows>=1){
    while($rows=$result->fetch_assoc()){
        echo "<li>";
        echo $title;
        //echo $rows["schoolName"]."<a href='deletepost.php?id=".$rows["schoolId"]."'>delete</a>"."<a href='editpost.php?id=".$rows["schoodId"]."'>edit</a>";
        echo "</li>";
    }
?>
</ul>
</div>
</div>
</body>
</html>