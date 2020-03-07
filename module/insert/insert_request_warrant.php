<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มคำร้องออกหมายจับ</h1>
        <p></p>

<form method="post" id="insertReWa">
  <div class="form-group row">
    <label class="col-form-label">คำร้องที่ : </label>
    <div class="col-2">
    <input type="text" class="form-control" id="" name="rw_no" required>
    </div>
    <label class="col-form-label">ขอหมายจับรับที่ร้อง ศาล : </label>
    <div class="col">
    <input type="text" class="form-control" id="" name="rw_court" required>
    </div>
    <label class="col-form-label">เรียกสอบ : </label>
    <div class="col-2">
    <input type="date" class="form-control" id=""name="rw_cell" required>
    </div>
  </div>
    <div class="form-group row">
      <label class="col-form-label">ผู้พิพากษา : </label>
      <div class="col-5">
      <input type="text" class="form-control" id=""name="rw_judge" required>
      </div>
      <div class="col-md-2">
        <select class="custom-select " id="" name="rw_type"  required>
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1">คดีเพ่ง</option>
                <option  value="2">คดีอาญา</option>
                   
        </select>   
        </div>
      </div>
    
      <p></p>
      <div class="form-group row">
        <label class="col-form-label">ผู้ร้อง : </label>
        <div class="col-5">
        <input type="text" class="form-control" id="" name="rw_Petitioner" required>
        </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label">ข้าพเจ้า : </label>
          <div class="col">
          <input type="text" class="form-control" id="" name="rw_policename" required>
          </div>
          <label class="col-form-label">ตำแหน่ง : </label>
          <div class="col">
          <input type="text" class="form-control" id=""name="rw_position" required>
          </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label">อายุ : </label>
            <div class="col">
            <input type="text" class="form-control" id=""name="rw_age" required>
            </div>
            <label class="col-form-label">อาชีพ : </label>
            <div class="col">
            <input type="text" class="form-control" id=""name="rw_career" required>
            </div>
            <label class="col-form-label">สถานที่ทำงาน : </label>
            <div class="col">
            <input type="text" class="form-control" id=""name="rw_Workplace" required>
            </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label">โทรศัพท์ : </label>
              <div class="col-5">
              <input type="text" class="form-control" id=""name="rw_phone" required>
              </div>
              </div>
              <p></p>
              <div class="col-md">
              <div class="form-row">
              <div>
                  <label class="col-form-label">ขอยื่นคำร้องขอออกหมายจับต่อศาล ดังมีข้อความที่จะกล่าวดังต่อไปนี้ </label>
                </div>
              </div>
              </div>
              <div>
                  <label class="col-form-label">ข้อ 1. </label>
                  </div>
                  <div class="col-md">
                      <input type="text" class="form-control" placeholder="ด้วย" id="changAdd" name="rw_dos" required>
                  </div> 
              <hr>
              <p></p>
              
                <div class="form-group row">
                  <label class="col-form-label">ซึ่งมีตำหนิรูปพรรณตามที่แนบมาพร้อมนี้ : </label>
                </div>

                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="true1" aria-label="..."name="rw_cherk1">
                    <label class="form-check-label" for="exampleRadios1">ได้หรือน่าจะได้กระทำความผิดอาญาร้ายแรงซึ่งมีอัตราโทษจำคุกอย่างสูงเกิน 3 ปี</label>
                  </div>
                  <p></p>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="true2" aria-label="..."name="rw_cherk2">
                    <label class="form-check-label" for="exampleRadios1">ได้หรือน่าจะได้กระทำความผิดอาญา  และน่าจะหลบหนีหรือไปยุ่งเหยิงกับพยานหลักฐานหรือก่ออันตรายประการอื่น</label>
                  </div>
                  <p></p>
                  <div class="form-group row">
                    <label class="col-form-label">เหตุเกิดที่ : </label>
                    <div class="col">
                    <input type="text" class="form-control" id=""name="rw_incident" required>
                    </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label">มีพฤติการณ์กระทำความผิดที่เกี่ยวกับเหตุออกหมายจับ คือ	 : </label>
                      <div class="col">
                      <input type="text" class="form-control" id=""name="rw_circumstances" required>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-form-label">การกระทำของผู้ต้องหาเป็นการกระทำความผิด ฐาน : </label>
                        <div class="col">
                        <input type="text" class="form-control" id=""name="rw_action" required>
                        </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label">พยานเอกสาร และพยานวัตถุ : </label>
                          <div class="col">
                          <input type="text" class="form-control" id=""name="rw_Documentary" required>
                          </div>
                          </div>
                          <p></p>
                          <div class="col-md">
                          <div class="form-row">
                          <div>
                              <label class="col-form-label">พยานบุคคล ได้ทำการสอบสวนแล้วจำนวน  : </label>
                              </div>
                              <div class="col-md-2">
                                  <input type="text" class="form-control" placeholder="จับกุมทั้งหมด" id="changAdd2" name="re_warr_mmadd" required>
                              </div> 
                              <div>
                              <label class="col-form-label">ปาก </label>
                              </div>
                          </div>
                          </div>
                          <hr>
                          <p></p>
                          <div class="col-auto" id="loadvill2">
                          </div>
                          <p></p>
                          
                            <div class="form-group row">
                              <label class="col-form-label">ข้อ 2. ผู้ร้องประสงค์จะทำการจับกุม : </label>
                              <div class="col">
                              <input type="text" class="form-control" id=""name="rw_Arrest" required>
                              </div>
                              <label class="col-form-label">จึงขอให้ศาลออกหมายจับ : </label>
                              <div class="col">
                              <input type="text" class="form-control" id=""name="rw_warrant" required>
                              </div>
                              <label class="col-form-label">มาดำเนินคดี</label>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label">ในการยื่นคำร้องนี้ ผู้ร้องได้มอบหมายให้  : </label>
                                <div class="col">
                                <input type="text" class="form-control" id=""name="rw_petition" required>
                                </div>
                                <label class="col-form-label">ตำแหน่ง : </label>
                                <div class="col">
                                <input type="text" class="form-control" id=""name="rw_position2" required>
                                </div>
                                </div>
                                  <!-- <div class="form-group row">
                                  <label class="col-form-label">ผู้ร้อง </label>
                                  <div class="form-check form-check-inline">
                                      &nbsp;<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"name="rw_check3">
                                      <label class="form-check-label" for="inlineCheckbox2">เคย</label>
                                    </div>
                                    
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"name="rw_check4">
                                      <label class="form-check-label" for="inlineCheckbox2">ไม่เคย</label>
                                    </div>
                                    <label class="col-form-label">ร้องขอให้ศาล </label>
                                    <div class="col">
                                    <input type="text" class="form-control" id=""name="rw_Request">
                                    </div>
                                    </div> -->
                                    <div class="form-group row"> 
                                    <div class="form-check">
                                    <label class="form-check-label">ผู้ร้อง </label>&nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1">
                                      <label class="form-check-label" for="exampleRadios1">
                                        เคย
                                      </label>
                                    </div>&nbsp;
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked>
                                      <label class="form-check-label" for="exampleRadios2">
                                        ไม่เคย
                                      </label>
                                      <label class="form-check-label">ร้องขอให้ศาล </label>
                                      
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" id="rw_request"name="rw_Request" readonly>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-form-label">ออกหมายจับบุคคลดังกล่าว  โดยอาศัยเหตุแห่งการร้องขอเดียวกันนี้ หรือเหตุอื่น ๆ ( ระบุ ) </label>
                                  </div>
                                  <div class="col">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="rw_warrant2"></textarea>
                                    </div>
                                    <p></p>
                                    <div class="form-group row">
                                    <label class="col-form-label">และมีคำสั่งศาล</label>
                                    <div class="col">
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="rw_Court2"></textarea>
                                  </div>
                                  </div>
                              
                                    <button type="summit" class="btn btn-primary btn-lg btn-block">บันทึกข้อมูล</button>
</form>
</div>

<script>

function loadaddreq2(){

var count_add1 = $("#changAdd2").val();
  alert(count_add1)
  $("#loadvill2").html("")
  $.ajax({
    url: "module/fuction/add_request_mm.php",
    data:{count_add1},
    type: "POST"
  }).done(function(data,){
    //alert(data)
    $("#loadvill2").html(data)
  })
}

$(document).ready(function(){
  
  $("#changAdd2").change(function(){
    loadaddreq2()
  })
})

$("#exampleRadios1").click(function(){
  $("#rw_request").prop("readonly",false);
})
$("#exampleRadios2").click(function(){
  $("#rw_request").prop("readonly",true);
  $("#rw_request").val("");
})

$("#insertReWa").submit(function(e){
	e.preventDefault();
	$check = $("#insertReWa").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_req_warrant.php",
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