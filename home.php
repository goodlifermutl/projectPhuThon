
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

?>
<?php echo $com_s ?>
<div class="sticky-top"> <!-- sticky-top -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!--fixed-top-->
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
<?php echo $bar_t ?>
<div class="" style="padding-top:3px;background:white;">

<button type="button" id="btnPinG" class="btn btn-warning"><b>ปักหมุดคดี</b></button>
<button type="button" id="btnPinN" class="btn btn-danger"><b>ยกเลิกปักหมุด</b></button>
<a href="#ผู้เสียหาย"><button type="button" class="btn btn-outline-info">ผู้เสียหาย</button></a>
<a href="#ผู้ต้องหา"><button type="button" class="btn btn-outline-info">ผู้ต้องหา</button></a>
</div>
<?php echo $bar_n ?>
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
</body>
</html>