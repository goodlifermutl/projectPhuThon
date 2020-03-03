<div class="container">
    <div class="col-md">
    <h1 class="text-center">ของกลาง</h1>
    </div>
    <form method="post" id="insertOB">
    <div class="col-md">
      <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ID ของกลาง : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="ID" name="idob" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ชื่อของกลาง : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control " placeholder="ชื่อของกลาง" name="nameob" required>     
        </div>
        <div>
            <label class="col-sm col-form-label">ขนาดของกลาง : </label>
        </div>
        <div class="col-md">
            <input type="text" class="form-control " placeholder="ขนาดของกลาง" name="sizeob"  required>
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
        <textarea class="form-control" name="lookob" aria-label="With textarea" required></textarea>
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
        <select class="custom-select " id="" name="staob"  required>
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
            <input type="file" class="custom-file-input" id="customFile" name="object_file" required>
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        </div>
        </div>
    </div>
    <p></p>
    <div>
    <button type="submit" class="btn btn-success btn-lg btn-block" id="save">บันทึกข้อมูล</button>
    </div>
    </form>
</div>

<script>
$('#insertOB').validate({ 
								
                rules: {
                nameob:{
                
                },
                sizeob: { 
                
                },
                lookob: {
               
                },
                staob: {
                
                        }
                    }
});

 $("#insertOB").submit(function(e){
	e.preventDefault();
	$check = $("#insertOB").valid();

		if($check == true){
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_data_object.php",
		type: 'POST',
		data: formData,
			success: function (data) {
            alert(data) 
            swal({
            title: "บันทึกของกลางสำเร็จ",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
            window.location.href="home.php?&module=2&action=3"
 
})
		},
			cache: false,
			contentType: false,
			processData: false
	  });	
	}
});


 $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>