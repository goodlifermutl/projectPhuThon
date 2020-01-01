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


if(empty($_POST['idob'])||empty($_POST['nameob'])||empty($_POST['sizeob'])||empty($_POST['lookob'])||empty($_POST['staob'])||empty($_FILES['object_file']['name'])||empty($_POST['name_police'])){
    $ob_id="";
    $ob_name="";
    $ob_size="";
    $ob_look="";
    $ob_status="";
    $object_file="";
    $police_name="";
    
}else{
    $ob_id=$_POST['idob'];
    $ob_name=$_POST['nameob'];
    $ob_size=$_POST['sizeob'];
    $ob_look=$_POST['lookob'];
    $ob_status=$_POST['staob'];
    $object_file=$_FILES['object_file']['name'];
    $file_type=$_FILES["object_file"]["type"];
    $file_tmp=$_FILES["object_file"]["tmp_name"];
    $police_name=$_POST['name_police'];
     
    
}

if(empty($_POST['villain_titlename'])||empty($_POST['villain_name'])||empty($_POST['villain_lastname'])
||empty($_POST['villain_nationality'])||empty($_POST['villain_race'])||empty($_POST['villain_careen'])
||empty($_POST['villain_idcard'])||empty($_POST['villain_edu'])||empty($_POST['villain_sex'])||empty($_POST['villain_address'])
||empty($_POST['villain_body'])||empty($_POST['villain_face'])||empty($_POST['villain_hair'])||empty($_POST['villain_nose'])
||empty($_POST['villain_mouth'])||empty($_POST['villain_chin'])||empty($_POST['villain_ears'])||empty($_POST['villain_forehead'])
||empty($_POST['villain_eyes'])||empty($_FILES['villain_file']['name'])){

    $vil_title="";
    $vil_name="";
    $vil_lastname="";
    $vil_nationality="";
    $vil_race="";
    $vil_careen="";
    $vil_idcard="";
    $vil_edu="";
    $vil_sex="";
    $vil_address="";
    $vil_body="";
    $vil_face="";
    $vil_hair="";
    $vil_nose="";
    $vil_mouth="";
    $vil_chin="";
    $vil_ears="";
    $vil_forehead="";
    $vil_eyes="";
    $vil_file="";
    
}else{
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
    $vil_file_type=$_FILES["villain_file"]["type"];
    $vil_file_tmp=$_FILES["villain_file"]["tmp_name"];
}

// $vil_title=$_POST['villain_titlename'];
// $vil_name=$_POST['villain_name'];
// $vil_lastname=$_POST['villain_lastname'];
// $vil_nationality=$_POST['villain_nationality'];
// $vil_race=$_POST['villain_race'];
// $vil_careen=$_POST['villain_careen'];
// $vil_idcard=$_POST['villain_idcard'];
// $vil_edu=$_POST['villain_edu'];
// $vil_sex=$_POST['villain_sex'];
// $vil_address=$_POST['villain_address'];

// $vil_body=$_POST['villain_body'];
// $vil_face=$_POST['villain_face'];
// $vil_hair=$_POST['villain_hair'];
// $vil_nose=$_POST['villain_nose'];
// $vil_mouth=$_POST['villain_mouth'];
// $vil_chin=$_POST['villain_chin'];
// $vil_ears=$_POST['villain_ears'];
// $vil_forehead=$_POST['villain_forehead'];
// $vil_eyes=$_POST['villain_eyes'];

// $vil_file=$_FILES['villain_file']['name'];


// if(!empty($_FILES['villain_file']['name'])){
// 	$target_dir = "../../image/";

// 	$name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
// 	$name = substr(str_shuffle($name),0,10);
// 	$typepic = explode("/",$_FILES["villain_file"]["type"]);
// 	$name .= ".".$typepic[1];

// 	$target_file = $target_dir . basename($name);
// 	$uploadOk = 1;
// 	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// 	// echo "name +>".$name." ";
// 	// Check if image file is a actual image or fake image

// 	    $check = getimagesize($_FILES["villain_file"]["tmp_name"]);
// 	    if($check !== false) {
// 	        // echo "File is an image - " . $check["mime"] . ".";
// 	        $uploadOk = 1;
// 	        copy($_FILES["villain_file"]["tmp_name"], "$target_file");
// 	        $imgname=$name;

// 	    } else {
// 	        // echo "File is not an image.";
// 	        $uploadOk = 0;
//             if($victim_sex==1){
//                 $imgname="icon_data_usermale.png";
//                 echo $imgname;
//             }else{
//                 $imgname="icon_data_userfemale.png";
//                 echo $imgname;
//             }
// 	    }

// }else{
//     if($vil_sex==1){
//         $imgname="icon_data_usermale";
        
//         echo $imgname;
//     }else{
//         $imgname="icon_data_userfemale";
//         echo $imgname;
//     }
// }




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

        if(!empty($_FILES['villain_file']['name'])){
            $target_dir = "../../image/";
        
            $name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
            $name = substr(str_shuffle($name),0,10);
            $typepic = explode("/",$vil_file_type);
            $name .= ".".$typepic[1];
        
            $target_file = $target_dir . basename($name);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // echo "name +>".$name." ";
            // Check if image file is a actual image or fake image
        
                $check = getimagesize($vil_file_tmp);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                    copy($vil_file_tmp, "$target_file");
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