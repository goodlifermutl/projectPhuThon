<?php
$num_loop=$_POST['loop'];
$num_ojx_count=$_POST['ccrecord'];
$no_arya=$_POST['arrest_No'];
$i=1;
?>
<!-- <div class="container">
    <form method="post" id="insertOB"> -->
    <?php while($i<=$num_ojx_count){ ?>
    <div class="col-md">
    <h4 class="text-center">ของกลาง<?php echo $i ?></h4>
    </div>
    <div class="col-md">
      <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ID ของกลาง : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="ID" name="idob[]" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อของกลาง : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="ชื่อของกลาง" name="nameob[]" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ขนาดของกลาง : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ขนาดของกลาง" name="sizeob[]"  required>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
      <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ลักษณะของกลาง : </label>
        </div>
        <div class="input-group">
        <textarea class="form-control" name="lookob[]" aria-label="With textarea" required></textarea>
        </div>
        </div>
    </div>
    <p></p>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">สถานะของกลาง : </label>
        </div>
        <div class="col-md-2">
        <select class="custom-select " id="" name="staob[]"  required>
                <option disabled selected value="0">สถานะ</option>
                <option value="1">ยึด</option>
                <option  value="2">คืน</option>
                <option  value="3">ทำลาย</option>
                   
        </select>   
        </div>
        <div>
            <label class="col-sm col-form-label">รูปภาพ : </label>
        </div>
        <div class="col-md">
        <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="object_file[]" required>
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        </div>
        </div>
    </div>
    <P></P>
    <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">สถานที่เก็บของกลาง : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control " placeholder="สถานที่เก็บของกลาง" name="name_location[]" required> 
        </div>
        </div>
    </div>
    <hr>
  <?php
    $i++;
  }?>
    <!-- </form>
</div> -->

<script>
// $('#insertOB').validate({ 
								
//                 rules: {
//                 nameob:{
                
//                 },
//                 sizeob: { 
                
//                 },
//                 lookob: {
               
//                 },
//                 staob: {
                
//                         }
//                     }
// });

//  $("#insertOB").submit(function(e){
// 	e.preventDefault();
// 	$check = $("#insertOB").valid();

// 		if($check == true){
// 		var formData = new FormData(this);

// 		$.ajax({
// 		url: "module/fuction/insert_data_object.php",
// 		type: 'POST',
// 		data: formData,
// 			success: function (data) {
//             alert(data) 
//             swal({
//             title: "บันทึกของกลางสำเร็จ",
//             icon: "success",
//             button: "ตกลง",
//           }).then((value) => {
//             window.location.href="home.php?&module=2&action=3"
 
// })
// 		},
// 			cache: false,
// 			contentType: false,
// 			processData: false
// 	  });	
// 	}
// });


 $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<!-- while($i<=$num_ojx_count){
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
  } -->