
<html lang="en">
<head>
  <title>PhuThon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/af7942016f.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
 

  <link rel="stylesheet" href="home.css">
  <?php //validate ?>
		<script src="js/validate/jquery.validate.min.js" ></script>
		<script src="js/validate/additional-methods.min.js" ></script>
		<script src="js/validate/localization/messages_th.min.js" ></script>
		<script src="js/validateSetdef.js" ></script> 
		<?php //END validate ?>
</head>
<body>
<?php
session_start();
include ("connect_db.php");
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
 <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home.php"><i style="font-size: 36px" class="fas fa-h-square"></i> PhuThon pak5</a>  

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="navbar-brand"><i class="far fa-id-badge"></i> <?php echo $_SESSION['user_name']; ?></a>
    <a href="destroy_session.php"><button class="btn btn-outline-warning my-2 my-sm-0" type="button">ออกจากระบบ</button></a>
    </form>
  </div>
</nav>


<div class="container bigbody">
  <div  class="topbigbody">
  <!-- <br>
    <form class="form-inline my-2 my-lg-0 menusearch">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <div class="subbigbody">
      <br>
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
  <div class="beforfooter">
      <br>
      <h1 class="text-center">คดีที่รับผิดชอบ</h1>
      <table class="table">

      <?php 
       $sql_res = mysqli_query($con,"SELECT cn.case_id,cn.case_name,cn.case_type,cn.case_savetime FROM case_name as cn INNER JOIN responsible_person as rp ON rp.case_id = cn.case_id WHERE rp.card_id ='$_SESSION[id_card]'")or die("select sql responsible_person error".mysqli_error($con));

       while(list($case_id,$case_name,$case_type)=mysqli_fetch_row($sql_res)){
        if($case_type==1){
          $case_typeName="คดีเพ่ง";
        }else{
          $case_typeName="คดีอาญา";
        }
            echo"
            <tr>
              <td><a href='view_data.php?datacase=$case_id'>$case_id</a></td>
              <td>$case_name</td>
              <td>$case_typeName</td>
          </tr>";
        }
      ?>
       </table>
       <hr>
      <form>

      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];

        $sex_name;
        $i=1;

        $result_victim = mysqli_query($con,"SELECT vm.case_id, vm.title_name, vm.victim_name,vm.victim_lastname,vm.victim_sex,vm.victim_idcard,vm.victim_address,ed.edu_name,vm.victim_image FROM victim as vm  INNER JOIN education as ed ON vm.victim_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_victim sqli error".mysqli_error($con));

        while(list($case_id,$title_id,$victim_name,$victim_lastname,$victim_sex,$victim_idcard,$victim_address,$victim_education,$victim_image)=mysqli_fetch_row($result_victim)){
        
          if($victim_sex == 1){
            $sex_name = "ชาย";
          }else{
            $sex_name = "หญิง";
          }
        ?>
         <div class="col-md">
          <label for="formGroupExampleInput">ผู้เสียหาย คนที่ <?php echo $i; $i++?></label>
          <p><img src="image/<?php echo $victim_image; ?>.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
          <div class="form-row">
          <div class="col-2">
              <input type="text" class="form-control" placeholder="รหัสคดี <?php echo $case_id; ?>" value="<?php echo $case_id; ?>" readonly>
            </div>
            <div class="col-2">
              <input type="text" class="form-control" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_id; ?>" readonly>
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

<div class="footer">1</div>

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
                            <td><a href='view_data.php?datacase=$case_id'>$case_id</a></td>
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
</body>
</html>