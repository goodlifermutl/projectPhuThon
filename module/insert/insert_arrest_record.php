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
            <input type="text" class="form-control" placeholder="ป.จ.ว." id="" name="">     
        </div>
        <div>
            <label class="col-form-label">เวลา : </label>
        </div>
        <div class="col-md">
            <input type="time" class="form-control" id="">
        </div>
        <div>
            <label class="col-sm col-form-label">ประเภทคดี : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select " id="" name=""  required>
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1">คดีเพ่ง</option>
                <option  value="2">คดีอาญา</option>
                   
        </select>   
        </div>
        <div>
            <label class="col-form-label">ที่ : </label>
        </div>
        <div class="col-md-1">
            <input type="text" class="form-control" placeholder="" id="">
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">บัญชีของกลางลำดับที่ : </label>
        </div>
        <div class="col-md-1">
            <input type="text" class="form-control" id="" placeholder="" name="arrest_list">
        </div>
        <div>
            <label class="col-form-label">สถานที่ทำการบันทึก : </label>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="" placeholder="" name="arrest_address_save">
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">วัน/เดือน/ปี ที่บันทึก : </label>
        </div>
        <div class="col-2">
            <input  name="dates " type="date" required class="form-control" id="dates" name="arrest_date_save" />
        </div>
        <div>
            <label class="col-form-label">วัน/เดือน/ปี ที่จับกุ : </label>
        </div>
        <div class="col-2">
            <input  name="dates " type="date" required class="form-control" id="dates" name="arrest_date" />
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-form-label">สถานที่จับกุม ที่ : </label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="" name="arrest_address">
        </div>
        <div>
        <label class="col-form-label">เจ้าพนักงานจับกุม : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="จับกุมทั้งหมด" id="policeCount" name="cprecord">
        </div> 
        <div>
        <label class="col-form-label">คน </label>
        </div>
        </div>
    </div>
    <p></p>
    <div class="text-center">
    <h4>นามเจ้าพนักงานจับกุม</h4>
    </div>
    <p></p>
    <div class="col-auto" id="loadaddd">
    </div>
    <!-- <div class="SHaddCC">
    <div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">พนักงานจับกุมคนที่ </span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    </div>
    </div>
    <p></p> -->
    <div class="d-flex justify-content-center">
      <div>
        <button type="button" class="btn btn-info" id="btnplus">เพิ่มพนักงานจับกุม</button>
      </div> 
    </div>
    <p></p>
  





      <div class="form-group row">


                <div class="col">
                  
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">ได้ร่วมกันจับกุมตัว : </label>
                  <div class="col">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">พร้อมด้วยของกลางมี : </label>
                  <div class="col">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">ตำแหน่งที่พบของกลาง(ระบุให้ชัดเจน) : </label>
                  <div class="col">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">โดยกล่าวหาว่า : </label>
                  <div class="col">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">พฤติกรรมกล่าวคือ : </label>
                  <div class="col">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">ขณะจับกุมผู้ต้องหาได้ทราบข้อกล่าวหาแล้วให้การ : </label>
                  <div class="col">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">เหตุเกิดที่ : </label>
                  <div class="col">
                 <input type="text" class="form-control" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">วัน/เดือน/ปี : </label>
                  <div class="col">
                 <input type="date" class="form-control" id="">
                  </div>
                  <label class="col-form-label">เวลา: </label>
                  <div class="col">
                <input type="time" class="form-control" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">ลงชื่อ : </label>
                  <div class="col">
                 <input type="text" class="form-control" id="">
                  </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg btn-block">บันทึกข้อมูล</button>
</form>
</div>


<script>
var loop = 1

function loadaddpolice(){

    var count_po = $("#policeCount").val();

      $("#loadaddd").html("")
      $.ajax({
        url: "module/fuction/add_police_catch.php",
        data:{loop,cprecord:count_po},
        type: "POST"
      }).done(function(data,){
        // alert(data)
        $("#loadaddd").html(data)
      })
    }

$(document).ready(function(){

  $("#btnplus").click(function(){
    
    loadaddpolice()
    loop++
    // $("#btnplus").hide();
  })
  
})

</script>

