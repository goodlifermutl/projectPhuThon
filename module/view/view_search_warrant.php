<a name="หมายค้น"></a>
<br>
<br>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">หมายค้น</h1></p>
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
        
        $result_chk_sw = mysqli_query($con,"SELECT sw_case FROM search_warrant  WHERE sw_case = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data_sw = mysqli_query($con,"SELECT sw_no, sw_searchwarrant, sw_court, sw_date, sw_petitioner, sw_send, sw_adderss, sw_map,sw_seize, sw_check1, sw_check2, sw_check3, sw_check4, sw_find, sw_law, sw_warrant, sw_warrant2, sw_date2, sw_issued, sw_sw_issued2, sw_position, sw_location2, sw_time, sw_check5, sw_time_to, sw_check6, sw_search, sw_save, sw_judge FROM search_warrant  WHERE sw_case = '$data'".mysqli_error($con));
        list($case_id_sw)=mysqli_fetch_row($result_chk_sw);
        $num_loop=mysqli_num_rows($result_data_sw);
        // echo $data,$num_loop;
        if(empty($case_id_sw)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($sw_no,$sw_searchwarrant,$sw_court,$sw_date,$sw_petitioner,$sw_send,$sw_adderss,$sw_map,$sw_seize,$sw_check1,$sw_check2,$sw_check3,$sw_check4,$sw_find,$sw_law,$sw_warrant,$sw_warrant2,$sw_date2,$sw_issued,$sw_sw_issued2,$sw_position,$sw_location2,$sw_time,$sw_check5,$sw_time_to,$sw_check6,$sw_search,$sw_save,$sw_judge)=mysqli_fetch_row($result_data_sw)){

       // if($ir_casetype == 1){
            //     $status1="selected";
            //     $status2="";
            //   }else if($ir_casetype == 2){
            //     $status2="selected";
            //     $status1="";
            //   }

            // if($sv_status_sent == 1){
            //     $rcheck1="checked";
            //     $rcheck2="";
            //   }else if($sv_status_sent == 2){
            //     $rcheck2="checked";
            //     $rcheck1="";
            //   }

            if($sw_map == "true"){
                $check1="checked";
                
              }if($sw_check1 == "true"){
                $check2="checked";
                
              }if($sw_check2 =="true"){
                $check3="checked";
                
              }if($sw_check3 =="true"){
                $check4="checked";

              }if($sw_check4 == "true"){
                $check5="checked";
                
              }if($sw_law == "true"){
                $check6="checked";
                
              }if($sw_warrant =="true"){
                $check7="checked";
                
              }if($sw_check5 =="true"){
                $check8="checked";

              }if($sw_check6 =="true"){
                $check9="checked";
              }

              if($sw_map != "true"){
                $check1="";
                
              }if($sw_check1 != "true"){
                $check2="";
                
              }if($sw_check2 !="true"){
                $check3="";
                
              }if($sw_check3 !="true"){
                $check4="";

              }if($sw_check4 != "true"){
                $check5="";
                
              }if($sw_law != "true"){
                $check6="";
                
              }if($sw_warrant !="true"){
                $check7="";
                
              }if($sw_check5 !="true"){
                $check8="";
                
              }if($sw_check6 !="true"){
                $check9="";
              }



        ?>
        <div class="col">
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">หมายค้น ฉบับที่ <?php echo $i; ?></label></b><button type="button" id="btn_edit7<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         
        </div>

    <form class="save7<?php echo$i ?>" method="post" id="insertWarrSearch">
    <input type="hidden" value="<?php echo $sw_no  ?>" name="sw_no_id[]">
  <div class="form-group row">
    <label class="col-form-label">หมายค้น ที่ : </label>
    <div class="col-3">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="focussw<?php echo $i ?>" value="<?php echo $sw_searchwarrant  ?>" name="sw_Searchwarrant[]" disabled>
    </div>
    <label class="col-form-label">ศาล : </label>
    <div class="col-3">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_court  ?>" name="sw_court[]" disabled>
    </div>
    <label class="col-form-label">วัน/เดือน/ปี : </label>
    <div class="col-3">
    <input type="date" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_date  ?>" name="sw_date[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้ร้อง : </label>
    <div class="col-md">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_petitioner  ?>" name="sw_Petitioner[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">หมายถึง : </label>
    <div class="col-md">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_send  ?>" name="sw_send[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ด้วยศาลเห็นมีเหตุสมควรให้ค้นสถานที่ / บ้านเลขที่ : </label>
    <div class="col-md">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_adderss  ?>" name="sw_location[]" disabled>
    </div>
  </div>
  <!-- <div class="form-group row">
    <label class="col-form-label">หมู่ที่ : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sw_Village">
    </div>
    <label class="col-form-label">ตรอก/ซอย : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sw_alley">
    </div>
    <label class="col-form-label">ถนน : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sw_road">
    </div>
  </div> -->
  <!-- <div class="form-group row">
    <label class="col-form-label">ตำบล/แขวง : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sw_district">
    </div>
    <label class="col-form-label">อำเภอ/เขต : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sw_district2">
    </div>
    <label class="col-form-label">จังหวัด : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sw_province">
    </div>
  </div> -->
  <div class="form-group row">
    <label class="col-form-label">ตามแผนที่สังเขปแนบท้าย : </label>
  </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_map[]" <?php echo $check1 ?> disabled>
      <label class="form-check-label" for="inlineCheckbox2">เพื่อพบและยึดสิ่งของ </label>
    </div>
    <div class="col-5">
    <input type="text" class="form-control editsw<?php echo $i; ?>" value="<?php echo $sw_seize  ?>" id=""name="sw_seize[]" disabled>
    </div>
  </div>
<div class="form-group row">
  <div class="form-check form-check-inline">
    <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_check1[]" <?php echo $check2 ?> disabled>
    <label class="form-check-label" for="inlineCheckbox2">ซึ่งจะเป็นพยานหลักฐานประกอบการสอบสวน ไต่สวนมูลฟ้องหรือพิจารณา </label>
  </div>
  </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_check2[]" <?php echo $check3 ?>  disabled>
      <label class="form-check-label" for="inlineCheckbox2">ซึ่งมีไว้เป็นความผิดหรือได้มาโดยผิดกฎหมาย หรือได้ใช้ หรือตั้งใจจะใช้ในการกระทำความผิด </label>
    </div>
    </div>
    <div class="form-group row">
      <div class="form-check form-check-inline">
        <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_check3[]" <?php echo $check4 ?> disabled>
        <label class="form-check-label" for="inlineCheckbox2">ตามคำพิพากษา หรือคำสั่งของศาล </label>
      </div>
      </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_check4[]" <?php echo $check5 ?> disabled>
      <label class="form-check-label" for="inlineCheckbox2">เพื่อพบ  </label>
    </div>
    <div class="col-5">
    <input type="text" class="form-control editsw<?php echo $i; ?>" value="<?php echo $sw_find  ?>" id=""name="sw_find[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_law[]" <?php echo $check6 ?> disabled>
      <label class="form-check-label" for="inlineCheckbox2">บุคคลที่ถูกหน่วงเหนี่ยวหรือกักขังโดยมิชอบด้วยกฎหมาย </label>
    </div>
    </div>
    <div class="form-group row">
      <div class="form-check form-check-inline">
        <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_warrant[]" <?php echo $check7 ?> disabled>
        <label class="form-check-label" for="inlineCheckbox2">บุคคลที่ออกหมายจับ ตามหมายจับที่ </label>
      </div>
      <div class="col-3">
      <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_warrant2  ?>" name="sw_warrant2[]" disabled>
      </div>
      <label class="col-form-label">ลงวันที่ : </label>
      <div class="col-3">
      <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_date2  ?>" name="sw_date2[]" disabled>
      </div>
      </div>

    <div class="form-group row">
      <label class="col-form-label">ซึ่งออกให้โดย : </label>
      <div class="col-6">
      <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_issued  ?>" name="sw_issued[]" disabled>
      </div>
    </div>
  <div class="form-group row">
    <label class="col-form-label">จึงออกหมายค้นให้: </label>
    <div class="col-6">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_sw_issued2  ?>" name="sw_sw_issued2[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ตำแหน่ง : </label>
    <div class="col-6">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_position  ?>" name="sw_position[]" disabled>
    </div>
    <label class="col-form-label">มีอำนาจค้น  </label>
  </div>

  <div class="form-group row">
    <label class="col-form-label">สถานที่ / บ้านข้างต้นได้ในวันที่ : </label>
    <div class="col-3">
    <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_location2  ?>" name="sw_location2[]" disabled>
    </div>

    </div>
    <div class="form-group row">
      <label class="col-form-label">เวลา : </label>
      <div class="col-3">
      <input type="time" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_time  ?>" name="sw_time[]" disabled>
      </div>
      <label class="col-form-label">นาฬิกา ถึง</label>
      &nbsp;  &nbsp;<div class="form-check form-check-inline">
        <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_check5[]" <?php echo $check8 ?> disabled>
        <label class="form-check-label" for="inlineCheckbox2">เวลา</label>&nbsp;
        <input type="time" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_time_to  ?>" name="sw_time_to[]" disabled>
      </div>
      <label class="col-form-label">นาฬิกา</label>
        &nbsp;  &nbsp;<div class="form-check form-check-inline">
        <input class="form-check-input editsw<?php echo $i; ?>" type="checkbox" id="inlineCheckbox2" value="true"name="sw_check6[]" <?php echo $check9 ?> disabled>
        <label class="form-check-label" for="inlineCheckbox2">ติดต่อกันไปจนกว่าจะเสร็จสิ้นการตรวจค้น</label>
      </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label">เมื่อค้นได้ตามหมายนี้แล้วให้ส่ง : </label>
        <div class="col">
          <textarea class="form-control editsw<?php echo $i; ?>" id="exampleFormControlTextarea1" rows="3" value="" name="sw_Search[]" disabled><?php echo $sw_search  ?></textarea>
        </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label">พร้อมบันทึกการตรวจค้นละบัญชีสิ่งของ ( ถ้ามี ) ไปยัง : </label>
          <div class="col">
          <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_save  ?>" name="sw_save[]" disabled>
          </div>
          <label class="col-form-label">เพื่อจัดการตามกฎหมายต่อไป</label>
          </div>
          <div class="form-group row">
            <label class="col-form-label">ผู้พิพากษา : </label>
            <div class="col">
            <input type="text" class="form-control editsw<?php echo $i; ?>" id="" value="<?php echo $sw_judge  ?>" name="sw_judge[]" disabled>
            </div>
            </div>
<p></p>
    <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn7" id="savebtn7<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn7<?php echo $i; ?>">ยกเลิก</button></p>
            </div>
            
    </form>

      <?php
        $i++;
      }
    }
}
      ?>
     
     </div>
     </div>

<?php  
$md=1;
  for($y=1;$y<=$num_loop;$y++){
    
?>
<script>

var id<?php echo $md;?> = $("#id<?php echo $md; ?>").val()


$("#savebtn7<?php echo $md ?>").hide();
$("#canclebtn7<?php echo $md ?>").hide();

$("#btn_edit7<?php echo $md; ?>").click(function(){
    $(".editsw<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn7<?php echo $md ?>").show();
    $("#canclebtn7<?php echo $md ?>").show();
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
    $( "#focussw<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id_sw; ?>&module=1&action=1";
  }
});
})
$("#canclebtn7<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".editsw<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn7<?php echo $md ?>").hide();
  $("#canclebtn7<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id_sw; ?>&module=1&action=1";
})
$(".save7<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".save7<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_search_warrant.php",
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
                
                
                window.location.href="home.php?datacase=<?php echo $case_id_sw; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>