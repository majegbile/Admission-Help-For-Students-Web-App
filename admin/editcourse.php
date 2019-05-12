<?php
include("../config.php");
if (isset($_GET["id"])&& isset($_GET["school"])){
    $schId=(int)$_GET["id"];
    $schName=$_GET["school"];
}
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$query="SELECT FROM course WHERE schoolId='$schId'";
$result=$mysqli->query($query);
?>
<html>
<body>
    <?php
    echo $schName;
    echo "<hr/>";
    while($rows=$result->fetch_assoc()){
        echo $rows["courseName"]." <a hef='updatecourse.php?id=".$rows["courseId"]."'>".$rows["courseName"]."</a>";
    }
    ?>
</body>    
</html>