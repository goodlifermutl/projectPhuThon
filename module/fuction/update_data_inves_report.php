<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case_inves=$_SESSION['case_id'];
$qq0=$_POST['ir_no_id'];
$qq1=$_POST['ir_Casetype'];
$qq2=$_POST['ir_order'];
$qq3=$_POST['ir_Policestation'];
$qq4=$_POST['ir_offer'];
$qq5=$_POST['ir_prefix'];
$qq6=$_POST['ir_name'];
$qq7=$_POST['ir_surname'];
$qq8=$_POST['ir_ir_prefix2'];
$qq9=$_POST['ir_ir_name2'];
$qq10=$_POST['ir_surname2'];
$qq11=$_POST['ir_Charge'];
$qq12=$_POST['ir_date'];
$qq13=$_POST['ir_district'];
$qq14=$_POST['ir_price'];
$qq15=$_POST['ir_wound'];
$qq16=$_POST['ir_Complaint'];
$qq17=$_POST['ir_control'];
$qq18=$_POST['ir_fact'];

// $sql="INSERT INTO investigation_report VALUE('$qq0[0]','$case_inves[0]','$qq1[0]','$qq2[0]','$qq3[0]','$qq4[0]','$qq5[0]','$qq6[0]','$qq7[0]','$qq8[0]','$qq9[0]','$qq10[0]','$qq11[0]','$qq12[0]'
// ,'$qq13[0]','$qq14[0]','$qq15[0]','$qq16[0]','$qq17[0]','$qq18[0]')";
$sql="UPDATE investigation_report SET ir_casetype='$qq1[0]',ir_order='$qq2[0]',ir_policestation='$qq3[0]',ir_offer='$qq4[0]',ir_prefix='$qq5[0]',ir_name='$qq6[0]',ir_surname='$qq7[0]',ir_ir_prefix2='$qq8[0]',ir_ir_name2='$qq9[0]',ir_surname2='$qq10[0]',ir_charge='$qq11[0]',ir_date='$qq12[0]',ir_district='$qq13[0]',ir_price='$qq14[0]',ir_wound='$qq15[0]',ir_complaint='$qq16[0]',ir_control='$qq17[0]',ir_fact='$qq18[0]' WHERE no_ir='$qq0[0]'";

echo $sql;

mysqli_query($con,$sql)or die("ERROR sql !!!!!!!!!!".mysqli_error($con));
mysqli_close($con);
?>