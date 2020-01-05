<?php
session_start();
include ("../fuction/connect_db.php");
$con = connect_db();

$won1=0;
$won2=0;
$won3=0;
$vil=1;
$ox=1;
$po=1;

$ar_case=$_SESSION['case_id'];
$porjorwor=$_POST['ar_porjorwor'];
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
$coutcatch=$_POST['oxrecord'];
$coutcatch_vill=$_POST['crecord'];
$countcatch_pol=$_POST['cprecord'];

echo "รหัสคดี-->".$ar_case,"ปจว-->".$porjorwor,$time,$casetype,$no_ar,$accout_no,$save_address,$date_save,$date_catch,$address_catch,
$location_ob,$say_ar,$atcs_ar,$depors_ar,$place_ar,$date_ar,$coutcatch;
echo "จำนวนของกลาง------->".$coutcatch,"จำนวนผู้ต้องหา------>".$coutcatch_vill;

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
    $file_type=$_FILES['object_file']['type'];
    $file_tmp=$_FILES['object_file']['tmp_name'];
     
    
}

// for($g=1;$g<=$coutcatch;$g++){
//     echo $ob_id[$won],
//     $ob_name[$won],
//     $ob_size[$won],
//     $ob_look[$won],
//     $ob_status[$won],
//     $object_file[$won],
//     $file_type[$won] ;
// }

if(empty($_POST['villain_titlename'])||empty($_POST['villain_name'])||empty($_POST['villain_lastname'])
||empty($_POST['villain_nationality'])||empty($_POST['villain_race'])||empty($_POST['villain_careen'])
||empty($_POST['villain_idcard'])||empty($_POST['villain_edu'])||empty($_POST['villain_sex'])||empty($_POST['villain_address'])
||empty($_POST['villain_body'])||empty($_POST['villain_face'])||empty($_POST['villain_hair'])||empty($_POST['villain_nose'])
||empty($_POST['villain_mouth'])||empty($_POST['villain_chin'])||empty($_POST['villain_ears'])||empty($_POST['villain_forehead'])
||empty($_POST['villain_eyes'])||empty($_FILES['villain_file']['name'])||empty($_FILES["villain_file"]["type"])||empty($_FILES["villain_file"]["tmp_name"])){

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
    $vil_file_type=$_FILES['villain_file']['type'];
    $vil_file_tmp=$_FILES['villain_file']['tmp_name'];
}

if(empty($_POST['name_police'])||empty($_POST['title_rank'])){
     $police_name="";
     $police_rank="";
    }else{
    $police_name=$_POST['name_police'];
    $police_rank=$_POST['title_rank'];
}

if(!empty($coutcatch_vill)){
    while($vil<=$coutcatch_vill){


        if(!empty($_FILES['villain_file']['name'])){
            $target_dir1 = "../../image/";
        
            $name1 = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
            $name1 = substr(str_shuffle($name1),0,10);
            $typepic1 = explode("/",$vil_file_type[$won1]);
            $name1 .= ".".$typepic1[1];
        
            $target_file = $target_dir1 . basename($name1);
            $uploadOk1 = 1;
            $imageFileType1 = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // echo "name +>".$name1." ";
            // Check1 if image file is a actual image or fake image
        
                $check1 = getimagesize($vil_file_tmp[$won1]);
                if($check1 !== false) {
                    // echo "File is an image - " . $check1["mime"] . ".";
                    $uploadOk1 = 1;
                    copy($vil_file_tmp[$won1], "$target_file");
                    $imgname1=$name1;
        
                } else {
                    // echo "File is not an image.";
                    $uploadOk1 = 0;
                    if($vil_sex[$won1]==1){
                        $imgname1="icon_data_usermale.png";
                        echo $imgname1;
                    }else{
                        $imgname1="icon_data_userfemale.png";
                        echo $imgname1;
                    }
                }
        
        }else{
            if($vil_sex[$won1]==1){
                $imgname1="icon_data_usermale";
                
                echo $imgname1;
            }else{
                $imgname1="icon_data_userfemale";
                echo $imgname1;
            }
        }

        // echo "ชื่อไฟล์รูป>>>".$imgname;
        $sql_insert_villain="INSERT INTO villain VALUES('$ar_case','$vil_title[$won1]','$vil_name[$won1]','$vil_lastname[$won1]','$vil_sex[$won1]','$vil_idcard[$won1]','$vil_address[$won1]','$vil_edu[$won1]','$imgname1','$vil_race[$won1]','$vil_nationality[$won1]','$vil_careen[$won1]','$accout_no')";
        $sql_insert_villain_iden="INSERT INTO villain_identities VALUES('$vil_idcard[$won1]','$vil_face[$won1]','$vil_hair[$won1]','$vil_ears[$won1]','$vil_forehead[$won1]','$vil_eyes[$won1]','$vil_nose[$won1]','$vil_mouth[$won1]','$vil_chin[$won1]','$vil_body[$won1]')";
        echo "sqlผู้ต้องหา++++++++++>".$sql_insert_villain,$sql_insert_villain_iden;
        mysqli_query($con,$sql_insert_villain)or die("sql insert villain error!!!!!!!".mysqli_error($con));
        mysqli_query($con,$sql_insert_villain_iden)or die("sql insert villain_iden ERROR!!!!".mysqli_error($con));
         $vil++;
         $won1++;
    }
}

if(!empty($coutcatch)){
        while($ox<=$coutcatch){


            if(!empty($_FILES['object_file']['name'])){
                $target_dir = "../../image/";
            
                $name = date("yyyymmdd")."ASDFGHJKLZXCVBNM";
                $name = substr(str_shuffle($name),0,10);
                $typepic = explode("/",$file_type[$won2]);
                $name .= ".".$typepic[1];
            
                $target_file = $target_dir . basename($name);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // echo "name +>".$name." ";
                // Check if image file is a actual image or fake image
            
                    $check = getimagesize($file_tmp[$won2]);
                    if($check !== false) {
                        // echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                        copy($file_tmp[$won2], "$target_file");
                        // $imgname=array("$name");
                        $imgname=$name;
                        
            
                    }
                }
                
    
            $sql_insert_object="INSERT INTO object_case VALUES('$ob_id[$won2]','$ar_case','$ob_status[$won2]','$ob_name[$won2]','$ob_size[$won2]','$ob_look[$won2]','$imgname','$accout_no')";
            echo "ของกลาง--->".$sql_insert_object;

            mysqli_query($con,$sql_insert_object)or die("ERROR insert OB +++!!!".mysqli_error($con));
            $ox++;
            $won2++;
        }
    }
    
    if(!empty($countcatch_pol)){
        while($po<=$countcatch_pol){

            $sql_in_po="INSERT INTO police_catch_arrest VALUES('','$ar_case','$police_name[$won3]','$police_rank[$won3]')";
            mysqli_query($con,$sql_in_po)or die("ERROR insert po +++!!!".mysqli_error($con));
        $po++;
        $won3++;
        }
    } 

    $sql_insert="INSERT INTO arrest_record VALUES('$porjorwor','$ar_case','$time','$casetype','$no_ar','$accout_no','$save_address','$date_save','$date_catch','$address_catch','$location_ob',
    '$say_ar','$atcs_ar','$depors_ar','$place_ar','$date_ar')";
    mysqli_query($con,$sql_insert)or die("ERROR insert ARRESTrecord++++++++++++!!!!!".mysqli_error($con));









?>