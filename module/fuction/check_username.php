<?php
include("connect_db.php");
$con = connect_db();

$re=mysqli_query($con,"SELECT  user_id FROM user" ) or  die ("mysql error=>>".mysql_error($con));
    $username = array();
    while (list($user)=mysqli_fetch_row($re)) {
    	array_push($username,$user);
    }
    echo json_encode($username);
?>