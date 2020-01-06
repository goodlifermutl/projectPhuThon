<a name="คำให้การผู้ต้องหา"></a>
<br>
<br>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">คำให้การผู้ต้องหา</h1></p>
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
        
        $result_chk_wv = mysqli_query($con,"SELECT wv_case FROM words_villain  WHERE wv_case = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data_wv = mysqli_query($con,"SELECT wv_no, wv_testimony, wv_are, wv_phone, wv_card, wv_output1, wv_output2, wv_last, wv_police, wv_station, wv_date, wv_accused, wv_suspect, wv_before, wv_investigate, wv_name, wv_age, wv_race, wv_nationality, wv_religion, wv_address, wv_headman, wv_villageheadmane, wv_farthername, wv_mothername, wv_birthday, wv_official FROM words_villain  WHERE wv_case = '$data'".mysqli_error($con));
        list($case_id_wv)=mysqli_fetch_row($result_chk_wv);
        $num_loop=mysqli_num_rows($result_data_wv);
        // echo $data,$num_loop;
        if(empty($case_id_wv)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($wv_no,$wv_testimony,$wv_are,$wv_phone,$wv_card,$wv_output1,$wv_output2,$wv_last,$wv_police,$wv_station,$wv_date,$wv_accused,$wv_suspect,$wv_before,$wv_investigate,$wv_name,$wv_age,$wv_race,$wv_nationality,$wv_religion,$wv_address,$wv_headman,$wv_villageheadmane,$wv_farthername,$wv_mothername,$wv_birthday,$wv_official)=mysqli_fetch_row($result_data_wv)){

          // if($ir_casetype == 1){
            //     $status1="selected";
            //     $status2="";
            //   }else if($ir_casetype == 2){
            //     $status2="selected";
            //     $status1="";
            //   }

            if($sv_status_sent == 1){
                $rcheck1="checked";
                $rcheck2="";
              }else if($sv_status_sent == 2){
                $rcheck2="checked";
                $rcheck1="";
              }

              if($rw_cherk1 == "true1"){
                $check1="checked";
                
              }if($rw_cherk2 == "true2"){
                $check2="checked";
                
              }if($rw_cherk1!="true1"){
                $check1="";
                
              }if($rw_cherk2!="true2"){
                $check2="";
              }


        ?>
        
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">คำให้การผู้ต้องหา ฉบับที่ <?php echo $i; ?></label></b><button type="button" id="btn_edit6<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         
        </div>

    <form class="save6<?php echo$i ?>" method="post" id="insertWordsVill">
    <input type="hidden"  value="<?php echo $wv_no  ?>" name="wv_no_id[]">
    <input type="hidden"  value="<?php echo $wv_card  ?>" name="wv_idcard[]">
<div class="col">
  <div class="form-group row">
    <label class="col-form-label">คำให้การของ : </label>
    <div class="col-md">
    <select class="custom-select " id="seleCard"  name="wv_testimony[]" required disabled >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                        $selected=$wv_testimony==$vil_idcard?"selected":"";
                        echo"<option value='$vil_idcard' $selected>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
    </div>
    <label class="col-form-label">เป็น : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="focuswv<?php echo $i ?>" value="<?php echo $wv_are  ?>" name="wv_are[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">โทรศัพท์ติดต่อ : </label>
    <div class="col-2">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_phone  ?>" name="wv_phone[]" disabled>
    </div>
    <label class="col-form-label">บัตรประจำตัวประชาชน : </label>
    <div class="col-md">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_testimony  ?>" readonly disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ออก ณ : </label>
    <div class="col-4">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_output1  ?>" name="wv_output1[]" disabled>
    </div>
    <label class="col-form-label">ออกเมื่อ : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_output2  ?>" name="wv_output2[]" disabled>
    </div>
    <label class="col-form-label">หมดอายุ : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_last  ?>" name="wv_last[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ร.ต.ท. : </label>
    <div class="col-6">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_police  ?>" name="wv_police[]" disabled>
    </div>
    <label class="col-form-label">บันทึก  </label>
  </div>
  <h3 class="text-center">บันทึกคำให้การของผู้ต้องหา</h3>
  <p></p>
  <div class="form-group row">
    <label class="col-form-label">สถานีตำรวจ : </label>
    <div class="col-7">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_station  ?>" name="wv_station[]" disabled>
    </div>
    <label class="col-form-label">วัน/เดือน/ปี : </label>
    <div class="col-3">
    <input type="date" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_date  ?>" name="wv_date[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้กล่าวหา : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_accused  ?>" name="wv_accused[]" disabled>
    </div>
    <label class="col-form-label">ผู้ต้องหา : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_suspect  ?>" name="wv_suspect[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ต่อหน้า : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_before  ?>" name="wv_before[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">สอบสวนที่ : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_investigate  ?>" name="wv_investigate[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ชื่อ : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_name  ?>" name="wv_name[]" disabled>
    </div>
    <label class="col-form-label">อายุ : </label>
    <div class="col-3">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_age  ?>" name="wv_age[]" disabled>
    </div>
    <label class="col-form-label">ปี</label>
    &nbsp;<label class="col-form-label">เชื้อชาติ : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_race  ?>" name="wv_race[]" disabled>
    </div>
  </div>
<div class="form-group row">
    <label class="col-form-label">สัญชาติ : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_nationality  ?>"  name="wv_nationality[]" disabled>
    </div>
    <label class="col-form-label">ศาสนา : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_religion  ?>" name="wv_religion[]" disabled>
    </div>
</div>
<h3 class="text-center">----------------------------------------------------------------------------</h3>
<div class="form-group row">
    <label class="col-form-label">ตั้งบ้านเรือนอยู่ที่ : </label>
    <div class="col">
    <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_address  ?>" name="wv_address[]" disabled>
    </div>
  </div>
  <div class="form-group row">
      <label class="col-form-label">ชื่อผู้ใหญ่บ้าน : </label>
      <div class="col">
      <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_headman  ?>" name="wv_headman[]" disabled>
      </div>
      <label class="col-form-label">ชื่อกำนัน : </label>
      <div class="col">
      <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_villageheadmane  ?>" name="wv_villageheadmane[]" disabled>
      </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label">ชื่อบิดา : </label>
        <div class="col">
        <input type="text" class="form-control editwv<?php echo $i; ?>" id=""  value="<?php echo $wv_farthername  ?>" name="wv_farthername[]" disabled>
        </div>
        <label class="col-form-label">ชื่อมารดา : </label>
        <div class="col">
        <input type="text" class="form-control editwv<?php echo $i; ?>" id=""  value="<?php echo $wv_mothername  ?>" name="wv_mothername[]" disabled>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-form-label">เกิดที่ : </label>
          <div class="col">
          <input type="text" class="form-control editwv<?php echo $i; ?>" id="" value="<?php echo $wv_birthday  ?>" name="wv_birthday[]" disabled>
          </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label">เจ้าพนักงานได้แจ้งแก่ข้าพเจ้าว่า ข้าพเจ้าต้องหาว่า : </label>
            <div class="col">
          <textarea class="form-control editwv<?php echo $i; ?>" aria-label="With textarea" value="" name="wv_official[]" disabled ><?php echo $wv_official  ?></textarea>
            </div>
          </div>
<p></p>
    <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn6" id="savebtn6<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn6<?php echo $i; ?>">ยกเลิก</button></p>
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


$("#savebtn6<?php echo $md ?>").hide();
$("#canclebtn6<?php echo $md ?>").hide();

$("#btn_edit6<?php echo $md; ?>").click(function(){
    $(".editwv<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn6<?php echo $md ?>").show();
    $("#canclebtn6<?php echo $md ?>").show();
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
    $( "#focuswv<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id_wv; ?>&module=1&action=1";
  }
});
})
$("#canclebtn6<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".editwv<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn6<?php echo $md ?>").hide();
  $("#canclebtn6<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id_wv; ?>&module=1&action=1";
})
$(".save6<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".save6<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_words_villain.php",
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
                
                
                window.location.href="home.php?datacase=<?php echo $case_id_wv; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>