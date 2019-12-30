<?php
$test=$_POST['test'];
$loop=$_POST['loop'];
$num_loop=$loop-1;
// $data=array("data" => array());
$arr=array(
    "0"=>"$test",
);
// array_push($data['data'],array("0"=>"$test","1"=>"$test","2"=>"$test"));

echo $test,$num_loop;
// echo json_encode($arr);
$jsondata = json_encode($arr);
$obj = json_decode($jsondata);
var_dump($obj);
?>
<script>
$(document).ready(function(){
    
    $.ajax({
    url: 'module/fuction/add_police_catch.php',
    type: 'POST',
    data: JSON,
    success: function(data){
        // alert(data)
    }
    })
})
</script>