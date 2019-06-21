<?php

$data=array("data" => array());

include("connect_db.php");
$con = connect_db();
$result=$con->query("SELECT case_id,case_name,case_type FROM case_name")or die("sql select error".mysqli_error($con));


while(list($case_id,$case_name,$case_type)=$result->fetch_row()){

   // $result=$con->query("SELECT victim_name,victim_lastname FROM case_name")or die("sql select error".mysqli_error($con));

    array_push($data['data'],array("id"=>"$case_id","name"=>"$case_name","position"=>"$case_type","salary"=>"320,800","start_date"=>"2011/04/25","office"=>"Edinburgh","extn"=>"5421"));

}
?>

<?php echo json_encode($data); ?>


   
