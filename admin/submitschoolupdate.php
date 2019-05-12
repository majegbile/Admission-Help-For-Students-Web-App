<?php
include("../config.php");
$title="SUBMIT EDIT SCHOOL";
include("adminheader.php");
$uploads="../uploads/";
if (isset($_POST["submit"])){
    $schName=$_POST["sname"];
    $state=$_POST["sstate"];
    $sdesc=$_POST["sdesc"];
    $schId=$_POST["schoolId"];
    $imgName=$_FILES["screenshot"]["name"];
    $imgType=$_FILES["screenshot"]["type"];
    $imgTemp=$_FILES["screenshot"]["tmp_name"];
    $imgError=$_FILES["screenshot"]["error"];  
}
if (!empty($schName) && !empty($state) && !empty($sdesc) && !empty($imgName)){
    $target=$uploads.$imgName;
    if (move_uploaded_file($imgTemp,$target)){
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
        $query="UPDATE `school` SET `schoolName`='$schName',`state`='$state',`schoolDesc`='$sdesc', `image`='$imgName' WHERE `schoolId`='$schId'";
       // $query="UPDATE school SET schoolName='".$schName."',state='".$state."',schoolDesc='".$sdesc."',image='".$imgName."'WHERE schoolId='".$schId."'";
        $process=$mysqli->query($query) or die($mysqli->error);
        if ($process)
        {
        echo "done <br/>";
        echo "yes WE DID IT <br/>";
        }
   }
    else {
        echo "sorry Ma Bad";   
    }
}
?>
<html>
<body>
<?php
echo "go to Edit  course";
echo "<a href='editcourse.php?id=".$schId."&school=".$schName."'>"."EDIT COURSE"."</a>";
?>
</body>
</html>
