<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$vill_case_id=$_POST['villain_case'];
$vill_title_name=$_POST['villain_title'];
$vill_name=$_POST['villain_name'];
$vill_lastname=$_POST['villain_lastname'];
$vill_race=$_POST['villain_race'];
$vill_nationality=$_POST['villain_nationality'];
$vill_career=$_POST['villain_career'];
$vill_idcard=$_POST['villain_idcard'];
$vill_edu=$_POST['villain_edu'];
$vill_sex=$_POST['villain_sex'];
$vill_address=$_POST['villain_address'];

$vill_body=$_POST['villain_body'];
$vill_face=$_POST['villain_face'];
$vill_hair=$_POST['villain_hair'];
$vill_nose=$_POST['villain_nose'];
$vill_mouth=$_POST['villain_mouth'];
$vill_chin=$_POST['villain_chin'];
$vill_eyes=$_POST['villain_eyes'];
$vill_forehead=$_POST['villain_forehead'];
$vill_ears=$_POST['villain_ears'];

echo $vill_case_id[0],$vill_title_name[0],$vill_name[0],$vill_lastname[0],$vill_race[0],$vill_nationality[0],$vill_career[0],
$vill_idcard[0],$vill_edu[0],$vill_sex[0],$vill_address[0],$vill_body[0],$vill_face[0],$vill_hair[0],$vill_nose[0],$vill_mouth[0],
$vill_chin[0],$vill_eyes[0],$vill_forehead[0],$vill_ears[0];
?>