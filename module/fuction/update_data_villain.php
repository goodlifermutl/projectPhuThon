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

echo $vill_case_id[0],$vill_title_name[0];
?>