<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มบันทึกการจับกุม</h1>
        <p></p>

<form>
  <div class="form-group row">
    <label class="col-form-label">ป.จ.ว.ข้อ : </label>
    <div class="col">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">เวลา : </label>
    <div class="col">
    <input type="time" class="form-control" id="">
    </div>
    <label class="col-form-label">คดีอาญาที่ : </label>
    <div class="col">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">บัญชีของกลางลำดับที่ : </label>
    <div class="col">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">สถานที่ทำการบันทึก : </label>
    <div class="col">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">วัน/เดือน/ปี ที่บันทึก : </label>
    <div class="col-2">
      <input  name="dates " type="date" required class="form-control" id="dates" />
    </div>
    <label class="col-form-label">วัน/เดือน/ปี ที่จับกุ : </label>
    <div class="col-2">
      <input  name="dates " type="date" required class="form-control" id="dates" />
    </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label">สถานที่จับกุม ที่ : </label>
        <div class="col">
        <input type="text" class="form-control" id="">
        </div>
        <label class="col-form-label">บ้านเลขที่ : </label>
        <div class="col-2">
          <input type="text" class="form-control" id="">
        </div>
        <label class="col-form-label">หมู่ :  </label>
        <div class="col-2">
          <input type="text" class="form-control" id="">
        </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label">ตรอก/ซอย : </label>
            <div class="col">
            <input type="text" class="form-control" id="">
            </div>
            <label class="col-form-label">แขวง/ตำบล : </label>
            <div class="col">
              <input type="text" class="form-control" id="">
            </div>
            <label class="col-form-label">เขตอำเภอ :  </label>
            <div class="col">
              <input type="text" class="form-control" id="">
            </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label">จังหวัด : </label>
                <div class="col-3">
                <input type="text" class="form-control" id="">
                </div>
                <label class="col-form-label">นามพนักงานจับกุม : </label>
                <div class="col">
                  <input type="text" class="form-control" id="">
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
