
<?php
 include ("../module/fuction/connect_db.php");
 $con = connect_db(); 
 
 $year_seach=$_POST['year']??"null";
	echo $year_seach;

//  $result=mysqli_query($con,$sql)or die("SQL error datetime".mysqli_error($con));
//  list($type_case,$date)=mysqli_fetch_row($result);
$dataPoints = array();
for($i=1;$i<=12;$i++){
	if($i<10){
		$y='0'.$i;
	}else{
		$y=$i;
	}
	// $today_year=date("Y");
	// $year_seach=$today_year;
	$month= array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	$sql="SELECT COUNT(case_id) AS 'numcase' FROM case_name WHERE case_savetime LIKE '$year_seach-$y%'";
	$result=mysqli_query($con,$sql)or die("SQL error datetime".mysqli_error($con));
	 list($sum)=mysqli_fetch_row($result);
	//  echo $month[$i-1].">>".$sum;

	$arraydata["label"]=$month[$i-1];
	$arraydata["y"]=$sum;
	$groptarray[]=$arraydata;
	//echo $sum;
}
	$dataPoints=$groptarray;
//    print_r($dataPoints)	
?>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>    

<script>
$(document).ready(function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "สถิติการเกิดคดีใน ปีxxxx"
	},
	axisY: {
		title: "จำนวน(ครั้ง)",
		includeZero: false
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
})
</script>
 
  

