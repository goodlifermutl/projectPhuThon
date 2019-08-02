<?php require 'PHPMailer/PHPMailerAutoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include("connect_db.php");
$con = connect_db();

$code = date("yyyymmdd")."ASDFGHJKLZXCVBNM1234567890";
$code_name = substr(str_shuffle($code),0,10);
$pass=md5($_POST['psw']);

mysqli_query($con,"INSERT INTO user (permiss_id,user_id,pass_id,card_id,user_email,verification_user,verification_type) VALUES ('3', '$_POST[usrname]', '$pass', '$_POST[idcard]','$_POST[email]','$code_name','0')")or die("add_user/ insert error".mysqli_error($con));

mysqli_close($con);       

$user_mail= $_POST['email'];
$user_name=$_POST['usrname'];

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'phuthon.test01@gmail.com';
$mail->Password = 'phuthon01';
$mail->setFrom('phuthon.test01@gmail.com','ยืนยันการสมัครสมาชิกPHUTHONPAK5');
$mail->addAddress($user_mail,'ยืนยันการสมัครสมาชิก');
$mail->isHTML(true);
$mail->Subject = 'ยืนยันการสมัครสมาชิก';
$mail->Body = 'ขอบคุณสำหรับการสมัครสมาชิก คุณ :'.$user_name.'รหัสยืนยัน :'.$code_name;
if(!$mail->send()){
    echo 'Mailler Error'.$mail->ErrorInfo;
}else{
    echo 'ส่งข้อความเรียบร้อย';
}
?>
</body>
</html>