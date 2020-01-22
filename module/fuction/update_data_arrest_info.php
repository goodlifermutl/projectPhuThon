<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$ar_info_case=$_SESSION['case_id'];
$arinfo_list=$_POST['info_arr_list'];
$arinfo_san=$_POST['san_arr_info'];
$arinfo_date=$_POST['date_arr_info'];
$arinfo_type=$_POST['type_arr_info'];
$arinfo_help=$_POST['victim_ar_info'];
$arinfo_send=$_POST['villain_ar_info'];
$arinfo_victimsay=$_POST['victim_arin_say'];
$arinfo_vil_perpe=$_POST['villain_perpetrate_arin'];
$arinfo_vil=$_POST['vil_ar_info'];
$arinfo_vil_close_add=$_POST['vil_close_address'];
$arinfo_vill_to_place=$_POST['vill_to_place'];
$arinfo_intime=$_POST['intime_ar_info'];
$arinfo_stdate=$_POST['stdate_ar_info'];
$arinfo_dl=$_POST['dl_ar_info'];
$arinfo_judge=$_POST['judge_ar_info'];


// echo $ar_info_case,$arinfo_list,$arinfo_san,$arinfo_date,$arinfo_type,$arinfo_help,$arinfo_send,$arinfo_victimsay
// ,$arinfo_vil_perpe,"เลขบัตร".$arinfo_vil."||",$arinfo_vil_close_add,$arinfo_vill_to_place,$arinfo_intime,$arinfo_stdate,$arinfo_dl,$arinfo_judge;

$sql="UPDATE arrest_info SET id_arr_info='$arinfo_list[0]',court_name='$arinfo_san[0]',date_arr_info='$arinfo_date[0]',type_arr_info='$arinfo_type[0]',victim_arr_info='$arinfo_help[0]',villain_arr_info='$arinfo_send[0]',victim_say_arr_info='$arinfo_victimsay[0]',vil_perpetrate_arr_info='$arinfo_vil_perpe[0]',close_add_arr_info='$arinfo_vil_close_add[0]',send_to_arr_info='$arinfo_vill_to_place[0]',dl_arr_info='$arinfo_intime[0]',st_date_arr_info='$arinfo_stdate[0]',end_date_arr_info='$arinfo_dl[0]',judge_name='$arinfo_judge[0]' WHERE id_vil_catch_arr_info='$arinfo_vil[0]'";

echo $sql;
mysqli_query($con,$sql)or die("ERROR sql".mysqli_error($con));

?>