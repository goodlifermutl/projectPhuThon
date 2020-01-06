<a name="หมายจับ"></a>
<br>
<br>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">หมายจับ</h1></p>
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
        
        $result_chk_arin = mysqli_query($con,"SELECT case_id_arr_info FROM arrest_info  WHERE case_id_arr_info = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data = mysqli_query($con,"SELECT  id_arr_info, court_name, date_arr_info, type_arr_info, victim_arr_info, villain_arr_info, victim_say_arr_info, vil_perpetrate_arr_info, id_vil_catch_arr_info, close_add_arr_info, send_to_arr_info, dl_arr_info, st_date_arr_info, end_date_arr_info, judge_name FROM arrest_info  WHERE case_id_arr_info = '$data'".mysqli_error($con));
        list($case_id_ob)=mysqli_fetch_row($result_chk_arin);
        $num_loop=mysqli_num_rows($result_data);
        // echo $data,$num_loop;
        if(empty($case_id_ob)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($id_arr_info,$court_name,$date_arr_info,$type_arr_info,$victim_arr_info,$villain_arr_info,$victim_say_arr_info,$vil_perpetrate_arr_info,$id_vil_catch_arr_info,$close_add_arr_info,$send_to_arr_info,$dl_arr_info,$st_date_arr_info,$end_date_arr_info,$judge_name)=mysqli_fetch_row($result_data)){

            if($type_arr_info == 1){
                $status1="selected";
                $status2="";
              }else if(($type_arr_info == 2)){
                $status2="selected";
                $status1="";
              }

        ?>
        
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">หมายจับ ฉบับที่ <?php echo $i; ?></label></b><button type="button" id="btn_edit2<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         
        </div>
        <div class="col-md">

    </div>
    <form class="save2<?php echo$i ?>" method="post" id="insertinfoarrest">
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">หมายจับที่ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="หมายจับที่"  id="focusarin<?php echo $i?>" value="<?php echo $id_arr_info ?>" name="info_arr_list[]" disabled>     
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อศาล : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="ชื่อศาล" value="<?php echo $court_name ?>" name="san_arr_info[]" disabled>
        </div>
            <div>
              <label class="col-sm col-form-label">วัน/เดือน/ปี : </label>
            </div>
        <div class="col-md">
            <input type="date" class="form-control editarin<?php echo $i; ?>" placeholder="วัน/เดือน/ปี" value="<?php echo $date_arr_info ?>" name="date_arr_info[]" disabled >
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ประเภทคดี : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select editarin<?php echo $i; ?>" id="" name="type_arr_info[]" disabled >
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1" <?php echo $status1 ?>>คดีเพ่ง</option>
                <option  value="2" <?php echo $status2 ?>>คดีอาญา</option>
                   
        </select>   
        </div>
        <div>
            <label class="col-sm col-form-label">ผู้ร้อง : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="ผู้ร้อง" value="<?php echo $victim_arr_info ?>" name="victim_ar_info[]" disabled>
        </div>
            <div>
              <label class="col-sm col-form-label">หมายถึง : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="หมายถึง" value="<?php echo $villain_arr_info ?>" name="villain_ar_info[]" disabled>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ด้วยผู้ร้องยื่นคำร้องว่า : </label>
        </div>
        <div class="col-md-10">
        <div class="input-group">
        <textarea class="form-control editarin<?php echo $i; ?>" aria-label="With textarea" value="" name="victim_arin_say[]" disabled><?php echo $victim_say_arr_info ?></textarea>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ซึ่งต้องหาว่ากระทำผิดฐาน : </label>
        </div>
        <div class="col-md-9">
        <div class="input-group">
        <textarea class="form-control editarin<?php echo $i; ?>" aria-label="With textarea" value="" name="villain_perpetrate_arin[]" disabled><?php echo $vil_perpetrate_arr_info ?></textarea>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div class="text-center">
        <h4>เพราะฉะนั้นให้ท่านจับตัว</h4>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
    <select class="custom-select " id="" name="vil_ar_info[]" required disabled >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                        $selected=$id_vil_catch_arr_info==$vil_idcard?"selected":"";
                        echo"<option value='$vil_idcard' $selected>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
        </div>
    </div>
    
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ใกล้เคียงพื้นที่ : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="ใกล้เคียงพื้นที่" value="<?php echo $close_add_arr_info ?>" name="vil_close_address[]" disabled >
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ไปส่งที่ : </label>
        </div>
        <div class="col-md-7">
            <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="ส่งตัวไปที่" value="<?php echo $send_to_arr_info ?>" name="vill_to_place[]" disabled>     
        </div>
        <div>
            <label class="col-sm col-form-label">ภายในอายุความ : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="ภายในอายุความ" value="<?php echo $dl_arr_info ?>" name="intime_ar_info[]" disabled>
        </div>
        <div>
            <label class="col-sm col-form-label">ปี </label>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">นับตั้งแต่วันที่ : </label>
        </div>
        <div class="col-md-5">
            <input type="date" class="form-control editarin<?php echo $i; ?>" placeholder="วัน/เดือน/ปี" value="<?php echo $st_date_arr_info ?>" name="stdate_ar_info[]" disabled>     
        </div>
        </div>
    </div>
    <p></p>
    <div class="text-center">
    <h5>เพื่อจะได้ดำเนินการตามกฎหมาย</h5>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">แต่ไม่เกินวันที่ : </label>
        </div>
        <div class="col-md-5">
            <input type="date" class="form-control editarin<?php echo $i; ?>" placeholder="วัน/เดือน/ปี" value="<?php echo $end_date_arr_info ?>" name="dl_ar_info[]" disabled>     
        </div>
        <div>
            <label class="col-sm col-form-label">ผู้พิพากษา : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control editarin<?php echo $i; ?>" placeholder="ชื่อผู้พิพากษา" value="<?php echo $judge_name ?>" name="judge_ar_info[]" disabled>     
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn2" id="savebtn2<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn2<?php echo $i; ?>">ยกเลิก</button></p>
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


$("#savebtn2<?php echo $md ?>").hide();
$("#canclebtn2<?php echo $md ?>").hide();

$("#btn_edit2<?php echo $md; ?>").click(function(){
    $(".editarin<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn2<?php echo $md ?>").show();
    $("#canclebtn2<?php echo $md ?>").show();
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
    $( "#focusarin<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id_ob; ?>&module=1&action=1";
  }
});
})
$("#canclebtn2<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".editarin<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn2<?php echo $md ?>").hide();
  $("#canclebtn2<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id_ob; ?>&module=1&action=1";
})
$(".save2<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".save2<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_arrest_info.php",
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
                
                
                window.location.href="home.php?datacase=<?php echo $case_id_ob; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>