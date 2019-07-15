

<?php
// session_start();
// include ("../fuction/connect_db.php");
$con = connect_db();

$select = mysqli_query($con,"SELECT case_id,case_name,case_type FROM case_name")or die("select sql error".mysqli_error($con));

if(empty($_SESSION['user_name'])){
  $com_s="<!--";
  $com_e="-->"
  ?>
  <script>
  swal({
      title: "กรุณาเข้าสู่ระบบ",
      icon: "warning",
  }).then((value) => {
window.location.href = "index.html";
  });
</script>
<?php
}else{
  $com_s="";
  $com_e="";
}
?>
<?php echo $com_s ?>

<div class="container bigbody">
  <div  class="topbigbody">
  <!-- <br>
    <form class="form-inline my-2 my-lg-0 menusearch">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <div class="subbigbody">
    <div class="row">
    <div class="col-sm-4">
    <p class="text-center"><b>ค้นหาข้อมูล</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-search-plus" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>แก้ไขข้อมูล</b></p>
      <a href="#">
      <p class="text-center"><i class="fas fa-edit" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูล</b></p>
      <a href="#">
      <p class="text-center"><i class="fas fa-plus-circle" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md">
    <section class="bf-footer">
    <a name="ผู้เสียหาย"></a>
    <div class="victim">
      <p><h1 class="text-center">ผู้เสียหาย</h1></p>
      <br>
      <form>
      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];
    
        if(empty($_GET['search'])){
          $search = "";
          $l=0;
        }else{
          $search="#".$_GET['search'];
          $l=1;
        }
        $sex_name;
        $i=1;

        $result_chk_victim = mysqli_query($con,"SELECT case_id FROM victim  WHERE case_id = '$data'")or die("resualt_chk_victim sqli error".mysqli_error($con));
        $result_victim = mysqli_query($con,"SELECT vm.title_name, vm.victim_name,vm.victim_lastname,vm.victim_sex,vm.victim_idcard,vm.victim_address,ed.edu_name,vm.victim_image,vm.victim_race,vm.victim_nationality,vm.victim_career FROM victim as vm  INNER JOIN education as ed ON vm.victim_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_victim sqli error".mysqli_error($con));
        list($case_id)=mysqli_fetch_row($result_chk_victim);
        if(empty($case_id)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($title_name,$victim_name,$victim_lastname,$victim_sex,$victim_idcard,$victim_address,$victim_education,$victim_image,$victim_race,$victim_nationality,$victim_careen)=mysqli_fetch_row($result_victim)){
    
          if($victim_sex == 1){
            $sex_name = "ชาย";
          }else{
            $sex_name = "หญิง";
          }
        ?>
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        <a name="<?php echo $victim_idcard ?>"></a>
        <a name="<?php echo $victim_name ?>"></a> 
        <a name="<?php echo $victim_lastname ?>"></a> 
         <div class="col-md">
          <b><label for="formGroupExampleInput">ผู้เสียหาย คนที่ <?php echo $i; $i++?></label></b>
          <p><img src="../../image/<?php echo $victim_image; ?>.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
          <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">รหัสคดี : </label>
          </div>
          <div class="col-2">
              <input type="text" class="form-control" placeholder="รหัสคดี <?php echo $case_id; ?>" value="<?php echo $case_id; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">ชื่อ : </label>
            </div>
            <div class="col-1">
              <input type="text" class="form-control" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" readonly>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="ชื่อ" value="<?php echo $victim_name; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="นามสกุล" value="<?php echo $victim_lastname; ?>" readonly>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="<?php echo $victim_race; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="สัญชาติ" value="<?php echo $victim_nationality; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control" placeholder="อาชีพ" value="<?php echo $victim_careen; ?>" readonly>
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
              <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo $victim_idcard; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">ระดับการศึกษา : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="ระดับการศึกษา" value="<?php echo $victim_education; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">เพศ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="เพศ" value="<?php echo $sex_name; ?>" readonly>
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
            <input type="text" class="form-control" placeholder="ที่อยู่" value="<?php echo $victim_address; ?>" readonly>
            </div>
            </div>
          </div>
        </div>
        <hr>
      <?php
      }
    }
  }
      ?>
      </form>
     </div>
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
          <p><img src="../../image/<?php echo $villain_image; ?>.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
          <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">รหัสคดี : </label>
          </div>
          <div class="col-2">
              <input type="text" class="form-control" placeholder="รหัสคดี <?php echo $case_id; ?>" value="<?php echo $case_id; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">ชื่อ : </label>
            </div>
            <div class="col-1">
              <input type="text" class="form-control" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" readonly>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="ชื่อ" value="<?php echo $villain_name; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="นามสกุล" value="<?php echo $villain_lastname; ?>" readonly>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="<?php echo $villain_race; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="สัญชาติ" value="<?php echo $villain_nationality; ?>" readonly>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control" placeholder="อาชีพ" value="<?php echo $villain_career; ?>" readonly>
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
                  <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo $villain_idcard; ?>" readonly>
                </div>
                <div>
                  <label class="col-sm col-form-label">ระดับการศึกษา : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="ระดับการศึกษา" value="<?php echo $villain_education; ?>" readonly>
                </div>
                <div>
                  <label class="col-sm col-form-label">เพศ : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="เพศ" value="<?php echo $sex_name; ?>" readonly>
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
            <input type="text" class="form-control" placeholder="ที่อยู่" value="<?php echo $villain_address; ?>" readonly>
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
                <input type="text" class="form-control" value="<?php echo $body_name ?>" readonly>
              </div>
              <div>
                <label class="col-sm col-form-label">ใบหน้า : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $face_name ?>" readonly>
              </div>
              <div>
                <label class="col-sm col-form-label">ทรงผม : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $hair_name ?>" readonly>
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
                <input type="text" class="form-control" value="<?php echo $nose_name ?>" readonly>
              </div>
              <div>
                <label class="col-sm col-form-label">ปาก : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $mouth_name ?>" readonly>
              </div>
              <div>
                <label class="col-sm col-form-label">คาง : </label>
              </div>
              <div class="col-md">
                <input type="text" class="form-control" value="<?php echo $chin_name ?>" readonly>
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
                  <input type="text" class="form-control" value="<?php echo $ears_name ?>" readonly>
                </div>
                <div>
                  <label class="col-sm col-form-label">หน้าผาก : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" value="<?php echo $forehead_name?>" readonly>
                </div>
                <div>
                  <label class="col-sm col-form-label">ตา : </label>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" value="<?php echo $eyes_name ?>" readonly>
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
     <br>
     <br>
     <br>

</section>
<aside class="menu">
    <ul style="list-style-type: none;margin:0;padding:0;">
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้เสียหาย"><button type="button" class="btn btn-outline-primary">ผู้เสียหาย</button></a></li>
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้ต้องหา"><button type="button" class="btn btn-outline-primary">ผู้ต้องหา</button></a></li>
    </ul>
</aside>
<div class="clearfloat"></div>
<div class="footer-view"></div>
</div>

<div class="modal fade" id="SC" role="dialog">
  <div class="modal-dialog modal-xl  role="document"">
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
          <h4 style=" justify-content: center"><i class="fas fa-search"></i> ค้นหาข้อมูล</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       </div>
        <div class="modal-body" style="padding:40px 50px;">

        <div class="row">
              <div class="col-md">
                <form method="get">
              <table id="table_id" class="display table">
                    <thead>
                      <tr>
                        <th>เลขคดี</th>
                        <th>ชื่อคดี</th>
                        <th>ประเภทคดี</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while(list($case_id,$case_name,$case_type)=mysqli_fetch_row($select)){
                      if($case_type==1){
                        $case_typeName="คดีเพ่ง";
                      }else{
                        $case_typeName="คดีอาญา";
                      }
                          echo"
                          <tr>
                            <td><a href='?datacase=$case_id&module=1&action=1'>$case_id</a></td>
                            <td>$case_name</td>
                            <td>$case_typeName</td>
                        </tr>";
                      }
                      ?>
                  </tbody>
                </table>
                </form>
              </div>
            </div>
           </div>
           <div class="footer">
            <div style="float: left;">
              <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"> Cancel</button>
            </div>
            <div style="float: right">  
              <a href="#">ลืมรหัสผ่าน</a>
            </div>
          </div>
      </div>
  </div>
       
<script>
$(document).ready(function(){
  $('#table_id').DataTable();
  $("#myBtnSc").click(function(){
    $("#SC").modal();
  });
})

search_idcard()

function search_idcard(){
  var i=$("#chk_link").val();
   if(i==1){
    window.location = "<?php echo $search; ?>";
    alert(i+"<?php echo $search; ?>")
   }
  
}

</script>
</div>
<?php echo $com_s?>
