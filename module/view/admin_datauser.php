<?php
include("../fuction/connect_db.php");
$con = connect_db();
echo $_POST['no'];
if($_POST['no']==6){
  $select = mysqli_query($con,"SELECT permiss_id,user_id,card_id FROM user")or die("select sql error!!!!".mysqli_error($con));     
}else if($_POST['no']==5){
  $select = mysqli_query($con,"SELECT permiss_id,user_id,card_id FROM user WHERE permiss_id='$_POST[no]'")or die("select sql error!!!!".mysqli_error($con));     
}else if($_POST['no']==4){
  $select = mysqli_query($con,"SELECT permiss_id,user_id,card_id FROM user WHERE permiss_id='$_POST[no]'")or die("select sql error!!!!".mysqli_error($con));     
}else if($_POST['no']==3){
  $select = mysqli_query($con,"SELECT permiss_id,user_id,card_id FROM user WHERE permiss_id='$_POST[no]'")or die("select sql error!!!!".mysqli_error($con));     
}else if($_POST['no']==2){
  $select = mysqli_query($con,"SELECT permiss_id,user_id,card_id FROM user WHERE permiss_id='$_POST[no]'")or die("select sql error!!!!".mysqli_error($con));
}else if($_POST['no']==1){
  $select = mysqli_query($con,"SELECT permiss_id,user_id,card_id FROM user WHERE permiss_id='$_POST[no]'")or die("select sql error!!!!".mysqli_error($con));
}

?>
<div class="text-center">
<h2>อนุมัติสิทธิ์ผู้ใช้งาน</h2>
<br><hr>

<div class="container">
    <!-- Example row of columns -->
    <form method="post" enctype="multipart/form-data">
    <div class="row">
      <?php 
        // $select = mysqli_query($con,"SELECT permiss_id,user_id FROM user")or die("select sql error!!!!".mysqli_error($con));     
        $loop=mysqli_num_rows($select);
        $num=1; 
        while(list($permiss_id,$user_id,$user_cardid)=mysqli_fetch_row($select)){  
          $sql="SELECT card_id,rp.rank_name,ps_name,ps_lastname FROM police_person as pp INNER JOIN rank_police as rp ON pp.rank_id = rp.rank_id WHERE card_id=$user_cardid";
          $result=mysqli_query($con,$sql)or die("sql police error!!!!!!!".mysqli_error($con));
          list($p_cardid,$p_rk,$p_name,$p_lastname)=mysqli_fetch_row($result);
        if($permiss_id==5){
          $status_text="ไม่มีสถานะ";
        }else if($permiss_id==4){
          $status_text="ผู้ดูแล";
        }else if($permiss_id==3){
          $status_text="เจ้าหน้าที่กรอกข้อมูล";
        }else if($permiss_id==2){
          $status_text="เจ้าหน้าที่ปัฎิบัติงาน";
        }else{
          $status_text="เจ้าหน้าที่ชั้นสูง";
        }

        ?>
      <div class="col-md-5" style="border:solid green 2px; border-radius:70px; margin:4%;">
        <h4><b><?php echo $status_text; ?></b></h4>
        <p><b>ชื่อผู้ใช้งาน : </b><?php echo $user_id; ?></p>
        <input type="hidden" value="<?php echo $p_cardid ?>" id="p_cardid<?php echo $num ?>">
        <p><b>ตำแหน่ง : </b><a id="linkID<?php echo $num ?>" href="?module=1&action=9&cardid=<?php echo $p_cardid ?>"><?php echo $p_rk;?> &nbsp; <?php echo $p_name;?> <?php echo $p_lastname; ?></a></p>
        <p>
        <input type="hidden" value="<?php echo $user_id ?>" id="user<?php echo $num ?>">
        <div class="form-group">
          <select class="form-control" id="sel1<?php echo $num; ?>">
            <option selected disabled>เปลี่ยนสถานะ</option>
            <option value="4">ผู้ดูแล</option>
            <option value="3">เจ้าหน้าที่กรอกข้อมูล</option>
            <option value="2">เจ้าหน้าที่ปัฎิบัติงาน</option>
            <option value="1">เจ้าหน้าที่ชั้นสูง</option>
          </select>
        </div>
        <a class="btn btn-secondary" id="btnRE<?php echo $num ?>" href="module/fuction/admin_re_pass.php?user=<?php echo $user_id ?>" role="button">คืนค่ารหัสผ่าน</a>
        <button class="btn btn-success btn-block" id="spingg<?php echo $num ?>" disabled>
              <span class="spinner-border spinner-border-sm"></span>
              Loading..
              </button>
        </p>
      </div>
      <?php $num++; 
      } 
      mysqli_close($con);?>
    </div>
    </form>
    <hr>

  </div> <!-- /container -->
</div>
<script>
<?php
  for($md=1;$md<=$loop;$md++){
?>
$(document).ready(function(){
$("#spingg<?php echo $md ?>").hide();
$("#btnRE<?php echo $md ?>").click(function(){
  $("#btnRE<?php echo $md ?>").hide();
  $("#spingg<?php echo $md ?>").show();
})
// $("#linkID<?php //echo $md ?>").click(function(){
//   var cardid= $("#p_cardid<?php //echo $md ?>").val()
//   $.post("module/view/admin_policedata.php",{cardid:cardid}).done(function(data,txtstuta){
//       alert(cardid);
//       window.location.href="home_admin.php?&module=1&action=9";
//     })
// })
})
$("#sel1<?php echo $md; ?>").change(function(){
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
    var per = $("#sel1<?php echo $md; ?>").val()
    var user= $("#user<?php echo $md ?>").val()
    $.post("module/fuction/upstatus_user.php",{per:per,user:user}).done(function(data){
      alert(per);
      alert(user)
      alert(data)
      window.location.href="home_admin.php";
    })

    
  } else {
    
    window.location.href="home_admin.php";
  }
});
})
  <?php } ?>
</script>
