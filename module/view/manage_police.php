<form method="post">
<input type="hidden" value="<?php echo $see; ?>" id="see">
<div class="row">
<br>
  </div>

<div class="input-group mb-3">
    <div class="col-3">
        <select class="custom-select" id="SCtype" name="type">
            <option value="1">ชื่อ-นามสกุล</option>
            <option value="2">เลขบัตรประจำตัวประชาชน</option>
        </select>
    </div>
    <div class="col-5">
        <input type="text" class="form-control" placeholder="ค้นหาข้อมูล" name="search" id="SCname">
    </div>
    <div class="col-3">
        <button type="button" class="btn btn-success" id="btnsearch">ค้นหา</button>
    </div>               
</div>

<div  class="row">
<div class="col-md">       
    <div class="col-auto" id='loaddataInasm'></div>
</div>
</div>
</form>
<script>

 function loadsunass(){
      var name = $("#SCname").val();
      var type = $("#SCtype").val();

      $("#loaddataInasm").html("")
    //   $("#loadging").css('display','')
      $.ajax({
        url: "module/view/admin_policedata.php",
        data:{no:name},
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
   $.post("module/view/admin_policedata.php",{no:id},
    function (data, textStatus, jqXHR) {
    //alert(data)
     $("#inputNo").html(data)
     loadsunass()
    }
   );
   
  })
});
</script>