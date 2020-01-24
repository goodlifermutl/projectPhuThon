
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
<!-- <div class="" style="padding-top:3px;background:white;">

<button type="button" id="btnPinG" class="btn btn-warning"><b>ปักหมุดคดี</b></button>
<button type="button" id="btnPinN" class="btn btn-danger"><b>ยกเลิกปักหมุด</b></button>
<a href="#ผู้เสียหาย"><button type="button" class="btn btn-outline-info">ผู้เสียหาย</button></a>
<a href="#ผู้ต้องหา"><button type="button" class="btn btn-outline-info">ผู้ต้องหา</button></a>
</div> -->
<div  class="topbigbody2">
  <!-- <br>
    <form class="form-inline my-2 my-lg-0 menusearch">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <div class="subbigbody2">
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

<div class="dodyview">
  
    <div class="col-md">
    <section class="bf-footer">
    <div class="namecase">
      <form method="post" enctype="multipart/form-data">
      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];
      }
      $show_case = mysqli_query($con,"SELECT case_name FROM case_name WHERE case_id = '$data'")or die("case error".mysqli_error($con));
      list($case_name)=mysqli_fetch_row($show_case);
      $show_pin = mysqli_query($con,"SELECT case_id,user_id FROM pin_case WHERE case_id = '$data' AND user_id='$_SESSION[user_name]'")or die("pin error".mysqli_error($con));
      list($pin_id,$pin_user)=mysqli_fetch_row($show_pin);
      $result_status = mysqli_query($con,"SELECT text_status,date_status FROM status_case WHERE sta_case_id='$data'")or die("select status error".mysqli_error($con));
      
      ?>
      <p><h1 class="text-center">คดี : <?php echo $case_name ?></h1></p>
      <hr>
      <div>
      <p class="text-center"><td class="text-center" colspan=4><button type="button" class="btn btn-outline-success btn_add btn-lg" id="btn_add_sta">อัพเดทสถานะของคดีคุณ</button></p>
      </div>
      
      <div class="col-md" id="status_case_show">
      <select class="custom-select " id="seleCard"  name="" >
                <!-- <option disabled selected value="0">สถานะทางคดี</option> -->
                <?php
                $chk_sta_show="";
                    while(list($text_status,$date_status)=mysqli_fetch_row($result_status)){
                        echo"<option value=''>$text_status เมื่อวันที่ $date_status</option>";

                          $chk_sta_show="true";

                    }
                ?> 
                   
      </select>
    </div>
    </form>
    <form id="add_status" method="post">
    <div class="col-md">
    <div class="row" id="add_status_data">
        <div class="col-md">
        <label for="">กรอกสถานะ</label>
          <input type="hidden" class="form-control" value="<?php echo $data ?>" name="case_sta"required>
          <input type="text" class="form-control" placeholder="ข้อความสถานะ" name="data_sta"required>
        </div>
        <div class="col-md">
        <label for="">วันเดือนปี</label>
          <input type="date" class="form-control" name="date_sta" required >
        </div>
        
          <button type="submit" class="btn btn-outline-primary" id="save">บันทึก</button>&nbsp;
          <button type="button" class="btn btn-outline-danger" id="cancle">ยกเลิก</button>
      
    </div>

    </div>

    </form>
    </div>
    <div class="arr_record" >
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
       <?php 
       include("module/view/view_data_victim.php");
       include("module/view/view_data_villain.php");
       include("module/view/view_object.php");
       include("module/view/view_data_arrest_record.php");
       include("module/view/view_data_request_warrant.php");
       include("module/view/view_data_arrest_info.php");
       include("module/view/view_data_investigation_report.php");
       include("module/view/view_summon_villain.php");
       include("module/view/view_data_words_villain.php");
       include("module/view/view_search_warrant.php");
       ?> 
      
     <br>
     <br>
     <br>

</section>
<!-- <aside class="menu  sticky-top">
    <ul style="list-style-type: none;margin:0;padding:0;">
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้เสียหาย"><button type="button" class="btn btn-outline-primary">ผู้เสียหาย</button></a></li>
      <li style="margin:0px 0px 5px 0px;"><a href="#ผู้ต้องหา"><button type="button" class="btn btn-outline-primary">ผู้ต้องหา</button></a></li>
    </ul>
</aside>
<div class="clearfloat"></div> -->
<!-- <div class="footer-view"></div> -->
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
    </div> 
      
<script>

$(document).ready(function(){
  <?php 
    if(empty($pin_id)&&empty($pin_user)){
      ?>
      $("#btnPinN").hide();
      <?php
    }else{
      ?>
      $("#btnPinG").hide();
      $("#btnPinN").show();
      <?php
    }
      ?>

      $('#btn_add_sta').show();
      $('#add_status_data').hide();

      <?php
    if($chk_sta_show=="true"){
      ?>
      $('#status_case_show').show();
      <?php
    }else if(empty($chk_sata_show)){
      ?>
      $('#status_case_show').hide();
      <?php
    }
    ?>

   $("#btn_add_sta").click(function(){
    $('#add_status_data').show();
    $('#btn_add_sta').hide();
   })

   $("#cancle").click(function(){
    $('#add_status_data').hide();
    $('#btn_add_sta').show();
   })

$("#add_status").submit(function(e){
    e.preventDefault();
	
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_status_csD.php",
		type: 'POST',
		data: formData,
			success: function (data) {
      alert(data) 

            swal({
            title: "เพิ่มสถานะคดีเรียบร้อย",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
    window.location.href = "home.php?datacase=<?php echo $data; ?>&module=1&action=1";
});

		},
			cache: false,
			contentType: false,
			processData: false
	  });	
    
});


  $('#table_id').DataTable();
  $("#myBtnSc").click(function(){
    $("#SC").modal();
  });
  $("#myBtnNs").click(function(){
    window.location.href="home.php?&module=2&action=2";
  });
})

$("#btnPinG").click(function(){
  alert("ggggggg")
  $("#btnPinG").hide();
  $("#btnPinN").show();

    var idcase = "<?php echo $data ?>";
  
    $.post("module/fuction/add_pin.php",{idcase:idcase}).done(function(data,txtstuta){
      alert(data)
      
        
      swal({
      title: "ปักหมุดคดีเรียบร้อย",
      icon: "success",
      button: "ตกลง",
    }).then((value) => {
      
   window.location.href="";

});

});


});

$("#btnPinN").click(function(){
  alert("ggggggg")
  
  swal({
  title: "ยกเลิกการปักหมุด",
  text: "ต้องการยกเลิกใช่หรือไม่!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  buttons: ["ยกเลิก","ตกลง"]
})
.then((willDelete) => {
  if (willDelete) {
    $("#btnPinN").hide();
    $("#btnPinG").show();

    var idcase = "<?php echo $pin_id ?>"

    $.post("module/fuction/delete_pin.php",{idcase:idcase}).done(function(data,txtstuta){
    alert(data)
    window.location.href="home.php?datacase=<?php echo $pin_id ?>&module=1&action=1";
  });
  } else {
    

  }
})
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
   $.post("module/main/show_data_search.php",{type:id1,search:id2},
    function (data, textStatus, jqXHR) {
    //alert(data)
     $("#loadid").html(data)
     loadsunass()
    }
   );
  })
 });

</script>
<?php echo $com_e?>
