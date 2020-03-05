
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
$result_victim = mysqli_query($con,"SELECT case_id,vm.title_name, vm.victim_name,vm.victim_lastname,vm.victim_sex,vm.victim_idcard,vm.victim_address,ed.edu_name,vm.victim_image,vm.victim_race,vm.victim_nationality,vm.victim_career FROM victim as vm  INNER JOIN education as ed ON vm.victim_education = ed.edu_id WHERE victim_idcard = '$_COOKIE[idcardvictimreport]'")or die("resualt_victim sqli error".mysqli_error($con));
list($case_id,$title_name,$victim_name,$victim_lastname,$victim_sex,$victim_idcard,$victim_address,$victim_education,$victim_image,$victim_race,$victim_nationality,$victim_careen)=mysqli_fetch_row($result_victim);

if ($victim_sex==1){
    $sex="ชาย";
}else{
    $sex="หญิง";
}

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
u {
    text-decoration: underline;
  }
</style>
<div style='display: flex;text-align:centter;position:relative;margin-bottom:20px;'>
<div style='text-align:center'><img src='../../image/$victim_image' height='450px' width='400px'></div>
<p></p>
<p></p>
<div>รหัสคดี : <u>".$case_id."</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ : <u>".$victim_name."</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; นามสกุล : <u>".$victim_lastname."<u/></div>
<div>เลขบัตรประชาชน : <u>".$victim_idcard."</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เชื้อชาติ : <u>".$victim_race."</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สัญชาติ : <u>".$victim_nationality."</u></div>
<div>อาชีพ : <u>".$victim_careen."</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระดับการศึกษา : <u>".$victim_education."</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพศ : <u>".$sex."</u></div>
<div>ที่อยู่ : <u>".$victim_address."</u></div>
</div>

";
$mpdf->WriteHTML($content);

$mpdf->Output();
?>
