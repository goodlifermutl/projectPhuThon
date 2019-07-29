<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$idcase=$_POST['case_id'];
$namecase=$_POST['case_name'];
$typecase=$_POST['case_type'];

//echo $idcase,$namecase,$typecase;

$sql_insert_case="INSERT INTO case_name (case_id,case_name,case_type) VALUES('$idcase','$namecase','$typecase')";
mysqli_query($con,$sql_insert_case)or die("sql error insert case!!!!!".mysqli_error($con));

?>