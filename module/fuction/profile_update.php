<?php
session_start();
include ("../fuction/connect_db.php");
$con=connect_db();
echo $_FILES['profile_pic']['name'];
if(!empty($_FILES['profile_pic']['name'])){
    	$target_dir = "../../image/";
    
    	$name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
    	$name = substr(str_shuffle($name),0,10);
    	$typepic = explode("/",$_FILES["profile_pic"]["type"]);
    	$name .= ".".$typepic[1];
    
    	$target_file = $target_dir . basename($name);
    	$uploadOk = 1;
    	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    	// echo "name +>".$name." ";
    	// Check if image file is a actual image or fake image
    
    	    $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
    	    if($check !== false) {
    	        // echo "File is an image - " . $check["mime"] . ".";
    	        $uploadOk = 1;
    	        copy($_FILES["profile_pic"]["tmp_name"], "$target_file");
                $imgname=$name;
                echo $imgname;
    
    	    } else {
                    $imgname="";
                    echo $imgname;
    	    }
    
    }else{
        $imgname="";
        echo $imgname;
    }
$sql_update="UPDATE police_person SET rank_id='$_POST[pro_title]',ps_name='$_POST[pro_name]',ps_lastname='$_POST[pro_lastname]',sex='$_POST[pro_sex]',address='$_POST[pro_address]',ps_num='$_POST[pro_tel]',police_pic='$imgname' WHERE card_id ='$_POST[pro_card_id]'";
echo $_POST['pro_card_id'] ;
mysqli_query($con,$sql_update)or die("sql update profile error!!!!!".mysqli_error($con));
mysqli_close($con);
?>