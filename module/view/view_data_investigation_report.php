<a name="รายงานการสอบสวน"></a>
<br>
<br>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">รายงานการสอบสวน</h1></p>
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
        
        $result_chk_inr = mysqli_query($con,"SELECT ir_case FROM investigation_report  WHERE ir_case = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data_inr = mysqli_query($con,"SELECT no_ir, ir_casetype, ir_order, ir_policestation, ir_offer, vic_ir, vil_ir, ir_charge, ir_date, ir_district, ir_price, ir_wound, ir_complaint, ir_control, ir_fact FROM investigation_report  WHERE ir_case = '$data'".mysqli_error($con));
        list($case_id_inr)=mysqli_fetch_row($result_chk_inr);
        $num_loop=mysqli_num_rows($result_data_inr);
        // echo $data,$num_loop;
        if(empty($case_id_inr)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($no_ir,$ir_casetype,$ir_order,$ir_policestation,$ir_offer,$vic_ir,$vil_ir,$ir_charge,$ir_date,$ir_district,$ir_price,$ir_wound,$ir_complaint,$ir_control,$ir_fact)=mysqli_fetch_row($result_data_inr)){

            if($ir_casetype == 1){
                $status1="selected";
                $status2="";
              }else if($ir_casetype == 2){
                $status2="selected";
                $status1="";
              }


        ?>
        
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">รายงานการสอบสวน ฉบับที่ <?php echo $i; ?></label></b><button type="button" id="btn_edit4<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         
        </div>
        <div class="col-md">

    </div>
    <form class="save4<?php echo$i ?>" method="post" id="insertvictim">
    <input type="hidden" id="" value="<?php echo $no_ir ?>" name="ir_no_id[]">
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ประเภทคดี : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select editinr<?php echo $i; ?>" id="focusinr<?php echo $i ?>" name="ir_Casetype[]"  required disabled>
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1" <?php echo  $status1 ?>>คดีเพ่ง</option>
                <option  value="2" <?php echo  $status2 ?>>คดีอาญา</option>

        </select>
        </div>
        <div>
            <label class="col-sm col-form-label">ที่ : </label>
        </div>
        <div class="col-md-1">
            <input type="text" class="form-control editinr<?php echo $i; ?>" placeholder="ที่" value="<?php echo $ir_order ?>" name="ir_order[]"  required disabled>
        </div>
            <div>
              <label class="col-sm col-form-label">สถานีตำรวจ : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control editinr<?php echo $i; ?>" placeholder="ที่อยู่สถาณีตำรวจ" value="<?php echo $ir_policestation ?>" name="ir_Policestation[]"  required disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">เสนอ : </label>
        </div>
        <div class="col-md-10">
        <div class="input-group">
        <textarea class="form-control editinr<?php echo $i; ?>" aria-label="With textarea" value="" name="ir_offer[]" disabled><?php echo $ir_offer ?></textarea>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div class="text-center">
        <h4>คดีระหว่าง</h4>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ผู้กล่าวหา </label>
        </div>
        <div class="col-md">
    <select class="custom-select editinr<?php echo $i; ?>" id="" name="vic_ir[]" required disabled>
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT victim_idcard,title_name,victim_name,victim_lastname FROM victim WHERE case_id='$case_id_inr'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                        $selectd=$vil_idcard==$vic_ir?"selected":"";
                     echo"<option value='$vil_idcard' $selectd>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
            </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ผู้ต้องหา </label>
        </div>
        <div class="col-md">
    <select class="custom-select editinr<?php echo $i; ?>" id="" name="vil_ir[]" required disabled >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$case_id_inr'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                        $selectd=$vil_idcard==$vil_ir?"selected":"";
                     echo"<option value='$vil_idcard' $selectd>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
            </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ข้อหา : </label>
        </div>
        <div class="col-md">
        <div class="input-group">
        <textarea class="form-control editinr<?php echo $i; ?>" aria-label="With textarea" value="" name="ir_Charge[]"  disabled><?php echo $ir_charge ?></textarea>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">วันเวลาที่เกิดเหตุ : </label>
        </div>
        <div class="col-md">
        <input type="date" class="form-control editinr<?php echo $i; ?>" placeholder="วันเวลาที่เกิดเหตุ" value="<?php echo $ir_date ?>"  name="ir_date[]"  required disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ตำบลที่เกิดเหตุ : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control editinr<?php echo $i; ?>" placeholder="ตำบลที่เกิดเหตุ" value="<?php echo $ir_district ?>"  name="ir_district[]"  required disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ราคาทรัพย์ที่ถูกประทุษร้าย : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control editinr<?php echo $i; ?>" placeholder="ราคาทรัพย์ที่ถูกประทุษร้าย" value="<?php echo $ir_price ?>" name="ir_price[]"  required disabled>
        </div>
        <div>
            <label class="col-sm col-form-label">บาดแผล : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control editinr<?php echo $i; ?>" placeholder="บาดแผล" value="<?php echo $ir_wound ?>" name="ir_wound[]"  required disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">วันเวลาที่ร้องทุกข์หรือกล่าวโทษ : </label>
        </div>
        <div class="col-md-5">
            <input type="date" class="form-control editinr<?php echo $i; ?>" placeholder="วันเวลาที่ร้องทุกข์หรือกล่าวโทษ" value="<?php echo $ir_complaint ?>" name="ir_Complaint[]"  required disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">วันเวลาที่ผู้ต้องหาถูก ควบคุม/ขัง/ปล่อยชั่วคราว : </label>
        </div>
        <div class="col-md-5">
            <input type="date" class="form-control editinr<?php echo $i; ?>" placeholder="ควบคุม/ขัง/ปล่อยชั่วคราว" value="<?php echo $ir_control ?>" name="ir_control[]"  required disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ข้อเท็จจริงและความเห็น : </label>
        </div>
        <div class="col-md">
        <div class="input-group">
        <textarea class="form-control editinr<?php echo $i; ?>" aria-label="With textarea"name="ir_fact[]"  disabled><?php echo $ir_fact ?></textarea>
        </div>
        </div>
        </div>
    </div>
    <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn4" id="savebtn4<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn4<?php echo $i; ?>">ยกเลิก</button></p>
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


$("#savebtn4<?php echo $md ?>").hide();
$("#canclebtn4<?php echo $md ?>").hide();

$("#btn_edit4<?php echo $md; ?>").click(function(){
    $(".editinr<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn4<?php echo $md ?>").show();
    $("#canclebtn4<?php echo $md ?>").show();
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
    $( "#focusinr<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id_inr; ?>&module=1&action=1";
  }
});
})
$("#canclebtn4<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".editinr<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn4<?php echo $md ?>").hide();
  $("#canclebtn4<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id_inr; ?>&module=1&action=1";
})
$(".save4<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".save4<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_inves_report.php",
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
                
                
                window.location.href="home.php?datacase=<?php echo $case_id_inr; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>