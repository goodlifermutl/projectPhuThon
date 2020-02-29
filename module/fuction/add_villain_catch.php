<?php
include ("connect_db.php");
$con = connect_db();
$num_loop=$_POST['loop'];
$num_vil_count=$_POST['cvrecord'];
$no_arya=$_POST['arrest_No'];
$i=1;
?>
<!-- <div class="container">
    <form id="insert_villain" method="post"> -->
    <?php while($i<=$num_vil_count){ ?>
    <div class="col-md">
    <h4 class="text-center">เพิ่มข้อมูลผู้ต้องหาคนที่<?php echo $i?></h4>
    </div>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ชื่อ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="คำนำหน้าชื่อ" value="" id="focus<?php echo $i?>" name="villain_titlename[]" required>
        </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อ" value="" name="villain_name[]" required>
        </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="นามสกุล" value="" name="villain_lastname[]"  required>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="ไทย" name="villain_race[]"  required>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control " placeholder="สัญชาติ" value="ไทย" name="villain_nationality[]" required >
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="อาชีพ" value="" name="villain_careen[]" required >
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
            <!-- <input type="text" class="form-control" placeholder="เลขบัตร" id="villain_idcard" name="villain_idcard[]"   value="" > -->
            <input type="text" class="form-control" placeholder="เลขบัตร" id="villain_idcard" name="villain_idcard[]" data-idcard=""  value=""  required>
        </div>
        <div>
            <label class="col-sm col-form-label" >ระดับการศึกษา : </label>
        </div>
        <div class="col-md">
            <select class="custom-select " id="" name="villain_edu[]"  >
                <option disabled selected value="0">ระดับการศึกษา</option>
                <?php $result_edu = mysqli_query($con,"SELECT * FROM education")or die("select education error".mysqli_error($con));
                    while(list($edu_id,$edu_name)=mysqli_fetch_row($result_edu)){
                     echo"<option value='$edu_id'>$edu_name</option>";
                    }
                ?> 
                   
            </select>
        </div>
        <div>
            <label class="col-sm col-form-label">เพศ : </label>
              
        </div>
        <!-- <div class="col-md">
        <div class="form-group row"> 
            
            <div class="form-check">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" type="radio" name="villain_sex[]" id="exampleRadios1" value="1">
            <label class="form-check-label" for="exampleRadios1">
            ชาย
            </label>
            </div>&nbsp;
            <div class="form-check">
            <input class="form-check-input" type="radio" name="villain_sex[]" id="exampleRadios2" value="2">
            <label class="form-check-label" for="exampleRadios2">
            หญิง
            </label>
            </div>
            </div>
            </div> -->
        <div class="col-md-2">

            <select class="custom-select " id="" name="villain_sex[]" required >
      
                <option disabled selected value="0">เพศ</option>
                <option value="1" >ชาย</option>
                <option value="2" >หญิง</option>
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
        <input type="text" class="form-control " placeholder="ที่อยู่" value="" name="villain_address[]" required >
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
        <div>
            <label class="col-sm col-form-label">รูปภาพ : </label>
        </div>
        <div class="col-md">
        <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileTe" name="villain_file[]">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
    </div>
    </div>
    <p></p>

    

        <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">รูปร่าง : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_body[]" required>
            <option disabled selected value="0">รูปร่าง</option>
            <option value="1">สูง</option>
            <option value="2">สันทัด</option>
            <option value="3">เตี้ย</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($body_id,$body_name)=mysqli_fetch_row($body_villain)){
            //          echo"<option value='$body_id'>$body_name</option>";
            //         }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ใบหน้า : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_face[]" required>
            <option disabled selected value="0">ใบหน้า</option>
            <option value="1">กลม</option>
            <option value="2">รูปไข่</option>
            <option value="3">สี่เหลี่ยม</option>
            <option value="4">สี่เหลี่ยมยาว</option>
            <option value="5">สามเหลี่ยม</option>
            <option value="6">สามเหลี่ยมยาว</option>
            <option value="7">แหลมหลิม</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($face_id,$face_name)=mysqli_fetch_row($face_villain)){
            //          echo"<option value='$face_id'>$face_name</option>";
            //         }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ทรงผม : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_hair[]" required>
            <option disabled selected value="0">ทรงผม</option>
            <option value="1">ทุ่งหมาหลง</option>
            <option value="2">ดงช้างข้าม</option>
            <option value="3">ง่ามเทโพ</option>
            <option value="4">ชะโดตีแปลง</option>
            <option value="5">แร้งกระพือปีก</option>
            <option value="6">ฉีกหางฟาด</option>
            <option value="7">ราชคลึงเครา</option>
            <option value="8">รองทรง</option>
            <option value="9">ผมยาว</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($hair_style_id,$hair_name)=mysqli_fetch_row($hair_villain)){
            //          echo"<option value='$hair_style_id'>$hair_name</option>";
            //         }
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
            <select class="custom-select " id="" name="villain_nose[]" required>
            <option disabled selected value="0">จมูก</option>
            <option value="1">จมูกแคบ</option>
            <option value="2">จมูกกว้าง</option>
            <option value="3">จมูกชมพู่</option>
            <option value="4">สันจมูกสั้น</option>
            <option value="5">สันจมูกโค้งเหลี่ยม</option>
            <option value="6">สันจมูกโค้กกลม</option>
            <option value="7">สันจมูกงอน</option>
            <option value="8">ฐานจมูกงุ้ม</option>
            <option value="9">ฐานจมูกราบ</option>
            <option value="10">ฐานจมูกเชิด</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($nose_id,$nose_name)=mysqli_fetch_row($nose_villain)){
            //          echo"<option value='$nose_id'>$nose_name</option>";
            //         }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ปาก : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_mouth[]" required>
            <option disabled selected value="0">ปาก</option>
            <option value="1">ปากกระจับ</option>
            <option value="2">ปากหนา</option>
            <option value="3">ปากล่างห้อย</option>
            <option value="4">ปากเชิด</option>
            <option value="5">ปากกว้าง</option>
            <option value="6">ปากแคบ</option>
            <option value="7">ปากเสมอ</option>
            <option value="8">ปากล่างยื่น</option>
            <option value="9">ปากบนยื่น</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($mouth_id,$mouth_name)=mysqli_fetch_row($mouth_villain)){
            //          echo"<option value='$mouth_id'>$mouth_name</option>";
            //         }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">คาง : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_chin[]" required>
            <option disabled selected value="0">คาง</option>
            <option value="1">คางตรง</option>
            <option value="2">คางราบ</option>
            <option value="3">คางยื่น</option>
            <option value="4">คางป่าน</option>
            <option value="5">คางสั่น</option>
            <option value="6">คางยาน</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($chin_id,$chin_name)=mysqli_fetch_row($chin_villain)){
            //          echo"<option value='$chin_id'>$chin_name</option>";
            //         }
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
            <select class="custom-select " id="" name="villain_ears[]" required>
            <option disabled selected value="0">หู</option>
            <option value="1">หูสามเหลี่ยม</option>
            <option value="2">หูสี่เหลี่ยม</option>
            <option value="3">หูกลม</option>
            <option value="4">หูกระหล่ำปลี</option>
            <option value="5">หูกาง</option>
            <option value="6">หูลีบ</option>
            <option value="7">ติ่งย้อย</option>
            <option value="8">ติ่งราบ</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($ears_id,$ears_name)=mysqli_fetch_row($ears_villain)){
            //          echo"<option value='$ears_id'>$ears_name</option>";
            //         }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">หน้าผาก : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_forehead[]" required>
            <option disabled selected value="0">หน้าผาก</option>
            <option value="1">หน้าผากโหนง</option>
            <option value="2">หน้าผากลาด</option>
            <option value="3">หน้าผากแคบ</option>
            <option value="4">หน้าผากสั่น</option>
            <option value="5">หน้าผากสูง</option>
            <option value="6">หน้าผากกว้าง</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($forehead_id,$forehead_name)=mysqli_fetch_row($forehead_villain)){
            //          echo"<option value='$forehead_id'>$forehead_name</option>";
            //         }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ตา : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_eyes[]" required>
            <option disabled selected value="0">ตา</option>
            <option value="1">ตาสองชั้น</option>
            <option value="2">ตาชั้นเดียว</option>
            <option value="3">ตากลม</option>
            <option value="4">ตาพองโต</option>
            <option value="5">ตาลึก</option>
            <option value="6">ตาถั่ว</option>
            <option value="7">ตาเข</option>
            <option value="8">ตาเหล่</option>
            <option value="9">ตาเอก</option>
            <?php
            // include("fuction_bady_section.php");
            // while(list($eyes_id,$eyes_name)=mysqli_fetch_row($eyes_villain)){
            //          echo"<option value='$eyes_id'>$eyes_name</option>";
            //         }
                    ?>
            </select>
            </div>
          </div>
          </div>

    <hr>
    <?php
    $i++;
  } ?>
    <!-- </form>               
    </div> -->

<script>
// $('#insertrecord').validate({ 
								
//    rules: {					
//     villain_idcard: {
//    minlength:13,
//    maxlength:13
//            }
//    }
// });
// $("#insert_villain").submit(function(e){
// 	e.preventDefault();
// 	$check = $("#insert_villain").valid();

// 		if($check == true){
// 		var formData = new FormData(this);

// 		$.ajax({
// 		url: "module/fuction/insert_data_villain.php",
// 		type: 'POST',
// 		data: formData,
// 			success: function (data) {
//             alert(data) 
//             swal({
//             title: "บันทึกผู้ต้องหาสำเร็จ",
//             icon: "success",
//             button: "ตกลง",
//           }).then((value) => {
//             window.location.href="home.php?&module=2&action=3"
// })
// 		},
// 			cache: false,
// 			contentType: false,
// 			processData: false
// 	  });	
// 	}
// });

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

</script>

<!-- while($i<=$num_vil_count){
    echo "<div class='SHaddCC$i'>
    <div class='d-flex justify-content-center'>
    <div class='col-md-6'>
        <div class='input-group mb-3'>
        <div class='input-group-prepend'>
          <span class='input-group-text' id='inputGroup-sizing-default'>นามผู้ต้องหาคนที่$i </span>
        </div>
        <input type='text' id='input_villain_name$i' name='name_villain[]' value='' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      </div>
    </div>
    </div>
    </div>
    <p></p>
    ";
    $i++;
  }
  ?> -->