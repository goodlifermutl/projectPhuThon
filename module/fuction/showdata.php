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

<?php 
// function format ( d ) {
//     // `d` is the original data object for the row
//     return '<table  cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
//         '<tr>'+
//             '<td>Full name:</td>'+
//             '<td>'+d.name+'</td>'+
//         '</tr>'+
//         '<tr>'+
//             '<td> เงิน:</td>'+
//             '<td>'+d.salary+'</td>'+
//         '</tr>'+
//         '<tr>'+
//             '<td >Extra info:</td>'+
//             '<td>And any further details here (images etc)...</td>'+
//         '</tr>'+
//     '</table>';
// }




// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         "ajax": "showdata.php",
//         "columns": [
//             {
//                 "className":      'details-control',
//                 "orderable":      false,
//                 "data":           null,
//                 "defaultContent": ''
//             },
//             { "data": "name" },
//             { "data": "position" },
//             { "data": "office" },
//             { "data": "salary" }
//         ],
//         "order": [[1, 'asc']]
//     } );
     
//     // Add event listener for opening and closing details
//     $('#example tbody').on('click', 'td.details-control', function () {
//         var tr = $(this).closest('tr');
//         var row = table.row( tr );
 
//         if ( row.child.isShown() ) {
//             // This row is already open - close it
//             row.child.hide();
//             tr.removeClass('shown');
//         }
//         else {
//             // Open this row
//             row.child( format(row.data()) ).show();
//             tr.addClass('shown');
//         }
//     } );
    ?>

   
