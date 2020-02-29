<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$victim_case=$_SESSION['case_id'];
$victim_title=$_POST['victim_titlename'];
$victim_name=$_POST['victim_name'];
$victim_lastname=$_POST['victim_lastname'];
$victim_nationality=$_POST['victim_nationality'];
$victim_race=$_POST['victim_race'];
$victim_careen=$_POST['victim_careen'];
$victim_idcard=$_POST['victim_idcard'];
$victim_edu=$_POST['victim_edu'];
$victim_sex=$_POST['victim_sex'];
$victim_address=$_POST['victim_address'];

echo "$victim_name";

$victim_file=$_FILES['victim_file']['name'];

if(!empty($_FILES['victim_file']['name'])){
	$target_dir = "../../image/";

	$name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
	$name = substr(str_shuffle($name),0,10);
	$typepic = explode("/",$_FILES["victim_file"]["type"]);
	$name .= ".".$typepic[1];

	$target_file = $target_dir . basename($name);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// echo "name +>".$name." ";
	// Check if image file is a actual image or fake image

	    $check = getimagesize($_FILES["victim_file"]["tmp_name"]);
	    if($check !== false) {
	        // echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	        copy($_FILES["victim_file"]["tmp_name"], "$target_file");
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
    if($victim_sex==1){
        $imgname="icon_data_usermale.png";
        
        echo $imgname;
    }else{
        $imgname="icon_data_userfemale.png";
        echo $imgname;
    }
}

$sql_insert_victim="INSERT INTO victim VALUES('','$victim_case','$victim_title','$victim_name','$victim_lastname','$victim_sex','$victim_idcard','$victim_address','$victim_edu','$imgname','$victim_race','$victim_nationality','$victim_careen')";

mysqli_query($con,$sql_insert_victim)or die("sql insert victim error!!!!!!!".mysqli_error($con));
echo $victim_title,$victim_name,$victim_lastname,$victim_nationality,$victim_race,$victim_careen,$victim_idcard,$victim_edu,$victim_sex,$victim_address,$victim_file;
?>
