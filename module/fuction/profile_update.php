<?php
session_start();
include ("../fuction/connect_db.php");
$con=connect_db();

$sql_update="UPDATE police_person SET rank_id='$_POST[pro_title]',ps_name='$_POST[pro_name]',ps_lastname='$_POST[pro_lastname]',sex='$_POST[pro_sex]',address='$_POST[pro_address]',ps_num='$_POST[pro_tel]' WHERE card_id ='$_POST[pro_card_id]'";
echo $_POST['pro_card_id'] ;
$result_update=mysqli_query($con,$sql_update)or die("sql update profile error".mysqli_error($con));
mysqli_close($con);
?>