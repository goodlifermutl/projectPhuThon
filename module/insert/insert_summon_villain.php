<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มหมายเรียกผู้ต้องหา</h1>
        <p></p>

<form>
  <div class="form-group row">
    <label class="col-form-label">หมายเรียกผู้ต้องหาครั้งที่ : </label>
    <div class="col-2">
    <input type="text" class="form-control" id=""name="sv_suspect">
    </div>
    <label class="col-form-label">สถานที่ออกหมาย : </label>
    <div class="col-3">
    <input type="text" class="form-control" id=""name="sv_warrant">
    </div>
    <label class="col-form-label">ออกหมายวันที่่ : </label>
    <div class="col-2">
    <input type="date" class="form-control" id=""name="sv_date">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-form-label">ผู้กล่าวหา : </label>
    <div class="col-5">
    <input type="text" class="form-control" id=""name="sv_Accused">
    </div>
    <label class="col-form-label">ผู้ต้องหา : </label>
    <div class="col-5">
    <input type="text" class="form-control" id=""name="sv_suspect">
    </div>
</div>
<div class="form-group row">
  <label class="col-form-label">หมายมายัง : </label>
  <div class="col-5">
  <input type="text" class="form-control" id=""name="sv_Refer">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ที่อยู่ : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_address">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ผู้ใหญ่บ้าน : </label>
  <div class="col-5">
  <input type="text" class="form-control" id=""name="sv_Headman">
  </div>
  <label class="col-form-label">กำนัน : </label>
  <div class="col-5">
  <input type="text" class="form-control" id=""name="sv_village">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ด้วยเหตุที่ท่านต้องหาว่า : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_Hey">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ฉะนั้นให้ : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_text">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ไป ณ ที่  : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_goto">
  </div>
  <label class="col-form-label">พบ : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_staff">
  </div>
  <label class="col-form-label">พนักงานสอบสวนเจ้าของคดี</label>
</div>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col">
  <input type="datetime-local" class="form-control" id=""name="sv_datetime">
  </div>
  <label class="col-form-label">( ลงชื่อ ) : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_staff">
  </div>
  <label class="col-form-label">ผู้ออกหมาย</label>
  &nbsp;<label class="col-form-label">ตำแหน่ง : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_position">
  </div>
</div>
  <h3 class="text-center">เพิ่มหมายเรียกผู้ต้องหา</h3>
<p></p>
<div class="form-group row">
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-3">
  <input type="datetime-local" class="form-control" id=""name="sv_datetime2">
  </div>
  <label class="col-form-label">ข้าพเจ้า : </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_policename">
    </div>
    <label class="col-form-label">ได้รับหมายเรียกของพนักงานตำรวจ</label>
</div>
<div class="form-group row">
  <label class="col-form-label">ซึ่งกำหนดให้ข้าพเจ้าไปยัง: </label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_set">
    </div>
  <label class="col-form-label">วัน/เดือน/ปี : </label>
  <div class="col-3">
  <input type="datetime-local" class="form-control" id=""name="sv_datetime3">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_Recipient">
  </div>
  <label class="col-form-label">ผู้รับหมาย</label>
    &nbsp;<label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_Sender">
  </div>
  <label class="col-form-label">ผู้ส่งหมาย</label>
</div>
<h3 class="text-center">บันทึกหลังหมาย </h3>
<p></p>
<div class="form-group row">
  <label class="col-form-label">ข้าพเจ้า ( ยศ ชื่อผู้ส่งหมาย )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_policename4">
  </div>
  <label class="col-form-label">ตำแหน่ง</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_position2">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ได้มาดำเนินการส่งหมายเรียกให้กับ</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_policename4">
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label">ที่อยู่</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_address2">
  </div>
</div>
<div class="form-group row">
  <div class="form-check">
    <label class="form-check-label" for="defaultCheck1">ปรากฏผลส่งหมาย ดังนี้</label>
      &nbsp;  &nbsp;  &nbsp;<input class="form-check-input" type="radio" value="" id="defaultCheck1"name="exampleRadios">
    <label class="form-check-label" for="defaultCheck1">ส่งได้และผู้ต้องหารับทราบกำหนดนัดแล้ว</label>
    &nbsp;  &nbsp;  &nbsp;<input class="form-check-input" type="radio"  value="" id="defaultCheck2"name="exampleRadios">
    <label class="form-check-label" for="defaultCheck1">ส่งไม่ได้</label>
</div>
</div>
<div class="form-group row">
  <label class="col-form-label">( ลงชื่อ )</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_sign">
  </div>
  <label class="col-form-label">ผู้ส่งหมาย</label>
    &nbsp;<label class="col-form-label">ตำแหน่ง</label>
  <div class="col">
  <input type="text" class="form-control" id=""name="sv_position3">
  </div>
</div>
<div>
<button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
</div>









</form>
</div>
