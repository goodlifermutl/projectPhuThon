<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case_wordsvil=$_SESSION['case_id'];
$nn1=$_POST['wv_testimony'];
$nn2=$_POST['wv_are'];
$nn3=$_POST['wv_phone'];
$nn4=$_POST['wv_card'];
$nn5=$_POST['wv_output1'];
$nn6=$_POST['wv_output2'];
$nn7=$_POST['wv_last'];
$nn8=$_POST['wv_police'];
$nn9=$_POST['wv_station'];
$nn10=$_POST['wv_date'];
$nn11=$_POST['wv_accused'];
$nn12=$_POST['wv_suspect'];
$nn13=$_POST['wv_before'];
$nn14=$_POST['wv_investigate'];
$nn15=$_POST['wv_name'];
$nn16=$_POST['wv_age'];
$nn17=$_POST['wv_race'];
$nn18=$_POST['wv_nationality'];
$nn19=$_POST['wv_religion'];
$nn20=$_POST['wv_address'];
$nn21=$_POST['wv_headman'];
$nn22=$_POST['wv_villageheadmane'];
$nn23=$_POST['wv_farthername'];
$nn24=$_POST['wv_mothername'];
$nn25=$_POST['wv_birthday'];
$nn26=$_POST['wv_official'];

$sql="INSERT INTO words_villain VALUE('','$case_wordsvil','$nn1','$nn2','$nn3','$nn4','$nn5','$nn6','$nn7','$nn8','$nn9','$nn10','$nn11','$nn12'
,'$nn13','$nn14','$nn15','$nn16','$nn17','$nn18','$nn19','$nn20','$nn21','$nn22','$nn23','$nn24','$nn25','$nn26')";

echo $sql;

mysqli_query($con,$sql)or die("error sql!!!!!!!!!!!".mysqli_error($con));

?>