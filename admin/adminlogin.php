<?php
$title="ADMIN LOGIN";
include("adminheader.php");
echo $title;
echo "<br/>";
?>
<form action="adminlogin.php" method="POST">
<div class="form-group">
  <label for="Admin User name">Admin User Name:</label>
  <input type="text" class="form-control" placeholder="Admin User Name" name="adun">
</div>
<div class="form-group">
    <label for="Admin Password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password", name="pass">
  </div>
<button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
</body
</html>