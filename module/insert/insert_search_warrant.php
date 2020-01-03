<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มหมายค้น</h1>
        <p></p>

<form>
  <div class="form-group row">
    <label class="col-form-label">หมายค้น ที่ : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">ศาล : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">วัน/เดือน/ปี : </label>
    <div class="col-3">
    <input type="date" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้ร้อง : </label>
    <div class="col-6">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">หมายถึง : </label>
    <div class="col-6">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ด้วยศาลเห็นมีเหตุสมควรให้ค้นสถานที่ / บ้านเลขที่ : </label>
    <div class="col-6">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">หมู่ที่ : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">ตรอก/ซอย : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">ถนน : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ตำบล/แขวง : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">อำเภอ/เขต : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">จังหวัด : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ตามแผนที่สังเขปแนบท้าย : </label>
  </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">เพื่อพบและยึดสิ่งของ </label>
    </div>
    <div class="col-5">
    <input type="text" class="form-control" id="">
    </div>
  </div>
<div class="form-group row">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">ซึ่งจะเป็นพยานหลักฐานประกอบการสอบสวน ไต่สวนมูลฟ้องหรือพิจารณา </label>
  </div>
  </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">ซึ่งมีไว้เป็นความผิดหรือได้มาโดยผิดกฎหมาย หรือได้ใช้ หรือตั้งใจจะใช้ในการกระทำความผิด </label>
    </div>
    </div>
    <div class="form-group row">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">ตามคำพิพากษา หรือคำสั่งของศาล </label>
      </div>
      </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">เพื่อพบ  </label>
    </div>
    <div class="col-5">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">บุคคลที่ถูกหน่วงเหนี่ยวหรือกักขังโดยมิชอบด้วยกฎหมาย </label>
    </div>
    </div>
    <div class="form-group row">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">บุคคลที่ออกหมายจับ ตามหมายจับที่ </label>
      </div>
      <div class="col-3">
      <input type="text" class="form-control" id="">
      </div>
      <label class="col-form-label">ลงวันที่ : </label>
      <div class="col-3">
      <input type="text" class="form-control" id="">
      </div>
      </div>

    <div class="form-group row">
      <label class="col-form-label">ซึ่งออกให้โดย : </label>
      <div class="col-6">
      <input type="text" class="form-control" id="">
      </div>
    </div>
  <div class="form-group row">
    <label class="col-form-label">จึงออกหมายค้นให้: </label>
    <div class="col-6">
    <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ตำแหน่ง : </label>
    <div class="col-6">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">มีอำนาจค้น  </label>
  </div>

  <div class="form-group row">
    <label class="col-form-label">สถานที่ / บ้านข้างต้นได้ในวันที่ : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">เดือน : </label>
    <div class="col-3">
    <input type="text" class="form-control" id="">
    </div>
    <label class="col-form-label">พุทธศักราช	๒๕๔๗  </label>
    </div>
    <div class="form-group row">
      <label class="col-form-label">เวลา : </label>
      <div class="col-3">
      <input type="text" class="form-control" id="">
      </div>
      <label class="col-form-label">นาฬิกา ถึง</label>
      &nbsp;  &nbsp;<div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">เวลา</label>
        <input type="text" class="form-control" id="">
      </div>
      <label class="col-form-label">นาฬิกา</label>
        &nbsp;  &nbsp;<div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">คิดค่อกันไปจนกว่าจะเสร็จสิ้นการตรวจค้น</label>
      </div>
      </div>
      <div class="form-group row">
        <label class="col-form-label">เมื่อค้นได้ตามหมายนี้แล้วให้ส่ง : </label>
        <div class="col">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label">พร้อมบันทึกการตรวจค้นละบัญชีสิ่งของ ( ถ้ามี ) ไปยัง : </label>
          <div class="col">
          <input type="text" class="form-control" id="">
          </div>
          <label class="col-form-label">เพื่อจัดการตามกฎหมายต่อไป</label>
          </div>
          <div class="form-group row">
            <label class="col-form-label">ผู้พิพากษา : </label>
            <div class="col">
            <input type="text" class="form-control" id="">
            </div>
            </div>
            <div>
            <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
            </div>












</form>
</div>
