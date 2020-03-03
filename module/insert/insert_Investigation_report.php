<?php 
$con=connect_db();
?>
<div class="container">
    <div class="col-md">
    <h1 class="text-center">รายงานการสอบสวน</h1>
    </div>
    <form method="post" id="insertvictim">
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ประเภทคดี : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select " id="" name="ir_Casetype"  required>
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1">คดีเพ่ง</option>
                <option  value="2">คดีอาญา</option>

        </select>
        </div>
        <div>
            <label class="col-sm col-form-label">ที่ : </label>
        </div>
        <div class="col-md-1">
            <input type="text" class="form-control " placeholder="ที่" name="ir_order"  required>
        </div>
            <div>
              <label class="col-sm col-form-label">สถานีตำรวจ : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ที่อยู่สถาณีตำรวจ" name="ir_Policestation"  required>
        </div>
        <div class="col-md">
            <input type="date" class="form-control "  name="ir_date_station"  required>
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
        <textarea class="form-control" aria-label="With textarea"name="ir_offer" ></textarea>
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
    <select class="custom-select " id="" name="vic_ir" required >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT victim_idcard,title_name,victim_name,victim_lastname FROM victim WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                     echo"<option value='$vil_idcard'>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
            </div>
        </div>
    </div>
    <!-- <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ผู้กล่าวหา </label>
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="คำนำหน้าชื่อ" value="" id="focus<?php echo $i?>"  name="ir_prefix"  required>
        </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อ" value="" name="ir_name"  required>
        </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="นามสกุล" value=""  name="ir_surname"  required>
        </div>
    </div>
    </div> -->
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ผู้ต้องหา </label>
        </div>
        <div class="col-md">
    <select class="custom-select " id="" name="vil_ir" required >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                     echo"<option value='$vil_idcard'>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
            </div>
        </div>
    </div>
    <!-- <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ผู้ต้องหา </label>
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="คำนำหน้าชื่อ" value="" id="focus<?php echo $i?>" name="ir_ir_prefix2"   required>
        </div>
            <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อ" value=""name="ir_ir_name2" required>
        </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="นามสกุล" value="" name="ir_surname2"  required>
        </div>
    </div>
    </div> -->
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ข้อหา : </label>
        </div>
        <div class="col-md">
        <div class="input-group">
        <textarea class="form-control" aria-label="With textarea"name="ir_Charge" required></textarea>
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
        <input type="date" class="form-control " placeholder="วันเวลาที่เกิดเหตุ" value=""  name="ir_date"  required>
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
        <input type="text" class="form-control " placeholder="ตำบลที่เกิดเหตุ" value=""  name="ir_district"  required>
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
            <input type="text" class="form-control " placeholder="ราคาทรัพย์ที่ถูกประทุษร้าย"name="ir_price"  required>
        </div>
        <div>
            <label class="col-sm col-form-label">บาดแผล : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="บาดแผล" name="ir_wound"  required>
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
            <input type="date" class="form-control " placeholder="วันเวลาที่ร้องทุกข์หรือกล่าวโทษ"name="ir_Complaint"  required>
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
            <input type="date" class="form-control " placeholder="ควบคุม/ขัง/ปล่อยชั่วคราว"name="ir_control"  required>
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
        <textarea class="form-control" aria-label="With textarea"name="ir_fact" required></textarea>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div>
    <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
    </div>
    </form>
</div>

<script>
$("#insertvictim").submit(function(e){
	e.preventDefault();
	$check = $("#insertvictim").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_inves_report.php",
		type: 'POST',
		data: formData,
			success: function (data) {
            alert(data) 
            swal({
            title: "บันทึกผู้ต้องหาสำเร็จ",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
            // window.location.href="home.php?&module=2&action=3"
})
		},
			cache: false,
			contentType: false,
			processData: false
	  });	
	}
});
</script>