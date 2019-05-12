<?php
function getResult($sql){
    $result =$mysqli->query($sql);
    $rows=$result->fetch_assoc();
    return $rows;
}
?>