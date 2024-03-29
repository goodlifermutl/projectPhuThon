
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
$result_data_object = mysqli_query($con,"SELECT ob_no,id_object,object_status,object_name,object_size,object_look,object_image,ob_location FROM object_case  WHERE id_object = '$_COOKIE[idcardvictimreport]'")or die("result_data_object sqli error".mysqli_error($con));
list($ob_no,$id_object,$object_status,$object_name,$object_size,$object_look,$object_image,$ob_location)=mysqli_fetch_row($result_data_object);

if($object_status=='1'){
    $status="ยึด";
}else if($object_status=='2'){
    $status="คืน";
}
else if($object_status=='3'){
    $status="ทำลาย";
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
<div style='margin-right:20px;float: left;width:200px;'>รหัสของกลาง : <u>".$id_object."</u></div>
<div style='margin-right:20px;float: left;width:200px;'>ชื่อของกลาง : <u>".$object_name."</u></div>
<div style='margin-right:20px;float: left;width:200px;'>สถานะของกลาง : <u>".$status."</u></div>
<div style='clear: left;'></div>
<div style='margin-right:20px;float: left;'>ขนาดของกลาง : <u>".$object_size."</u></div>
<div style='clear: left;'></div>
<div style='margin-right:20px;float: left;'>ลักษณะของกลาง : <u>".$object_look."</u></div>
<div style='margin-right:20px;float: left;'>สถานที่เก็บของกลาง : <u>".$ob_location."</u></div>
";
$mpdf->WriteHTML($content);

$mpdf->Output();
?>
