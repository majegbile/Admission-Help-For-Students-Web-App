<?php
$schoolId=$_GET["id"];
$schoolId=(int)$schoolId;
#if ($schoolId==FALSE){
 #   #redirect to the index page
 #   header('Location:index.php');
 #   die();
#}
#### SQL injection
include("config.php");
include("header.php");
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
if (!$mysqli){
   echo "connection not found";
}
$query1="SELECT * FROM courses WHERE schoolId= $schoolId";
$query2="SELECT * FROM school WHERE schoolId= $schoolId";
$result1 =$mysqli->query($query1);
$result2=$mysqli->query($query2);

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1>LOW GRE SCHOOL</h1>
            <?php
            $row2=$result2->fetch_assoc();
            echo "<h4>";
            echo $row2["schoolName"];
            echo "</h4>";
            echo "<p>";
            echo $row2["schoolDesc"];
            echo "</p>";
            ?> 
            <table>
                <tr>
                    <th>Course</th>
                    <th>GRE</th>
                </tr>    
            <?php
            while($row1=$result1->fetch_assoc()){
                echo "<tr>";
                echo $row1["courseDesc"];
                echo $row1["greScore"];
                echo "</tr>";    
            }
            ?>
             </table>
        </div>     
    </div>  
</div>   
<?php
include("footer.php");
?>   