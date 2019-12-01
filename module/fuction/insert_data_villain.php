<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$vil_case=$_SESSION['case_id'];
$vil_title=$_POST['villain_titlename'];
$vil_name=$_POST['villain_name'];
$vil_lastname=$_POST['villain_lastname'];
$vil_nationality=$_POST['villain_nationality'];
$vil_race=$_POST['villain_race'];
$vil_careen=$_POST['villain_careen'];
$vil_idcard=$_POST['villain_idcard'];
$vil_edu=$_POST['villain_edu'];
$vil_sex=$_POST['villain_sex'];
$vil_address=$_POST['villain_address'];

$vil_body=$_POST['villain_body'];
$vil_face=$_POST['villain_face'];
$vil_hair=$_POST['villain_hair'];
$vil_nose=$_POST['villain_nose'];
$vil_mouth=$_POST['villain_mouth'];
$vil_chin=$_POST['villain_chin'];
$vil_ears=$_POST['villain_ears'];
$vil_forehead=$_POST['villain_forehead'];
$vil_eyes=$_POST['villain_eyes'];

$vil_file=$_FILES['villain_file']['name'];


if(!empty($_FILES['villain_file']['name'])){
	$target_dir = "../../image/";

	$name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
	$name = substr(str_shuffle($name),0,10);
	$typepic = explode("/",$_FILES["villain_file"]["type"]);
	$name .= ".".$typepic[1];

	$target_file = $target_dir . basename($name);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// echo "name +>".$name." ";
	// Check if image file is a actual image or fake image

	    $check = getimagesize($_FILES["villain_file"]["tmp_name"]);
	    if($check !== false) {
	        // echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	        copy($_FILES["villain_file"]["tmp_name"], "$target_file");
	        $imgname=$name;

	    } else {
	        // echo "File is not an image.";
	        $uploadOk = 0;
            if($victim_sex==1){
                $imgname="icon_data_usermale.png";
                echo $imgname;
            }else{
                $imgname="icon_data_userfemale.png";
                echo $imgname;
            }
	    }

}else{
    if($vil_sex==1){
        $imgname="icon_data_usermale";
        
        echo $imgname;
    }else{
        $imgname="icon_data_userfemale";
        echo $imgname;
    }
}

$sql_insert_villain="INSERT INTO villain VALUES('$vil_case','$vil_title','$vil_name','$vil_lastname','$vil_sex','$vil_idcard','$vil_address','$vil_edu','$imgname','$vil_race','$vil_nationality','$vil_careen')";
$sql_insert_villain_iden="INSERT INTO villain_identities VALUES('$vil_idcard','$vil_face','$vil_hair','$vil_ears','$vil_forehead','$vil_eyes','$vil_nose','$vil_mouth','$vil_chin','$vil_body')";
mysqli_query($con,$sql_insert_villain)or die("sql insert villain error!!!!!!!".mysqli_error($con));
mysqli_query($con,$sql_insert_villain_iden)or die("sql insert villain_iden ERROR!!!!".mysqli_error($con));

echo $vil_case,$vil_title,$vil_name,$vil_lastname,$vil_sex,$vil_idcard,$vil_address,$vil_edu,$imgname,$vil_race,$vil_nationality,$vil_careen,$vil_face,$vil_hair,$vil_ears,$vil_forehead,$vil_eyes,$vil_nose,$vil_mouth,$vil_chin,$vil_body;
?>
