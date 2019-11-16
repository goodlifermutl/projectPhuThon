<?php 
include ("../fuction/connect_db.php");
$con = connect_db();

$body_villain = mysqli_query($con,"SELECT body_id,body_name FROM villain_body ")or die("select body error!!!".mysqli_error($con));
$chin_villain = mysqli_query($con,"SELECT chin_id,chin_name FROM villain_chin")or die("select chin error!!!".mysqli_error($con));
$ears_villain = mysqli_query($con,"SELECT ears_id,ears_name FROM villain_ears")or die("select ears error!!!".mysqli_error($con));
$eyes_villain = mysqli_query($con,"SELECT eyes_id,eyes_name FROM villain_eyes")or die("select eyes error!!!".mysqli_error($con));
$face_villain = mysqli_query($con,"SELECT face_id,face_name FROM villain_face")or die("select face error!!!".mysqli_error($con));
$forehead_villain = mysqli_query($con,"SELECT forehead_id,forehead_name FROM villain_forehead")or die("select forehead error!!!".mysqli_error($con));
$hair_villain = mysqli_query($con,"SELECT hair_style_id,hair_name FROM villain_hair")or die("select chin error!!!".mysqli_error($con));
$mouth_villain = mysqli_query($con,"SELECT mouth_id,mouth_name FROM villain_mouth")or die("select mouth error!!!".mysqli_error($con));
$nose_villain = mysqli_query($con,"SELECT nose_id,nose_name FROM villain_nose")or die("select nose error!!!".mysqli_error($con));
?>