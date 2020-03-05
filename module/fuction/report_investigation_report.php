
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
$result_data_inr = mysqli_query($con,"SELECT no_ir, ir_casetype, ir_order, ir_policestation, ir_date_station, ir_offer, vic_ir, vil_ir, ir_charge, ir_date, ir_district, ir_price, ir_wound, ir_complaint, ir_control, ir_fact FROM investigation_report  WHERE ir_order = '$_COOKIE[idcardvictimreport]'".mysqli_error($con));
list($no_ir,$ir_casetype,$ir_order,$ir_policestation, $ir_date_station,$ir_offer,$vic_ir,$vil_ir,$ir_charge,$ir_date,$ir_district,$ir_price,$ir_wound,$ir_complaint,$ir_control,$ir_fact)=mysqli_fetch_row($result_data_inr);

if($ir_casetype=='1'){
    $case_type="คดีเพ่ง";
}else if($ir_casetype=='2'){
    $case_type="คดีอาญา";
}

$result_vic = mysqli_query($con,"SELECT victim_idcard,title_name,victim_name,victim_lastname FROM victim WHERE victim_idcard='$vic_ir'")or die("select villain error".mysqli_error($con));
list($vil_idcard,$title_vic,$vic_name,$vic_lastname)=mysqli_fetch_row($result_vic);

$result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE villain_idcard='$vil_ir'")or die("select villain error".mysqli_error($con));
list($vil_idcard,$title_vil,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil);

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
b{
    font-size:18pt;
}
</style>
<div style='padding-left: 100px;'>
<div style='border-left:solid 1px black;padding-left:10px;'>
<div style='text-align:center;color:red;'>สั่งฟ้อง-ผู้ต้องหาฝากขัง</div>
<div style='text-align:center'><img src='../../image/icon_report.jpg'></div>
<div style='text-align:center'><b>สำนักงานตำรวจแห่งชาติ</b></div>
<div style='text-align:center'><u>รายงานการสอบสวน</u></div>
<div style='float: left;width:70px;'>".$case_type."</div>
<div style='float: left;width:250px;'>ที่ ".$ir_order."</div>
<div style='clear: left;'></div>
<div style='float: left;width:250px;'>สถานีตำรวจ ".$ir_policestation."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:70px;'>วันที่ ".DateThai_day($ir_date_station)." เดือน ".DateThai_month($ir_date_station)." พ.ศ. ".DateThai_year($ir_date_station)."</div>
<div style='clear: left;'></div>
<br>
<div style='float: left;width:250px;'>เสนอ ".$ir_offer."</div>
<div style='clear: left;'></div>
<div style='float: left;width:200px;'>คดีระหว่าง &nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div style='float: left;width:300px;'>".$title_vic." ".$vic_name." ".$vic_lastname."</div>
<div style='float: right;'>ผู้กล่าวหา</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left: 200px;width:300px;'>".$title_vil." ".$vil_name." ".$vil_lastname."</div>
<div style='float: right;'>ผู้ต้องหา</div>
<div style='clear: left;'></div>
<div style='float: left;'>ข้อหา : <u>".$ir_charge."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>วันที่เกิดเหตุ วันที่ : <u>".DateThai_day($ir_date)." เดือน ".DateThai_month($ir_date)." พ.ศ. ".DateThai_year($ir_date)."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>ตำบลที่เกิดเหตุ : <u>".$ir_district."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>ราคาทรัพย์ที่ถูกประทุษร้าย : <u>".$ir_price."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>บาดแผล : <u>".$ir_wound."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>วันเวลาที่ร้องทุกข์หรือกล่าวโทษ วันที่ : <u>".DateThai_day($ir_complaint)." เดือน ".DateThai_month($ir_complaint)." พ.ศ. ".DateThai_year($ir_complaint)."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>วันเวลาที่ผู้ต้องหาถูกควบคุมหรือขังและปล่อยชั่วคราว วันที่ : <u>".DateThai_day($ir_control)." เดือน ".DateThai_month($ir_control)." พ.ศ. ".DateThai_year($ir_control)."</u></div>
<div style='clear: left;'></div>
</div>
</div>
";

$content2 = "
<p></p>
<div style='text-align:center;'><h2>ข้อเท็จจริงและความคิดเห็น</h2></div>
<div style='float:left;'>(ข้อเท็จจริงนั้นให้ผู้กล่าวถึงคำผู้กล่าว ผู้ต้องหา หลักฐานพยานทุกปาก ส่วนความเห็นนั้นให้อ้างเหตุผล บทกฎหมาย และมาตราประกอบด้วย)</div>
<hr>
<div style='clear: left;'></div>
";

$mpdf->WriteHTML($content);
$mpdf->AddPage();
$mpdf->WriteHTML($content2);
$mpdf->Output();

?>
