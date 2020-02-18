<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case_inves=$_SESSION['case_id'];
$qq1=$_POST['ir_Casetype'];
$qq2=$_POST['ir_order'];
$qq3=$_POST['ir_Policestation'];
$qq35=$_POST['ir_date_station'];
$qq4=$_POST['ir_offer'];
$qqvic=$_POST['vic_ir'];
$qqvil=$_POST['vil_ir'];
$qq11=$_POST['ir_Charge'];
$qq12=$_POST['ir_date'];
$qq13=$_POST['ir_district'];
$qq14=$_POST['ir_price'];
$qq15=$_POST['ir_wound'];
$qq16=$_POST['ir_Complaint'];
$qq17=$_POST['ir_control'];
$qq18=$_POST['ir_fact'];

$sql="INSERT INTO investigation_report VALUE('','$case_inves','$qq1','$qq2','$qq3','$qq35','$qq4','$qqvic','$qqvil','$qq11','$qq12'
,'$qq13','$qq14','$qq15','$qq16','$qq17','$qq18')";

echo $sql;

mysqli_query($con,$sql)or die("ERROR sql !!!!!!!!!!".mysqli_error($con));
?>