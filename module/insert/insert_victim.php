<?php $con = connect_db(); ?>
<div class="container">
    <div class="col-md">
    <h1 class="text-center">เพิ่มข้อมูลผู้เสียหาย</h1>
    </div>
    <form method="post" id="insertvictim">
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ชื่อ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="คำนำหน้าชื่อ" value="" id="focus<?php echo $i?>" name="victim_titlename"  required>     
        </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อ" value="" name="victim_name" required>
        </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="นามสกุล" value="" name="victim_lastname"  required>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="" name="victim_race"  required>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control " placeholder="สัญชาติ" value="" name="victim_nationality"  required>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="อาชีพ" value="" name="victim_careen"  required>
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
            <input type="text" class="form-control" placeholder="เลขบัตร" id="" name="victim_idcard" data-idcard="<?php echo $victim_idcard ?>"  value=""  required>
        </div>
        <div>
            <label class="col-sm col-form-label" >ระดับการศึกษา : </label>
        </div>
        <div class="col-md">
            <select class="custom-select " id="" name="victim_edu"  required>
                <option selected value="0">ระดับการศึกษา</option>
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
            <select class="custom-select " id="" name="victim_sex" required>
                <option selected value="0">เพศ</option>
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
        <input type="text" class="form-control " placeholder="ที่อยู่" value="" name="victim_address"  required>
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
            <input type="file" class="custom-file-input" id="customFile" name="victim_file">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
    </div>
    </div>
    <p></p>
    <div>
    <button type="submit" class="btn btn-success btn-lg btn-block">บันทึกข้อมูล</button>
    </div>
    </form>
</div>

<div class="footer">1</div>
<script>
$('#insertvictim').validate({ 
								
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
$("#insertvictim").submit(function(e){
	e.preventDefault();
	$check = $("#insertvictim").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "../fuction/insert_data_victim.php",
		type: 'POST',
		data: formData,
			success: function (data) {
                alert(data)  
$('#signup').modal("hide")

$('#signup').on('hidden.bs.modal', function (e) {
            swal({
            title: "สมัครสมาชิกสำเร็จ",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
    window.location.href = "index.html";
});
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