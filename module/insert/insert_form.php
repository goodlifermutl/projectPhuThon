<?php

if(empty($_GET['datacase'])){
  $case_id = $_SESSION['case_id'];
}else{
  $_SESSION['case_id']=$_GET['datacase'];
  $case_id = $_GET['datacase'];
}
// echo $_SESSION['case_id'];
// echo $case_id;
$id_click=1;


?>

<style>
a{
  color: black;
}
a:hover{
  color: yellow;
}
</style>

<!-- <div class="menu" style="border: 1px solid blue;float: left;width:250px;">
<div class="row">
<div class="col-md">
    
    <button type="button" id="myBtnNsVT0" class="btn btn-warning"><i class="far fa-user" style="font-size: 20px"></i> <b>เพิ่มข้อมูลผู้เสียหาย</b></button>
    <button type="button" id="myBtnNsVT1" class="btn btn-warning"><i class="fas fa-user-secret" style="font-size: 20px"></i> <b>เพิ่มข้อมูลผู้ต้องหา</b></button>
    <button type="button" id="myBtnNsVT2" class="btn btn-warning"><i class="fas fa-shoe-prints" style="font-size: 20px"></i> <b>เพิ่มข้อมูลของกลาง</b></button>
    <button type="button" id="myBtnNsVT3" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มบันทึกการจับกุม</b></button>
    <button type="button" id="myBtnNsVT4" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มข้อมูลหมายจับ</b></button>
    <button type="button" id="myBtnNsVT5" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มคำร้องออกหมายจับ</b></button>
    <button type="button" id="myBtnNsVT5" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มคำร้องออกหมายจับ</b></button>
    <button type="button" id="myBtnNsVT6" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มรายงานการสอบสวน</b></button>
    <button type="button" id="myBtnNsVT7" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มหมายเรียกผู้ต้องหา</b></button>
    <button type="button" id="myBtnNsVT8" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มคำให้การผู้ต้องหา</b></button>
    <button type="button" id="myBtnNsVT9" class="btn btn-warning"><i class="fas fa-sticky-note" style="font-size: 20px"></i> <b>เพิ่มหมายค้น</b></button>
</div>
</div>
</div>
<div class="container"  style="border: 1px solid yellow;">

2.2

</div>
<div style="clear: both;"></div> -->
<!-- <div  class="topbigbody3">
    <div class="subbigbody"> -->

    <div class="row">
    <div class="col-sm-4">

    <p class="text-center"><b>เพิ่มข้อมูลผู้เสียหาย</b></p>
      <a href="#>" id="myBtnNsVT0">
      <p class="text-center"><i class="far fa-user" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">

    <p class="text-center"><b>เพิ่มบันทึกการจับกุม</b></p>
      <a href="#" id="myBtnNsVT3">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มคำร้องออกหมายจับ</b></p>
      <a href="#" id="myBtnNsVT5">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <!-- <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูลผู้ต้องหา</b></p>
      <a href="#" id="myBtnNsVT1">
      <p class="text-center"><i class="fas fa-user-secret" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูลของกลาง</b></p>
      <a href="#" id="myBtnNsVT2">
      <p class="text-center"><i class="fas fa-shoe-prints" style="font-size: 80px"></i></p>
      </a>
    </div> -->
    </div>
    <!-- </div>
    </div> -->
    <!-- <div  class="topbigbody3">
    <div class="subbigbody"> -->
      <br>
    <div class="row">
    <!-- <div class="col-sm-4">

    <p class="text-center"><b>เพิ่มบันทึกการจับกุม</b></p>
      <a href="#" id="myBtnNsVT3">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มคำร้องออกหมายจับ</b></p>
      <a href="#" id="myBtnNsVT5">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div> -->
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูลหมายจับ</b></p>
      <a href="#" id="myBtnNsVT4">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">

    <p class="text-center"><b>เพิ่มรายงานการสอบสวน</b></p>
      <a href="#" id="myBtnNsVT6">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มหมายเรียกผู้ต้องหา</b></p>
      <a href="#" id="myBtnNsVT7">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>

    </div>
    <!-- </div>
    </div> -->
    <!-- <div  class="topbigbody3">
    <div class="subbigbody"> -->
      <br>
    <div class="row">
    <!-- <div class="col-sm-4">

    <p class="text-center"><b>เพิ่มรายงานการสอบสวน</b></p>
      <a href="#" id="myBtnNsVT6">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มหมายเรียกผู้ต้องหา</b></p>
      <a href="#" id="myBtnNsVT7">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div> -->
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มคำให้การผู้ต้องหา</b></p>
      <a href="#" id="myBtnNsVT8">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">

<p class="text-center"><b>เพิ่มหมายค้น</b></p>
  <a href="#" id="myBtnNsVT9">
  <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
  </a>
</div>
    </div>
    <!-- </div>
    </div>
    <div  class="topbigbody3">
    <div class="subbigbody"> -->
      <br>
    <div class="row">
    <!-- <div class="col-sm-12">

    <p class="text-center"><b>เพิ่มหมายค้น</b></p>
      <a href="#" id="myBtnNsVT9">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div> -->
    </div>
    <!-- </div>
    </div> -->

<!-- <?php
//  $link = array("4", "10", "11", "12", "13", "14", "15", "16", "17","18");
//  $n=count($link);
//   for($j=0;$j<$n;$j++){
?>
<script>
        $(document).ready(function(){
        $("#myBtnNsVT<?php //echo$j ?>").click(function(){
            swal({
            title: "การเพิ่มข้อมูล",
            text: "ต้องการเพิ่มข้อมูลใช่หรือไม่!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["ยกเลิก","ตกลง"]
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location.href="home.php?module=2&action=<?php //echo $link[$j]; ?>";

            } else {

                window.location.href="home.php?module=2&action=3";
            }
            });
            <?php //$id_click++; ?>
        });
        })
        </script>
    <?php //}?> -->
