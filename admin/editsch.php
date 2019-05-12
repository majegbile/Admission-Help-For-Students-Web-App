<?php
include("../config.php");
$title="EDIT SCHOOL";
include("adminheader.php");
$schoolId=$_GET["id"];
$schoolId=(int)$schoolId;
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$query="SELECT * FROM school WHERE schoolId='$schoolId'";
$result =$mysqli->query($query);
if ($result->num_rows==1){
        $row=$result->fetch_assoc();
        echo $row["schoolName"];
        echo $row["schoolDesc"];
          ?>
      <form action="submitschoolupdate.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
      <label for="school name">School Name</label>
      <input type="text" class="form-control" placeholder="School Name" name="sname" value=<?php echo $row["schoolName"];?>>
      </div>
     <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" placeholder="state" name="sstate" value=<?php echo $row["state"];?>>
     </div>
     <div class="form-group">
         <label for="exampleFormControlTextarea1">School Description</label>
          <textarea class="form-control" rows="10" name="sdesc" value=<?php echo $row["schoolDesc"];?>></textarea>
     </div>
     <div class="form-group">
         <label for="exampleInputFile">school Image</label>
         <input type="file" id="exampleInputFile" name="screenshot">
     </div>
     <input type="hidden" name="schoolId" value=<?php echo $row["schoolId"];?>>
     <button type="submit" class="btn btn-default" name="submit">Submit</button>
 <?php
 }
 ?>