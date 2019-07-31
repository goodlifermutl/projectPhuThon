<?php session_start();
 require 'PHPMailer/PHPMailerAutoload.php'; 
    
    include("connect_db.php");
    $con = connect_db();

    $result=mysqli_query($con,"SELECT user_email FROM user WHERE user_id='$_SESSION[user_name]' ")or die("select user emial error!!!!!!!!!!".mysqli_error($con));
    list($user_email)=mysqli_fetch_row($result);
   
    
    
    $code = date("yyyymmdd")."ASDFGHJKLZXCVBNM1234567890";
    $code_name = substr(str_shuffle($code),0,10);

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
    $mail->addAddress($user_email,'test');
    $mail->isHTML(true);
    $mail->Subject = 'test';
    $mail->Body = 'ขอบคุณสำหรับการสมัครสมาชิก คุณ :'.$_SESSION['user_name'].'รหัสยืนยัน :'.$code_name;
    if(!$mail->send()){
        echo 'Mailler Error'.$mail->ErrorInfo;
    }else{
        echo "ส่งข้อความเรียบร้อย";
        $sql_update="UPDATE user SET verification_user='$code_name' WHERE user_id='$_SESSION[user_name]'";
        echo $sql_update;
        mysqli_query($con,$sql_update)or die("sql update error".mysqli_error($con));
    }

    mysqli_close($con); 
    ?>