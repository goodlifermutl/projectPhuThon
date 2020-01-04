<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case_sumvil=$_SESSION['case_id'];
$qq1=$_POST['sv_suspect'];
$qq2=$_POST['sv_warrant'];
$qq3=$_POST['sv_date'];
$qq4=$_POST['sv_Accused'];
$qq5=$_POST['sv_suspect'];
$qq6=$_POST['sv_Refer'];
$qq7=$_POST['sv_address'];
$qq8=$_POST['sv_Headman'];
$qq9=$_POST['sv_village'];
$qq10=$_POST['sv_Hey'];
$qq11=$_POST['sv_text'];
$qq12=$_POST['sv_goto'];
$qq13=$_POST['sv_staff'];
$qq14=$_POST['sv_datetime'];
$qq15=$_POST['sv_staff'];
$qq16=$_POST['sv_position'];
$qq17=$_POST['sv_datetime2'];
$qq18=$_POST['sv_policename'];
$qq19=$_POST['sv_datetime3'];
$qq20=$_POST['sv_Recipient'];
$qq21=$_POST['sv_Sender'];
$qq22=$_POST['sv_policename4'];
$qq23=$_POST['sv_position2'];
$qq24=$_POST['sv_policename5'];
$qq25=$_POST['sv_address2'];
$qq26=$_POST['sv_policename4'];
$qq27=$_POST['exampleRadios'];
$qq28=$_POST['sv_sign'];
$qq29=$_POST['sv_position3'];

$sql="INSERT investigation_report INTO VALUE('$case_sumvil','$qq1','$qq2','$qq3','$qq4','$qq5','$qq6','$qq7','$qq8','$qq9','$qq10','$qq11','$qq12'
,'$qq13','$qq14','$qq15','$qq16','$qq17','$qq18','$qq19','$qq20','$qq21','$qq22','$qq23','$qq24','$qq25','$qq26','$qq27','$qq28','$qq29')";

echo $sql;

?>