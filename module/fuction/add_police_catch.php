<?php
$num_loop=$_POST['loop'];
$num_po_count=$_POST['cprecord'];
$i=1;

// echo $num_loop,$num_po_count;

while($i<=$num_po_count){
  echo "<div class='SHaddCC$i'>
  <div class='d-flex justify-content-center'>
  <div class='col-md-6'>
      <div class='input-group mb-3'>
      <div class='input-group-prepend'>
        <span class='input-group-text' id='inputGroup-sizing-default'>นามพนักงานจับกุมคนที่$i </span>
      </div>
      <input type='text' id='input_police_name$i' name='name_police[]' value='' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
    </div>
  </div>
  </div>
  </div>
  <p></p>
  ";
  $i++;
}
?>

<!-- <div class='d-flex justify-content-center'>
      <div>
        <button type='button' class='btn btn-info' id='btnplusN'>ต้องการบวกเพิ่ม</button>
      </div> 
    </div>
    <p></p> -->


<!-- <?php
$dm=1;
for($d=1;$d<=$num_loop;$d++){
?>
<script>

  $("#input_police_name<?php echo $dm ?>").change(function(){

    
    var test<?php echo $dm ?> = $("#input_police_name<?php echo $dm ?>").val();
    alert(test<?php echo $dm ?>)

    // swal({
    //     title: "ลบการปักหมุด",
    //     text: "ต้องการลบใช่หรือไม่!",
    //     icon: "warning",
    //     buttons: true,
    //     dangerMode: true,
    //     buttons: ["ยกเลิก","ตกลง"]
    //   }).then((willDelete) => {
        // if (willDelete) {
          $.post("module/fuction/index_name_police.php",{test<?php echo $dm ?>,loop}).done(function(data,txtstuta){
            alert(data)
            // window.location.href="home.php";
            
            });
          
        // } else {
          

        // }       
    // $("#btnplusN").hide();
    // $("#btnplus").show();
  // })
})
</script>
<?php
$dm++;} 
?> -->


<!-- <div class="SHaddCC">
    <div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">พนักงานจับกุมคนที่ </span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    </div>
    </div>
    <p></p> -->