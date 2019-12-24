<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$sql="DELETE FROM pin_case WHERE case_id='$_POST[idcase]' AND user_id='$_SESSION[user_name]'";
echo $sql;
mysqli_query($con,$sql)or die("sql delete ERROR!!!!!".mysqli_error($con));
mysqli_close($con);
?>