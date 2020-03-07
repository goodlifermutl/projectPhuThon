<?php
include ("../fuction/connect_db.php");
$con = connect_db();

$ob_on=$_POST['ob_on'];
$ob_id=$_POST['idob'];
$ob_name=$_POST['nameob'];
$ob_size=$_POST['sizeob'];
$ob_look=$_POST['lookob'];
$ob_status=$_POST['staob'];
$ob_location=$_POST['name_location'];

$sql_update="UPDATE object_case SET id_object='$ob_id[0]',object_status='$ob_status[0]',object_name='$ob_name[0]',object_size='$ob_size[0]',object_look='$ob_look[0]',ob_location='$ob_location[0]' WHERE ob_no=$ob_on[0]";
echo $sql_update;
mysqli_query($con,$sql_update)or die("sql update victim error".mysqli_error($con));
mysqli_close($con);
?>