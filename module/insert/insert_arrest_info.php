<div class="container">
    <div class="col-md">
    <h1 class="text-center">หมายจับ</h1>
    </div>
    <form method="post" id="insertvictim">
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">หมายจับที่ : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="หมายจับที่" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อศาล : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อศาล"  required>
        </div>
            <div>
              <label class="col-sm col-form-label">วัน/เดือน/ปี : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="วัน/เดือน/ปี"  required>
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
        <select class="custom-select " id="" name=""  required>
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1">คดีเพ่ง</option>
                <option  value="2">คดีอาญา</option>
                   
        </select>   
        </div>
        <div>
            <label class="col-sm col-form-label">ผู้ร้อง : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ผู้ร้อง"  required>
        </div>
            <div>
              <label class="col-sm col-form-label">หมายถึง : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="หมายถึง"  required>
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
        <textarea class="form-control" aria-label="With textarea"></textarea>
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
        <textarea class="form-control" aria-label="With textarea"></textarea>
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
            <label class="col-sm col-form-label">ใกล้เคียงพื้นที่ : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control " placeholder="ใกล้เคียงพื้นที่" value="" name="victim_address"  required>
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
            <input type="text" class="form-control " placeholder="ส่งตัวไปที่" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ภายในอายุความ : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ภายในอายุความ"  required>
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
            <input type="text" class="form-control " placeholder="วัน/เดือน/ปี" required>     
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
            <input type="text" class="form-control " placeholder="วัน/เดือน/ปี" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ผู้พิพากษา : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ชื่อผู้พิพากษา" required>     
        </div>
        </div>
    </div>
    <p></p>
    <div>
    <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
    </div>
    </form>
</div>