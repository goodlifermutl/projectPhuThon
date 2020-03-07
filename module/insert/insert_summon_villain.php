<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มหมายเรียกผู้ต้องหา</h1>
        <p></p>

<form method="post" id="insertSumVil">
  <div class="form-group row">
    <label class="col-form-label">หมายเรียกผู้ต้องหาครั้งที่ : </label>
    <div class="col-2">
    <input type="text" class="form-control" id=""name="sv_suspect" required>
    </div>
    <label class="col-form-label">สถานที่ออกหมาย : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sv_warrant" required>
    </div>
    <label class="col-form-label">ออกหมายวันที่่ : </label>
    <div class="col-md">
    <input type="date" class="form-control" id=""name="sv_date" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้กล่าวหา : </label>
    <div class="col-5">
    <input type="text" class="form-control" id=""name="sv_Accused" required>
    </div>
    <div class="col-md">
    <select class="custom-select " id="" name="sv_villain" required >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                     echo"<option value='$vil_idcard'>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
    </div>
</div>
<div class="form-group row">
  <label class="col-form-label">หมายมายัง : </label>
  <div class="col-5">
  <input type="text" class="form-control" id=""name="sv_Refer" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ที่อยู่ : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_address" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ผู้ใหญ่บ้าน : </label>
  <div class="col-5">
  <input type="text" class="form-control" id=""name="sv_Headman" required>
  </div>
  <label class="col-form-label">กำนัน : </label>
  <div class="col-5">
  <input type="text" class="form-control" id=""name="sv_village" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ด้วยเหตุที่ท่านต้องหาว่า : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_Hey" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ฉะนั้นให้ : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_text" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ไป ณ ที่  : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_goto" required>
  </div>
  <label class="col-form-label">พบ : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_staff" required>
  </div>
  <label class="col-form-label">พนักงานสอบสวนเจ้าของคดี</label>
</div>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-md">
  <input type="datetime-local" class="form-control" id=""name="sv_datetime" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ ) : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_staff2" required>
  </div>
  <label class="col-form-label">ผู้ออกหมาย</label>
  &nbsp;<label class="col-form-label">ตำแหน่ง : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_position" required>
  </div>
</div>
  <h3 class="text-center">ใบรับหมายตำรวจ</h3>
<p></p>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-md">
  <input type="datetime-local" class="form-control" id=""name="sv_datetime2" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ข้าพเจ้า : </label>
  <div class="col-md">
  <input type="text" class="form-control" id=""name="sv_policename" required>
    </div>
    <label class="col-form-label">ได้รับหมายเรียกของพนักงานตำรวจ</label>
</div>
<div class="form-group row">
  <label class="col-form-label">ซึ่งกำหนดให้ข้าพเจ้าไปยัง: </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_set" required>
    </div>
</div>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-md">
  <input type="datetime-local" class="form-control" id=""name="sv_datetime3" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_Recipient" required>
  </div>
  <label class="col-form-label">ผู้รับหมาย</label>
    &nbsp;<label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_Sender" required>
  </div>
  <label class="col-form-label">ผู้ส่งหมาย</label>
</div>
<h3 class="text-center">บันทึกหลังหมาย </h3>
<p></p>
<div class="form-group row">
  <label class="col-form-label">ข้าพเจ้า ( ยศ ชื่อผู้ส่งหมาย )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_policename4" required>
  </div>
  <label class="col-form-label">ตำแหน่ง</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_position2" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ได้มาดำเนินการส่งหมายเรียกให้กับ</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_policename5" required>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ที่อยู่</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_address2" required>
  </div>
</div>
<div class="form-group row">
  <div class="form-check">
    <label class="form-check-label" for="defaultCheck1">ปรากฏผลส่งหมาย ดังนี้</label>
      &nbsp;  &nbsp;  &nbsp;<input class="form-check-input" type="radio" value="1" id="defaultCheck1"name="exampleRadios">
    <label class="form-check-label" for="defaultCheck1">ส่งได้และผู้ต้องหารับทราบกำหนดนัดแล้ว</label>
    &nbsp;  &nbsp;  &nbsp;<input class="form-check-input" type="radio"  value="2" id="defaultCheck2"name="exampleRadios">
    <label class="form-check-label" for="defaultCheck1">ส่งไม่ได้</label>
</div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_sign" required>
  </div>
  <label class="col-form-label">ผู้ส่งหมาย</label>
    &nbsp;<label class="col-form-label">ตำแหน่ง</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_position3" required>
  </div>
</div>
<div>
<button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
</div>

</form>
</div>

<script>
$("#insertSumVil").submit(function(e){
	e.preventDefault();
	$check = $("#insertSumVil").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_summon_villain.php",
		type: 'POST',
		data: formData,
			success: function (data) {
            //alert(data) 
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
</script>
