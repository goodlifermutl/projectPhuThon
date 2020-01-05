<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();


if(empty($_POST['rw_cherk1'])){
    $rw13="false";
}else{
    $rw13=$_POST['rw_cherk1'];
}

if(empty($_POST['rw_cherk2'])){
    $rw14="false";
}else{
    $rw14=$_POST['rw_cherk2'];
}


$case_rewarr=$_SESSION['case_id'];
$rw0=$_POST['rw_no_up'];
$rw1=$_POST['rw_no'];
$rw2=$_POST['rw_court'];
$rw3=$_POST['rw_cell'];
$rw4=$_POST['rw_judge'];
$rw5=$_POST['rw_type'];
$rw6=$_POST['rw_Petitioner'];
$rw7=$_POST['rw_policename'];
$rw8=$_POST['rw_position'];
$rw9=$_POST['rw_age'];
$rw10=$_POST['rw_career'];
$rw11=$_POST['rw_Workplace'];
$rw12=$_POST['rw_phone'];
$rw28=$_POST['rw_dos'];


$rw15=$_POST['rw_incident'];
$rw16=$_POST['rw_circumstances'];
$rw166=$_POST['rw_action'];
$rw17=$_POST['rw_Documentary'];
// $rw18=$_POST['rw_Witness'];
$rw19=$_POST['rw_Arrest'];
$rw20=$_POST['rw_warrant'];
$rw21=$_POST['rw_petition'];
$rw22=$_POST['rw_position2'];
// $rw23=$_POST['rw_check3'];
// $rw24=$_POST['rw_check4'];
$rw25=$_POST['rw_Request'];
$rw26=$_POST['rw_warrant2'];
$rw27=$_POST['rw_Court2'];
$yn=$_POST['exampleRadios'];




// $sql="INSERT INTO request_warrant VALUE('','$case_rewarr','$rw1','$rw2','$rw3','$rw4','$rw5','$rw6','$rw7','$rw8','$rw9','$rw10','$rw11','$rw12'
// ,'$rw28','$rw13','$rw14','$rw15','$rw16','$rw166','$rw17','$rw19','$rw20','$rw21','$rw22','$yn','$rw25','$rw26','$rw27')";

$sql="UPDATE request_warrant SET rw_no='$rw1[0]',rw_court='$rw2[0]',rw_cell='$rw3[0]',rw_judge='$rw4[0]',rw_type='$rw5[0]',rw_Petitioner='$rw6[0]',rw_policename='$rw7[0]',rw_position='$rw8[0]',rw_age='$rw9[0]',rw_career='$rw10[0]',rw_Workplace='$rw11[0]',rw_phone='$rw12[0]',rw_dos='$rw28[0]',rw_cherk1='$rw13[0]',rw_cherk2='$rw14[0]',rw_incident='$rw15[0]',rw_circumstances='$rw16[0]',rw_action='$rw166[0]',rw_Documentary='$rw17[0]',rw_Arrest='$rw19[0]',rw_warrant='$rw20[0]',rw_petition='$rw21[0]',rw_position2='$rw22[0]',rw_ornot='$yn[0]',rw_Request='$rw25[0]',rw_warrant2='$rw26[0]',rw_Court2='$rw27[0]' WHERE no_rw='$rw0[0]' ";
 mysqli_query($con,$sql)or die("ERROR sql +++++++++".mysqli_error($con));
mysqli_close($con);
echo $sql;
// $_POST['rw_Request'];, //loop
?>