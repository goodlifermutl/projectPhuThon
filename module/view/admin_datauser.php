<?php
echo "GGGG";
$con = connect_db();
?>
<div class="text-center">
<h2>อนุมัติสิทธิ์ผู้ใช้งาน</h2>

<div class="container">
    <!-- Example row of columns -->
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
      <button type="submit" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          เปลี่ยนสถานะ
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item" id="per4" href="####">ผู้ดูแล</a>
        <a class="dropdown-item" id="per3" href="###">เจ้าหน้าที่กรอกข้อมูล</a>
        <a class="dropdown-item" id="per2" href="##">เจ้าหน้าที่ปัฎิบัติงาน</a>
        <a class="dropdown-item" id="per1user<?php echo $num; ?>" href="#">เจ้าหน้าที่ชั้นสูง</a>
        </div>
        </div>
        <a class="btn btn-secondary" href="#" role="button">คืนค่ารหัสผ่าน</a>
        </p>
        <p><a class="btn btn-danger" href="#" role="button">ลบ</a></p>
      </div>
      <?php echo $num; $num++; } 
      // mysqli_close($con);?>
    </div>

    <hr>

  </div> <!-- /container -->
</div>
<script>

$(document).ready(function(){
    $("#per1user1").click(function(){
      <?php $sql_status_user="UPDATE user SET permiss_id='1' WHERE user_id='user01'";
      mysqli_query($con,$sql_status_user)or die("sql_update ERROR!!!!!!!!!".mysqli_error($con));
      mysqli_close($con);
      ?>
      alert("ggg")
    })
})
</script>