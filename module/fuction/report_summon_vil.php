
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
$result_data_sv = mysqli_query($con,"SELECT no_sv, sv_suspect, sv_warrant, sv_date, sv_accused, sv_villain, sv_refer, sv_address, sv_headman, sv_village, sv_hey, sv_text, sv_goto, sv_staff, sv_datetime, sv_staff2, sv_position, sv_datetime2, sv_policename, sv_set, sv_datetime3, sv_recipient, sv_sender, sv_policename4, sv_position2, sv_policename5, sv_address2, sv_status_sent, sv_sign, sv_position3 FROM summon_villain  WHERE no_sv = '$_COOKIE[idcardvictimreport]'".mysqli_error($con));
list($no_sv,$sv_suspect,$sv_warrant,$sv_date,$sv_accused,$sv_villain,$sv_refer,$sv_address,$sv_headman,$sv_village,$sv_hey,$sv_text,$sv_goto,$sv_staff,$sv_datetime,$sv_staff2,$sv_position,$sv_datetime2,$sv_policename,$sv_set,$sv_datetime3,$sv_recipient,$sv_sender,$sv_policename4,$sv_position2,$sv_policename5,$sv_address2,$sv_status_sent,$sv_sign,$sv_position3)=mysqli_fetch_row($result_data_sv);

if($ir_casetype=='1'){
    $case_type="คดีเพ่ง";
}else if($ir_casetype=='2'){
    $case_type="คดีอาญา";
}


$img1;
$img2;
if($sv_status_sent=='1'){
    $img1="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
    $img2="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}else if($sv_status_sent=='2'){
    $img2="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
    $img1="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

$result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE villain_idcard='$sv_villain'")or die("select villain error".mysqli_error($con));
list($vil_idcard,$title_vil,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil);

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
</style>
<div style='text-align:right;'><b>หมายเรียกผู้ต้องหา</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../image/icon_report.jpg' width='110 'height='110'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../image/warring_report.jpg' height='100'></div>
<div style='clear: left;'></div>
<div style='float: left;width:150px;'>ครั้งที่ ".$sv_suspect."</div>
<div style='float:left;padding-left:80px;'><b>สำนักงานตำรวจแห่งชาติ</b></div>
<div style='clear: left;'></div>
<div style='float:right;width:400px;'>สถานที่ออกหมาย ".$sv_warrant."</div>
<div style='clear: right;'></div>
<div style='float:right;width:400px;'>ออกหมายวันที่ ".DateThai_day($sv_date)." เดือน ".DateThai_month($sv_date)." พ.ศ. ".DateThai_year($sv_date)."</div>
<div style='clear: right;'></div>
<div style='text-align:center;'><b>ความอาญา</b></div>
<div style='float: left;width:150px;padding-left:100px;'>คดีระหว่าง &nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div style='float: left;width:300px;'>".$sv_accused."</div>
<div style='float: left;'>ผู้กล่าวหา</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:251px;width:300px;'>".$title." ".$vil_name." ".$vil_lastname."</div>
<div style='float: left;'>ผู้ต้องหา</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:50px'>อาศัยอำนาจตามประมวลกฎหมายวิธีพิจารณาความอาญา พุทธศักราช ๒๔๗๗ มาตรา ๕๒</div>
<div style='clear: left;'></div>
<div style='float: right;width:380px;'>หมายมายัง ".$sv_refer."</div>
<div style='clear: right;'></div>
<div style='float: left;'>ที่อยู่ : <u>".$sv_address."</u></div>
<div style='clear: left;'></div>
<div style='float: left;width:250px;'>ผู้ใหญ่บ้าน : <u>".$sv_headman."</u></div>
<div style='float: left;'> กำนัน : <u>".$sv_village."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>โดยเหตุที่ท่านต้องหาว่า : <u>".$sv_hey."</u></div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:80px;'>ฉะนั้นให้ : <u>".$sv_text."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>ไป ณ ที่ : <u>".$sv_goto."</u> พบ : <u>".$sv_staff."</u> พนักงานสอบสวนเจ้าของคดี</div>
<div style='clear: left;'></div>
<div style='float:left;'>ออกหมายวันที่ : <u>".DateThai_day($sv_datetime)." เดือน ".DateThai_month($sv_datetime)." พ.ศ. ".DateThai_year($sv_datetime)."</u> เวลา : <u>".DateThaiTime_test($sv_datetime)."</u> นาฬิกา</div>
<div style='clear: left;'></div>
<div style='text-align:right;'>(ลงชื่อ) ................................................... ผู้ออกหมาย</div>
<div style='text-align:right;'>ตำแหน่ง .................................................................... </div>
<hr>
<div style='text-align:center;'><b>ใบรับหมายตำรวจ</b></div>  
<div style='float:right;width:400px;'>วันที่ ".DateThai_day($sv_datetime2)." เดือน ".DateThai_month($sv_datetime2)." พ.ศ. ".DateThai_year($sv_datetime2)." เวลา ".DateThaiTime_test($sv_datetime2)." นาฬิกา</div>
<div style='clear: right;'></div>
<div style='float:left;'>ข้าพเจ้า : <u>".$sv_policename."</u> ได้รับหมายเรียกของพนักงานตำรวจ</div>
<div style='clear: left;'></div>
<div style='float:right;width:400px;'>ซึ่งกำหนดให้ข้าพเจ้าไปยัง : <u>".$sv_set."</u></div>
<div style='clear: right;'></div>
<div style='float:left;'>วันที่ ".DateThai_day($sv_datetime3)." เดือน ".DateThai_month($sv_datetime3)." พ.ศ. ".DateThai_year($sv_datetime3)." เวลา ".DateThaiTime_test($sv_datetime3)." นาฬิกาไว้แล้ว</div>
<div style='clear: left;'></div>
<div style='text-align:right;'>(ลงชื่อ) ................................................... ผู้รับหมาย</div>
<div style='text-align:right;'>(ลงชื่อ) ................................................... ผู้ส่งหมาย</div>
<div style='float:left;'>ค. ๒๑ – ต. ๕๕๒</div>
<div style='clear: left;'></div>
<div style='text-align:center;'>* <u>หมายเหตุ</u> * ส่วนนี้ให้ผู้นำส่งหมาย นำกลับมาส่งคืนแก่พนักงานสอบสวนผู้ออกหมาย</div>
<div style='clear: left;'></div>

";

$content2 = "
<p></p>
<div style='text-align:center;'><h2> บันทึกหลังหมาย </h2></div>
<div style='float:left;padding-left:80px;'>ข้าพเจ้า(ยศ ชื่อผู้ส่งหมาย) : <u>".$sv_policename4."</u> ตำแหน่ง : <u>".$sv_position2."</u></div>
<div style='clear: left;'></div>
<div style='float:left;'>ได้มาดำเนินการส่งหมายเรียกให้กับ : <u>".$sv_policename5."</u> ที่ : <u>".$sv_address2."</u></div>
<div style='clear: left;'></div>
<div style='float:left;'>ปรากฎผลส่งหมาย ดังนี้ : <u>".$img1."</u> ส่งได้และผู้ต้องหารับทราบกำหนดนัดแล้ว : <u>".$img2."</u> ส่งไม่ได้ เนื่องจาก .......................................................................................................................................................................</div>
<div style='clear: left;'></div>
<div style='text-align:center;'>(ลงชื่อ)......................................................... ผู้ส่งหมาย</div>
<div style='text-align:center;'>(....................................)</div>
<div style='text-align:center;'>ตำแหน่ง .....................................................</div>

";

$mpdf->WriteHTML($content);
$mpdf->AddPage();
$mpdf->WriteHTML($content2);
$mpdf->Output();

?>
