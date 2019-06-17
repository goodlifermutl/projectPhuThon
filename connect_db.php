<?php
function connect_db(){
    $con=mysqli_connect("localhost","root","","user");
    mysqli_set_charset($con,"utf8");
    return $con;

}
?>