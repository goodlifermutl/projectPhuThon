<a name="หมายเรียกผู้ต้องหา"></a>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">หมายเรียกผู้ต้องหา</h1></p>
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
        
        $result_chk_sv = mysqli_query($con,"SELECT sv_case FROM summon_villain  WHERE sv_case = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data_sv = mysqli_query($con,"SELECT no_sv, sv_suspect, sv_warrant, sv_date, sv_accused, sv_villain, sv_refer, sv_address, sv_headman, sv_village, sv_hey, sv_text, sv_goto, sv_staff, sv_datetime, sv_staff2, sv_position, sv_datetime2, sv_policename, sv_set, sv_datetime3, sv_recipient, sv_sender, sv_policename4, sv_position2, sv_policename5, sv_address2, sv_status_sent, sv_sign, sv_position3 FROM summon_villain  WHERE sv_case = '$data'".mysqli_error($con));
        list($case_id_sv)=mysqli_fetch_row($result_chk_sv);
        $num_loop=mysqli_num_rows($result_data_sv);
        // echo $data,$num_loop;
        if(empty($case_id_sv)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($no_sv,$sv_suspect,$sv_warrant,$sv_date,$sv_accused,$sv_villain,$sv_refer,$sv_address,$sv_headman,$sv_village,$sv_hey,$sv_text,$sv_goto,$sv_staff,$sv_datetime,$sv_staff2,$sv_position,$sv_datetime2,$sv_policename,$sv_set,$sv_datetime3,$sv_recipient,$sv_sender,$sv_policename4,$sv_position2,$sv_policename5,$sv_address2,$sv_status_sent,$sv_sign,$sv_position3)=mysqli_fetch_row($result_data_sv)){

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


        ?>
        
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">หมายเรียกผู้ต้องหา ฉบับที่ <?php echo $i; ?></label></b><button type="button" id="btn_edit5<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         
        </div>
        <div class="col-md">

    </div>
    <form class="save5<?php echo$i ?>" method="post" id="insertSumVil">
    <input type="hidden"  value="<?php echo $no_sv ?>" name="sv_no_id[]">
<div class="col">
  <div class="form-group row">
    <label class="col-form-label">หมายเรียกผู้ต้องหาครั้งที่ : </label>
    <div class="col-2">
    <input type="text" class="form-control editsv<?php echo $i; ?>" id="focussv<?php echo $i ?>" value="<?php echo $sv_suspect ?>" name="sv_suspect[]" disabled>
    </div>
    <label class="col-form-label">สถานที่ออกหมาย : </label>
    <div class="col-3">
    <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_warrant ?>" name="sv_warrant[]" disabled>
    </div>
    <label class="col-form-label">ออกหมายวันที่่ : </label>
    <div class="col-md">
    <input type="date" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_date ?>" name="sv_date[]" disabled>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้กล่าวหา : </label>
    <div class="col-5">
    <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_accused ?>" name="sv_Accused[]" disabled>
    </div>
    <div class="col-md">
    <select class="custom-select " id="" name="sv_villain" required disabled >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                        $selected=$sv_villain==$vil_idcard?"selected":"";
                        echo"<option value='$vil_idcard' $selected>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
    </div>
</div>
<div class="form-group row">
  <label class="col-form-label">หมายมายัง : </label>
  <div class="col-5">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_refer ?>" name="sv_Refer[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ที่อยู่ : </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_address ?>" name="sv_address[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ผู้ใหญ่บ้าน : </label>
  <div class="col-5">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_headman ?>" name="sv_Headman[]"disabled>
  </div>
  <label class="col-form-label">กำนัน : </label>
  <div class="col-5">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_village ?>" name="sv_village[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ด้วยเหตุที่ท่านต้องหาว่า : </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_hey ?>" name="sv_Hey[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ฉะนั้นให้ : </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_text ?>" name="sv_text[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ไป ณ ที่  : </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_goto ?>" name="sv_goto[]" disabled>
  </div>
  <label class="col-form-label">พบ : </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_staff ?>" name="sv_staff[]" disabled>
  </div>
  <label class="col-form-label">พนักงานสอบสวนเจ้าของคดี</label>
</div>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-md">
  <input type="datetime-local" class="form-control editsv<?php echo $i; ?>"  value="<?php echo $sv_datetime ?>" id=""name="sv_datetime[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ ) : </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_staff2 ?>" name="sv_staff2[]" disabled>
  </div>
  <label class="col-form-label">ผู้ออกหมาย</label>
  &nbsp;<label class="col-form-label">ตำแหน่ง : </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_position ?>" name="sv_position[]" disabled>
  </div>
</div>
  <h3 class="text-center">ใบรับหมายตำรวจ</h3>
<p></p>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-md">
  <input type="datetime-local" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_datetime2 ?>" name="sv_datetime2[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ข้าพเจ้า : </label>
  <div class="col-md">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_policename ?>" name="sv_policename[]" disabled>
    </div>
    <label class="col-form-label">ได้รับหมายเรียกของพนักงานตำรวจ</label>
</div>
<div class="form-group row">
  <label class="col-form-label">ซึ่งกำหนดให้ข้าพเจ้าไปยัง: </label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_set ?>" name="sv_set[]" disabled>
    </div>
</div>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-md">
  <input type="datetime-local " class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_datetime3 ?>" name="sv_datetime3[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_recipient ?>" name="sv_Recipient[]" disabled>
  </div>
  <label class="col-form-label">ผู้รับหมาย</label>
    &nbsp;<label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_sender ?>" name="sv_Sender[]" disabled>
  </div>
  <label class="col-form-label">ผู้ส่งหมาย</label>
</div>
<h3 class="text-center">บันทึกหลังหมาย </h3>
<p></p>
<div class="form-group row">
  <label class="col-form-label">ข้าพเจ้า ( ยศ ชื่อผู้ส่งหมาย )</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_policename4 ?>" name="sv_policename4[]" disabled>
  </div>
  <label class="col-form-label">ตำแหน่ง</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_position2 ?>" name="sv_position2[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ได้มาดำเนินการส่งหมายเรียกให้กับ</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_policename5 ?>" name="sv_policename5[]" disabled>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ที่อยู่</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_address2 ?>" name="sv_address2[]" disabled>
  </div>
</div>
<div class="form-group row">
  <div class="form-check">
    <label class="form-check-label " for="defaultCheck1">ปรากฏผลส่งหมาย ดังนี้</label>
      &nbsp;  &nbsp;  &nbsp;<input class="form-check-input editsv<?php echo $i; ?>" type="radio" value="1" id="defaultCheck1"name="exampleRadios[]" <?php echo $rcheck1 ?> disabled>
    <label class="form-check-label" for="defaultCheck1">ส่งได้และผู้ต้องหารับทราบกำหนดนัดแล้ว</label>
    &nbsp;  &nbsp;  &nbsp;<input class="form-check-input editsv<?php echo $i; ?>" type="radio"  value="2" id="defaultCheck2"name="exampleRadios[]" <?php echo $rcheck2 ?>  disabled>
    <label class="form-check-label " for="defaultCheck1">ส่งไม่ได้</label>
</div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_sign ?>" name="sv_sign[]" disabled>
  </div>
  <label class="col-form-label">ผู้ส่งหมาย</label>
    &nbsp;<label class="col-form-label">ตำแหน่ง</label>
  <div class="col">
  <input type="text" class="form-control editsv<?php echo $i; ?>" id="" value="<?php echo $sv_position3 ?>" name="sv_position3[]" disabled>
  </div>
</div>
<p></p>
    <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn5" id="savebtn5<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn5<?php echo $i; ?>">ยกเลิก</button></p>
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


$("#savebtn5<?php echo $md ?>").hide();
$("#canclebtn5<?php echo $md ?>").hide();

$("#btn_edit5<?php echo $md; ?>").click(function(){
    $(".editsv<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn5<?php echo $md ?>").show();
    $("#canclebtn5<?php echo $md ?>").show();
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
    $( "#focussv<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id_sv; ?>&module=1&action=1";
  }
});
})
$("#canclebtn5<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".editsv<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn5<?php echo $md ?>").hide();
  $("#canclebtn5<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id_sv; ?>&module=1&action=1";
})
$(".save5<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".save5<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_summon_villain.php",
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
                
                
                window.location.href="home.php?datacase=<?php echo $case_id_sv; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>