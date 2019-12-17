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
include ("module/fuction/connect_db.php");
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
<?php
$con = connect_db();
 $select = mysqli_query($con,"SELECT permiss_id,user_id FROM user WHERE permiss_id='5'")or die("select sql error!!!!".mysqli_error($con));     
 $loop=mysqli_num_rows($select);
?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!--fixed-top-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home_admin.php"><i style="font-size: 36px" class="fas fa-h-square"></i> PhuThon pak5</a>  
 
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <button type="button" class="btn btn-warning" id="btnMGU" data-see="5"><i class="far fa-bell"></i>
    ผู้ใช้งานที่ไม่มีสถานะ <span class="badge badge-light"><?php echo $loop ?></span>
    <span class="sr-only">unread messages</span>
    </button>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="navbar-brand"  href="home_admin.php?module=1&action=5"><i class="far fa-id-badge"></i> <?php echo $_SESSION['user_name']; ?></a>
    <a href="module/fuction/destroy_session.php"><button class="btn btn-outline-warning my-2 my-sm-0" type="button">ออกจากระบบ</button></a>
    </form>
  </div>
</nav>
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="home_admin.php?module=1&action=8">ข้อมูลผู้ใช้ระบบ</a>
    <!-- <button type="button" class="btn btn-warning" id="btnMGU" data-see="5"><i class="far fa-bell"></i>
    ผู้ใช้งานที่ไม่มีสถานะ <span class="badge badge-light"><?php echo $loop ?></span>
    <span class="sr-only">unread messages</span>
    </button> -->
    <a class="nav-link" href="home_admin.php?module=1&action=9">เจ้าหน้าที่ในหน่วยงาน</a>
    <a class="nav-link" href="#">ข้อมูลตำแหน่ง</a>
    
 
  </nav>
</div>

<main role="main" class="container">
  <!-- <div class="d-flex align-items-center p-3 my-3 text-black-50 bg-purple rounded shadow-sm"> -->
  <div>
  <?php 
  include("module/fuction/fc_module.php");
  if(empty($_GET['module'])||empty($_GET['action'])){
  module(1,8);
  }else{
  module($_GET['module'],$_GET['action']);
  }

  ?>
  </div>

</main>
</body>
</html>
<script>
$("#btnMGU").click(function(){
    var see = "5";
    window.location.href="home_admin.php?see=5&module=1&action=8";
  //   $.post("module/view/manage_permiss.php",{see:see}).done(function(data,txtstuta){
  //     alert(see);
  //     alert(data)
  //     window.location.href="home_admin.php?&module=1&action=8";
  //   }
  //  );
})
</script>