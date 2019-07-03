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
session_start();
include ("connect_db.php");
$con = connect_db();

$pass=md5($_POST['pw']);

$sql_user = mysqli_query($con,"SELECT permiss_id,user_id,pass_id,card_id FROM user WHERE user_id = '$_POST[username]' AND pass_id = '$pass'")or die("SQL chk_user.php ERROR".mysqli_error($con));
list($permiss_id,$user_name,$password,$card_id)=mysqli_fetch_row($sql_user);

$_SESSION['user_name']=$user_name;
$_SESSION['id_card']=$card_id;

if($user_name==$_POST['username'] && $password==$pass){
    ?>
    <script>
            swal({
                title: "ยินดีตอนรับ",
                text: "คุณ <?php echo $_POST['username']; ?>",
                icon: "success",
            }).then((value) => {
        window.location.href = "../main/home.php";
        });
    </script>
    <?php
}else{
    ?>
    <script>
            swal({
                title: "ตรวจสอบผู้ใช้และรหัสผ่าน",
                icon: "error",
            }).then((value) => {
        window.location.href = "../../index.html";
        });
    </script>
    <?php
}

mysqli_close($con);
?>
</body>
</html>