<?php
include("connect_db.php");
$con = connect_db();

$re=mysqli_query($con,"SELECT  card_id FROM user" ) or  die ("mysql error=>>".mysql_error($con));
    $card_id = array();
    while (list($idcard)=mysqli_fetch_row($re)) {
    	array_push($card_id,$idcard);
    }
    echo json_encode($card_id);
?>