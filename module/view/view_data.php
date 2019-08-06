

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
window.location.href = "index.php";
  });
</script>
<?php
}else{
  $com_s="";
  $com_e="";
}
?>
<?php echo $com_s ?>
<div  class="topbigbody">
  <!-- <br>
    <form class="form-inline my-2 my-lg-0 menusearch">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <div class="subbigbody">
    <div class="row">
    <div class="col-sm-6">
    <p class="text-center"><b>ค้นหาข้อมูล</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-search-plus" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    <!-- <div class="col-sm-4">
      <p class="text-center"><b>แก้ไขข้อมูล</b></p>
      <a href="#" id="myBtnEdit">
      <p class="text-center"><i class="fas fa-edit" style="font-size: 80px"></i></p>
      </a>
    </div> -->
    <div class="col-sm-6">
      <p class="text-center"><b>เพิ่มข้อมูล</b></p>
      <a href="#" id="myBtnNs">
      <p class="text-center"><i class="fas fa-plus-circle" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>

<div class="container bigbody">
  
    <div class="col-md">
    <section class="bf-footer">
    <div class="namecase">
      <form>
      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];
      }
      $show_case = mysqli_query($con,"SELECT case_name FROM case_name WHERE case_id = '$data'")or die("case error".mysqli_error($con));
      list($case_name)=mysqli_fetch_row($show_case);
      ?>
      <p><h1 class="text-center">คดี : <?php echo $case_name ?></h1></p>
      </form>
    </div>
    <div class="arr_record">
      <form>
        <?php
        if(empty($_GET['datacase'])){
          $data = "";
        }else{
          $data=$_GET['datacase'];
        }
        $i=1;
        ?>
      </form>
    </div>
    <a name="ผู้เสียหาย"></a>
    <div class="victim">
      <p><h1 class="text-center">ผู้เสียหาย</h1></p>
      <br>
   
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
        $num_loop=mysqli_num_rows($result_victim);
        if(empty($case_id)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($title_name,$victim_name,$victim_lastname,$victim_sex,$victim_idcard,$victim_address,$victim_education,$victim_image,$victim_race,$victim_nationality,$victim_careen)=mysqli_fetch_row($result_victim)){
    
          if($victim_sex == 1){
            $sex_name = "ชาย";
            $sex1="selected";
            $sex2="";
          }else{
            $sex_name = "หญิง";
            $sex1="";
            $sex2="selected";
          }
        ?>
        <form class="victim<?php echo$i ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        <a name="<?php echo $victim_idcard ?>"></a>
        <a name="<?php echo $victim_name ?>"></a> 
        <a name="<?php echo $victim_lastname ?>"></a> 
         <div class="col-md">
         <b><label for="formGroupExampleInput">ผู้เสียหาย คนที่ <?php echo $i; ?></label></b><button type="button" id="victim_test<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         <p><img src="image/<?php echo $victim_image; ?>" class="img-fluid mx-auto d-block rounded-circle victimpic" alt="Responsive image" width="128";height="128"; id="victimpic<?php echo $i; ?>"></p>
          <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">รหัสคดี : </label>
          </div>
          <div class="col-2">
              <input type="hidden" value="<?php echo$i; ?>" name="victim_i[]?>">
              <input type="text" class="form-control" placeholder="เลขคดี" value="<?php echo $case_id; ?>"  name="victim_case[]" readonly required>
            </div>
            <div>
              <label class="col-sm col-form-label">ชื่อ : </label>
            </div>
            <div class="col-1">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" id="focus<?php echo $i?>" name="victim_titlename[]" disabled required>
              
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ชื่อ" value="<?php echo $victim_name; ?>" name="victim_name[]"disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="นามสกุล" value="<?php echo $victim_lastname; ?>" name="victim_lastname[]" disabled required>
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
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="<?php echo $victim_race; ?>" name="victim_race[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="สัญชาติ" value="<?php echo $victim_nationality; ?>" name="victim_nationality[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="อาชีพ" value="<?php echo $victim_careen; ?>" name="victim_careen[]" disabled required>
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
              <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" id="victim_idcard<?php echo $i; ?>" name="victim_idcard[]" data-idcard="<?php echo $victim_idcard ?>"  value="<?php echo $victim_idcard; ?>"readonly required>
            </div>
            <div>
              <label class="col-sm col-form-label" >ระดับการศึกษา : </label>
            </div>
            <div class="col-3">
              <select class="custom-select edit<?php echo $i; ?>" id="" name="victim_edu[]" disabled required>
                   < <?php $result_edu = mysqli_query($con,"SELECT * FROM education")or die("select education error".mysqli_error($con));
                        while(list($edu_id,$edu_name)=mysqli_fetch_row($result_edu)){
                          $selected=$edu_name==$victim_education?"selected":"";
                          echo"<option value='$edu_id' $selected>$edu_name</option>";
                        }
                   ?> 
                   
                </select>
            </div>
            <div>
              <label class="col-sm col-form-label">เพศ : </label>
              
            </div>
            <div class="col-md">
              <select class="custom-select edit<?php echo $i; ?>" id="" name="victim_sex[]" disabled required>
                    <option value="1" <?php echo$sex1 ?>>ชาย</option>
                    <option value="2" <?php echo$sex2 ?>>หญิง</option>
                </select>
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
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ที่อยู่" value="<?php echo $victim_address; ?>" name="victim_address[]" disabled required>
            </div>
            </div>
          </div>
          <p></p>
          <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success save" id="save<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="cancle<?php echo $i; ?>">ยกเลิก</button></p>
            </div>
        </div>
        <hr>
      </form>
      <?php
    
      ?>
      <div class="modal fade" id="victim_pic<?php echo $i; ?>" role="dialog">
        <div class="modal-dialog modal-auto"  role="document">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-content">
          <img src="image/<?php echo $victim_image; ?>" class="img-fluid mx-auto d-block" ></p>
          </div>
        </div>
      </div>
      <?php
        $i++;
      }
    }
  }
      ?>
     
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
          <p><img src="image/<?php echo $villain_image; ?>.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
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
     <br>
     <br>
     <br>

</section>
<aside class="menu  sticky-top">
    <ul style="list-style-type: none;margin:0;padding:0;">
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้เสียหาย"><button type="button" class="btn btn-outline-primary">ผู้เสียหาย</button></a></li>
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้ต้องหา"><button type="button" class="btn btn-outline-primary">ผู้ต้องหา</button></a></li>
    </ul>
</aside>
<div class="clearfloat"></div>
<div class="footer-view"></div>
</div>

<div class="modal fade" id="SC" role="dialog">
  <div class="modal-dialog modal-xl"  role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
          <h4 style=" justify-content: center"><i class="fas fa-search"></i> ค้นหาข้อมูล</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       </div>
      <?php
      //  $select = mysqli_query($con,"SELECT case_id,case_name,case_type FROM case_name")or die("select sql error".mysqli_error($con));
        ?>
        <div class="modal-body" style="padding:40px 50px;">
              <div class="input-group mb-3">
                <div class="col-3">
                <select class="custom-select" id="inputGroupSelect02" name="type">
                    <option value="1">เลขคดี</option>
                    <option value="2">เลขบัตรประจำตัวประชาชน</option>
                    <option value="3">ชื่อนามสกุล</option>
                </select>
                </div>
                <div class="col-5">
                <input type="text" class="form-control" placeholder="ค้นหาข้อมูล" name="search" id="textsearch">
                </div>
                <div class="col-3">
                <button type="button" class="btn btn-success" id="btnsearch">ค้นหา</button>
                </div>
                
              </div>
              <div class="col-auto" id="loadid">
              
              </div>
              
            </div>
           </div>
           <div class="footer">
            <div style="float: right;">
              <button type="button" class="btn btn-danger btn-default" data-dismiss="modal"> Cancel</button>
            </div>
            <div class="clearfloat"></div>
          </div>
      </div>
      </div>    
<script>
  
<?php  
$md=1;
  for($y=1;$y<=$num_loop;$y++){
    
?>
$("#victimpic<?php echo $md ?>").click(function(){
    $("#victim_pic<?php echo $md ?>").modal();
  });
var id<?php echo $md;?> = $("#id<?php echo $md; ?>").val()
$('.victim<?php echo$md; ?>').validate({ 
								
  rules: {
    usrname:{
    minlength:6
    },
    psw: { 
    minlength:8
    },
    psw2: {
    minlength:8,
    equalTo: ".password"
    },
    idcard: {
    minlength:13,
    maxlength:13
            }
        }
        });
$("#save<?php echo $md ?>").hide();
$("#cancle<?php echo $md ?>").hide();

$("#victim_test<?php echo $md; ?>").click(function(){
    $(".edit<?php echo $md; ?>").prop("disabled", false);
    $("#save<?php echo $md ?>").show();
    $("#cancle<?php echo $md ?>").show();
    swal({
  title: "การแก้ไขข้อมูล",
  text: "ต้องการแก้ไขข้อมูลใช่หรือไม่!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  buttons: ["ยกเลิก","ตกลง"]
})
.then((willDelete) => {
  if (willDelete) {
    $( "#focus<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
  }
});
})
$("#cancle<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".edit<?php echo $md; ?>").prop("disabled", true);
 $("#save<?php echo $md ?>").hide();
  $("#cancle<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
})
$(".victim<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".victim<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_victim.php",
					        type: 'POST',
					        data: formData,
					        success: function (data) {
								alert(data);
								//swal("บันทึกสำเร็จแล้ว!", "", "success")
								swal("บันทึกสำเร็จ!", {
									icon: "success",
									buttons: false,
									timer: 1000,
								});   
                
                
                window.location.href="home.php?datacase=<?php echo $case_id; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})

<?php $md++; } ?>

//$("#victim").on('submit','.save',function(){
 //e.preventDefault();
 //alert("gg")
  // $check = $("#victim").valid();
  // if($check == true){

  // var formData = new FormData(this);
  // var idc = $(this).data("idcard");
    
//         $.ajax({
//             url: "../fuction/update_data.php",
//             type: 'POST',
//             data: formData,
//             success: function (data) {
//              alert(data)  
        
//       swal({
//       title: "สมัครสมาชิกสำเร็จ",
//       icon: "success",
//       button: "ตกลง",
//     }).then((value) => {
      
//       //window.location.href="../main/home.php?datacase=<?php echo $case_id; ?>&module=1&action=1&#";
// });

// },
//             cache: false,
//             contentType: false,
//             processData: false
// });	
// }
//});

$(document).ready(function(){
  $('#table_id').DataTable();
  $("#myBtnSc").click(function(){
    $("#SC").modal();
  });
  $("#myBtnNs").click(function(){
    window.location.href="home.php?&module=2&action=2";
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

function loadsunass(){
      var id1= $("#inputGroupSelect02").val();
      var id2 = $("#textsearch").val();

      $("#loadid").html("")
    //   $("#loadging").css('display','')
      $.ajax({
        url: "module/main/show_data_search.php",
        data:{type:id1,search:id2},
        type: "POST"
      }).done(function(data){
        $("#loadid").html(data)
      })
    }  

$(document).ready(function() {
    loadsunass()
    $("#btnsearch").click(function(){
        var id1= $("#inputGroupSelect02").val();
        var id2 = $("#textsearch").val();
    //alert(id1+id2)
   $.post("show_data_search.php",{type:id1,search:id2},
    function (data, textStatus, jqXHR) {
    //alert(data)
     $("#loadid").html(data)
     loadsunass()
    }
   );
  })
 });

</script>
</div>
<?php echo $com_s?>
