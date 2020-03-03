<?php 
$con=connect_db();
?>
<div class="container">
    <div class="col-md">
    <h1 class="text-center">หมายจับ</h1>
    </div>
    <form method="post" id="insertinfoarrest">
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">หมายจับที่ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="หมายจับที่" name="info_arr_list" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อศาล : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อศาล" name="san_arr_info" required>
        </div>
            <div>
              <label class="col-sm col-form-label">วัน/เดือน/ปี : </label>
            </div>
        <div class="col-md">
            <input type="date" class="form-control " placeholder="วัน/เดือน/ปี" name="date_arr_info"  required>
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
        <select class="custom-select " id="" name="type_arr_info"  >
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1">คดีเพ่ง</option>
                <option  value="2">คดีอาญา</option>
                   
        </select>   
        </div>
        <div>
            <label class="col-sm col-form-label">ผู้ร้อง : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ผู้ร้อง" name="victim_ar_info" required>
        </div>
            <div>
              <label class="col-sm col-form-label">หมายถึง : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="หมายถึง" name="villain_ar_info" required>
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
        <textarea class="form-control" aria-label="With textarea" name="victim_arin_say" required></textarea>
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
        <textarea class="form-control" aria-label="With textarea" name="villain_perpetrate_arin" required></textarea>
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
    <select class="custom-select " id="" name="vil_ar_info" required >
                <option disabled selected value="0">ผู้ต้องหา</option>
                <?php $result_vil = mysqli_query($con,"SELECT villain_idcard,title_name,villain_name,villain_lastname FROM villain WHERE case_id='$_SESSION[case_id]'")or die("select villain error".mysqli_error($con));
                    while(list($vil_idcard,$title,$vil_name,$vil_lastname)=mysqli_fetch_row($result_vil)){
                     echo"<option value='$vil_idcard'>$title $vil_name $vil_lastname</option>";
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
        <input type="text" class="form-control " placeholder="ใกล้เคียงพื้นที่" value="" name="vil_close_address"  required>
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
            <input type="text" class="form-control " placeholder="ส่งตัวไปที่" name="vill_to_place" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ภายในอายุความ : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ภายในอายุความ" name="intime_ar_info" required>
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
            <input type="date" class="form-control " placeholder="วัน/เดือน/ปี" name="stdate_ar_info" required >     
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
            <input type="date" class="form-control " placeholder="วัน/เดือน/ปี" name="dl_ar_info" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ผู้พิพากษา : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อผู้พิพากษา" name="judge_ar_info" required>     
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
$("#insertinfoarrest").submit(function(e){
	e.preventDefault();
	$check = $("#insertinfoarrest").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_arrest_info.php",
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