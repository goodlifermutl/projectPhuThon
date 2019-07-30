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

$pass=md5($_POST['psw']);

mysqli_query($con,"INSERT INTO user (permiss_id,user_id,pass_id,card_id,user_email) VALUES ('3', '$_POST[usrname]', '$pass', '$_POST[idcard]','$_POST[email]')")or die("add_user/ insert error".mysqli_error($con));

mysqli_close($con);       


$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'phuthon.test01@gmail.com';
$mail->Password = 'phuthon01';
$mail->setFrom('phuthon.test01@gmail.com','Amagetdon');
$mail->addAddress('goodloveone1@gmail.com','test');
$mail->isHTML(true);
$mail->Subject = 'test';
$mail->Body = 'ยืนยันการสมัครสมาชิก';
if(!$mail->send()){
    echo 'Mailler Error'.$mail->ErrorInfo;
}else{
    echo 'ส่งข้อความเรียบร้อย';
}
?>
</body>
</html>