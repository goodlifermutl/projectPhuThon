<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case_sumvil=$_SESSION['case_id'];
$qq0=$_POST['sv_no_id'];
$qq1=$_POST['sv_suspect'];
$qq2=$_POST['sv_warrant'];
$qq3=$_POST['sv_date'];
$qq4=$_POST['sv_Accused'];
$qq5=$_POST['sv_villain'];
$qq6=$_POST['sv_Refer'];
$qq7=$_POST['sv_address'];
$qq8=$_POST['sv_Headman'];
$qq9=$_POST['sv_village'];
$qq10=$_POST['sv_Hey'];
$qq11=$_POST['sv_text'];
$qq12=$_POST['sv_goto'];
$qq13=$_POST['sv_staff'];
$qq14=$_POST['sv_datetime'];
$qq15=$_POST['sv_staff2'];
$qq16=$_POST['sv_position'];
$qq17=$_POST['sv_datetime2'];
$qq18=$_POST['sv_policename'];
$qq188=$_POST['sv_set'];
$qq19=$_POST['sv_datetime3'];
$qq20=$_POST['sv_Recipient'];
$qq21=$_POST['sv_Sender'];
$qq22=$_POST['sv_policename4'];
$qq23=$_POST['sv_position2'];
$qq24=$_POST['sv_policename5'];
$qq25=$_POST['sv_address2'];
$qq26=$_POST['exampleRadios'];
$qq27=$_POST['sv_sign'];
$qq28=$_POST['sv_position3'];

// $sql="INSERT INTO summon_villain VALUE('','$case_sumvil','$qq1','$qq2','$qq3','$qq4','$qq5','$qq6','$qq7','$qq8','$qq9','$qq10','$qq11','$qq12'
// ,'$qq13','$qq14','$qq15','$qq16','$qq17','$qq18','$qq19','$qq20','$qq21','$qq22','$qq23','$qq24','$qq25','$qq26','$qq27','$qq28')";

$sql="UPDATE summon_villain SET sv_suspect='$qq1[0]',sv_warrant='$qq2[0]',sv_date='$qq3[0]',sv_accused='$qq4[0]',sv_villain='$qq5[0]',sv_refer='$qq6[0]',sv_address='$qq7[0]',sv_headman='$qq8[0]',sv_village='$qq9[0]',sv_hey='$qq10[0]',sv_text='$qq11[0]',sv_goto='$qq12[0]',sv_staff='$qq13[0]',sv_datetime='$qq14[0]',sv_staff2='$qq15[0]',sv_position='$qq16[0]',sv_datetime2='$qq17[0]',sv_policename='$qq18[0]',sv_set='$qq188[0]',sv_datetime3='$qq19[0]',sv_recipient='$qq20[0]',sv_sender='$qq21[0]',sv_policename4='$qq22[0]',sv_position2='$qq23[0]',sv_policename5='$qq24[0]',sv_address2='$qq25[0]',sv_status_sent='$qq26[0]',sv_sign='$qq27[0]',sv_position3='$qq28[0]' WHERE no_sv='$qq0[0]' ";

echo $sql;

mysqli_query($con,$sql)or die("error sql summonvillain".mysqli_error($con));
mysqli_close($con);

?>