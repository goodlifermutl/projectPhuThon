<?php
include ("connect_db.php");
 echo "ggg";
 echo $_POST['per'];
 echo $_POST['user'];
$con = connect_db();
$sql_status_user="UPDATE user SET permiss_id='$_POST[per]' WHERE user_id='$_POST[user]'";
mysqli_query($con,$sql_status_user)or die("sql_update ERROR!!!!!!!!!".mysqli_error($con));
mysqli_close($con);
?>
<script>
//window.location.href = "../../home_admin.php";
</script>