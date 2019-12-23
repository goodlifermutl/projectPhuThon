<?php 

session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$sql="INSERT INTO pin_case (case_id, user_id) VALUES ('$_POST[idcase]','$_SESSION[user_name]')";
mysqli_query($con,$sql)or die("ERROR sql_insert_pin !!!!".mysqli_error($con));
mysqli_close($con);

echo $sql;

?>