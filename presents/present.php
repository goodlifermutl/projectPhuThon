<?php
include ("../module/fuction/connect_db.php");
$con = connect_db(); 

$sql="SELECT case_type,case_savetime FROM case_name";
$result=mysqli_query($con,$sql)or die("SQL error datetime".mysqli_error($con));
list($type_case,$date)=mysqli_fetch_row($result);

$dataPoints = array(
	array("label"=> 1992, "y"=>105),
	array("label"=> 1993, "y"=>130),
	array("label"=> 1994, "y"=>158),

);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "สถิติช่วงเวลาเกิดเหตุคดี "
	},
	axisY:{
		title: "Energy (in megawatt)",
		logarithmic: true,
		titleFontColor: "#6D78AD",
		gridColor: "#6D78AD",
		labelFormatter: addSymbols
	},
	axisY2:{
		title: "Energy (in megawatt)",
		titleFontColor: "#51CDA0",
		tickLength: 0,
		labelFormatter: addSymbols
	},
	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	data: [{
		type: "line",
		markerSize: 0,
		showInLegend: true,
		name: "คดีแพ่ง",
		yValueFormatString: "#,##0 MW",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	},
	{
		type: "line",
		markerSize: 0,
		axisYType: "secondary",
		showInLegend: true,
		name: "คดีอาญา",
		yValueFormatString: "#,##0 MW",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function addSymbols(e){
	var suffixes = ["", "K", "M", "B"];
 
	var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);
	if(order > suffixes.length - 1)
		order = suffixes.length - 1;
 
	var suffix = suffixes[order];
	return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>            