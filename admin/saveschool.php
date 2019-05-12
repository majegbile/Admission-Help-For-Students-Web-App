<?php
include("../config.php");
$uploads="../uploads/";
if (isset($_POST["submit"])){
    $schName=$_POST["sname"];
    $state=$_POST["sstate"];
    $sdesc=$_POST["sdesc"];
    $imgName=$_FILES["screenshot"]["name"];
    $imgType=$_FILES["screenshot"]["type"];
    #temp storage
    $imgTemp=$_FILES["screenshot"]["tmp_name"];
    $imgError=$_FILES["screenshot"]["error"];
    if (!empty($schName) && !empty($state) && !empty($sdesc) && !empty($imgName)){
        $target=$uploads.$imgName;
        if (move_uploaded_file($_FILES["screenshot"]["tmp_name"],$target)){
            $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
            $query="INSERT INTO school(`schoolId`, `schoolName`, `state`, `schoolDesc`, `image`, `date`) VALUES (NULL,'$schName','$state','$sdesc','$imgName',NOW())";
            $process=$mysqli->query($query) or die(mysqli_error());
            echo "done";
        }
  }
}
?>            
<html>
<body>
<?php
echo "go to add course";
echo "<a href='addcourse.php?school=".$schName."'>"."ADD COURSE"."</a>";
?>
</body>
</html>