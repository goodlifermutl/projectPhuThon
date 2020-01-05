<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();


$arre_no=$_POST['no_ar_re'];
$porjorwor=$_POST['ar_porjorwor'];
$time=$_POST['arrest_time'];
$casetype=$_POST['ar_typecase'];
$no_ar=$_POST['arrest_No'];
$accout_no=$_POST['arrest_list'];
$save_address=$_POST['arrest_address_save'];
$date_save=$_POST['arrest_date_save'];
$date_catch=$_POST['arrest_date_catch'];
$address_catch=$_POST['arrest_address_catch'];
$location_ob=$_POST['arrest_location_ob'];
$say_ar=$_POST['arrest_say'];
$atcs_ar=$_POST['arrest_atcs'];
$depors_ar=$_POST['arrest_depors'];
$place_ar=$_POST['arrest_place'];
$date_ar=$_POST['arrest_date_place'];

if(empty($_POST['arre_po_id'])||empty($_POST['arre_po_loop'])){
    $arre_po_id="";
    $arre_po_loop="";
}else{
        $arre_po_id=$_POST['arre_po_id'];
        $arre_po_loop=$_POST['arre_po_loop'];

        $bb=0;
        while($bb<$arre_po_loop[0]){
        $sql3="UPDATE police_catch_arrest SET police_arya_no='$no_ar[0]' WHERE id_po_ca_ar='$arre_po_id[$bb]'";
        $bb++;

        // echo $sql3;
        mysqli_query($con,$sql3)or die("sql3 error!!!!!".mysqli_error($con));
    }
}

if(empty($_POST['arre_vil_idcard'])||empty($_POST['arre_vil_loop'])){
    $arrre_vil_cardid="";
    $arrre_vil_loop="";
}else{
        $arrre_vil_cardid=$_POST['arre_vil_idcard'];
        $arrre_vil_loop=$_POST['arre_vil_loop'];

        $aa=0;
        while($aa<$arrre_vil_loop[0]){
        $sql2="UPDATE villain SET villain_arya_no='$no_ar[0]' WHERE villain_idcard='$arrre_vil_cardid[$aa]'";
        $aa++;

        // echo $sql2;
        mysqli_query($con,$sql2)or die("sql2 error!!!!!".mysqli_error($con));
        }
}

if(empty($_POST['arre_ob_id'])||empty($_POST['arre_ob_loop'])){
    $arrre_vil_cardid="";
    $arrre_vil_loop="";
}else{
    $arre_ob_id=$_POST['arre_ob_id'];
    $arre_ob_loop=$_POST['arre_ob_loop'];

    $cc=0;
    while($cc<$arre_ob_loop[0]){
    $sql4="UPDATE object_case SET ob_arya_no='$no_ar[0]' WHERE ob_no='$arre_ob_id[$cc]'";
    $cc++;

    // echo $sql4;
    mysqli_query($con,$sql4)or die("sql4 error!!!!!".mysqli_error($con));
}

}



$sql1="UPDATE arrest_record SET por_jor_wor='$porjorwor[0]',ar_re_time='$time[0]',ar_re_typecase='$casetype[0]',ar_re_no='$no_ar[0]',ar_re_acc='$accout_no[0]',ar_re_address_save='$save_address[0]',ar_re_save_date='$date_save[0]'
,ar_re_save_catch='$date_catch[0]',ar_re_address_catch='$address_catch[0]',ar_re_location_ob='$location_ob[0]',ar_re_say='$say_ar[0]',ar_re_atcs='$atcs_ar[0]',ar_re_depose='$depors_ar[0]',ar_re_location_place='$place_ar[0]',ar_re_date_place='$date_ar[0]' WHERE arrest_no='$arre_no[0]'";

echo $sql1;
mysqli_query($con,$sql1)or die("sql1 error!!!!!".mysqli_error($con));

mysqli_close($con);

?>