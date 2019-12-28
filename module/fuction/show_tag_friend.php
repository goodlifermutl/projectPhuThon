<?php
include ("../fuction/connect_db.php");
$con = connect_db();

// echo $_POST['sc_friend'];

$sql="SELECT user_id FROM user WHERE user_id LIKE '%$_POST[sc_friend]%'";

$result=mysqli_query($con,$sql)or die("SQL select ERROR!!!!!!!".mysqli_error($con));


while(list($name_user)=mysqli_fetch_row($result)){
echo "<button class='dropdown-item' type='button'>$name_user</button>";
}
mysqli_close($con);
?>