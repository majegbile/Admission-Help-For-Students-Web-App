<?php
$title="ADD SCHOOL PAGE";
include("adminheader.php");
?>
<div class="container">
<div class="row">
<form action="saveschool.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
  <label for="school name">School Name</label>
  <input type="text" class="form-control" placeholder="School Name" name="sname">
</div>
<div class="form-group">
  <label for="state">State</label>
  <input type="text" class="form-control" placeholder="state" name="sstate">
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">School Description</label>
    <textarea class="form-control" rows="10" name="sdesc"></textarea>
</div>
<div class="form-group">
  <label for="exampleInputFile">school Image</label>
  <input type="file" id="exampleInputFile" name="screenshot">
</div>
<button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
</div>
</div> 
</body
</html>