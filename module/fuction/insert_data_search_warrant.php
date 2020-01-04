<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

if(empty($_POST['sw_map'])){
    $qq13="false";
}else{
    $qq13=$_POST['sw_map'];
}

if(empty($_POST['sw_check1'])){
    $qq14="false";
}else{
    $qq14=$_POST['sw_check1'];
}

if(empty($_POST['sw_check2'])){
    $qq15="false";
}else{
    $qq15=$_POST['sw_check2'];
}

if(empty($_POST['sw_check3'])){
    $qq16="false";
}else{
    $qq16=$_POST['sw_check3'];
}

if(empty($_POST['sw_check4'])){
    $qq17="false";
}else{
    $qq17=$_POST['sw_check4'];
}

if(empty($_POST['sw_law'])){
    $qq19="false";
}else{
    $qq19=$_POST['sw_law'];
}

if(empty($_POST['sw_warrant'])){
    $qq20="false";
}else{
    $qq20=$_POST['sw_warrant'];
}

if(empty($_POST['sw_check5'])){
    $qq29="false";
}else{
    $qq29=$_POST['sw_check5'];
}

if(empty($_POST['sw_check6'])){
    $qq30="false";
}else{
    $qq30=$_POST['sw_check6'];
}

$case_warrsear=$_SESSION['case_id'];
$qq1=$_POST['sw_Searchwarrant'];
$qq2=$_POST['sw_court'];
$qq3=$_POST['sw_date'];
$qq4=$_POST['sw_Petitioner'];
$qq5=$_POST['sw_send'];
$qq6=$_POST['sw_location'];
$qq7=$_POST['sw_Village'];
$qq8=$_POST['sw_alley'];
$qq9=$_POST['sw_road'];
$qq10=$_POST['sw_district'];
$qq11=$_POST['sw_district2'];
$qq12=$_POST['sw_province'];





$qq18=$_POST['sw_find'];


$qq21=$_POST['sw_warrant2'];
$qq22=$_POST['sw_date2'];
$qq23=$_POST['sw_issued'];
$qq24=$_POST['sw_sw_issued2'];
$qq25=$_POST['sw_position'];
$qq26=$_POST['sw_location2'];
$qq27=$_POST['sw_month'];
$qq28=$_POST['sw_time'];


$qq31=$_POST['sw_Search'];
$qq32=$_POST['sw_save'];
$qq33=$_POST['sw_judge'];

$sql="INSERT investigation_report INTO VALUE('$case_warrsear','$qq1','$qq2','$qq3','$qq4','$qq5','$qq6','$qq7','$qq8','$qq9','$qq10','$qq11','$qq12'
,'$qq13','$qq14','$qq15','$qq16','$qq17','$qq18','$qq19','$qq20','$qq21','$qq22','$qq23','$qq24','$qq25','$qq26','$qq27','$qq28','$qq29')";

echo $sql;

?>