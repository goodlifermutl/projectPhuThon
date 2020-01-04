<?php
include ("connect_db.php");
$con = connect_db();
$num_add_count=$_POST['count_add1'];
$i=1;
echo $num_add_count;
?>
<?php while($i<=$num_add_count){ ?>
    <div class="form-group row">
     <label class="col-form-label">พยานบุคคล ได้ทำการสอบสวนแล้วจำนวน  ปากที่<?php echo $i ?>. : </label>
      <div class="col">
      <input type="text" class="form-control" id=""name="rw_Witness[]">
      </div>
      </div>
    <?php
    $i++;
  } ?>
     <hr>