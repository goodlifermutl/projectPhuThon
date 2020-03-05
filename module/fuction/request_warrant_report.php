
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
$result_data_rw = mysqli_query($con,"SELECT no_rw, rw_no, rw_court, rw_cell, rw_judge, rw_type, rw_Petitioner, rw_policename, rw_position, rw_age, rw_career, rw_Workplace, rw_phone, rw_dos, rw_cherk1, rw_cherk2, rw_incident, rw_circumstances,rw_action, rw_Documentary, rw_Arrest, rw_warrant, rw_petition, rw_position2, rw_ornot, rw_Request, rw_warrant2, rw_Court2 FROM request_warrant  WHERE rw_case = '$_COOKIE[idcardvictimreport]'".mysqli_error($con));
list($no_rw,$rw_no,$rw_court,$rw_cell,$rw_judge,$rw_type,$rw_Petitioner,$rw_policename,$rw_position,$rw_age,$rw_career,$rw_Workplace,$rw_phone,$rw_dos,$rw_cherk1,$rw_cherk2,$rw_incident,$rw_circumstances,$rw_action,$rw_Documentary,$rw_Arrest,$rw_warrant,$rw_petition,$rw_position2,$rw_ornot,$rw_Request,$rw_warrant2,$rw_Court2)=mysqli_fetch_row($result_data_rw);

if($rw_type=='1'){
    $case_type="ความเพ่ง";
}else if($rw_type=='2'){
    $case_type="ความอาญา";
}

$img1;
$img2;
if($rw_cherk1=='true1'){
    $img1="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else if($rw_cherk2=='true2'){
    $img2="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
}else if($rw_cherk1=='false'){
    $img1="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}else if($rw_cherk2=='false'){
    $img2="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

if($rw_ornot=='1'){
    $chkimg1="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
    $chkimg2="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}else if($rw_ornot=='2'){
    $chkimg2="<img src='../../image/chktrue.jpg' height='20px' width='20px'>";
    $chkimg1="<img src='../../image/chkfalse.jpg' height='20px' width='20px'>";
}

$police_result=mysqli_query($con," SELECT * FROM witness_request_warr WHERE witness_case = '$_COOKIE[idcardvictimreport]'")or die("sql error!!!".mysqli_error($con));
$loop_wir=mysqli_num_rows($police_result);

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
</style>
<div style='text-align:center'><img src='../../image/icon_report.jpg' height='85px' width='85px'></div>
<div style='float: left;width:50px;'>คำร้อง</div>
<div style='float: right;width:100px;'>ที่ ".$rw_no."</div>
<div style='clear: right;'></div>
<div style='float: left;width:250px;'>ขอหมายจับ</div>
<div style='clear: left;'></div>
<div style='float: left;width:250px;'>รับคำร้อง</div>
<div style='float: right;width:300px;'>ศาล ".$rw_court."</div>
<div style='clear: right;'></div>
<div style='float: left;width:250px;'>เรียกสอบ</div>
<div style='float: right;width:300px;'>วันที่ ".DateThai_day($rw_cell)."&nbsp;เดือน ".DateThai_month($rw_cell)."&nbsp;พศ ".DateThai_year($rw_cell)."</div>
<div style='clear: right;'></div>
<div style='float: left;width:250px;'>".$rw_judge." ผู้พิพากษา</div>
<div style='clear: left;'></div>
<div style='text-align:center;'><b>".$case_type."</b></div>
<div style='float: right;width:450px;'>".$rw_Petitioner." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ร้อง</div>
<div style='clear: right;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้า : <u>".$rw_policename." </u>
&nbsp;&nbsp;ตำแหน่ง &nbsp;: <u>".$rw_position." </u> &nbsp;&nbsp;อายุ &nbsp;&nbsp;&nbsp; :  <u>".$rw_age." </u>&nbsp;ปี&nbsp;&nbsp; อาชีพ &nbsp; :  <u>".$rw_career." </u>&nbsp; สถานที่ทำงาน &nbsp;&nbsp; : <u>".$rw_Workplace." </u>&nbsp; โทรศัพท์ &nbsp; :  <u>".$rw_phone." </u></div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:80px;'>ขอยื่นคำร้องขอออกหมายจับต่อศาล ดังมีข้อความที่จะกล่าวดังต่อไปนี้</div>
<div style='clear: left;padding-left:80px;'></div>
<div style='float: left;padding-left:80px;'>ข้อ 1. ด้วย".$rw_dos."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:80px;'>ซึ่งมีตำหนิรูปพรรณตามที่แนบมาพร้อมนี้</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:80px;'>".$img1."ได้หรือน่าจะได้กระทำผิดอาญาร้ายแรงซึ่งมีอัตราโทษจำคุกอย่างสูงเกิน 3 ปี</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:80px;'>".$img1."ได้หรือน่าจะได้กระทำความผิดอาญา และน่าจะหลบหนีหรือไปยุ่งเหยิงกับพยานหลัก</div>
<div style='float: left;'>ฐานหรือก่ออันตรายประการอื่น</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เหตุเกิดที่ ".$rw_incident."</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>มีพฤติการณ์กระทำความผิดที่เกี่ยวกับเหตุออกหมายจับ</u> คือ</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rw_circumstances."</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>การกระทำของผู้ต้องหาเป็นการกระทำความผิด</u> ฐาน</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rw_action."</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>พยานเอกสาร และพยานวัตถุ</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rw_Documentary."</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>พยานบุคคล ได้ทำการสอบสวนแล้วจำนวน</u> ".$loop_wir." ปาก</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
";
$wit=1;
    while(list($no_witness,$winess_case,$rw_witness)=mysqli_fetch_row($police_result)){
    $content.= "
    พยานปากที่ $wit ".$rw_witness."
    ";
    $wit++;
    }
$content.="</div>
<p></p>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อ 2. ผู้ร้องประสงค์จะทำการจับกุม ".$rw_Arrest." จึงขอให้ศาลออกหมายจับ ".$rw_warrant." มาดำเนินคดี</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการยื่นคำร้องนี้ ผู้ร้องได้มอบหมายให้ ".$rw_petition." ตำแหน่ง ".$rw_position2." ซึ่งเป็นผู้ใต้บังคับบัญชา เป็นผู้นำคำร้องมายื่นต่อศาล และหากศาลเรียกสอบเมื่อใด ผู้ร้องพร้อมจะมาให้ศาลสอบทันที</div>
<div style='clear: left;'></div>
<div style='float: left;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ร้อง ".$chkimg1." เคย ".$chkimg2." ไม่เคย ร้องขอให้ศาล ".$rw_Request."</div>
<div style='clear: left;'></div>
<div style='float: left;'>ออกหมายจับบุคคลดังกล่าว โดยอาศัยเหตุแห่งการร้องขอเดียวกันนี้ หรือเหตุอื่นๆ (ระบุ)</div>
<div style='clear: left;'></div>
<div style='float: left;'>".$rw_warrant2." และศาลมีคำสั่ง ".$rw_Court2."</div>
<div style='clear: left;'></div>
<div style='text-align:center;'>ควรไม่ควรแล้วแต่จะโปรด</div>
<div style='clear: left;'></div>
<div style='text-align:center;margin-top:50px;'>(ลงชื่อ)....................................................ผู้ร้อง</div>
<div style='clear: left;'></div>
<div style='text-align:center;'>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</div>
<div style='clear: left;'></div>
<div style='text-align:center;'>".$rw_position."</div>
<div style='clear: left;'></div>

";

$mpdf->WriteHTML($content);

$mpdf->Output();
?>
