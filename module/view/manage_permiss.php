<?php
if(empty($_GET['see'])){
    $see=3;
}else{
    $see = $_GET['see'];
}
// echo $see;
?>
<form method="post">
<input type="hidden" value="<?php echo $see; ?>" id="see">
<div class="row">
<br>
  </div>
 <div class="col-md">
  <div class="form-group row">
    <label for="inputState" class=" col-sm col-form-label"><b>สถานะผู้ใข้งาน</b></label>
    <div class="col-md">
    <select name="id" class="form-control" id="inputState" >
        <option value="6" selected id="6">ทั้งหมด</option>
        <option value="4">ผู้ดูแล</option>
        <option value="3">เจ้าหน้าที่กรอกข้อมูล</option>
        <option value="2">เจ้าหน้าที่ปัฎิบัติงาน</option>
        <option value="1">เจ้าหน้าที่ชั้นสูง</option>
        <option value="5" selected id="5">ไม่มีสถานะ</option>
    </select>
    </div>
  </div>
</div>
<div  class="row">
<div class="col-md"> 
       
        <div class="col-auto" id='loaddataInasm'></div>
    </div>
</div>
</form>
<script>
var see = $("#see").val();
// alert(see)
if(see==5){
    $("#5").prop("selected", true);
    $("#6").prop("selected", false);
}else if(see==3){
    $("#6").prop("selected", true);
    $("#5").prop("selected", false);
}
 function loadsunass(){
      var id = $("#inputState").val();

      $("#loaddataInasm").html("")
    //   $("#loadging").css('display','')
      $.ajax({
        url: "module/view/admin_datauser.php",
        data:{no:id},
        type: "POST"
      }).done(function(data){
        $("#loaddataInasm").html(data)
      })
    }  
$(document).ready(function() {
    loadsunass()
    $("#inputState").change(function(){
      var id = $("#inputState").val();
      //alert(id)
   $.post("module/view/admin_datauser.php",{no:id},
    function (data, textStatus, jqXHR) {
    //alert(data)
     $("#inputNo").html(data)
     loadsunass()
    }
   );
   
  })
    });
</script>