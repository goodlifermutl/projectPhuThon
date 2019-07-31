<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$id_id=$_POST['victim_i'];
$victim_case=$_POST['victim_case'];
$victim_title=$_POST['victim_titlename'];
$victim_name=$_POST['victim_name'];
$victim_lastname=$_POST['victim_lastname'];
// $victim_race=$_POST['victim_race'];
$victim_nationality=$_POST['victim_nationality'];
$victim_careen=$_POST['victim_careen'];
$victim_idcard=$_POST['victim_idcard'];
$victim_edu=$_POST['victim_edu'];
$victim_sex=$_POST['victim_sex'];
$victim_address=$_POST['victim_address'];

// echo $id_id[0],$victim_case[0],$victim_title[0],$victim_name[0],$victim_lastname[0],$victim_race[0],$victim_nationality[0]
// ,$victim_careen[0],$victim_idcard[0],$victim_edu[0],$victim_sex[0],$victim_address[0];

$sql_update="UPDATE victim SET title_name='$victim_title[0]',victim_name='$victim_name[0]',victim_lastname='$victim_lastname[0]',victim_sex='$victim_sex[0]',victim_address='$victim_address[0]',victim_education='$victim_edu[0]',victim_nationality='$victim_nationality[0]',victim_career='$victim_careen[0]' WHERE victim_idcard='$victim_idcard[0]'";
echo $sql_update;
$result_update=mysqli_query($con,$sql_update)or die("sql update victim error".mysqli_error($con));
mysqli_close($con);


?>
