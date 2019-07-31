<html lang="en">
<head>
  <title>PhuThon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/af7942016f.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <?php //validate ?>
		<script src="js/validate/jquery.validate.min.js" ></script>
		<script src="js/validate/additional-methods.min.js" ></script>
		<script src="js/validate/localization/messages_th.min.js" ></script>
		<script src="js/validateSetdef.js" ></script> 
		<?php //END validate ?>
</head>
<body>
<?php
session_start();

include("connect_db.php");
$con = connect_db();

$result=mysqli_query($con,"SELECT verification_user FROM user WHERE user_id='$_SESSION[user_name]' ")or die("select user emial error!!!!!!!!!!".mysqli_error($con));
list($verification_user)=mysqli_fetch_row($result);

if($verification_user==$_POST['verification']){
    mysqli_query($con,"UPDATE user SET verification_type='1' WHERE user_id='$_SESSION[user_name]'")or die("sql update error".mysqli_error($con));
    ?>
    <script>
    swal({
                title: "กรุณาเข้าสู่ระบบอีกครั้ง",
                icon: "success",
            }).then((value) => {
        window.location.href = "../../index.php";
        });
    </script>
<?php
}else{
?>
<script>
    swal({
                title: "รหัสการยืนยันตัวตนไม่ถูกต้อง",
                text:"กรุณาตรวจสอบรหัสยืนยันตัวตนอีกครั้ง",
                icon: "error",
            }).then((value) => {
        window.location.href = "../../verification_user.php";
        });
    </script>
<?php
}

?>
</body>
</html>