
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
$result_data_object = mysqli_query($con,"SELECT ob_no,id_object,object_status,object_name,object_size,object_look,object_image FROM object_case  WHERE id_object = '$_COOKIE[idcardvictimreport]'")or die("result_data_object sqli error".mysqli_error($con));
list($ob_no,$id_object,$object_status,$object_name,$object_size,$object_look,$object_image)=mysqli_fetch_row($result_data_object);

if($object_status=='1'){
    $status="ยึด";
}else if($object_status=='2'){
    $status="คืน";
}

$content = "

<style>
div{
	font-family: 'Garuda';
    font-size: 12pt;
}
</style>
<div style='display: flex;text-align:centter;position:relative;margin-bottom:20px;'>
<div style='text-align:center'><img src='../../image/$object_image' height='450px' width='400px'></div>
<p></p>
<p></p>
<div style='margin-right:20px;float: left;width:200px;'>รหัสของกลาง : ".$id_object."</div>
<div style='margin-right:20px;float: left;width:200px;'>ชื่อของกลาง : ".$object_name."</div>
<div style='margin-right:20px;float: left;width:200px;'>สถานะของกลาง : ".$status."</div>
<div style='clear: left;'></div>
<div style='margin-right:20px;float: left;'>ขนาดของกลาง : ".$object_size."</div>
<div style='clear: left;'></div>
<div style='margin-right:20px;float: left;'>ลักษณะของกลาง : ".$object_look."</div>
";
$mpdf->WriteHTML($content);

$mpdf->Output();
?>
