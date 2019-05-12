<?php
include("../config.php");
include("adminheader.php");
$schoolName=$_GET["school"];
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$query="SELECT schoolId FROM school WHERE schoolName=".$schoolName;
$result =$mysqli->query($query);
while ($row=$result->fetch_assoc()){
    $schoolId=$row["schoolId"];
}
#echo $schoolId;  
#$sql="SELE"  
?>
<div class="container-fluid">
  <div class="row">
        <form action="savecourse.php" method="POST">
        <div class="form-group">
       <label for="school name">Course Name</label>
       <input type="text" class="form-control" placeholder="Course Name" name="cname">
       </div>
       <input type="hidden" class="form-control" placeholder="School Id" name="schId", value=<?php$schoolId?>>
       <div class="form-group">
       <label for="exampleFormControlTextarea1">Course Description</label>
       <textarea class="form-control" rows="10" name="cdesc"></textarea>
       </div>
       <div class="form-group">
       <label for="exampleInputFile">Gre Score</label>
       <input type="text" id="exampleInputFile" name="gre">
       </div>
       <button type="submit" class="btn btn-default" name="submit">Submit</button>
       </form>
  </div>
</div>
</body
</html>
