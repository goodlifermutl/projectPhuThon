<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มคำให้การผู้ต้องหา</h1>
        <p></p>
<form>
  <div class="form-group row">
    <label class="col-form-label">คำให้การของ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_testimony">
    </div>
    <label class="col-form-label">เป็น : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_are">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">โทรศัพท์ติดต่อ : </label>
    <div class="col-4">
    <input type="text" class="form-control" id=""name="wv_phone">
    </div>
    <label class="col-form-label">บัตรประจำตัวประชาชน : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_card">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ออก ณ : </label>
    <div class="col-4">
    <input type="text" class="form-control" id=""name="wv_output1">
    </div>
    <label class="col-form-label">ออกเมื่อ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_output2">
    </div>
    <label class="col-form-label">หมดอายุ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_last">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ร.ต.ท. : </label>
    <div class="col-6">
    <input type="text" class="form-control" id=""name="wv_police">
    </div>
    <label class="col-form-label">บันทึก  </label>
  </div>
  <h3 class="text-center">บันทึกคำให้การของผู้ต้องหา</h3>
  <p></p>
  <div class="form-group row">
    <label class="col-form-label">สถานีตำรวจ : </label>
    <div class="col-7">
    <input type="text" class="form-control" id=""name="wv_station">
    </div>
    <label class="col-form-label">วัน/เดือน/ปี : </label>
    <div class="col-3">
    <input type="date" class="form-control" id=""name="wv_date">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้กล่าวหา : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_accused">
    </div>
    <label class="col-form-label">ผู้ต้องหา : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_suspect">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ต่อหน้า : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_before">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">สอบสวนที่ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_investigate">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ชื่อ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_name">
    </div>
    <label class="col-form-label">อายุ : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="wv_age">
    </div>
    <label class="col-form-label">ปี</label>
    &nbsp;<label class="col-form-label">เชื้อชาติ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_race">
    </div>
  </div>
<div class="form-group row">
    <label class="col-form-label">สัญชาติ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_nationality">
    </div>
    <label class="col-form-label">ศาสนา : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_religion">
    </div>
</div>
<h3 class="text-center">----------------------------------------------------------------------------</h3>
<div class="form-group row">
    <label class="col-form-label">ตั้งบ้านเรือนอยู่ที่ : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="wv_address">
    </div>
  </div>
  <div class="form-group row">
      <label class="col-form-label">ชื่อผู้ใหญ่บ้าน : </label>
      <div class="col">
      <input type="text" class="form-control" id=""name="wv_headman">
      </div>
      <label class="col-form-label">ชื่อกำนัน : </label>
      <div class="col">
      <input type="text" class="form-control" id=""name="wv_villageheadmane">
      </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label">ชื่อบิดา : </label>
        <div class="col">
        <input type="text" class="form-control" id=""name="wv_farthername">
        </div>
        <label class="col-form-label">ชื่อมารดา : </label>
        <div class="col">
        <input type="text" class="form-control" id=""name="wv_mothername">
        </div>
      </div>
      <div class="form-group row">
          <label class="col-form-label">เกิดที่ : </label>
          <div class="col">
          <input type="text" class="form-control" id=""name="wv_birthday">
          </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label">เจ้าพนักงานได้แจ้งแก่ข้าพเจ้าว่า ข้าพเจ้าต้องหาว่า : </label>
            <div class="col">
          <textarea class="form-control" aria-label="With textarea"name="ir_official" ></textarea>
            </div>
          </div>

          <div>
          <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
          </div>





















</form>
</div>
