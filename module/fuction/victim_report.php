
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

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
</style>
<div style='display: flex;text-align:centter;position:relative;margin-bottom:20px;'>
<div style='text-align:center'><img src='../../image/$victim_image' height='450px' width='400px'></div>
<p></p>
<div>รหัสคดี : ".$case_id." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ : ".$victim_name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; นามสกุล : ".$victim_lastname."</div>
<div>เลขบัตรประชาชน : ".$victim_idcard." </div>
</div>

";
$mpdf->WriteHTML($content);

$mpdf->Output('test.pdf','D');
?>
