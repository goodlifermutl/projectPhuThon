<?php
function connect_db(){
    $con=mysqli_connect("localhost","root","","phuthon");
    mysqli_set_charset($con,"utf8");
    return $con;

}
?>