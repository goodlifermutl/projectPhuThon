<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case_inves=$_SESSION['case_id'];
$qq1=$_POST['ir_Casetype'];
$qq2=$_POST['ir_order'];
$qq3=$_POST['ir_Policestation'];
$qq4=$_POST['ir_offer'];
$qq5=$_POST['ir_prefix'];
$qq6=$_POST['ir_name'];
$qq7=$_POST['ir_surname'];
$qq8=$_POST['ir_ir_prefix2'];
$qq9=$_POST['ir_ir_name2'];
$qq10=$_POST['ir_surname2'];
$qq11=$_POST['ir_Charge'];
$qq12=$_POST['ir_date'];
$qq13=$_POST['ir_district'];
$qq14=$_POST['ir_price'];
$qq15=$_POST['ir_wound'];
$qq16=$_POST['ir_Complaint'];
$qq17=$_POST['ir_control'];
$qq18=$_POST['ir_fact'];

$sql="INSERT INTO investigation_report VALUE('','$case_inves','$qq1','$qq2','$qq3','$qq4','$qq5','$qq6','$qq7','$qq8','$qq9','$qq10','$qq11','$qq12'
,'$qq13','$qq14','$qq15','$qq16','$qq17','$qq18')";

echo $sql;

mysqli_query($con,$sql)or die("ERROR sql !!!!!!!!!!".mysqli_error($con));
?>