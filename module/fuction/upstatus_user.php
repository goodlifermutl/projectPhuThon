<?php
$con = connect_db();
$sql_status_user="UPDATE user SET permiss_id='4' WHERE user_id='user01'";
mysqli_query($con,$sql_status_user)or die("sql_update ERROR!!!!!!!!!".mysqli_error($con));
mysqli_close($con);
?>