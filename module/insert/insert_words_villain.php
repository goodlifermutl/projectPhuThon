<?php 
$con=connect_db();
?>
<div class="container">
        <h1 class="text-center">เพิ่มคำให้การผู้ต้องหา</h1>
        <p></p>
<form method="post" id="insertWordsVill">
  <div class="form-group row">
    <label class="col-form-label">คำให้การของ : </label>
    <div class="col-md">
    <select class="custom-select " id="seleCard" name="wv_testimony" required >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                     echo"<option value='$vil_idcard'>$title $vil_name $vil_lastname</option>";
                    }
                ?> 
                   
            </select>
    </div>
    <label class="col-form-label">เป็น : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_are" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">โทรศัพท์ติดต่อ : </label>
    <div class="col-2">
    <input type="text" class="form-control" id=""name="wv_phone" required>
    </div>
    <label class="col-form-label">บัตรประจำตัวประชาชน : </label>
    <div class="col-md" id="loadSLidcard">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ออก ณ : </label>
    <div class="col-4">
    <input type="text" class="form-control" id=""name="wv_output1" required>
    </div>
    <label class="col-form-label">ออกเมื่อ : </label>
    <div class="col">
    <input type="date" class="form-control" id=""name="wv_output2" required>
    </div>
    <label class="col-form-label">หมดอายุ : </label>
    <div class="col">
    <input type="date" class="form-control" id=""name="wv_last" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ร.ต.ท. : </label>
    <div class="col-6">
    <input type="text" class="form-control" id=""name="wv_police" required>
    </div>
    <label class="col-form-label">บันทึก  </label>
  </div>
  <h3 class="text-center">บันทึกคำให้การของผู้ต้องหา</h3>
  <p></p>
  <div class="form-group row">
    <label class="col-form-label">สถานีตำรวจ : </label>
    <div class="col-7">
    <input type="text" class="form-control" id=""name="wv_station" required>
    </div>
    <label class="col-form-label">วัน/เดือน/ปี : </label>
    <div class="col-3">
    <input type="date" class="form-control" id=""name="wv_date" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้กล่าวหา : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_accused" required>
    </div>
    <label class="col-form-label">ผู้ต้องหา : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_suspect" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ต่อหน้า : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_before" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">สอบสวนที่ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_investigate" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ชื่อ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_name" required>
    </div>
    <label class="col-form-label">อายุ : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="wv_age" required>
    </div>
    <label class="col-form-label">ปี</label>
    &nbsp;<label class="col-form-label">เชื้อชาติ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_race" required>
    </div>
  </div>
<div class="form-group row">
    <label class="col-form-label">สัญชาติ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_nationality" required>
    </div>
    <label class="col-form-label">ศาสนา : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_religion" required>
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label">อาชีพ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_careen" required>
    </div>
</div>
<h3 class="text-center">----------------------------------------------------------------------------</h3>
<div class="form-group row">
    <label class="col-form-label">ตั้งบ้านเรือนอยู่ที่ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_address" required>
    </div>
  </div>
  <div class="form-group row">
      <label class="col-form-label">ชื่อผู้ใหญ่บ้าน : </label>
      <div class="col">
      <input type="text" class="form-control" id=""name="wv_headman" required>
      </div>
      <label class="col-form-label">ชื่อกำนัน : </label>
      <div class="col">
      <input type="text" class="form-control" id=""name="wv_villageheadmane" required>
      </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label">ชื่อบิดา : </label>
        <div class="col">
        <input type="text" class="form-control" id=""name="wv_farthername" required>
        </div>
        <label class="col-form-label">ชื่อมารดา : </label>
        <div class="col">
        <input type="text" class="form-control" id=""name="wv_mothername" required>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-form-label">เกิดที่ : </label>
          <div class="col">
          <input type="text" class="form-control" id=""name="wv_birthday" required>
          </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label">เจ้าพนักงานได้แจ้งแก่ข้าพเจ้าว่า ข้าพเจ้าต้องหาว่า : </label>
            <div class="col">
          <textarea class="form-control" aria-label="With textarea"name="wv_official" required ></textarea>
            </div>
          </div>

          <div>
          <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
          </div>

</form>
</div>

<script>
function loadselectedIDcard(){

var idcard = $("#seleCard").val();

  $("#loadSLidcard").html("")
  $.ajax({
    url: "module/fuction/add_seleted_card.php",
    data:{idcard},
    type: "POST"
  }).done(function(data,){
    // alert(data)
    $("#loadSLidcard").html(data)
  })
}

$("#seleCard").change(function(){
  loadselectedIDcard()
})

$("#insertWordsVill").submit(function(e){
	e.preventDefault();
	$check = $("#insertWordsVill").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_words_villain.php",
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
