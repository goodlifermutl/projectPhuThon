<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();
$num_witness=$_POST['re_warr_mmadd'];

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
$rw17=$_POST['rw_Documentary'];
$rw18=$_POST['rw_Witness'];
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


$md=0;
for($i=1;$i<=$num_witness;$i++){
    $sql2="INSERT INTO witness_request_warr VaLUE('','$case_rewarr','$rw18[$md]')";

    mysqli_query($con,$sql2)or die("ERROR sql2 +++++++++".mysqli_error($con));
    // echo "!!!!".$rw18[$md]."!!!!";
    $md++;
}


$sql="INSERT INTO request_warrant VALUE('','$case_rewarr','$rw1','$rw2','$rw3','$rw4','$rw5','$rw6','$rw7','$rw8','$rw9','$rw10','$rw11','$rw12'
,'$rw28','$rw13','$rw14','$rw15','$rw16','$rw17','$rw19','$rw20','$rw21','$rw22','$yn','$rw25','$rw26','$rw27')";

mysqli_query($con,$sql)or die("ERROR sql +++++++++".mysqli_error($con));

echo $sql;
// $_POST['rw_Request'];, //loop
?>