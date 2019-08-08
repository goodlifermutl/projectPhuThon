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

$sql_user = mysqli_query($con,"SELECT permiss_id,user_id,pass_id,card_id,verification_user,verification_type FROM user WHERE user_id = '$_POST[username]' AND pass_id = '$pass'")or die("SQL chk_user.php ERROR".mysqli_error($con));
list($permiss_id,$user_name,$password,$card_id,$verification_user,$verification_type)=mysqli_fetch_row($sql_user);

$_SESSION['user_name']=$user_name;
$_SESSION['id_card']=$card_id;

if($user_name==$_POST['username'] && $password==$pass){

    if($verification_type==0){
        ?>
    <script>
            swal({
                title: "กรุณายืนยันตัวตน",
                text: "คุณ <?php echo $_POST['username']; ?>",
                icon: "warning",
            }).then((value) => {
        window.location.href = "../../verification_user.php";
        });
    </script>
    <?php
    }else{
        if($permiss_id==4){
    ?>
    <script>
            swal({
                title: "ยินดีตอนรับ",
                text: "คุณ <?php echo $_POST['username']; ?>",
                icon: "success",
            }).then((value) => {
        window.location.href = "../../home_admin.php";
        });
    </script>
    <?php
        }else if($permiss_id==2){
            ?>
             <script>
                swal({
                title: "ยินดีตอนรับ",
                text: "คุณ <?php echo $_POST['username']; ?>",
                icon: "success",
                    }).then((value) => {
                window.location.href = "../../home.php";
                });
            </script>
        <?php
        }else if($permiss_id==3){
            ?>
             <script>
                swal({
                title: "ยินดีตอนรับ",
                text: "คุณ <?php echo $_POST['username']; ?>",
                icon: "success",
                    }).then((value) => {
                window.location.href = "../../home.php?&module=2&action=2";
                });
            </script>
        <?php
        }
    }
}else{
    ?>
    <script>
            swal({
                title: "ตรวจสอบผู้ใช้และรหัสผ่าน",
                icon: "error",
            }).then((value) => {
        window.location.href = "../../index.php";
        });
    </script>
    <?php
}

mysqli_close($con);
?>
</body>
</html>