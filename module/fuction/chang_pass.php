<?php
session_start();
include("connect_db.php");
$con = connect_db();

$html_l="";
	$select = mysqli_query($con,"SELECT permiss_id FROM user WHERE user_id='$_SESSION[user_name]'")or die("select sql error".mysqli_error($con));
	list($permiss)=mysqli_fetch_row($select);
	if($permiss==2||$permiss==3){
		$html_l="window.location.href='home.php?module=1&action=5';";
	}else{
		$html_l="window.location.href='home_admin.php?module=1&action=5';";
	}


$pps=$_POST['oldPass'];
$old_pass= md5($pps);
$new_pass=$_POST['newPass2'];
$new_psss_en=md5($new_pass);

echo $old_pass;
echo "<br>";
// echo $new_pass;
// echo $_SESSION['user_name'];
$re=mysqli_query($con,"SELECT  pass_id FROM user WHERE pass_id='$old_pass' AND user_id='$_SESSION[user_name]'" ) or  die ("mysql error=>>".mysql_error($con));
list($pass_id)=mysqli_fetch_row($re);
 echo $pass_id;
if($pass_id==$old_pass){
    mysqli_query($con,"UPDATE  user  SET pass_id ='$new_psss_en' WHERE user_id='$_SESSION[user_name]' ");
    echo "เปลี่ยนรหัสผ่านแล้ว";    
}if($pass_id!=$old_pass){
    echo "รหัสผิดพลาด";
}

mysqli_close($con);

?>