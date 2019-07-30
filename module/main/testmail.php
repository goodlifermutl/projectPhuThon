<?php require '../fuction/PHPMailer/PHPMailerAutoload.php';
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
$mail->addAddress('nickqbe@gmail.com','test');
$mail->isHTML(true);
$mail->Subject = 'test';
$mail->Body = 'ยืนยันการสมัครสมาชิก';
if(!$mail->send()){
    echo 'Mailler Error'.$mail->ErrorInfo;
}else{
    echo 'ส่งข้อความเรียบร้อย';
}
?>