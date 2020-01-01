<?php
include ("connect_db.php");
$con = connect_db();
$num_loop=$_POST['loop'];
$num_vil_count=$_POST['cvrecord'];
$i=1;
?>
<div class="container">
    <form id="insert_villain" method="post">
    <?php while($i<=$num_vil_count){ ?>
    <div class="col-md">
    <h4 class="text-center">เพิ่มข้อมูลผู้ต้องหา<?php echo $i ?></h4>
    </div>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ชื่อ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="คำนำหน้าชื่อ" value="" id="focus<?php echo $i?>" name="villain_titlename<?php echo $i ?>[]" required>
        </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อ" value="" name="villain_name<?php echo $i ?>[]" required>
        </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="นามสกุล" value="" name="villain_lastname<?php echo $i ?>[]"  required>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="" name="villain_race<?php echo $i ?>[]" required >
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control " placeholder="สัญชาติ" value="" name="villain_nationality<?php echo $i ?>[]" required >
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="อาชีพ" value="" name="villain_careen<?php echo $i ?>[]"  required>
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
            <input type="text" class="form-control" placeholder="เลขบัตร" id="" name="villain_idcard<?php echo $i ?>[]" data-idcard="<?php echo $victim_idcard ?>"  value="" required >
        </div>
        <div>
            <label class="col-sm col-form-label" >ระดับการศึกษา : </label>
        </div>
        <div class="col-md">
            <select class="custom-select " id="" name="villain_edu<?php echo $i ?>[]" required >
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
        <div class="col-md">

            <select class="custom-select " id="" name="villain_sex<?php echo $i ?>[]" required >
      
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
        <input type="text" class="form-control " placeholder="ที่อยู่" value="" name="villain_address<?php echo $i ?>[]" required >
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
            <input type="file" class="custom-file-input" id="customFile" name="villain_file<?php echo $i ?>[]">
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
            <select class="custom-select " id="" name="villain_body<?php echo $i ?>[]" required>
            <option disabled selected value="0">รูปร่าง</option>
            <?php
            include("fuction_bady_section.php");
            while(list($body_id,$body_name)=mysqli_fetch_row($body_villain)){
                     echo"<option value='$body_id'>$body_name</option>";
                    }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ใบหน้า : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_face<?php echo $i ?>[]" required>
            <option disabled selected value="0">ใบหน้า</option>
            <?php
            include("fuction_bady_section.php");
            while(list($face_id,$face_name)=mysqli_fetch_row($face_villain)){
                     echo"<option value='$face_id'>$face_name</option>";
                    }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ทรงผม : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_hair<?php echo $i ?>[]" required>
            <option disabled selected value="0">ทรงผม</option>
            <?php
            include("fuction_bady_section.php");
            while(list($hair_style_id,$hair_name)=mysqli_fetch_row($hair_villain)){
                     echo"<option value='$hair_style_id'>$hair_name</option>";
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
            <select class="custom-select " id="" name="villain_nose<?php echo $i ?>[]" required>
            <option disabled selected value="0">จมูก</option>
            <?php
            include("fuction_bady_section.php");
            while(list($nose_id,$nose_name)=mysqli_fetch_row($nose_villain)){
                     echo"<option value='$nose_id'>$nose_name</option>";
                    }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ปาก : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_mouth<?php echo $i ?>[]" required>
            <option disabled selected value="0">ปาก</option>
            <?php
            include("fuction_bady_section.php");
            while(list($mouth_id,$mouth_name)=mysqli_fetch_row($mouth_villain)){
                     echo"<option value='$mouth_id'>$mouth_name</option>";
                    }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">คาง : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_chin<?php echo $i ?>[]" required>
            <option disabled selected value="0">คาง</option>
            <?php
            include("fuction_bady_section.php");
            while(list($chin_id,$chin_name)=mysqli_fetch_row($chin_villain)){
                     echo"<option value='$chin_id'>$chin_name</option>";
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
            <select class="custom-select " id="" name="villain_ears<?php echo $i ?>[]" required>
            <option disabled selected value="0">หู</option>
            <?php
            include("fuction_bady_section.php");
            while(list($ears_id,$ears_name)=mysqli_fetch_row($ears_villain)){
                     echo"<option value='$ears_id'>$ears_name</option>";
                    }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">หน้าผาก : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_forehead<?php echo $i ?>[]" required>
            <option disabled selected value="0">หน้าผาก</option>
            <?php
            include("fuction_bady_section.php");
            while(list($forehead_id,$forehead_name)=mysqli_fetch_row($forehead_villain)){
                     echo"<option value='$forehead_id'>$forehead_name</option>";
                    }
                    ?>
            </select>
            </div>
            <div>
            <label class="col-sm col-form-label">ตา : </label>
            </div>
            <div class="col-md">
            <select class="custom-select " id="" name="villain_eyes<?php echo $i ?>[]" required>
            <option disabled selected value="0">ตา</option>
            <?php
            include("fuction_bady_section.php");
            while(list($eyes_id,$eyes_name)=mysqli_fetch_row($eyes_villain)){
                     echo"<option value='$eyes_id'>$eyes_name</option>";
                    }
                    ?>
            </select>
            </div>
          </div>
          </div>

    <hr>
    <?php
    $i++;
  } ?>
    </form>               
    </div>

<script>
$('#insert_villain').validate({ 
								
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
$("#insert_villain").submit(function(e){
	e.preventDefault();
	$check = $("#insert_villain").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_villain.php",
		type: 'POST',
		data: formData,
			success: function (data) {
            alert(data) 
            swal({
            title: "บันทึกผู้ต้องหาสำเร็จ",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
            window.location.href="home.php?&module=2&action=3"
})
		},
			cache: false,
			contentType: false,
			processData: false
	  });	
	}
});

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