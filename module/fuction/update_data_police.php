<?php 
include ("../fuction/connect_db.php");
$con = connect_db();

$police_idcard=$_POST['idcard_police'];
$police_title=$_POST['rank_police'];
$police_name=$_POST['name_police'];
$police_lastname=$_POST['lastname_police'];
$police_phone=$_POST['phone_police'];
$police_sex=$_POST['sex_police'];
$police_address=$_POST['address_police'];
$police_per=$_POST['per_police'];

//echo $police_idcard[0],$police_title[0],$police_name[0],$police_lastname[0],$police_phone[0],$police_sex[0],$police_address[0],$police_per[0];
$sql="UPDATE police_person SET rank_id='$police_title[0]',ps_name='$police_name[0]',ps_lastname='$police_lastname[0]',sex='$police_sex[0]',address='$police_address[0]',ps_num='$police_phone[0]',police_pic='',sta_per_police='$police_per[0]'  WHERE card_id='$police_idcard[0]'";
$sql_per="UPDATE user SET permiss_id='0' WHERE card_id ='$police_idcard[0]'";
//echo $sql;
//echo $sql_per;
if($police_per[0]=="2"){
    mysqli_query($con,$sql_per)or die("sql update_police_data ERROR####!!!!!!!!!!".mysqli_error($con));
}
mysqli_query($con,$sql)or die("sql update_police_data ERROR####!!!!!!!!!!".mysqli_error($con));
mysqli_close($con);

?>