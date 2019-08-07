<?php
include ("connect_db.php");
require 'PHPMailer/PHPMailerAutoload.php';
$con = connect_db();
echo "eeeeee";
echo $_GET['user'];
$code = date("yyyymmdd")."ASDFGHJKLZXCVBNM1234567890";
$code_name = substr(str_shuffle($code),0,10);
$pass=md5($code_name);
$result=mysqli_query($con,"SELECT user_email FROM user WHERE user_id='$_GET[user]'")or die("select ERROR!!!!!!".mysqli_error($con));
list($email_user)=mysqli_fetch_row($result);

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'phuthon.test01@gmail.com';
$mail->Password = 'phuthon01';
$mail->setFrom('phuthon.test01@gmail.com','รหัสผ่านใหม่');
$mail->addAddress($email_user,'รหัสผ่านใหม่');
$mail->isHTML(true);
$mail->Subject = 'รหัสผ่านใหม่ในการเข้าระบบ';
$mail->Body = 'รีเซ็ตรหัสผ่านของ คุณ :'.$_GET['user'].'รหัสผ่านใหม่ :'.$code_name;
if(!$mail->send()){
    echo 'Mailler Error'.$mail->ErrorInfo;
}else{
    echo 'ส่งข้อความเรียบร้อย';
}


$sql_pass="UPDATE user SET pass_id='$pass' WHERE user_id='$_GET[user]'";
mysqli_query($con,$sql_pass)or die("sql_update ERROR!!!!!!!!!".mysqli_error($con));
mysqli_close($con);
?>
<script>
window.location.href="../../home_admin.php?&module=1&action=8";
</script>