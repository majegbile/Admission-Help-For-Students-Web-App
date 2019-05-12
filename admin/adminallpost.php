<?php
include("../config.php");
$title="ALL SCHOOLS";
include("adminheader.php");
$sql="SELECT * FROM school ORDER BY date";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
$result=$mysqli->query($sql);
?>
<div class="container"> 
     <div class="row">
 <ul>
<?php
if ($result->num_rows>=1){
    while($rows=$result->fetch_assoc()){
       echo "<li>"; 
       echo $rows["schoolName"]."<a href='deletepost.php?id=".$rows["schoolId"]."'> delete</a>"."<a href='editsch.php?id=".$rows["schoolId"]."'> edit</a>";
       echo "</li>";
    }
}
?>
</ul>
</div>
</div>
</body>
</html>