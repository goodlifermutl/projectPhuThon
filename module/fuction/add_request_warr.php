<?php
include ("connect_db.php");
$con = connect_db();
$num_add_count=$_POST['count_add'];
$i=1;
echo $num_add_count;
?>
<?php while($i<=$num_add_count){ ?>
    <div class="form-group row">
    <label class="col-form-label">ขอยื่นคำร้องขอออกหมายจับต่อศาล  ดังมีข้อความที่จะกล่าวดังต่อไปนี้ ข้อ<?php echo $i ?>. ด้วย : </label>
    <div class="col">
    <input type="text" class="form-control" id=""name="rw_Request[]">
    </div>
    </div>
<?php
    $i++;
  } ?>
     <hr>