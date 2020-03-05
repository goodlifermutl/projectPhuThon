
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
$result_data_arre = mysqli_query($con,"SELECT arrest_no, por_jor_wor,case_id, ar_re_time, ar_re_typecase, ar_re_no, ar_re_acc, ar_re_address_save, ar_re_save_date, ar_re_save_catch, ar_re_address_catch, ar_re_location_ob, ar_re_say, ar_re_atcs, ar_re_depose, ar_re_location_place, ar_re_date_place FROM arrest_record  WHERE por_jor_wor = '$_COOKIE[idcardvictimreport]'")or die("result_data_object sqli error".mysqli_error($con));
list($arrest_no, $por_jor_wor,$case_id_ar,$ar_re_time,$ar_re_typecase,$ar_re_no,$ar_re_acc,$ar_re_address_save,$ar_re_save_date,$ar_re_save_catch,$ar_re_address_catch,$ar_re_location_ob,$ar_re_say,$ar_re_atcs,$ar_re_depose,$ar_re_location_place,$ar_re_date_place)=mysqli_fetch_row($result_data_arre);

if($ar_re_typecase=='1'){
    $case_type="คดีเพ่ง";
}else if($ar_re_typecase=='2'){
    $case_type="คดีอาญา";
}


$ob_result=mysqli_query($con," SELECT ob_no,id_object,object_name FROM object_case WHERE ob_arya_no = '$ar_re_no'")or die("sql error!!!".mysqli_error($con));
list($ob_no,$id_object,$object_name)=mysqli_fetch_row($ob_result);

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
</style>
<div style='float: right;width:250px;'>ป.จ.ว.ข้อ : <u>".$por_jor_wor."</u>&nbsp;เวลา : <u>".$ar_re_time."</u></div>
<div style='clear: right;'></div>
<div style='float: right;width:250px;'>".$case_type." : <u>".$ar_re_no."</u></div>
<div style='clear: right;'></div>
<div style='float: right;width:250px;'>บัญชีของกลางลำดับที่ : <u>".$ar_re_acc."</u></div>
<div style='clear: right;'></div>
<div style='margin-left:300px;float: left;width:200px;'><h3>บันทึกการจับกุม</h3></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>สถานที่ทำการบันทึก : <u>".$ar_re_address_save."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>วัน/เดือน/ปี ที่บันทึก : <u>".DateThai($ar_re_save_date)."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>วัน/เดือน/ปี ที่จับกุม : <u>".DateThai($ar_re_save_catch)."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>สถานที่จับกุม ที่ : <u>".$ar_re_address_catch."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>นามเจ้าพนักงานจับกุม : 
";

$pol=1;
$police_result=mysqli_query($con," SELECT id_po_ca_ar, case_id, name_po_ar, rank_po_ar, police_arya_no FROM police_catch_arrest WHERE police_arya_no = '$ar_re_no'")or die("sql error!!!".mysqli_error($con));
$loop_po=mysqli_num_rows($police_result);
while(list($id_po_ca_ar,$case_id,$name_po_ar,$rank_po_ar,$police_arya_no)=mysqli_fetch_row($police_result)){
    $rank_re=mysqli_query($con,"SELECT rank_name FROM rank_police WHERE rank_id='$rank_po_ar'");
    list($namerank)=mysqli_fetch_row($rank_re);

$content.= "
<u>".$namerank.$name_po_ar."</u>
";
$pol++;
}
$content.="
</div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>ได้ร่วมกันจับกุมตัว : 
";

$vi=1;
$vil_result=mysqli_query($con," SELECT title_name,villain_name,villain_lastname,villain_idcard FROM villain WHERE villain_arya_no = '$ar_re_no'")or die("sql error!!!".mysqli_error($con));
$loop_vil=mysqli_num_rows($vil_result);
while(list($title_name,$villain_name,$villain_lastname,$villain_idcard)=mysqli_fetch_row($vil_result)){
$content.= "
<u>".$title_name.$villain_name.$villain_lastname."</u>
";
$vi++;
}
$content.="
</div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>พร้อมด้วยของกลางมี : <u>
";

$ob=1;
$ob_result=mysqli_query($con," SELECT ob_no,id_object,object_name FROM object_case WHERE ob_arya_no = '$ar_re_no'")or die("sql error!!!".mysqli_error($con));
$loop_ob=mysqli_num_rows($ob_result);
while(list($ob_no,$id_object,$object_name)=mysqli_fetch_row($ob_result)){
$content.= "
<u>รหัส ".$id_object." ชื่อ ".$object_name."</u>
";
$ob++;
}

$wit=1;
    $police_result=mysqli_query($con," SELECT * FROM witness_request_warr WHERE witness_case = '$case_id_ar'")or die("sql error!!!".mysqli_error($con));
    $loop_wir=mysqli_num_rows($police_result);
    while(list($no_witness,$winess_case,$rw_witness)=mysqli_fetch_row($police_result)){
        $wit++;
    }

$content.="
</div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>ตำแหน่งที่พบของกลาง : <u>".$ar_re_location_ob."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>โดยกล่าวหาว่า : <u>".$ar_re_say."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>พฤติการณ์กล่าวคือ : <u>".$ar_re_atcs."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>ขณะจับกุมผู้ต้องหาได้ทราบข้อกล่าวหาแล้วให้การ : <u>".$ar_re_depose."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>เหตุเกิดที่ : <u>".$ar_re_location_place."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>เมื่อวันที่ : <u>".DateThai($ar_re_date_place)."</u></div>
<div style='clear: left;'></div>
<br>";

$content2="
<div style='text-align:center'>(2)</div>
<div style='margin-left:110px;float: left;width:1000px;'>อนึ่งในการจับกุมครั้งนี้ เจ้าพนักงานตำรวจมิได้ทำให้ทรัพย์สินของผู้ใดเสียหาย สูญหาย </div>
<div style='clear: left;'></div>
<div style='float: left;width:1000px;'>หรือเสื่อมค่าแต่ประการใด และมิได้ทำให้ผู้ใดได้รับอันตรายแก่กาย หรือจิตใจแต่อย่างใด</div>
<div style='clear: left;'></div>
<div style='margin-left:110px;float: left;width:1000px;'>ได้อ่านบันทึกนี้ให้ผู้ต้องหานี้ฟังแล้ว รับรองว่าถูกต้อง จึงให้ลงลายมือชื่อไว้เป็นหลักฐาน</div>
<div style='clear: left;'></div>
";
for($p=1;$p<=$loop_po;$p++){
    $content2.="
    <div style='margin-left:150px;float: left;width:1000px;'>(ลงชื่อ)............................................................ผู้ต้องหา</div>
    <div style='clear: left;'></div>
    ";
}
for($v=1;$v<=$loop_vil;$v++){
    $content2.="
    <div style='margin-left:150px;float: left;width:1000px;'>(ลงชื่อ)............................................................ผู้จับกุม</div>
    <div style='margin-left:150px;float: left;width:1000px;'>ตำแหน่ง............................................................</div>
    <div style='clear: left;'></div>
    ";
}
for($wi=1;$wi<=$loop_wir;$wi++){
    $content2.="
    <div style='margin-left:150px;float: left;width:1000px;'>(ลงชื่อ)............................................................พยาน</div>
    <div style='clear: left;'></div>
    ";
}


$mpdf->WriteHTML($content);
$mpdf->AddPage();
$mpdf->WriteHTML($content2);
$mpdf->Output();
?>
