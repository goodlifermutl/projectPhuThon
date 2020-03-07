
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
$result_data = mysqli_query($con,"SELECT  id_arr_info, court_name, date_arr_info, type_arr_info, victim_arr_info, villain_arr_info, victim_say_arr_info, vil_perpetrate_arr_info, id_vil_catch_arr_info, close_add_arr_info, send_to_arr_info, dl_arr_info, st_date_arr_info, end_date_arr_info, judge_name FROM arrest_info  WHERE case_id_arr_info = '$_COOKIE[idcardvictimreport]'".mysqli_error($con));
list($id_arr_info,$court_name,$date_arr_info,$type_arr_info,$victim_arr_info,$villain_arr_info,$victim_say_arr_info,$vil_perpetrate_arr_info,$id_vil_catch_arr_info,$close_add_arr_info,$send_to_arr_info,$dl_arr_info,$st_date_arr_info,$end_date_arr_info,$judge_name)=mysqli_fetch_row($result_data);

if($type_arr_info=='1'){
    $case_type="ความเพ่ง";
}else if($type_arr_info=='2'){
    $case_type="ความอาญา";
}

$result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname,villain_address,villain_race,villain_nationality,villain_career FROM villain WHERE villain_idcard='$id_vil_catch_arr_info'")or die("select villain error".mysqli_error($con));
list($vil_idcard,$title,$vil_name,$vil_lastname,$villain_address,$villain_race,$villain_nationality,$villain_career)=mysqli_fetch_row($result_vil);

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
</style>
<div style='text-align:center'><img src='../../image/icon_report.jpg' height='113px' width='113px'></div>
<div style='float: left;width:100px;'>หมายจับ</div>
<div style='float: right;width:100px;'>ที่ ".$id_arr_info."</div>
<div style='clear: right;'></div>
<div style='text-align:center'><h3>ในพระปรมาภิไธยพระมหากษัตริย์</h3></div>
<div style='float: right;width:300px;'>ศาล ".$court_name."</div>
<div style='clear: right;'></div>
<div style='float: right;width:350px;'>วันที่ ".DateThai_day($date_arr_info)."&nbsp;&nbsp;&nbsp;เดือน ".DateThai_month($date_arr_info)."&nbsp;&nbsp;&nbsp;พุทธศักราช ".DateThai_year($date_arr_info)."</div>
<div style='clear: right;'></div>
<div style='text-align:center;font-size:20px;'>".$case_type."</div>
<div style='float: left;width:350px;padding-left:70px;'>".$victim_arr_info." ผู้ร้อง</div>
<div style='float: right;width:150px;'>ผู้ร้อง</div>
<div style='clear: left;'></div>
<div style='float: left;width:350px;'>หมายถึง &nbsp;&nbsp;".$villain_arr_info."</div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:70px;'>ด้วยผู้ร้องยื่นคำร้องว่า : <u>".$victim_say_arr_info."</u></div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:90px;'>ซึ่งต้องหาว่ากระทำผิดฐาน : <u>".$vil_perpetrate_arr_info."</u></div>
<div style='clear: left;'></div>
<div style='float: left;padding-left:90px;'>เพราะฉะนั้นให้ท่านจับตัว : <u>".$title." ".$vil_name." ".$vil_lastname."</u></div>
<div style='float: left;'>เชื้อชาติ : <u>".$villain_race."</u> สัญชาติ : <u>".$villain_nationality."</u> อาชีพ : <u>".$villain_career."</u> ที่อยู่ : <u>".$villain_address."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>ใกล้เคียงพื้นที่ : <u>".$close_add_arr_info."</u></div>
<div style='clear: left;'></div>
<div style='float: left;'>ไปส่งที่ : <u>".$send_to_arr_info."</u> ภายในอายุความ : <u>".$dl_arr_info."</u> ปี</div>
<div style='clear: left;'></div>
<div style='float: left;'>นับตั้งแต่วันที่ : <u>".DateThai_day($st_date_arr_info)." เดือน ".DateThai_month($st_date_arr_info)." พ.ศ. ".DateThai_year($st_date_arr_info)."</u> เพื่อจะได้ดำเนินการตามกฎหมาย</div>
<div style='float: left;'>แต่ไม่เกินวันที่ : <u>".DateThai_day($end_date_arr_info)." เดือน ".DateThai_month($end_date_arr_info)." พ.ศ. ".DateThai_year($end_date_arr_info)."</u></div>
<div style='clear: left;'></div>
<p></p>
<div style='float: right;width:400px;'>".$judge_name." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้พิพากษา</div>
<div style='clear: right;'></div>

";

$mpdf->WriteHTML($content);

$mpdf->Output();
?>
