<a name="ของกลาง"></a>
<br>
<br>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">ของกลาง</h1></p>
      <br>
   
      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];

      if(empty($_GET['search'])){
        $search = "";
        $l=0;
      }else{
        $search="#".$_GET['search'];
        $l=1;
      }
        $sex_name;
        $i=1;
        
        $result_chk_object = mysqli_query($con,"SELECT id_object,case_id,object_status,object_name,object_size,object_look,object_image,ob_location FROM object_case  WHERE case_id = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data_object = mysqli_query($con,"SELECT ob_no,id_object,object_status,object_name,object_size,object_look,object_image,ob_location FROM object_case  WHERE case_id = '$data'")or die("result_data_object sqli error".mysqli_error($con));
        list($case_id_ob)=mysqli_fetch_row($result_chk_object);
        $num_loop=mysqli_num_rows($result_chk_object);
        // echo $data,$num_loop;
        if(empty($case_id_ob)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($ob_no,$id_object,$object_status,$object_name,$object_size,$object_look,$object_image,$ob_location)=mysqli_fetch_row($result_data_object)){

            if($object_status == 1){
                $status1="selected";
                $status2="";
                $status3="";
              }else if(($object_status == 2)){
                $status2="selected";
                $status1="";
                $status3="";
              }else if($object_status == 3){
                $status3="selected";
                $status1="";
                $status2="";
              }

        ?>
        
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">ของกลาง อย่างที่ <?php echo $i; ?></label></b>
         <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-info" id="btn_edit<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i> แก้ไข</button>
          <button type="button" class="btn btn-info" id="btn_report<?php echo $i ?>"><i class="far fa-file-alt"></i> รายงาน</button>
        </div>
         <p><img src="image/<?php echo $object_image; ?>" class="img-fluid mx-auto d-block rounded-circle victimpic" alt="Responsive image" width="128";height="128"; id="victimpic<?php echo $i; ?>"></p>
        </div>
        <div class="col-md">

    </div>
    <form class="save<?php echo$i ?>" method="post" id="insertOB">
    <div class="col-md">
        <div class="form-row">
        <input type="hidden" value="<?php echo $ob_no ?>" name="ob_on[]">
        <div>
            <label class="col-sm col-form-label">สถานะของกลาง : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select  edit<?php echo $i; ?>" id="focusob<?php echo $i?>" name="staob[]"  disabled required>
        
                <option disabled selected value="0">สถานะ</option>
                <option value="1" <?php echo $status1 ?>>ยึด</option>
                <option  value="2"<?php echo $status2 ?>>คืน</option>
                <option  value="3"<?php echo $status3 ?>>ทำลาย</option>
                   
        </select>   
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
      <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ID ของกลาง : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ID" id="idobject<?php echo $i; ?>" name="idob[]" value="<?php echo $id_object ?>" disabled required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อของกลาง : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ชื่อของกลาง" name="nameob[]" value="<?php echo $object_name ?>" disabled required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ขนาดของกลาง : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ขนาดของกลาง" name="sizeob[]" value="<?php echo $object_size ?>" disabled required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
      <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ลักษณะของกลาง : </label>
        </div>
        <div class="input-group">
        <textarea class="form-control edit<?php echo $i; ?>" name="lookob[]" aria-label="With textarea" disabled><?php echo $object_look ?></textarea>
        </div>
        </div>
    </div>
   <p></p>
   <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">สถานที่เก็บของกลาง : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="สถานที่เก็บของกลาง" name="name_location[]" value="<?php echo $ob_location ?>"disabled required> 
        </div>
        </div>
    </div>
   <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn" id="savebtn<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn<?php echo $i; ?>">ยกเลิก</button></p>
            </div>
    </form>

      <?php
        $i++;
      }
    }
}
      ?>
     
     </div>

<?php  
$md=1;
  for($y=1;$y<=$num_loop;$y++){
    
?>
<script>

var id<?php echo $md;?> = $("#id<?php echo $md; ?>").val()


$("#savebtn<?php echo $md ?>").hide();
$("#canclebtn<?php echo $md ?>").hide();

$("#btn_edit<?php echo $md; ?>").click(function(){
    $(".edit<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn<?php echo $md ?>").show();
    $("#canclebtn<?php echo $md ?>").show();
    swal({
  title: "การแก้ไขข้อมูล",
  text: "ต้องการแก้ไขข้อมูลใช่หรือไม่!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  buttons: ["ยกเลิก","ตกลง"]
})
.then((willDelete) => {
  if (willDelete) {
    $( "#focusob<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
  }
});
})

$("#btn_report<?php echo $md; ?>").click(function(){
    swal({
  title: "รายงานPDF",
  text: "ต้องการออกรายงานใช่หรือไม่?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  buttons: ["ยกเลิก","ตกลง"]
})
.then((willDelete) => {
  if (willDelete) {
    var reidcard = $("#idobject<?php echo $md ?>").val()
      $.post("module/fuction/test_send_reidcard.php",{reidcard}).done(function(data,txtstuta){
      //alert(reidcard)
      //alert(data)
      window.open('module/fuction/object_report.php','_blank');
     })
}
else {
    window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
  }
});
})

$("#canclebtn<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".edit<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn<?php echo $md ?>").hide();
  $("#canclebtn<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
})
$(".save<?php echo$md; ?>").submit(function(){
  //alert("ggggggg")
  $check = $(".save<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_object.php",
					        type: 'POST',
					        data: formData,
					        success: function (data) {
								alert(data);
								//swal("บันทึกสำเร็จแล้ว!", "", "success")
								swal("บันทึกสำเร็จ!", {
									icon: "success",
									buttons: false,
									timer: 1000,
								});   
                
                
                window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>