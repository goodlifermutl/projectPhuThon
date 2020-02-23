<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case=$_POST['case'];
$person=$_POST['person'];

if($case=='0'||$person=='0'){
    $case="";
    $person="";
}

$sql_insert_case="INSERT INTO inquiry_official(case_id, card_id)  VALUES('$case','$person')";
// echo $sql_insert_case;
mysqli_query($con,$sql_insert_case)or die("sql error insert case!!!!!".mysqli_error($con));

?>