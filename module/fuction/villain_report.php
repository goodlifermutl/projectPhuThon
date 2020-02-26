
<?php
include ("connect_db.php");
$con = connect_db();
include_once '../../report/vendor/autoload.php';

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp',
    'fontdata' => $fontData + [
            'sarabun' => [ // ส่วนที่ต้องเป็น lower case ครับ
                'R' => 'THSarabunNew.ttf',
                'I' => 'THSarabunNewItalic.ttf',
                'B' =>  'THSarabunNewBold.ttf',
                'BI' => "THSarabunNewBoldItalic.ttf",
            ]
        ],
]);

echo $_COOKIE['idcardvictimreport'];
$result_villain = mysqli_query($con,"SELECT case_id,vl.title_name,vl.villain_name,vl.villain_lastname,vl.villain_sex,vl.villain_idcard,vl.villain_address,ed.edu_name,vl.villain_image,vl.villain_race,vl.villain_nationality,vl.villain_career FROM villain as vl INNER JOIN education as ed ON vl.villain_education = ed.edu_id WHERE villain_idcard = '$_COOKIE[idcardvictimreport]'")or die("resualt_villain sqli error".mysqli_error($con));
list($case_id,$title_name,$villain_name,$villain_lastname,$villain_sex,$villain_idcard,$villain_address,$villain_education,$villain_image,$villain_race,$villain_nationality,$villain_career)=mysqli_fetch_row($result_villain);

$iden_vill=mysqli_query($con,"SELECT * FROM villain_identities WHERE villain_idcard='$_COOKIE[idcardvictimreport]'")or die("select iden error!!!!!".mysqli_error($con));
list($idcard_iden,$iden_face,$iden_hair,$iden_ears,$iden_forehead,$iden_eyes,$iden_nose,$iden_mouth,$iden_chin,$iden_body)=mysqli_fetch_row($iden_vill);

if ($villain_sex==1){
    $sex="ชาย";
}else{
    $sex="หญิง";
}

if($iden_body==1){
    $body='สูง';
}else if($iden_body==2){
    $body='สันทัด';
}else if($iden_body==3){
    $body='เตี้ย';
}

if($iden_face==1){
    $face='กลม';
}else if($iden_face==2){
    $face='รูปไข่';
}else if($iden_face==3){
    $face='สี่เหลี่ยม';
}else if($iden_face==4){
    $face='สี่เหลี่ยมยาว';
}else if($iden_face==5){
    $face='สามเหลี่ยม';
}else if($iden_face==6){
    $face='สามเหลี่ยมยาว';
}else if($iden_face==7){
    $face='แหลมหลิม';
}

if($iden_hair==1){
    $hair='ทุ่งหมาหลง';
}else if($iden_hair==2){
    $hair='ดงช้างข้าม';
}else if($iden_hair==3){
    $hair='ง่ามเทโพ';
}else if($iden_hair==4){
    $hair='ชะโด้ตีแปลง';
}else if($iden_hair==5){
    $hair='แร้งกระพือปีก';
}else if($iden_hair==6){
    $hair='ฉีกหางฟาด';
}else if($iden_hair==7){
    $hair='ราชคลึกเครา';
}else if($iden_hair==8){
    $hair='รองทรง';
}

if($iden_nose==1){
    $nose='จมูกแคบ';
}else if($iden_nose==2){
    $nose='จมูกกว้าง';
}else if($iden_nose==3){
    $nose='จมูกชมพู่';
}else if($iden_nose==4){
    $nose='สันจมูกสั้น';
}else if($iden_nose==5){
    $nose='สันจมูกโค้งเหลี่ยม';
}else if($iden_nose==6){
    $nose='สันจมูกโค้งกลม';
}else if($iden_nose==7){
    $nose='สันจมูกงอน';
}else if($iden_nose==8){
    $nose='ฐานจมูกงุ้ม';
}else if($iden_nose==9){
    $nose='ฐานจมูกราบ';
}else if($iden_nose==10){
    $nose='ฐานจมูกเชิด';
}

if($iden_mouth==1){
    $mouth='ปากกระจับ';
}else if($iden_mouth==2){
    $mouth='ปากหนา';
}else if($iden_mouth==3){
    $mouth='ปากล่างห้อย';
}else if($iden_mouth==4){
    $mouth='ปากเชิด';
}else if($iden_mouth==5){
    $mouth='ปากกว้าง';
}else if($iden_mouth==6){
    $mouth='ปากแคบ';
}else if($iden_mouth==7){
    $mouth='ปากเสมอ';
}else if($iden_mouth==8){
    $mouth='ปากล่างยื่น';
}else if($iden_mouth==9){
    $mouth='ปากบนยื่น';
}

if($iden_chin==1){
    $chin='คางตรง';
}else if($iden_chin==2){
    $chin='คางราบ';
}else if($iden_chin==3){
    $chin='คางยื่น';
}else if($iden_chin==4){
    $chin='คางป่าน';
}else if($iden_chin==5){
    $chin='คางสั้น';
}else if($iden_chin==6){
    $chin='คางยาน';
}

if($iden_ears==1){
    $ears='หูสามเหลี่ยม';
}else if($iden_ears==2){
    $ears='หูสี่เหลี่ยม';
}else if($iden_ears==3){
    $ears='หูกลม';
}else if($iden_ears==4){
    $ears='หูกระหล่ำปลี';
}else if($iden_ears==5){
    $ears='หูกาง';
}else if($iden_ears==6){
    $ears='หูลีบ';
}else if($iden_ears==7){
    $ears='ติ่งย้อย';
}else if($iden_ears==8){
    $ears='ติ่งราบ';
}

if($iden_forehead==1){
    $forehead='หน้าผากโหนง';
}else if($iden_forehead==2){
    $forehead='หน้าผากลาด';
}else if($iden_forehead==3){
    $forehead='หน้าผากแคบ';
}else if($iden_forehead==4){
    $forehead='หน้าผากสั้น';
}else if($iden_forehead==5){
    $forehead='หน้าผากสูง';
}else if($iden_forehead==6){
    $forehead='หน้าผากกว้าง';
}

if($iden_eyes==1){
    $eyes='ตาสองชั้น';
}else if($iden_eyes==2){
    $eyes='ตาชั้นเดียว';
}else if($iden_eyes==3){
    $eyes='ตากลม';
}else if($iden_eyes==4){
    $eyes='ตาพองโต';
}else if($iden_eyes==5){
    $eyes='ตาลึก';
}else if($iden_eyes==6){
    $eyes='ตาถั่ว';
}else if($iden_eyes==7){
    $eyes='ตาเข';
}else if($iden_eyes==8){
    $eyes='ตาเหล่';
}else if($iden_eyes==9){
    $eyes='ตาเอก';
}

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
</style>
<div style='display: flex;text-align:centter;position:relative;margin-bottom:20px;'>
<div style='text-align:center'><img src='../../image/$villain_image' height='450px' width='400px'></div>
<p></p>
<p></p>
<div>รหัสคดี : ".$case_id." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ : ".$villain_name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; นามสกุล : ".$villain_lastname."</div>
<div>เลขบัตรประชาชน : ".$villain_idcard." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เชื้อชาติ : ".$villain_race."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สัญชาติ : ".$villain_nationality."</div>
<div>อาชีพ : ".$villain_career."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระดับการศึกษา : ".$villain_education."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพศ : ".$sex."</div>
<div>ที่อยู่ : ".$villain_address."</div><p></p>
<div><b>รูปพรรณ</b></div><p></p>
<div style='margin-right:20px;float: left;width:200px;'>รูปร่าง : ".$body."</div>
<div style='margin-right:20px;float: left;width:200px;'>ใบหน้า : ".$face."</div>
<div style='margin-right:20px;float: left;width:200px;'>ทรงผม : ".$hair."</div>
<div style='clear: left;'></div>
<div style='margin-right:20px;float: left;width:200px;'>จมูก : ".$nose."</div>
<div style='margin-right:20px;float: left;width:200px;'>ปาก : ".$mouth."</div>
<div style='margin-right:20px;float: left;width:200px;'>คาง : ".$chin."</div>
<div style='clear: left;'></div>
<div style='margin-right:20px;float: left;width:200px;'>หู : ".$ears."</div>
<div style='margin-right:20px;float: left;width:200px;'>หน้าผาก : ".$forehead."</div>
<div style='margin-right:20px;float: left;width:200px;'>ตา : ".$eyes."</div>
";
$mpdf->WriteHTML($content);

$mpdf->Output();
?>
