<a name="ผู้ต้องหา"></a>
     <div class="villain">
     <p><h1 class="text-center">ผู้ต้องหา</h1></p>
     

      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];

        $sex_name;
        $i=1;

        $result_chk_villain = mysqli_query($con,"SELECT case_id FROM villain WHERE case_id = '$data'")or die("resualt_villain sqli error".mysqli_error($con));
        $result_villain = mysqli_query($con,"SELECT vl.title_name,vl.villain_name,vl.villain_lastname,vl.villain_sex,vl.villain_idcard,vl.villain_address,ed.edu_name,vl.villain_image,vl.villain_race,vl.villain_nationality,vl.villain_career FROM villain as vl INNER JOIN education as ed ON vl.villain_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_villain sqli error".mysqli_error($con));

        list($case_id)=mysqli_fetch_row($result_chk_villain);
        if(empty($case_id)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else{
        while(list($title_name,$villain_name,$villain_lastname,$villain_sex,$villain_idcard,$villain_address,$villain_education,$villain_image,$villain_race,$villain_nationality,$villain_career)=mysqli_fetch_row($result_villain)){

          if($villain_sex == 1){
            $sex_name = "ชาย";
          }else{
            $sex_name = "หญิง";
          }
        ?>
        <form class="villain<?php echo$i ?>" method="post" enctype="multipart/form-data">
         <div class="col-md">
          <b><label for="formGroupExampleInput">ผู้ต้องหา คนที่ <?php echo $i; ?></label></b><button type="button" id="villain_test<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
          <p><img src="image/<?php echo $villain_image; ?>" class="img-fluid mx-auto d-block rounded-circle vill_pic" alt="Responsive image" width="128";height="128"; id="vill_pic<?php echo $i; ?>"> </p>
          <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">รหัสคดี : </label>
          </div>
          <div class="col-2">
              <input type="text" class="form-control" placeholder="รหัสคดี <?php echo $case_id; ?>" value="<?php echo $case_id; ?>" name="villain_case[]" readonly required>
            </div>
            <div>
              <label class="col-sm col-form-label">ชื่อ : </label>
            </div>
            <div class="col-1">
              <input type="text" class="form-control edit_vill<?php echo $i; ?>" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" name="villain_title[]" disabled required>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit_vill<?php echo $i; ?>" placeholder="ชื่อ" value="<?php echo $villain_name; ?>" name="villain_name[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit_vill<?php echo $i; ?>" placeholder="นามสกุล" value="<?php echo $villain_lastname; ?>" name="villain_lastname[]" disabled required>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="<?php echo $villain_race; ?>" name="villain_race[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit_vill<?php echo $i; ?>" placeholder="สัญชาติ" value="<?php echo $villain_nationality; ?>" name="villain_nationality[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control edit_vill<?php echo $i; ?>" placeholder="อาชีพ" value="<?php echo $villain_career; ?>" name="villain_career[]" disabled required>
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
                  <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo $villain_idcard; ?>" name="villain_idcard[]" disabled required>
                </div>
                <div>
                  <label class="col-sm col-form-label">ระดับการศึกษา : </label>
                </div>
                <div class="col-md">
                <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_edu[]" disabled required>
                   < <?php $result_edu = mysqli_query($con,"SELECT * FROM education")or die("select education error".mysqli_error($con));
                        while(list($edu_id,$edu_name)=mysqli_fetch_row($result_edu)){
                          $selected=$edu_name==$villain_education?"selected":"";
                          echo"<option value='$edu_id' $selected>$edu_name</option>";
                        }
                   ?> 
                   
                </select>
                </div>
                <div>
                  <label class="col-sm col-form-label">เพศ : </label>
                </div>
                <div class="col-md">
                <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_sex[]" disabled required>
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
            <input type="text" class="form-control edit_vill<?php echo $i; ?>" placeholder="ที่อยู่" value="<?php echo $villain_address; ?>" name="villain_address[]" disabled required>
            </div>
            </div>
          </div>
          <br>
          
              <b><label for="formGroupExampleInput">รูปพรรณผู้ต้องหา คนที่ <?php echo $i;?></label></b>
            <?php
            $iden_vill=mysqli_query($con,"SELECT * FROM villain_identities WHERE villain_idcard=$villain_idcard")or die("select iden error!!!!!".mysqli_error($con));
            while(list($idcard_iden,$iden_face,$iden_hair,$iden_ears,$iden_forehead,$iden_eyes,$iden_nose,$iden_mouth,$iden_chin,$iden_body)=mysqli_fetch_row($iden_vill)){
                // $result_villain_iden=mysqli_query($con,"SELECT vb.body_name,vc.chin_name,vea.ears_name,vey.eyes_name,vf.face_name,vfo.forehead_name,vh.hair_name,vm.mouth_name,vn.nose_name 
                // FROM villain_identities as vi INNER JOIN villain_body as vb on vi.body_villain = vb.body_id 
                // INNER JOIN villain_chin as vc ON vi.chin_villain = vc.chin_id INNER JOIN villain_ears as vea ON vi.eyes_villain = vea.ears_id 
                // INNER JOIN villain_eyes as vey ON vi.eyes_villain = vey.eyes_id INNER JOIN villain_face as vf ON vi.face_villain = vf.face_id 
                // INNER JOIN villain_forehead as vfo ON vi.forehead_villain = vfo.forehead_id INNER JOIN villain_hair as vh ON vi.hair_style_villain = vh.hair_style_id 
                // INNER JOIN villain_mouth as vm ON vi.mouth_villain = vm.mouth_id INNER JOIN villain_nose as vn ON vi.nose_villain = vn.nose_id WHERE vi.villain_idcard = '$villain_idcard'")or die("sql selete error form result_vilain_iden".mysqli_error($con));
                // while(list($body_name,$chin_name,$ears_name,$eyes_name,$face_name,$forehead_name,$hair_name,$mouth_name,$nose_name)=mysqli_fetch_row($result_villain_iden)){
              ?>
            <div class="col-md">
            <div class="form-row">
              <div>
                <label class="col-sm col-form-label">รูปร่าง : </label>
              </div>
              <div class="col-md">
              <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_body[]" disabled required>
              <option disabled selected value="0">รูปร่าง</option>
              <?php
              include("module/fuction/fuction_bady_section.php");
              while(list($body_id,$body_name)=mysqli_fetch_row($body_villain)){
                $selected=$body_id==$iden_body?"selected":"";
                      echo"<option value='$body_id'$selected>$body_name</option>";
                      }
                    ?>
            </select>
              </div>
              <div>
                <label class="col-sm col-form-label">ใบหน้า : </label>
              </div>
              <div class="col-md">
              <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_face[]"disabled required>
              <option disabled selected value="0">ใบหน้า</option>
              <?php
              include("module/fuction/fuction_bady_section.php");
              while(list($face_id,$face_name)=mysqli_fetch_row($face_villain)){
                $selected=$face_id==$iden_face?"selected":"";
                      echo"<option value='$face_id'$selected>$face_name</option>";
                      }
                    ?>
            </select>
              </div>
              <div>
                <label class="col-sm col-form-label">ทรงผม : </label>
              </div>
              <div class="col-md">
              <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_hair[]"disabled required>
              <option disabled selected value="0">ทรงผม</option>
              <?php
              include("module/fuction/fuction_bady_section.php");
              while(list($hair_style_id,$hair_name)=mysqli_fetch_row($hair_villain)){
                $selected=$hair_style_id==$iden_hair?"selected":"";
                      echo"<option value='$hair_style_id'$selected>$hair_name</option>";
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
                <label class="col-sm col-form-label">จมูก : </label>
              </div>
              <div class="col-md">
              <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_nose[]"disabled required>
              <option disabled selected value="0">จมูก</option>
              <?php
              include("module/fuction/fuction_bady_section.php");
              while(list($nose_id,$nose_name)=mysqli_fetch_row($nose_villain)){
                $selected=$nose_id==$iden_nose?"selected":"";
                      echo"<option value='$nose_id'$selected>$nose_name</option>";
                      }
                    ?>
            </select>
              </div>
              <div>
                <label class="col-sm col-form-label">ปาก : </label>
              </div>
              <div class="col-md">
              <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_mouth[]"disabled required>
              <option disabled selected value="0">ปาก</option>
              <?php
              include("module/fuction/fuction_bady_section.php");
              while(list($mouth_id,$mouth_name)=mysqli_fetch_row($mouth_villain)){
                $selected=$mouth_id==$iden_mouth?"selected":"";
                      echo"<option value='$mouth_id'$selected>$mouth_name</option>";
                      }
                    ?>
            </select>
              </div>
              <div>
                <label class="col-sm col-form-label">คาง : </label>
              </div>
              <div class="col-md">
              <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_chin[]"disabled required>
              <option disabled selected value="0">คาง</option>
              <?php
              include("module/fuction/fuction_bady_section.php");
              while(list($chin_id,$chin_name)=mysqli_fetch_row($chin_villain)){
                $selected=$chin_id==$iden_chin?"selected":"";
                      echo"<option value='$chin_id'$selected>$chin_name</option>";
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
                  <label class="col-sm col-form-label">หู : </label>
                </div>
                <div class="col-md">
                <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_eyes[]"disabled required>
                <option disabled selected value="0">หู</option>
                <?php
                include("module/fuction/fuction_bady_section.php");
                while(list($eares_id,$ears_name)=mysqli_fetch_row($ears_villain)){
                  $selected=$eares_id==$iden_ears?"selected":"";
                        echo"<option value='$ears_id'$selected>$ears_name</option>";
                        }
                      ?>
                </select>
                </div>
                <div>
                  <label class="col-sm col-form-label">หน้าผาก : </label>
                </div>
                <div class="col-md">
                <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_forehead[]"disabled required>
                <option disabled selected value="0">หน้าผาก</option>
                <?php
                include("module/fuction/fuction_bady_section.php");
                while(list($forehead_id,$forehead_name)=mysqli_fetch_row($forehead_villain)){
                  $selected=$forehead_id==$iden_forehead?"selected":"";
                        echo"<option value='$forehead_id'$selected>$forehead_name</option>";
                        }
                      ?>
                </select>
                </div>
                <div>
                  <label class="col-sm col-form-label">ตา : </label>
                </div>
                <div class="col-md">
                <select class="custom-select edit_vill<?php echo $i; ?>" id="" name="villain_ears[]"disabled required>
                <option disabled selected value="0">ตา</option>
                <?php
                include("module/fuction/fuction_bady_section.php");
                while(list($eyes_id,$eyes_name)=mysqli_fetch_row($eyes_villain)){
                  $selected=$eyes_id==$iden_ears?"selected":"";
                        echo"<option value='$eyes_id'$selected>$eyes_name</option>";
                        }
                      ?>
                </select>
                </div>
          </div>
          </div>
          <?php } ?>
        </div>
        <hr>
        <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success save_vill" id="save_vill<?php echo $i; ?>" data-idcard="<?php echo $villain_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="cancle_vill<?php echo $i; ?>">ยกเลิก</button></p>
            </div>
        </form>

        <div class="modal fade" id="villain_pic<?php echo $i; ?>" role="dialog">
        <div class="modal-dialog modal-auto"  role="document">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-content">
          <img src="image/<?php echo $villain_image; ?>" class="img-fluid mx-auto d-block" ></p>
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
$("#vill_pic<?php echo $md ?>").click(function(){
    $("#villain_pic<?php echo $md ?>").modal();
  });
var id<?php echo $md;?> = $("#id<?php echo $md; ?>").val()
$('.villain<?php echo$md; ?>').validate({ 
								
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
$("#save_vill<?php echo $md ?>").hide();
$("#cancle_vill<?php echo $md ?>").hide();

$("#villain_test<?php echo $md; ?>").click(function(){
    $(".edit_vill<?php echo $md; ?>").prop("disabled", false);
    $("#save_vill<?php echo $md ?>").show();
    $("#cancle_vill<?php echo $md ?>").show();
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
$("#cancle_vill<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".edit_vill<?php echo $md; ?>").prop("disabled", true);
 $("#save_vill<?php echo $md ?>").hide();
  $("#cancle_vill<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
})
$(".villain<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".villain<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_villain.php",
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