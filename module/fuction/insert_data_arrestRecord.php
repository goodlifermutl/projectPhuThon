<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$won=0;
$i=1;

$ar_case=$_SESSION['case_id'];
$num_pjw=$_POST['arnum_pjw'];
$time=$_POST['arrest_time'];
$casetype=$_POST['ar_typecase'];
$no_ar=$_POST['arrest_No'];
$accout_no=$_POST['arrest_list'];
$save_address=$_POST['arrest_address_save'];
$date_save=$_POST['arrest_date_save'];
$date_catch=$_POST['arrest_date_catch'];
$address_catch=$_POST['arrest_address_catch'];
$location_ob=$_POST['arrest_location_ob'];
$say_ar=$_POST['arrest_say'];
$atcs_ar=$_POST['arrest_atcs'];
$depors_ar=$_POST['arrest_depors'];
$place_ar=$_POST['arrest_place'];
$date_ar=$_POST['arrest_date_place'];
$coutcatch=$_POST['ccrecord'];


if(empty($_POST['idob'])||empty($_POST['nameob'])||empty($_POST['sizeob'])||empty($_POST['lookob'])||empty($_POST['staob'])||empty($_FILES['object_file']['name'])){
    $ob_id="";
    $ob_name="";
    $ob_size="";
    $ob_look="";
    $ob_status="";
    $object_file="";
    
}else{
    $ob_id=$_POST['idob'];
    $ob_name=$_POST['nameob'];
    $ob_size=$_POST['sizeob'];
    $ob_look=$_POST['lookob'];
    $ob_status=$_POST['staob'];
    $object_file=$_FILES['object_file']['name'];
    $file_type=$_FILES["object_file"]["type"];
    $file_tmp=$_FILES["object_file"]["tmp_name"];
     
    
}






// if(!empty($_FILES['object_file']['name'])){
// 	$target_dir = "../../image/";

// 	$name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
// 	$name = substr(str_shuffle($name),0,10);
// 	$typepic = explode("/",$_FILES["object_file"]["type"]);
// 	$name .= ".".$typepic[1];

// 	$target_file = $target_dir . basename($name);
// 	$uploadOk = 1;
// 	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// 	// echo "name +>".$name." ";
// 	// Check if image file is a actual image or fake image

// 	    $check = getimagesize($_FILES["object_file"]["tmp_name"]);
// 	    if($check !== false) {
// 	        // echo "File is an image - " . $check["mime"] . ".";
// 	        $uploadOk = 1;
// 	        copy($_FILES["object_file"]["tmp_name"], "$target_file");
// 	        $imgname=$name;

//         }
// }    


echo $ar_case,$num_pjw,$time,$casetype,$no_ar,$accout_no,$save_address,$date_save,$date_catch,$address_catch,
$location_ob,$say_ar,$atcs_ar,$depors_ar,$place_ar,$date_ar,$coutcatch;

// echo $object_file[$won],$ob_case[$won],$ob_name[$won],$ob_size[$won],
//     $ob_look[$won],$status_ob[$won],$ob_id[$won];

for($g=1;$g<=$coutcatch;$g++){


    if(!empty($_FILES['object_file']['name'])){
        $target_dir = "../../image/";
    
        $name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
        $name = substr(str_shuffle($name),0,10);
        $typepic = explode("/",$file_type[$won]);
        $name .= ".".$typepic[1];
    
        $target_file = $target_dir . basename($name);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // echo "name +>".$name." ";
        // Check if image file is a actual image or fake image
    
            $check = getimagesize($file_tmp[$won]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                copy($file_tmp[$won], "$target_file");
                // $imgname=array("$name");
                $imgname=$name;
                
    
            }
        }



    echo $ob_id[$won],
    $ob_name[$won],
    $ob_size[$won],
    $ob_look[$won],
    $ob_status[$won],
    $object_file[$won],
    $file_type[$won] ;

    echo "ชื่อรูปเข้ารหัส".$imgname.">>>";
    
    $won++;
    }

    

?>