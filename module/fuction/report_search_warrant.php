
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
$result_data_sw = mysqli_query($con,"SELECT sw_no, sw_searchwarrant, sw_court, sw_date, sw_petitioner, sw_send, sw_adderss, sw_map,sw_seize, sw_check1, sw_check2, sw_check3, sw_check4, sw_find, sw_law, sw_warrant, sw_warrant2, sw_date2, sw_issued, sw_sw_issued2, sw_position, sw_location2, sw_time, sw_check5, sw_time_to, sw_check6, sw_search, sw_save, sw_judge FROM search_warrant  WHERE sw_no = '$_COOKIE[idcardvictimreport]'".mysqli_error($con));
list($sw_no,$sw_searchwarrant,$sw_court,$sw_date,$sw_petitioner,$sw_send,$sw_adderss,$sw_map,$sw_seize,$sw_check1,$sw_check2,$sw_check3,$sw_check4,$sw_find,$sw_law,$sw_warrant,$sw_warrant2,$sw_date2,$sw_issued,$sw_sw_issued2,$sw_position,$sw_location2,$sw_time,$sw_check5,$sw_time_to,$sw_check6,$sw_search,$sw_save,$sw_judge)=mysqli_fetch_row($result_data_sw);

if($ir_casetype=='1'){
    $case_type="คดีเพ่ง";
}else if($ir_casetype=='2'){
    $case_type="คดีอาญา";
}

if($sw_map=='true'){
    $imgmap="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $imgmap="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_check1=='true'){
    $img1="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img1="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_check2=='true'){
    $img2="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img2="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_check3=='true'){
    $img3="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img3="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_check4=='true'){
    $img4="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img4="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_law=='true'){
    $img5="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img5="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_warrant=='true'){
    $img6="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img6="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_check5=='true'){
    $img7="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img7="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($sw_check6=='true'){
    $img8="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else{
    $img8="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}


$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
.big{
    font-size: 15pt;
}
.botton{
    font-size: 10pt;
}
</style>
<div style='float:left;width:70px;'>
<div><b>หมายค้น</b></div>
</div>
<div style='float:left;'>
<div style='text-align:left;padding-left:220px;'><img src='../../image/icon_report.jpg' width='113 'height='113'></div>
<div style='text-align:right;'>ที่ &nbsp;&nbsp;&nbsp;".$sw_searchwarrant."</div>
</div>
<div style='clear: left;'></div>
<div style='text-align:center;'><b class='big'>ในพระปรมาภิไธยพระมหากษัตริย์</b></div>
<div style='text-align:right;padding-right:150px;'>ศาล ".$sw_court."</div>
<div style='text-align:right;padding-right:100px;'>วันที่ ".DateThai_day($sw_date)." เดือน ".DateThai_month($sw_date)." พ.ศ. ".DateThai_year($sw_date)."</div>
<div style='text-align:center;'><b>ความอาญา</b></div>
<div style='float:left;width:580px;text-align:center;'>".$sw_petitioner."</div>
<div style='float:right;width:50px;'>ร้อง</div>
<div style='clear: right;'></div>
<div style='text-align:left;padding-left:80px;'>หมายถึง : <u>".$sw_send."</u></div>
<div style='text-align:left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยศาลเห็นมีเหตุสมควรให้ค้นสถานที่ : <u>".$sw_adderss."</u></div>
<div style='text-align:left;'>ตามแผนที่สังเขปแนบท้าย</div>
<div style='text-align:left;padding-left:100px;'>".$imgmap." เพื่อพบและยึดสิ่งของ : <u>".$sw_seize."</u></div>
<div style='text-align:left;'>".$img1." ซึ่งจะเป็นพยานหลักฐานประกอบการสอบสวน ไต่สวนมูลฟ้องหรือพิจารณา </div>
<div style='text-align:left;'>".$img2." ซึ่งมีไว้เป็นความผิดหรือได้มาโดยผิดกฎหมาย หรือได้ใช้ หรือตั้งใจจะใช้ในการกระทำความผิด</div>
<div style='text-align:left;'>".$img3." ตามคำพิพากษา หรือคำสั่งของศาล </div>
<div style='text-align:left;padding-left:100px;'>".$img4." เพื่อพบ : <u>".$sw_find."</u></div>
<div style='text-align:left;'>".$img5." บุคคลที่ถูกหน่วงเหนี่ยวหรือกักขังโดยมิชอบด้วยกฎหมาย  </div>
<div style='text-align:left;'>".$img6." บุคคลที่ออกหมายจับ ตามหมายจับที่  : <u>".$sw_warrant2."</u> ลงวันที่ ".DateThai($sw_date2)." </div>
<div style='text-align:left;padding-left:130px;'>ซึ่งออกให้โดย : <u>".$sw_issued."</u></div>
<div style='text-align:left;padding-left:100px;'>จึงออกหมายค้นให้ : <u>".$sw_sw_issued2."</u></div>
<div style='text-align:left;'>ตำแหน่ง : <u>".$sw_position."</u> มีอำนาจค้นสถานที่ / บ้านข้างต้นได้ในวันที่ : <u>".DateThai($sw_location2)."</u></div>
<div style='text-align:left;'>เวลา : <u>".DateThaiTime_test($sw_time)."</u> นาฬิกา ถึง : <u>".$img7."</u> เวลา : <u>".DateThaiTime_test($sw_time_to)."</u> นาฬิกา : <u>".$img8."</u> ติดต่อกันไป จนกว่าจะเสร็จสิ้นการตรวจค้น</div>
<div style='text-align:left;padding-left:100px;'>เมื่อค้นได้ตามหมายนี้แล้วให้ส่ง ".$sw_search."</div>
<div style='text-align:left;'>พร้อมบันทึกการตรวจค้นละบัญชีสิ่งของ ( ถ้ามี ) ไปยัง ".$sw_save." เพื่อจัดการตามกฎหมายต่อไป</div>
<br>
<div style='text-align:right;'><u>".$sw_judge."</u> ผู้พิพากษา</div>
<hr>
<div class='botton' style='text-align:left;'><u>หมายเหตุ</u>  :  ให้ระบุชื่อหรือรูปพรรณบุคคลหรือลักษณะสิ่งของที่ต้องการค้น</div>
";

$mpdf->WriteHTML($content);
$mpdf->Output();

?>
