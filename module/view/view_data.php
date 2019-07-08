

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
  <div class="bf-footer">
    <div class="victim">
    <a name="ผู้เสียหาย"></a>
      <p><h1 class="text-center">ผู้เสียหาย</h1></p>
      <br>
      <form>

      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];

        $sex_name;
        $i=1;

        $result_victim = mysqli_query($con,"SELECT vm.case_id, vm.title_name, vm.victim_name,vm.victim_lastname,vm.victim_sex,vm.victim_idcard,vm.victim_address,ed.edu_name,vm.victim_image FROM victim as vm  INNER JOIN education as ed ON vm.victim_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_victim sqli error".mysqli_error($con));

        while(list($case_id,$title_name,$victim_name,$victim_lastname,$victim_sex,$victim_idcard,$victim_address,$victim_education,$victim_image)=mysqli_fetch_row($result_victim)){
        
          if($victim_sex == 1){
            $sex_name = "ชาย";
          }else{
            $sex_name = "หญิง";
          }
        ?>
         <div class="col-md">
          <b><label for="formGroupExampleInput">ผู้เสียหาย คนที่ <?php echo $i; $i++?></label></b>
          <p><img src="../../image/<?php echo $victim_image; ?>.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
          <div class="form-row">
          <div class="col-2">
              <input type="text" class="form-control" placeholder="รหัสคดี <?php echo $case_id; ?>" value="<?php echo $case_id; ?>" readonly>
            </div>
            <div class="col-2">
              <input type="text" class="form-control" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" readonly>
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="ชื่อ" value="<?php echo $victim_name; ?>" readonly>
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="นามสกุล" value="<?php echo $victim_lastname; ?>" readonly>
            </div>
            </div>
          </div>
          
          <p></p>
        <div class="col-md">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo $victim_idcard; ?>" readonly>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="ระดับการศึกษา" value="<?php echo $victim_education; ?>" readonly>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="เพศ" value="<?php echo $sex_name; ?>" readonly>
            </div>
          </div>
        </div>

        <p></p>
        <div class="col-md">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="ที่อยู่" value="<?php echo $victim_address; ?>" readonly>
            </div>
          </div>
        </div>
        <hr>
      <?php
      }
    }
      ?>
      </form>
     </div>
     <div class="villain">
     <a name="ผู้ต้องหา"></a>
     <p><h1 class="text-center">ผู้ต้องหา</h1></p>
     <form>

      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];

        $sex_name;
        $i=1;

        $result_victim = mysqli_query($con,"SELECT vl.case_id,vl.title_name,vl.villain_name,vl.villain_lastname,vl.villain_sex,vl.villain_idcard,vl.villain_address,ed.edu_name,vl.villain_image FROM villain as vl INNER JOIN education as ed ON vl.villain_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_villain sqli error".mysqli_error($con));

        while(list($case_id,$title_name,$villain_name,$villain_lastname,$villain_sex,$villain_idcard,$villain_address,$villain_education,$villain_image)=mysqli_fetch_row($result_victim)){
        
          if($villain_sex == 1){
            $sex_name = "ชาย";
          }else{
            $sex_name = "หญิง";
          }
        ?>
         <div class="col-md">
          <b><label for="formGroupExampleInput">ผู้ต้องหา คนที่ <?php echo $i; $i++?></label></b>
          <p><img src="../../image/<?php echo $villain_image; ?>.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
          <div class="form-row">
          <div class="col-2">
              <input type="text" class="form-control" placeholder="รหัสคดี <?php echo $case_id; ?>" value="<?php echo $case_id; ?>" readonly>
            </div>
            <div class="col-2">
              <input type="text" class="form-control" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" readonly>
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="ชื่อ" value="<?php echo $villain_name; ?>" readonly>
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder="นามสกุล" value="<?php echo $villain_lastname; ?>" readonly>
            </div>
            </div>
          </div>
          
          <p></p>
        <div class="col-md">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" value="<?php echo $villain_idcard; ?>" readonly>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="ระดับการศึกษา" value="<?php echo $villain_education; ?>" readonly>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="เพศ" value="<?php echo $sex_name; ?>" readonly>
            </div>
          </div>
        </div>

        <p></p>
        <div class="col-md">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="ที่อยู่" value="<?php echo $villain_address; ?>" readonly>
            </div>
          </div>
        </div>
        <hr>
      <?php
      }
    }
      ?>
      </form>
     <br>
     <br>
     <br>
     </div>
     <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
</div>
<div class="menu">
    <ul style="list-style-type: none;margin:0;padding:0;">
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้เสียหาย"><button type="button" class="btn btn-outline-primary">ผู้เสียหาย</button></a></li>
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้ต้องหาย"><button type="button" class="btn btn-outline-primary">ผู้ต้องหา</button></a></li>
    </ul>
</div>
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

</script>
</div>
<?php echo $com_s?>
