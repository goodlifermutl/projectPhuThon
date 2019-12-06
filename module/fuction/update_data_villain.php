<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$vill_case_id=$_POST['villain_case'];
$vill_title_name=$_POST['villain_title'];

echo $vill_case_id[0],$vill_title_name[0];
?>