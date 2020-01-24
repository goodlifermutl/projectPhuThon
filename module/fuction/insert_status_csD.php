<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$status_idcase=$_POST['case_sta'];
$status_data=$_POST['data_sta'];
$status_date=$_POST['date_sta'];

// echo $status_idcase,$status_data,$status_date;

$sql_insert_status="INSERT INTO status_case (sta_case_id,text_status,date_status) VALUES('$status_idcase','$status_data','$status_date')";
echo $sql_insert_status;
mysqli_query($con,$sql_insert_status)or die("sql error insert Status case!!!!!".mysqli_error($con));

?>