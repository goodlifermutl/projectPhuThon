<a name="ผู้ต้องหา"></a>
     <div class="villain">
     <p><h1 class="text-center">ผู้ต้องหา</h1></p>
     <form>

      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];

        $sex_name;
        $i=1;

        $result_chk_villain = mysqli_query($con,"SELECT case_id FROM villain WHERE case_id = '$data'")or die("resualt_villain sqli error".mysqli_error($con));
        $result_villain = mysqli_query($con,"SELECT vl.title_name,vl.villain_name,vl.villain_lastname,vl.villain_sex,vl.villain_idcard,vl.villain_address,ed.edu_name,vl.villain_image,vl.villain_race,vl.villain_nationality,vl.villain_career FROM villain as vl INNER JOIN education as ed ON vl.villain_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_villain sqli error".mysqli_error($con));

        list($case_id)=mysqli_fetch_row($result_chk_villain);
        if(empty($case_id)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else{
        while(list($title_name,$villain_name,$villain_lastname,$villain_sex,$villain_idcard,$villain_address,$villain_education,$villain_image,$villain_race,$villain_nationality,$villain_career)=mysqli_fetch_row($result_villain)){

          if($villain_sex == 1){
            $sex_name = "ชาย";
          }else{
            $sex_name = "หญิง";
          }
        ?>
         <div class="col-md">
          <b><label for="formGroupExampleInput">ผู้ต้องหา คนที่ <?php echo $i; ?></label></b>
          <p><img src="image/<?php echo $villain_image; ?>" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
          <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">รหัสคดี : </label>
          </div>
          <div class="col-2">
              <input type="text" class="form-control" placeholder="รหัสคดี <?php echo $case_id; ?>" value="<?php echo $case_id; ?>" disabled>
            </div>
            <div>
              <label class="col-sm col-form-label">ชื่อ : </label>
            </div>
            <div class="col-1">
              <input type="text" class="form-control" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" disabled>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="ชื่อ" value="<?php echo $villain_name; ?>" disabled>
            </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="นามสกุล" value="<?php echo $villain_lastname; ?>" disabled>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="<?php echo $villain_race; ?>" disabled>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="สัญชาติ" value="<?php echo $villain_nationality; ?>" disabled>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control" placeholder="อาชีพ" value="<?php echo $villain_career; ?>" disabled>
            </div>
          </div>
          </div>     
            <p></p>
            <div class="col-md">
              <div class="form-row">
              <div>
                  <label class="col-sm col-form-label">เลขบัตรประจำตัวประชาชน : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo $villain_idcard; ?>" disabled>
                </div>
                <div>
                  <label class="col-sm col-form-label">ระดับการศึกษา : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="ระดับการศึกษา" value="<?php echo $villain_education; ?>" disabled>
                </div>
                <div>
                  <label class="col-sm col-form-label">เพศ : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="เพศ" value="<?php echo $sex_name; ?>" disabled>
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
            <input type="text" class="form-control" placeholder="ที่อยู่" value="<?php echo $villain_address; ?>" disabled>
            </div>
            </div>
          </div>
          <br>
          
              <b><label for="formGroupExampleInput">รูปพรรณผู้ต้องหา คนที่ <?php echo $i;?></label></b>
            <?php
                $result_villain_iden=mysqli_query($con,"SELECT vb.body_name,vc.chin_name,vea.ears_name,vey.eyes_name,vf.face_name,vfo.forehead_name,vh.hair_name,vm.mouth_name,vn.nose_name 
                FROM villain_identities as vi INNER JOIN villain_body as vb on vi.body_villain = vb.body_id 
                INNER JOIN villain_chin as vc ON vi.chin_villain = vc.chin_id INNER JOIN villain_ears as vea ON vi.eyes_villain = vea.ears_id 
                INNER JOIN villain_eyes as vey ON vi.eyes_villain = vey.eyes_id INNER JOIN villain_face as vf ON vi.face_villain = vf.face_id 
                INNER JOIN villain_forehead as vfo ON vi.forehead_villain = vfo.forehead_id INNER JOIN villain_hair as vh ON vi.hair_style_villain = vh.hair_style_id 
                INNER JOIN villain_mouth as vm ON vi.mouth_villain = vm.mouth_id INNER JOIN villain_nose as vn ON vi.nose_villain = vn.nose_id WHERE vi.villain_idcard = '$villain_idcard'")or die("sql selete error form result_vilain_iden".mysqli_error($con));
                while(list($body_name,$chin_name,$ears_name,$eyes_name,$face_name,$forehead_name,$hair_name,$mouth_name,$nose_name)=mysqli_fetch_row($result_villain_iden)){
              ?>
            <div class="col-md">
            <div class="form-row">
              <div>
                <label class="col-sm col-form-label">รูปร่าง : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $body_name ?>" disabled>
              </div>
              <div>
                <label class="col-sm col-form-label">ใบหน้า : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $face_name ?>" disabled>
              </div>
              <div>
                <label class="col-sm col-form-label">ทรงผม : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $hair_name ?>" disabled>
              </div>
                </div>
                </div>     
          <p></p>
            <div class="col-md">
            <div class="form-row">
              <div>
                <label class="col-sm col-form-label">จมูก : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $nose_name ?>" disabled>
              </div>
              <div>
                <label class="col-sm col-form-label">ปาก : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $mouth_name ?>" disabled>
              </div>
              <div>
                <label class="col-sm col-form-label">คาง : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $chin_name ?>" disabled>
              </div>
          </div>
          </div>
          <p></p>
            <div class="col-md">
            <div class="form-row">
                <div>
                  <label class="col-sm col-form-label">หู : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" value="<?php echo $ears_name ?>" disabled>
                </div>
                <div>
                  <label class="col-sm col-form-label">หน้าผาก : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" value="<?php echo $forehead_name?>" disabled>
                </div>
                <div>
                  <label class="col-sm col-form-label">ตา : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" value="<?php echo $eyes_name ?>" disabled>
                </div>
          </div>
          </div>
          <?php } ?>
        </div>
        <hr>

        <?php
        $i++;
        }
      }
    }
      ?>
      </div>
      </form>