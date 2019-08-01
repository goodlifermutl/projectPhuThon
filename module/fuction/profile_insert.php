<?php
include("connect_db.php");
$con=connect_db();


$sql_insert="INSERT INTO police_person (card_id,rank_id,ps_name,ps_lastname,sex,address,ps_num) VALUES('$_POST[pro_card_id]','$_POST[pro_title]','$_POST[pro_name]','$_POST[pro_lastname]','$_POST[pro_sex]','$_POST[pro_address]','$_POST[pro_tel]')";

mysqli_query($con,$sql_insert)or die("error!!!!!!!!!!".mysqli_error($con));
mysqli_close($con);

?>