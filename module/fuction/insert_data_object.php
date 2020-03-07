<?php 
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$ob_case=$_SESSION['case_id'];
$ob_id=$_POST['idob'];
$ob_name=$_POST['nameob'];
$ob_size=$_POST['sizeob'];
$ob_look=$_POST['lookob'];
$ob_status=$_POST['staob'];
$ob_location=$_POST['name_location'];

if($ob_status=='1'){
    $status_ob="ยึด";
}else if($ob_status=='2'){
    $status_ob="คืน";
}

$object_file=$_FILES['object_file']['name'];

if(!empty($_FILES['object_file']['name'])){
	$target_dir = "../../image/";

	$name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
	$name = substr(str_shuffle($name),0,10);
	$typepic = explode("/",$_FILES["object_file"]["type"]);
	$name .= ".".$typepic[1];

	$target_file = $target_dir . basename($name);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// echo "name +>".$name." ";
	// Check if image file is a actual image or fake image

	    $check = getimagesize($_FILES["object_file"]["tmp_name"]);
	    if($check !== false) {
	        // echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	        copy($_FILES["object_file"]["tmp_name"], "$target_file");
	        $imgname=$name;

        }
}    
 echo $object_file,$imgname,$ob_case,$ob_name,$ob_size,$ob_look,$status_ob,$ob_id;

$sql_insert_object="INSERT INTO object_case VALUES('$ob_id','$ob_case','$status_ob','$ob_name','$ob_size','$ob_look','$imgname','$ob_location')";

mysqli_query($con,$sql_insert_object)or die("sql insert object error!!!!!!!".mysqli_error($con));
mysqli_close($con);

?>