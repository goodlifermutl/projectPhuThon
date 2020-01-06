
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  
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
include ("module/fuction/connect_db.php");
$con = connect_db();

$select = mysqli_query($con,"SELECT permiss_id FROM user WHERE user_id='$_SESSION[user_name]'")or die("select sql error".mysqli_error($con));
list($permiss)=mysqli_fetch_row($select);
$html_l;
if($permiss==2){
  $html_l="home.php";
}if($permiss==3){
  $html_l="home.php?&module=2&action=2";
}if($permiss==4){ ?>
  <script>
  swal({
      title: "กรุณาเข้าสู่ระบบ",
      icon: "warning",
  }).then((value) => {
window.location.href = "index.php";
  });
</script>
<?php
}

if(empty($_SESSION['user_name'])){
  $com_s="<!--";
  $com_e="-->";
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
if(empty($_GET['module'])||empty($_GET['action'])){
  $md_chk="";
  $ac_chk="";
}else{
  $md_chk=$_GET['module'];
  $ac_chk=$_GET['action'];
}

if($md_chk=='1'&&$ac_chk=='1'){
  $bar_t="";
  $bar_n="";
}
else{
  $bar_t="<!--";
  $bar_n="-->";
}

if($ac_chk=='4'||$ac_chk=='10'||$ac_chk=='11'||$ac_chk=='12'||$ac_chk=='13'||$ac_chk=='14'||$ac_chk=='15'||$ac_chk=='16'||$ac_chk=='17'||$ac_chk=='18'){
  $ul_t="";
  $ul_n="";
  
}
else{
  $ul_t="<!--";
  $ul_n="-->";

}
if($ac_chk=='4'){
  $action1="active";
}else if($ac_chk=='10'){
  $action2="active";
}else if($ac_chk=='11'){
  $action3="active";
}else if($ac_chk=='12'){
  $action4="active";
}else if($ac_chk=='13'){
  $action5="active";
}else if($ac_chk=='14'){
  $action6="active";
}else if($ac_chk=='15'){
  $action7="active";
}else if($ac_chk=='16'){
  $action8="active";
}else if($ac_chk=='17'){
  $action9="active";
}else if($ac_chk=='18'){
  $action10="active";
}
?>
<?php echo $com_s ?>
<div class="sticky-top"> <!-- sticky-top -->
 <nav class="navbar navbar-expand-lg navbar-green bg-light"> <!--fixed-top-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php echo $html_l ?>"><i style="font-size: 36px" class="fas fa-h-square"></i> PhuThon pak5</a>  
   
   <!-- <div class="row">
    <div class="col-md">
    <button type="button" class="btn btn-outline-dark"><i class="fas fa-search-plus" style="font-size: 50px"></i></i></button>
    </div>
    <div class="col-md">
    <button type="button" class="btn btn-outline-dark"><i class="fas fa-edit" style="font-size: 50px"></i></button>
    </div>
    <div class="col-md">
     <button type="button" class="btn btn-outline-dark"><i class="fas fa-plus-circle" style="font-size: 50px"></i></i></button>
    </div>
  </div> -->
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
    <a class="navbar-brand"  href="home.php?module=1&action=5"><i class="far fa-id-badge"></i> <?php echo $_SESSION['user_name']; ?></a>
    <a href="module/fuction/destroy_session.php"><button class="btn btn-outline-warning my-2 my-sm-0" type="button">ออกจากระบบ</button></a>
    </form>
  </div>
</nav>
<?php echo $ul_t ?>
<ul class="nav nav-tabs" style="background-color: #ffffff;">
  <li class="nav-item">
  <a class="nav-link <?php echo $action1 ?>" href="#" id="myBtnNsVT0">เพิ่มข้อมูลผู้เสียหาย</a>
  </li>
  <li class="nav-item">
  <a class="nav-link <?php echo $action2 ?>" href="#" id="myBtnNsVT1">เพิ่มข้อมูลผู้ต้องหา</a>
  </li>
  <li class="nav-item">
  <a class="nav-link <?php echo $action3 ?>" href="#" id="myBtnNsVT2">เพิ่มข้อมูลของกลาง</a>
  </li>
  <li class="nav-item">
  <a class="nav-link <?php echo $action4 ?>" href="#" id="myBtnNsVT3">เพิ่มบันทึกการจับกุม</a>
  </li>

  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">เพิ่มข้อมูลอื่น ๆ</a>
    <div class="dropdown-menu">
      <a class="dropdown-item <?php echo $action5 ?>" href="#" id="myBtnNsVT4">เพิ่มข้อมูลหมายจับ</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item <?php echo $action6 ?>" href="#" id="myBtnNsVT5">เพิ่มคำร้องออกหมายจับ</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item <?php echo $action7 ?>" href="#" id="myBtnNsVT6">เพิ่มรายงานการสอบสวน</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item <?php echo $action8 ?>" href="#" id="myBtnNsVT7">เพิ่มหมายเรียกผู้ต้องหา</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item <?php echo $action9 ?>" href="#" id="myBtnNsVT8">เพิ่มคำให้การผู้ต้องหา</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item <?php echo $action10 ?>" href="#" id="myBtnNsVT9">เพิ่มหมายค้น</a>
      <div class="dropdown-divider"></div>
      
    </div>
  </li>
</ul>
<?php echo $ul_n ?>
<?php echo $bar_t ?>
<ul class="nav nav-tabs" style="background-color: #ffffff;">
<button type="button" id="btnPinG" class="btn btn-warning"><b>ปักหมุดคดี</b></button>
<button type="button" id="btnPinN" class="btn btn-danger"><b>ยกเลิกปักหมุด</b></button>
  <li class="nav-item">
  <a class="nav-link <?php echo $action1 ?>" href="#ผู้เสียหาย" id="">ผู้เสียหาย</a>
  </li>
  <li class="nav-item">
  <a class="nav-link <?php echo $action2 ?>" href="#ผู้ต้องหา" id="">ผู้ต้องหา</a>
  </li>
  <li class="nav-item">
  <a class="nav-link <?php echo $action3 ?>" href="#ของกลาง" id="">ของกลาง</a>
  </li>
  <li class="nav-item">
  <a class="nav-link <?php echo $action4 ?>" href="#บันทึกการจับกุม" id="">บันทึกการจับกุม</a>
  </li>
  <li>
  <a class="nav-link <?php echo $action5 ?>" href="#หมายจับ" id="">หมายจับ</a>
  </li>
  <li>
  <a class="nav-link <?php echo $action6 ?>" href="#คำร้องออกหมายจับ" id="">คำร้องออกหมายจับ</a>
  </li>
  <li>
  <a class="nav-link <?php echo $action7 ?>" href="#รายงานการสอบสวน" id="">รายงานการสอบสวน</a>
  </li>
  <li>
  <a class="nav-link <?php echo $action8 ?>" href="#หมายเรียกผู้ต้องหา" id="">หมายเรียกผู้ต้องหา</a>
  </li>


  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">อื่น ๆ</a>
    <div class="dropdown-menu">
      <a class="dropdown-item <?php echo $action9 ?>" href="#คำให้การผู้ต้องหา" id="">คำให้การผู้ต้องหา</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item <?php echo $action10 ?>" href="#หมายค้น" id="">หมายค้น</a>
      <div class="dropdown-divider"></div>
      
    </div>
  </li>
</ul>

<?php echo $bar_n ?>
<!-- <div class="" style="padding-top:3px;background:white;">

<button type="button" id="btnPinG" class="btn btn-warning"><b>ปักหมุดคดี</b></button>
<button type="button" id="btnPinN" class="btn btn-danger"><b>ยกเลิกปักหมุด</b></button>
<a href="#ผู้เสียหาย"><button type="button" class="btn btn-outline-info">ผู้เสียหาย</button></a>
<a href="#ผู้ต้องหา"><button type="button" class="btn btn-outline-info">ผู้ต้องหา</button></a>
</div> -->
</div>
<!-- <ul class="nav justify-content-center">
  <li class="nav-item" style="margin-right:20px;">
  <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-search-plus" style="font-size: 80px"></i></i></p>
      </a>
  </li>
  <li class="nav-item">
  <button type="button" class="btn btn-outline-dark"><i class="fas fa-plus-circle" style="font-size: 50px"></i></i></button>
  </li>
</ul> -->


<div class="container-fluid">

<?php 

include("module/fuction/fc_module.php");
if(empty($_GET['module'])||empty($_GET['action'])){
  module(0,0);
}else{
  module($_GET['module'],$_GET['action']);
}

?>

  </div>
  <div class="footer">1</div>
       
<?php echo $com_e?>

<?php
$id_click=1;
 $link = array("4", "10", "11", "12", "13", "14", "15", "16", "17","18");
 $n=count($link);
  for($j=0;$j<$n;$j++){
?>
<script>
        $(document).ready(function(){
        $("#myBtnNsVT<?php echo$j ?>").click(function(){
            // swal({
            // title: "การเพิ่มข้อมูล",
            // text: "ต้องการเพิ่มข้อมูลใช่หรือไม่!",
            // icon: "warning",
            // buttons: true,
            // dangerMode: true,
            // buttons: ["ยกเลิก","ตกลง"]
            // })
            // .then((willDelete) => {
            // if (willDelete) {
                window.location.href="home.php?module=2&action=<?php echo $link[$j]; ?>";

            // } else {

            //     window.location.href="home.php?module=2&action=3";
            // }
            // });
        });
        })
        </script>
    <?php 
   $id_click++;
  }?>
</body>
</html>

