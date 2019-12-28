<div class="container">
    <div class="col-md">
    <h1 class="text-center">รายงานการสอบสวน</h1>
    </div>
    <form method="post" id="insertvictim">
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
            <label class="col-sm col-form-label">ที่ : </label>
        </div>
        <div class="col-md-1">
            <input type="text" class="form-control " placeholder="ที่"  required>
        </div>
            <div>
              <label class="col-sm col-form-label">สถานีตำรวจ : </label>
            </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ที่อยู่สถาณีตำรวจ"  required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">เสนอ : </label>
        </div>
        <div class="col-md-10">
        <div class="input-group">
        <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div class="text-center">
        <h4>คดีระหว่าง</h4>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ผู้กล่าวหา </label>
        </div>
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
            <label class="col-sm col-form-label">ผู้ต้องหา </label>
        </div>
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
            <label class="col-sm col-form-label">ข้อหา : </label>
        </div>
        <div class="col-md">
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
            <label class="col-sm col-form-label">วันเวลาที่เกิดเหตุ : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control " placeholder="วันเวลาที่เกิดเหตุ" value="" name="victim_address"  required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ตำบลที่เกิดเหตุ : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control " placeholder="ตำบลที่เกิดเหตุ" value="" name="victim_address"  required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ราคาทรัพย์ที่ถูกประทุษร้าย : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ราคาทรัพย์ที่ถูกประทุษร้าย" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">บาดแผล : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="บาดแผล"  required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">วันเวลาที่ร้องทุกข์หรือกล่าวโทษ : </label>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control " placeholder="วันเวลาที่ร้องทุกข์หรือกล่าวโทษ" required>     
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">วันเวลาที่ผู้ต้องหาถูก ควบคุม/ขัง/ปล่อยชั่วคราว : </label>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control " placeholder="ควบคุม/ขัง/ปล่อยชั่วคราว" required>     
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ข้อเท็จจริงและความเห็น : </label>
        </div>
        <div class="col-md">
        <div class="input-group">
        <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div>
    <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
    </div>
    </form>
</div>