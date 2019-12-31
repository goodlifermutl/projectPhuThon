<?php
$num_loop=$_POST['loop'];
$num_vil_count=$_POST['cvrecord'];
$i=1;

while($i<=$num_vil_count){
    echo "<div class='SHaddCC$i'>
    <div class='d-flex justify-content-center'>
    <div class='col-md-6'>
        <div class='input-group mb-3'>
        <div class='input-group-prepend'>
          <span class='input-group-text' id='inputGroup-sizing-default'>นามผู้ต้องหาคนที่$i </span>
        </div>
        <input type='text' id='input_police_name$i' name='name_police[]' value='' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      </div>
    </div>
    </div>
    </div>
    <p></p>
    ";
    $i++;
  }
  ?>