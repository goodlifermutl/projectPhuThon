<a name="ผู้เสียหาย"></a>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">ผู้เสียหาย</h1></p>
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

        $result_chk_victim = mysqli_query($con,"SELECT case_id FROM victim  WHERE case_id = '$data'")or die("resualt_chk_victim sqli error".mysqli_error($con));
        $result_victim = mysqli_query($con,"SELECT vm.title_name, vm.victim_name,vm.victim_lastname,vm.victim_sex,vm.victim_idcard,vm.victim_address,ed.edu_name,vm.victim_image,vm.victim_race,vm.victim_nationality,vm.victim_career FROM victim as vm  INNER JOIN education as ed ON vm.victim_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_victim sqli error".mysqli_error($con));
        list($case_id)=mysqli_fetch_row($result_chk_victim);
        $num_loop=mysqli_num_rows($result_victim);
        if(empty($case_id)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($title_name,$victim_name,$victim_lastname,$victim_sex,$victim_idcard,$victim_address,$victim_education,$victim_image,$victim_race,$victim_nationality,$victim_careen)=mysqli_fetch_row($result_victim)){
    
          if($victim_sex == 1){
            $sex_name = "ชาย";
            $sex1="selected";
            $sex2="";
          }else{
            $sex_name = "หญิง";
            $sex1="";
            $sex2="selected";
          }
        ?>
        <form class="victim<?php echo$i ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        <a name="<?php echo $victim_idcard ?>"></a>
        <a name="<?php echo $victim_name ?>"></a> 
        <a name="<?php echo $victim_lastname ?>"></a> 
         <div class="col-md">
         <b><label for="formGroupExampleInput">ผู้เสียหาย คนที่ <?php echo $i; ?></label></b><button type="button" id="victim_test<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         <p><img src="image/<?php echo $victim_image; ?>" class="img-fluid mx-auto d-block rounded-circle victimpic" alt="Responsive image" width="128";height="128"; id="victimpic<?php echo $i; ?>"></p>
          <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">รหัสคดี : </label>
          </div>
          <div class="col-2">
              <input type="hidden" value="<?php echo$i; ?>" name="victim_i[]?>">
              <input type="text" class="form-control" placeholder="เลขคดี" value="<?php echo $case_id; ?>"  name="victim_case[]" readonly required>
            </div>
            <div>
              <label class="col-sm col-form-label">ชื่อ : </label>
            </div>
            <div class="col-1">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" id="focus<?php echo $i?>" name="victim_titlename[]" disabled required>
              
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ชื่อ" value="<?php echo $victim_name; ?>" name="victim_name[]"disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="นามสกุล" value="<?php echo $victim_lastname; ?>" name="victim_lastname[]" disabled required>
            </div>
            </div>
          </div>
          
          <p></p>
          <div class="col-md">
          <div class="form-row">
            <div>
              <label class="col-sm col-form-label">เชื้อชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="<?php echo $victim_race; ?>" name="victim_race[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="สัญชาติ" value="<?php echo $victim_nationality; ?>" name="victim_nationality[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="อาชีพ" value="<?php echo $victim_careen; ?>" name="victim_careen[]" disabled required>
            </div>
          </div>
          </div>
          
        <p></p>

        <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">เลขบัตรประจำตัวประชาชน : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" id="victim_idcard<?php echo $i; ?>" name="victim_idcard[]" data-idcard="<?php echo $victim_idcard ?>"  value="<?php echo $victim_idcard; ?>"readonly required>
            </div>
            <div>
              <label class="col-sm col-form-label" >ระดับการศึกษา : </label>
            </div>
            <div class="col-3">
              <select class="custom-select edit<?php echo $i; ?>" id="" name="victim_edu[]" disabled required>
                   < <?php $result_edu = mysqli_query($con,"SELECT * FROM education")or die("select education error".mysqli_error($con));
                        while(list($edu_id,$edu_name)=mysqli_fetch_row($result_edu)){
                          $selected=$edu_name==$victim_education?"selected":"";
                          echo"<option value='$edu_id' $selected>$edu_name</option>";
                        }
                   ?> 
                   
                </select>
            </div>
            <div>
              <label class="col-sm col-form-label">เพศ : </label>
              
            </div>
            <div class="col-md">
              <select class="custom-select edit<?php echo $i; ?>" id="" name="victim_sex[]" disabled required>
                    <option value="1" <?php echo$sex1 ?>>ชาย</option>
                    <option value="2" <?php echo$sex2 ?>>หญิง</option>
                </select>
            </div>
          </div>
        </div>

            <p></p>
            <div class="col-md">
            <div class="form-row">
            <div>
              <label class="col-sm col-form-label">ที่อยู่ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ที่อยู่" value="<?php echo $victim_address; ?>" name="victim_address[]" disabled required>
            </div>
            </div>
          </div>
          <p></p>
          <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success save" id="save<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="cancle<?php echo $i; ?>">ยกเลิก</button></p>
            </div>
        </div>
        <hr>
      </form>

      <div class="modal fade" id="victim_pic<?php echo $i; ?>" role="dialog">
        <div class="modal-dialog modal-auto"  role="document">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-content">
          <img src="image/<?php echo $victim_image; ?>" class="img-fluid mx-auto d-block" ></p>
          </div>
        </div>
      </div>
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
$("#victimpic<?php echo $md ?>").click(function(){
    $("#victim_pic<?php echo $md ?>").modal();
  });
var id<?php echo $md;?> = $("#id<?php echo $md; ?>").val()
$('.victim<?php echo$md; ?>').validate({ 
								
  rules: {
    usrname:{
    minlength:6
    },
    psw: { 
    minlength:8
    },
    psw2: {
    minlength:8,
    equalTo: ".password"
    },
    idcard: {
    minlength:13,
    maxlength:13
            }
        }
        });
$("#save<?php echo $md ?>").hide();
$("#cancle<?php echo $md ?>").hide();

$("#victim_test<?php echo $md; ?>").click(function(){
    $(".edit<?php echo $md; ?>").prop("disabled", false);
    $("#save<?php echo $md ?>").show();
    $("#cancle<?php echo $md ?>").show();
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
    $( "#focus<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
  }
});
})
$("#cancle<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".edit<?php echo $md; ?>").prop("disabled", true);
 $("#save<?php echo $md ?>").hide();
  $("#cancle<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
})
$(".victim<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".victim<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_victim.php",
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