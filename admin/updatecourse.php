<?php
include("../config.php");
if (isset($_GET["id"]){
    $courseId=$_GET["id"];
    $schId=$_GET["school"];
}
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$query="SELECT FROM course WHERE courseid="$courseId"";
$result=$mysqli->query($query);
if ($result->num_rows()==1){
    $row=$result->fetch_assoc();
    ?>
    <form method="POST" action="submitcourseupdate.php">
    <div class="form-group">
       <label for="school name">Course Name</label>
       <input type="text" class="form-control" placeholder="School Name" name="cname" value=<?php $row["courseName"]?>>
     </div>
     <div class="form-group">
       <label for="school name">School Id</label>
       <input type="text" class="form-control" placeholder="School Name" name="schId" value=<?php $schId ?>>
     </div>
     <div class="form-group">
       <label for="school name">Course Description</label>
       <input type="text" class="form-control" placeholder="School Name" name="cdesc" value=<?php $row["courseDesc"]?>>
     </div>
     <div class="form-group">
       <label for="school name">Gre Score</label>
       <input type="text" class="form-control" placeholder="School Name" name="gre" value=<?php $row["greScore"]?>>
     </div>
     <button type="submit" class="btn btn-default" name="submit">Submit</button>
   </form>
<?php
}
?>