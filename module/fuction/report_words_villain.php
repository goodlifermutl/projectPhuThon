
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
$result_data_wv = mysqli_query($con,"SELECT wv_no, wv_testimony, wv_are, wv_phone, wv_card, wv_output1, wv_output2, wv_last, wv_police, wv_station, wv_date, wv_accused, wv_suspect, wv_before, wv_investigate, wv_name, wv_age, wv_race, wv_nationality, wv_religion, wv_careen, wv_address, wv_headman, wv_villageheadmane, wv_farthername, wv_mothername, wv_birthday, wv_official FROM words_villain  WHERE wv_no = '$_COOKIE[idcardvictimreport]'".mysqli_error($con));
list($wv_no,$wv_testimony,$wv_are,$wv_phone,$wv_card,$wv_output1,$wv_output2,$wv_last,$wv_police,$wv_station,$wv_date,$wv_accused,$wv_suspect,$wv_before,$wv_investigate,$wv_name,$wv_age,$wv_race,$wv_nationality,$wv_religion,$wv_careen,$wv_address,$wv_headman,$wv_villageheadmane,$wv_farthername,$wv_mothername,$wv_birthday,$wv_official)=mysqli_fetch_row($result_data_wv);

if($ir_casetype=='1'){
    $case_type="คดีเพ่ง";
}else if($ir_casetype=='2'){
    $case_type="คดีอาญา";
}


// $img1;
// $img2;
// if($sv_status_sent=='1'){
//     $img1="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
//     $img2="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
// }else if($sv_status_sent=='2'){
//     $img2="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
//     $img1="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
// }

$result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE villain_idcard='$wv_testimony'")or die("select villain error".mysqli_error($con));
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
<div>
<div style='text-align:center;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../../image/icon_report.jpg' width='100 'height='100'></div>
<div style='text-align:center;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>สำนักงานตำรวจแห่งชาติ</b></div>
<div style='text-align:center;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>บันทึกคำให้การผู้ต้องหา</u></div>
</div>
<div style='float:left;width:190px;'>
<div style='float: left;width:190px;'>คำให้การของ ".$title_vil." ".$vil_name." ".$vil_lastname." เป็น ".$wv_are."</div>
<div style='clear: left;'></div>
<br>
<div style='text-align:center;'>โทรศัพท์ติดต่อ</div>
<div style='float: left;width:190px;'>".$wv_phone."</div>
<div style='clear: left;'></div>
<div style='text-align:center;'>บัตรประจำตัวประชาชน</div>
<div style='float: left;width:190px;'>".$wv_card."</div>
<div style='clear: left;'></div>
<div style='float: left;width:190px;'>ออก ณ ".$wv_output1."</div>
<div style='clear: left;'></div>
<div style='float: left;width:190px;'>ออกเมื่อ ".DateThai($wv_output2)."</div>
<div style='clear: left;'></div>
<p></p>
<div style='float: left;width:190px;'>หมดอายุ ".DateThai($wv_last)."</div>
<div style='clear: left;'></div>
<div style='float: left;width:190px;'>".$wv_police." บันทึก</div>
<div style='clear: left;'></div>
</div>
<div style='border-left:solid 1px black;float:left;'>
<div style='float: left;padding-left:10px;'>สถานีตำรวจ ".$wv_station."</div>
<div style='clear: left;'></div>
<div style='text-align:center'>วันที่ ".DateThai_day($wv_date)." เดือน ".DateThai_month($wv_date)." พ.ศ. ".DateThai_year($wv_date)."</div>
<div style='clear: left;'></div>
<div style='float: left;width:150px;padding-left:10px;'>คดีระหว่าง &nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div style='float: left;width:250;'>".$wv_accused."</div>
<div style='float: left;'> ผู้กล่าวหา</div>
<div style='clear: left;'></div>
<div style='float: left;width:250;padding-left:160px;'>".$wv_suspect."</div>
<div style='float: left;'> ผู้ต้องหา</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>ต่อหน้า ".$wv_before."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>สอบสวนที่ ".$wv_investigate."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>ชื่อ ".$wv_name." อายุ ".$wv_age." ปี</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>เชื้อชาติ ".$wv_race." สัญชาติ ".$wv_nationality." ศาสนา ".$wv_religion."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>อาชีพ ".$wv_careen."</div>
<div style='clear: left;'></div>
<br>
<div style='float: left;padding-left:10px;'>ตั้งบ้านเรือนอยู่ที่ ".$wv_address."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>ชื่อผู้ใหญ่บ้าน ".$wv_headman." ชื่อกำนัน ".$wv_villageheadmane."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>ชื่อบิดา ".$wv_farthername." ชื่อมารดา ".$wv_mothername."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>เกิดที่ ".$wv_birthday."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>เจ้าพนักงานได้แจ้งแก่ข้าพเจ้าว่า ข้าพเจ้าต้องหาว่า ".$wv_official."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:10px;'>และได้แจ้งให้ข้าพเจ้าทราบด้วยว่า 	<u>ถ้อยคำที่ ข้าฯ ให้การในชั้นสอบสวนนี้อาจใช้เป็น</u>
พยานหลักฐานในการพิจารณาคดีของศาลได้  และได้แจ้งสิทธิ์ของผู้ต้องหาให้ข้าฯทราบดังนี้
</div>
<div style='clear: left;'></div>
</div>
<div style='clear: left;'></div>
";

$mpdf->WriteHTML($content);
$mpdf->Output();

?>
