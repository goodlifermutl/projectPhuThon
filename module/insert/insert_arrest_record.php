<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มบันทึกการจับกุม</h1>
        <p></p>

<form method="post" id="insertrecord">
  <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">ป.จ.ว.ข้อ : </label>
        </div>
        <div class="col-md-2">
        <input type="text" class="form-control" id="" name="ar_porjorwor" required>
        </div>
        <div>
            <label class="col-form-label">เวลา : </label>
        </div>
        <div class="col-md-2">
            <input type="time" class="form-control" id="" name="arrest_time" required>
        </div>
        <div>
            <label class="col-sm col-form-label">ประเภทคดี : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select " id="" name="ar_typecase"  required>
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1">คดีเพ่ง</option>
                <option  value="2">คดีอาญา</option>
                   
        </select>   
        </div>
        <div>
            <label class="col-form-label">ที่ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="ประเภทคดีที่" id="arrest_aryaNo" name="arrest_No" required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">บัญชีของกลางลำดับที่ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" id="" placeholder="ชัญชีของกลางลำดับที่" name="arrest_list" required>
        </div>
        <div>
            <label class="col-form-label">สถานที่ทำการบันทึก : </label>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="" placeholder="สถาานที่ทำการบันทึก" name="arrest_address_save" required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">วัน/เดือน/ปี ที่บันทึก : </label>
        </div>
        <div class="col-md">
            <input  type="date"  class="form-control" id="dates" name="arrest_date_save" required/>
        </div>
        <div>
            <label class="col-form-label">วัน/เดือน/ปี ที่จับกุ : </label>
        </div>
        <div class="col-md">
            <input  type="date"  class="form-control" id="dates" name="arrest_date_catch" required/>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">สถานที่จับกุม ที่ : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control" id="" placeholder="สถานที่จับกุม" name="arrest_address_catch" required>
        </div>
        
        </div>
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
        <div>
        <label class="col-form-label">นามเจ้าพนักงานจับกุมทั้งหมด : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="จับกุมทั้งหมด" id="policeCount" name="cprecord" required>
        </div> 
        <div>
        <label class="col-form-label">คน </label>
        </div>
    </div>
    </div>
    <hr>
    <p></p>
    <div class="col-auto" id="loadpol">
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
        <label class="col-form-label">ได้ร่วมกันจับกุม : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="จับกุมทั้งหมด" id="villainCount" name="crecord" required>
        </div> 
        <div>
        <label class="col-form-label">คน </label>
        </div>
    </div>
    </div>
    <hr>
    <p></p>
    <div class="col-auto" id="loadvill">
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
        <label class="col-form-label">พร้อมด้วยของกลางมี : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="ของกลางทั้งหมด" id="CatchCount" name="oxrecord" required>
        </div> 
        <div>
        <label class="col-form-label">อย่าง </label>
        </div>
    </div>
    </div>
    <hr>
    <p></p>
    <div class="col-auto" id="loadobx">
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
    <label class="col-form-label">ตำแหน่งที่พบของกลาง : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="arrest_location_ob" required></textarea>
    </div>
    <div>
    <label class="col-form-label">โดยกล่าวหาว่า : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="arrest_say" required></textarea>
    </div>
    </div>
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
    <label class="col-form-label">พฤติการรมกล่าวคือ : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="arrest_atcs" required></textarea>
    </div>
    <div>
    <label class="col-form-label">ขณะจับกุมผู้ต้องหาได้ทราบข้อกล่าวหาแล้วให้การ : </label>
    </div>
    <div class="col-md">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="arrest_depors" required></textarea>
    </div>
    </div>
    </div>
    <p></p>
    <div class="col-md">
    <div class="form-row">
    <div>
    <label class="col-form-label">เหตุเกิดขึ้นที่ : </label>
    </div>
    <div class="col-md-7">
    <input type="text" class="form-control" placeholder="เหตุเกิดขึ้นที่" id="CatchCount" name="arrest_place" required>
    </div>
    <div>
    <label class="col-form-label">วันที่เกิดเหตุ : </label>
    </div>
    <div class="col-md">
    <input type="date" class="form-control" id="" name="arrest_date_place" required>
    </div>
    </div>
    </div>
    <p></p>
    <div>
    <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
    </div>

</form>
</form>
</div>


<script>
// $('#insertrecord').validate({ 
								
//    rules: {					
//    villain_idcard: {
//    minlength:13,
//    maxlength:13
//            }
//    }
// });

var loop = 1

function loadaddpolice(){

    var count_po = $("#policeCount").val();

      $("#loadpol").html("")
      $.ajax({
        url: "module/fuction/add_police_catch.php",
        data:{loop,cprecord:count_po},
        type: "POST"
      }).done(function(data,){
        // alert(data)
        $("#loadpol").html(data)
      })
    }

function loadaddvillain(){

var count_vil = $("#villainCount").val();
var arya_no = $("#arrest_aryaNo").val();

  $("#loadvill").html("")
  $.ajax({
    url: "module/fuction/add_villain_catch.php",
    data:{loop,arrest_No:arya_no,cvrecord:count_vil},
    type: "POST"
  }).done(function(data,){
    // alert(data)
    $("#loadvill").html(data)
  })
}

function loadaddobjectex(){

var count_obx = $("#CatchCount").val();
var arya_no = $("#arrest_aryaNo").val();

  $("#loadobx").html("")
  $.ajax({
    url: "module/fuction/add_objx_catch.php",
    data:{loop,arrest_No:arya_no,ccrecord:count_obx},
    type: "POST"
  }).done(function(data,){
    // alert(data)
    $("#loadobx").html(data)
  })
}

$(document).ready(function(){
  $("#policeCount").change(function(){
    loadaddpolice()
  })
  $("#villainCount").change(function(){
    loadaddvillain()
  })
  $("#CatchCount").change(function(){
    loadaddobjectex()
  })
  // $("#btnplus").click(function(){
    
  //   loadaddpolice()
  //   loop++
  //   // $("#btnplus").hide();
  // })
  
})

$('#insertrecord').validate({ 
								
                rules: {					
                 villain_idcard: {
                minlength:13,
                maxlength:13
                        }
                }
             });

$("#insertrecord").submit(function(e){
	e.preventDefault();
	$check = $("#insertrecord").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_arrestRecord.php",
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

// $("#insertOB").submit(function(e){
// 	e.preventDefault();
// 	$check = $("#insertOB").valid();

// 		if($check == true){
// 		var formData = new FormData(this);

// 		$.ajax({
// 		url: "module/fuction/insert_data_arrestRecord.php",
// 		type: 'POST',
// 		data: formData,
// 			success: function (data) {
//             alert(data) 
//             swal({
//             title: "บันทึกผู้ต้องหาสำเร็จ",
//             icon: "success",
//             button: "ตกลง",
//           }).then((value) => {
//             // window.location.href="home.php?&module=2&action=3"
// })
// 		},
// 			cache: false,
// 			contentType: false,
// 			processData: false
// 	  });	
// 	}
// });

</script>

