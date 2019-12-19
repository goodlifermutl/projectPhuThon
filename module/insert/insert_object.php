<?php $con = connect_db(); ?>

<script type='text/javascript'>
     function preview_image(event)
     {
          var reader = new FileReader();
          reader.onload = function()
          {
               var output = document.getElementById('showimg');
               output.src = reader.result;
          }
          reader.readAsDataURL(event.target.files[0]);
     }
     </script>

<div class="container">
        <h1 class="text-center">เพิ่มข้อมูลกลาง</h1>
        <p></p>
        <form>
        <div class="form-group row">
          <label class="col-form-label">ชื่อของกลาง : </label>
          <div class="col">
          <input type="" class="form-control" id="">
          </div>
          <label class="col-form-label">วันที่รับของกลาง : </label>
          <div class="col">
          <input  name="dates " type="date" required class="form-control" id="dates" />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label">ขนาดของกลาง : </label>
          <div class="col">
          <input type="" class="form-control" id="">
          </div>
          <label class="col-form-label">ลักษณะของกลาง : </label>
          <div class="col">
          <input type="" class="form-control" id="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label" style="">สถานะของกลาง : </label>
          <div class="col">
            <select id="inputState" class="form-control">
          <option selected>ยึด</option>
          <option>คืน</option>
        </select>
          </div>
        </div>

        <h4> รูปภาพของกลาง </h4>


        			<div class="form-group">
        			  <img  id="showimg" alt="" width="300" height="300">


        			  <div class="form-group row">
                  <div class="col">
        			                    <label class="control-label"  >เลือกภาพ :</label>
                                </div>

        			                        <input type="file" class="form-control" id="showimg" name="showimg" accept="image/png, image/jpeg, image/gif " onchange="preview_image(event)">

        			                </div>



<button type="button" class="btn btn-primary btn-lg btn-block">บันทึกข้อมูล</button>
      </form>
