<?php $con = connect_db(); ?>
<div class="container">
        <h1 class="text-center">เพิ่มคำร้องออกหมายจับ</h1>
        <p></p>

<form>
  <div class="form-group row">
    <label class="col-form-label">คำร้องที่ : </label>
    <div class="col-2">
    <input type="text" class="form-control" id="" name="rw_no">
    </div>
    <label class="col-form-label">ขอหมายจับรับที่ร้อง ศาล : </label>
    <div class="col">
    <input type="text" class="form-control" id="" name="rw_court">
    </div>
    <label class="col-form-label">เรียกสอบ : </label>
    <div class="col-2">
    <input type="date" class="form-control" id=""name="rw_cell">
    </div>
  </div>
    <div class="form-group row">
      <label class="col-form-label">ผู้พิพากษา : </label>
      <div class="col-5">
      <input type="text" class="form-control" id=""name="rw_judge">
      </div>
      </div>
      <h2 class="text-center">ความอาญา</h2>
      <p></p>

      <div class="form-group row">
        <label class="col-form-label">ผู้ร้อง : </label>
        <div class="col-5">
        <input type="text" class="form-control" id="" name="rw_Petitioner">
        </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label">ข้าพเจ้า : </label>
          <div class="col">
          <input type="text" class="form-control" id="" name="rw_policename">
          </div>
          <label class="col-form-label">ตำแหน่ง : </label>
          <div class="col">
          <input type="text" class="form-control" id=""name="rw_position">
          </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label">อายุ : </label>
            <div class="col">
            <input type="text" class="form-control" id=""name="rw_age">
            </div>
            <label class="col-form-label">อาชีพ : </label>
            <div class="col">
            <input type="text" class="form-control" id=""name="rw_career">
            </div>
            <label class="col-form-label">สถานที่ทำงาน : </label>
            <div class="col">
            <input type="text" class="form-control" id=""name="rw_Workplace">
            </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label">โทรศัพท์ : </label>
              <div class="col-5">
              <input type="text" class="form-control" id=""name="rw_phone">
              </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label">ขอยื่นคำร้องขอออกหมายจับต่อศาล  ดังมีข้อความที่จะกล่าวดังต่อไปนี้ ข้อ 1. ด้วย : </label>
                <div class="col">
                <input type="text" class="form-control" id=""name="rw_Request">
                </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label">ซึ่งมีตำหนิรูปพรรณตามที่แนบมาพร้อมนี้ : </label>
                </div>

                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."name="rw_cherk1">
                    <label class="form-check-label" for="exampleRadios1">ได้หรือน่าจะได้กระทำความผิดอาญาร้ายแรงซึ่งมีอัตราโทษจำคุกอย่างสูงเกิน 3 ปี</label>
                  </div>
                  <p></p>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."name="rw_cherk2">
                    <label class="form-check-label" for="exampleRadios1">ได้หรือน่าจะได้กระทำความผิดอาญา  และน่าจะหลบหนีหรือไปยุ่งเหยิงกับพยานหลักฐานหรือก่ออันตรายประการอื่น</label>
                  </div>
                  <p></p>
                  <div class="form-group row">
                    <label class="col-form-label">เหตุเกิดที่ : </label>
                    <div class="col">
                    <input type="text" class="form-control" id=""name="rw_incident">
                    </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label">มีพฤติการณ์กระทำความผิดที่เกี่ยวกับเหตุออกหมายจับ คือ	 : </label>
                      <div class="col">
                      <input type="text" class="form-control" id=""name="rw_circumstances">
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-form-label">การกระทำของผู้ต้องหาเป็นการกระทำความผิด ฐาน : </label>
                        <div class="col">
                        <input type="text" class="form-control" id=""name="rw_action">
                        </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label">พยานเอกสาร และพยานวัตถุ : </label>
                          <div class="col">
                          <input type="text" class="form-control" id=""name="rw_Documentary">
                          </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label">พยานบุคคล ได้ทำการสอบสวนแล้วจำนวน  ปากที่ 1. : </label>
                            <div class="col">
                            <input type="text" class="form-control" id=""name="rw_Witness">
                            </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label">ข้อ 2. ผู้ร้องประสงค์จะทำการจับกุม : </label>
                              <div class="col">
                              <input type="text" class="form-control" id=""name="rw_Arrest">
                              </div>
                              <label class="col-form-label">จึงขอให้ศาลออกหมายจับ : </label>
                              <div class="col">
                              <input type="text" class="form-control" id=""name="rw_warrant">
                              </div>
                              <label class="col-form-label">มาดำเนินคดี</label>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label">ในการยื่นคำร้องนี้ ผู้ร้องได้มอบหมายให้  : </label>
                                <div class="col">
                                <input type="text" class="form-control" id=""name="rw_petition">
                                </div>
                                <label class="col-form-label">ตำแหน่ง : </label>
                                <div class="col">
                                <input type="text" class="form-control" id=""name="rw_position2">
                                </div>
                                </div>
                                  <div class="form-group row">
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
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-form-label">ออกหมายจับบุคคลดังกล่าว  โดยอาศัยเหตุแห่งการร้องขอเดียวกันนี้ หรือเหตุอื่น ๆ ( ระบุ ) </label>
                                  </div>
                                  <div class="col">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="rw_warrant2"></textarea>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-form-label">และมีคำสั่งศาล</label>
                                    <div class="col">
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="rw_Court2"></textarea>
                                  </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label">ลงชื่อ </label>
                                    <div class="col">
                                    <input type="text" class="form-control" id=""name="rw_sign">
                                    </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg btn-block">บันทึกข้อมูล</button>
</form>
</div>
