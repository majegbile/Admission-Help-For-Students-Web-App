<?php
include("config.php");
include("header.php");
#database Connection
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
if (!$mysqli){
    echo "connection not found";
}
$query="SELECT * FROM school";
$result =$mysqli->query($query);
?>
<div class="container">
    <div class="row">
    <div class="col-lg-8">
    <h1>LOW GRE SCHOOLS</h1>
    <ul>
        <?php
        if ($result->num_rows>=1){
            while($rows=$result->fetch_assoc()){
                echo "<li>";
                echo "<div id='image'><img src='uploads/".$rows["image"]."' heigth='40px' width='40px'></div>";
                echo "<div id='school'>";
                echo "<a href='findschool.php?id=".$rows["schoolId"]."'>".$rows["schoolName"]."</a>";
                echo "</div>";
                echo "</li>";
            }
        }
        ?>
    </ul>    
    </div>
    <div class="col-lg-4">
    </div>
    </div>
</div>
<?php
include("footer.php");
?> 
