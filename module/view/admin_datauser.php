<?php
echo "GGGG";
$con = connect_db();
?>
<div class="text-center">
<h2>อนุมัติสิทธิ์ผู้ใช้งาน</h2>

<div class="container">
    <!-- Example row of columns -->
    <form method="get">
    <div class="row">
      <?php 
        $select = mysqli_query($con,"SELECT permiss_id,user_id FROM user")or die("select sql error!!!!".mysqli_error($con));     
        $loop=mysqli_num_rows($select);
        $num=1; 
        while(list($permiss_id,$user_id)=mysqli_fetch_row($select)){  
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
        }?>
      <div class="col-md-4">
        <h4><?php echo $status_text; ?></h4>
        <p>ชื่อผู้ใช้งาน : <?php echo $user_id; ?></p>
        <p>
        
        <div class="btn-group dropup">
      <button type="submit" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="btnEDITstatus<?php echo $num ?>" aria-haspopup="true" aria-expanded="false">
          เปลี่ยนสถานะ
        </button>
        <div class="dropdown-menu drop<?php echo $num; ?>">
        <a class="dropdown-item" id="per4user<?php echo $num; ?>" href="module/fuction/upstatus_user.php?per=4&user=<?php echo $user_id; ?>">ผู้ดูแล</a>
        <a class="dropdown-item" id="per3user<?php echo $num; ?>" href="module/fuction/upstatus_user.php?per=3&user=<?php echo $user_id; ?>">เจ้าหน้าที่กรอกข้อมูล</a>
        <a class="dropdown-item" id="per2user<?php echo $num; ?>" href="module/fuction/upstatus_user.php?per=2&user=<?php echo $user_id; ?>">เจ้าหน้าที่ปัฎิบัติงาน</a>
        <a class="dropdown-item" id="per1user<?php echo $num; ?>" href="module/fuction/upstatus_user.php?per=1&user=<?php echo $user_id; ?>">เจ้าหน้าที่ชั้นสูง</a>
        </div>
        </div>
        <a class="btn btn-secondary" href="#" role="button">คืนค่ารหัสผ่าน</a>
        </p>
        <p><a class="btn btn-danger" href="#" role="button">ลบ</a></p>
      </div>
      <?php echo $num; echo $user_id;$num++; } 
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
$("#btnEDITstatus<?php echo $md ?>").click(function(){
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
    $(".dropdown-menu ").show();
  } else {
    
    window.location.href="home_admin.php?&module=1&action=6";
  }
});
})
  <?php } ?>
</script>
