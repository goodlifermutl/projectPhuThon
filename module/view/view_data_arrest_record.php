<a name="บันทึกการจับกุม"></a>
<br>
<br>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">บันทึกการจับกุม</h1></p>
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
        
        $result_chk_arre= mysqli_query($con,"SELECT case_id  FROM arrest_record  WHERE case_id = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data_arre = mysqli_query($con,"SELECT arrest_no, por_jor_wor, ar_re_time, ar_re_typecase, ar_re_no, ar_re_acc, ar_re_address_save, ar_re_save_date, ar_re_save_catch, ar_re_address_catch, ar_re_location_ob, ar_re_say, ar_re_atcs, ar_re_depose, ar_re_location_place, ar_re_date_place FROM arrest_record  WHERE case_id = '$data'")or die("result_data_object sqli error".mysqli_error($con));
        list($case_id_arre)=mysqli_fetch_row($result_chk_arre);
        $num_loop=mysqli_num_rows($result_data_arre);
        // echo $data,$num_loop;
        if(empty($case_id_arre)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($arrest_no, $por_jor_wor,$ar_re_time,$ar_re_typecase,$ar_re_no,$ar_re_acc,$ar_re_address_save,$ar_re_save_date,$ar_re_save_catch,$ar_re_address_catch,$ar_re_location_ob,$ar_re_say,$ar_re_atcs,$ar_re_depose,$ar_re_location_place,$ar_re_date_place)=mysqli_fetch_row($result_data_arre)){
        //   echo $arrest_no, $por_jor_wor,$ar_re_time,$ar_re_typecase,$ar_re_no,$ar_re_acc,$ar_re_address_save,$ar_re_save_date,$ar_re_save_catch,$ar_re_address_catch
        //   ,$ar_re_location_ob,$ar_re_say,$ar_re_atcs,$ar_re_depose,$ar_re_location_place,$ar_re_date_place;
        if($ar_re_typecase == 1){
            $status1="selected";
            $status2="";
          }else if(($ar_re_typecase == 2)){
            $status2="selected";
            $status1="";
          }

        ?>
        
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">บันทึกการจับกุม ฉบับที่ <?php echo $i; ?></label></b><button type="button" id="btn_edit1<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         </div>
      

<form class="save1<?php echo$i ?>" method="post" id="insertrecord">
  <div class="col-md">
        <div class="form-row">
        <input type="hidden"  value="<?php echo $arrest_no ?>" name="no_ar_re[]">
        <div>
            <label class="col-form-label">ป.จ.ว.ข้อ : </label>
        </div>
        <div class="col-md-2">
        <input type="text" class="form-control edit<?php echo $i; ?>" id="focusarre<?php echo $i?>" value="<?php echo "$por_jor_wor" ?>" name="ar_porjorwor[]" disabled>
        </div>
        <div>
            <label class="col-form-label">เวลา : </label>
        </div>
        <div class="col-md-2">
            <input type="time" class="form-control edit<?php echo $i; ?>" id="" value="<?php echo "$ar_re_time" ?>" name="arrest_time[]" disabled>
        </div>
        <div>
            <label class="col-sm col-form-label">ประเภทคดี : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select edit<?php echo $i; ?>" id="" name="ar_typecase[]" disabled >
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1" <?php echo $status1 ?>>คดีเพ่ง</option>
                <option  value="2" <?php echo $status2 ?>>คดีอาญา</option>
                   
        </select>   
        </div>
        <div>
            <label class="col-form-label">ที่ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ประเภทคดีที่" id="arrest_aryaNo" value="<?php echo "$ar_re_no" ?>" name="arrest_No[]" disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">บัญชีของกลางลำดับที่ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control edit<?php echo $i; ?>" id="" placeholder="ชัญชีของกลางลำดับที่" value="<?php echo "$ar_re_acc" ?>" name="arrest_list[]" disabled >
        </div>
        <div>
            <label class="col-form-label">สถานที่ทำการบันทึก : </label>
        </div>
        <div class="col">
            <input type="text" class="form-control edit<?php echo $i; ?>" id="" placeholder="สถาานที่ทำการบันทึก" value="<?php echo "$ar_re_address_save" ?>" name="arrest_address_save[]" disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">วัน/เดือน/ปี ที่บันทึก : </label>
        </div>
        <div class="col-2">
            <input  type="date"  class="form-control edit<?php echo $i; ?>" id="dates" value="<?php echo "$ar_re_save_date" ?>" name="arrest_date_save[]" disabled/>
        </div>
        <div>
            <label class="col-form-label">วัน/เดือน/ปี ที่จับกุ : </label>
        </div>
        <div class="col-2">
            <input  type="date"  class="form-control edit<?php echo $i; ?>" id="dates" value="<?php echo "$ar_re_save_catch" ?>" name="arrest_date_catch[]" disabled/>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">สถานที่จับกุม ที่ : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control edit<?php echo $i; ?>" id="" placeholder="สถานที่จับกุม" value="<?php echo "$ar_re_address_catch" ?>" name="arrest_address_catch[]" disabled>
        </div>
        
        </div>
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <?php 
    $po=1;
    $police_result=mysqli_query($con," SELECT id_po_ca_ar, case_id, name_po_ar, rank_po_ar, police_arya_no FROM police_catch_arrest WHERE police_arya_no = '$ar_re_no'")or die("sql error!!!".mysqli_error($con));
    $loop_po=mysqli_num_rows($police_result);
    while(list($id_po_ca_ar,$case_id,$name_po_ar,$rank_po_ar,$police_arya_no)=mysqli_fetch_row($police_result)){
        $rank_re=mysqli_query($con,"SELECT rank_name FROM rank_police WHERE rank_id='$rank_po_ar'");
        list($namerank)=mysqli_fetch_row($rank_re);
    ?>
        <div>
        <label class="col-form-label">ชื่อตำรวจคนที่ <?php echo $po ?> : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" value="<?php echo $namerank.$name_po_ar ?>" readonly>
        </div> 
        <input type="hidden"  value="<?php echo $id_po_ca_ar ?>" name="arre_po_id[]">
        <input type="hidden"  value="<?php echo $loop_po ?>" name="arre_po_loop[]">
       <?php $po++; } ?>
        
    </div>
    </div>
    <hr>
    <p></p>
    <div class="col-auto" id="loadpol">
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">

    <?php
    $vi=1;
    $vil_result=mysqli_query($con," SELECT title_name,villain_name,villain_lastname,villain_idcard FROM villain WHERE villain_arya_no = '$ar_re_no'")or die("sql error!!!".mysqli_error($con));
    $loop_vil=mysqli_num_rows($vil_result);
    while(list($title_name,$villain_name,$villain_lastname,$villain_idcard)=mysqli_fetch_row($vil_result)){
      
    ?>
        <div>
        <label class="col-form-label">ชื่อผู้ต้องหาคนที่ <?php echo $vi ?> : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" value="<?php echo $title_name.$villain_name.$villain_lastname ?>" readonly>
        </div> 
        <input type="hidden"  value="<?php echo $villain_idcard ?>" name="arre_vil_idcard[]">
        <input type="hidden"  value="<?php echo $loop_vil ?>" name="arre_vil_loop[]">
       <?php $vi++; } ?>

     
    </div>
    </div>
    <hr>
    <p></p>
    <div class="col-auto" id="loadvill">
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">

    <?php
    $ob=1;
    $ob_result=mysqli_query($con," SELECT ob_no,id_object,object_name FROM object_case WHERE ob_arya_no = '$ar_re_no'")or die("sql error!!!".mysqli_error($con));
    $loop_ob=mysqli_num_rows($ob_result);
    while(list($ob_no,$id_object,$object_name)=mysqli_fetch_row($ob_result)){
      
    ?>
        <div>
        <label class="col-form-label">ชื่อผู้ต้องหาคนที่ <?php echo $ob ?> : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" value="<?php echo "ID".$id_object."ชื่อ".$object_name?>" readonly>
        </div> 
        <input type="hidden"  value="<?php echo $ob_no ?>" name="arre_ob_id[]">
        <input type="hidden"  value="<?php echo $loop_ob ?>" name="arre_ob_loop[]">
       <?php $ob++; } ?>

    </div>
    </div>
    <hr>
    <p></p>
    <div class="col-auto" id="loadobx">
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
    <label class="col-form-label">ตำแหน่งที่พบของกลาง : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control edit<?php echo $i; ?>" id="exampleFormControlTextarea1" rows="3" value="" name="arrest_location_ob[]" disabled><?php echo "$ar_re_location_ob" ?></textarea>
    </div>
    <div>
    <label class="col-form-label">โดยกล่าวหาว่า : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control edit<?php echo $i; ?>" id="exampleFormControlTextarea1" rows="3" value="" name="arrest_say[]" disabled><?php echo "$ar_re_say" ?></textarea>
    </div>
    </div>
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
    <label class="col-form-label">พฤติการรมกล่าวคือ : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control edit<?php echo $i; ?>" id="exampleFormControlTextarea1" rows="3" value="" name="arrest_atcs[]" disabled><?php echo "$ar_re_atcs" ?></textarea>
    </div>
    <div>
    <label class="col-form-label">ขณะจับกุมผู้ต้องหาได้ทราบข้อกล่าวหาแล้วให้การ : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control edit<?php echo $i; ?>" id="exampleFormControlTextarea1" rows="3" value="" name="arrest_depors[]" disabled><?php echo "$ar_re_depose" ?></textarea>
    </div>
    </div>
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
    <label class="col-form-label">เหตุเกิดขึ้นที่ : </label>
    </div>
    <div class="col-md-7">
    <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="เหตุเกิดขึ้นที่" id="CatchCount" value="<?php echo "$ar_re_location_place" ?>" name="arrest_place[]" disabled>
    </div>
    <div>
    <label class="col-form-label">วันที่เกิดเหตุ : </label>
    </div>
    <div class="col-md">
    <input type="date" class="form-control edit<?php echo $i; ?>" id="" value="<?php echo "$ar_re_date_place" ?>" name="arrest_date_place[]" disabled>
    </div>
    </div>
    </div>
    <p></p>
   <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn1" id="savebtn1<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn1<?php echo $i; ?>">ยกเลิก</button></p>
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


$("#savebtn1<?php echo $md ?>").hide();
$("#canclebtn1<?php echo $md ?>").hide();

$("#btn_edit1<?php echo $md; ?>").click(function(){
    $(".edit<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn1<?php echo $md ?>").show();
    $("#canclebtn1<?php echo $md ?>").show();
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
    $( "#focusarre<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id_arre; ?>&module=1&action=1";
  }
});
})
$("#canclebtn1<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".edit<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn1<?php echo $md ?>").hide();
  $("#canclebtn1<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id_arre; ?>&module=1&action=1";
})
$(".save1<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".save1<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_arrest_record.php",
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
                
                
                window.location.href="home.php?datacase=<?php echo $case_id_arre; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>