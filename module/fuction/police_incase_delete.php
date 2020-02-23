<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case=$_POST['decasesend'];

$sql_insert_case="DELETE FROM inquiry_official WHERE case_id='$case'";
// echo $sql_insert_case;
mysqli_query($con,$sql_insert_case)or die("sql error insert case!!!!!".mysqli_error($con));

?>