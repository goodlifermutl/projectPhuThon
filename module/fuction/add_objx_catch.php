<?php
$num_loop=$_POST['loop'];
$num_ojx_count=$_POST['ccrecord'];
$i=1;

while($i<=$num_ojx_count){
    echo "<div class='SHaddCC$i'>
    <div class='d-flex justify-content-center'>
    <div class='col-md-6'>
        <div class='input-group mb-3'>
        <div class='input-group-prepend'>
          <span class='input-group-text' id='inputGroup-sizing-default'>ของกลางอย่างที่$i </span>
        </div>
        <input type='text' id='input_obx_name$i' name='name_obx[]' value='' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
      </div>
    </div>
    </div>
    </div>
    <p></p>
    ";
    $i++;
  }
  ?>