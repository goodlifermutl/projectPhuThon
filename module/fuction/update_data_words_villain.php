<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$case_wordsvil=$_SESSION['case_id'];
$nn0=$_POST['wv_no_id'];
$nn1=$_POST['wv_idcard'];
$nn2=$_POST['wv_are'];
$nn3=$_POST['wv_phone'];
// $nn4=$_POST['wv_card'];
$nn5=$_POST['wv_output1'];
$nn6=$_POST['wv_output2'];
$nn7=$_POST['wv_last'];
$nn8=$_POST['wv_police'];
$nn9=$_POST['wv_station'];
$nn10=$_POST['wv_date'];
$nn11=$_POST['wv_accused'];
$nn12=$_POST['wv_suspect'];
$nn13=$_POST['wv_before'];
$nn14=$_POST['wv_investigate'];
$nn15=$_POST['wv_name'];
$nn16=$_POST['wv_age'];
$nn17=$_POST['wv_race'];
$nn18=$_POST['wv_nationality'];
$nn19=$_POST['wv_religion'];
$nn192=$_POST['wv_careen'];
$nn20=$_POST['wv_address'];
$nn21=$_POST['wv_headman'];
$nn22=$_POST['wv_villageheadmane'];
$nn23=$_POST['wv_farthername'];
$nn24=$_POST['wv_mothername'];
$nn25=$_POST['wv_birthday'];
$nn26=$_POST['wv_official'];

// $sql="INSERT INTO words_villain VALUE('','$case_wordsvil','$nn1','$nn2','$nn3','$nn4','$nn5','$nn6','$nn7','$nn8','$nn9','$nn10','$nn11','$nn12'
// ,'$nn13','$nn14','$nn15','$nn16','$nn17','$nn18','$nn19','$nn20','$nn21','$nn22','$nn23','$nn24','$nn25','$nn26')";

$sql="UPDATE words_villain SET wv_testimony='$nn1[0]',wv_are='$nn2[0]',wv_phone='$nn3[0]',wv_output1='$nn5[0]',wv_output2='$nn6[0]',wv_last='$nn7[0]',wv_police='$nn8[0]',wv_station='$nn9[0]',wv_date='$nn10[0]',wv_accused='$nn11[0]',wv_suspect='$nn12[0]',wv_before='$nn13[0]',wv_investigate='$nn14[0]',wv_name='$nn15[0]',wv_age='$nn16[0]',wv_race='$nn17[0]',wv_nationality='$nn18[0]',wv_religion='$nn19[0]',wv_careen='$nn192[0]',wv_address='$nn20[0]',wv_headman='$nn21[0]',wv_villageheadmane='$nn22[0]',wv_farthername='$nn23[0]',wv_mothername='$nn24[0]',wv_birthday='$nn25[0]',wv_official='$nn26[0]' WHERE wv_no='$nn0[0]'";

echo $sql;

mysqli_query($con,$sql)or die("error sql!!!!!!!!!!!".mysqli_error($con));
mysqli_close($con);

?>