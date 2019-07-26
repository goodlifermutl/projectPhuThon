
<h1 class="text-center">เลือกเพิ่มคดี</h1>
<table class="table">
<thead>
    <tr>
      <th scope="col">โปรดเลือก</th>
      <th scope="col">เลขคดี</th>
      <th scope="col">ชื่อคดี</th>
      <th scope="col">ประเภทคดี</th>
    </tr>
  </thead>
<?php

$con = connect_db();

$sql_res = mysqli_query($con,"SELECT cn.case_id,cn.case_name,cn.case_type,cn.case_savetime FROM case_name as cn")or die("select sql responsible_person error".mysqli_error($con));
    
       while(list($case_id,$case_name,$case_type)=mysqli_fetch_row($sql_res)){
        if($case_type==1){
          $case_typeName="คดีเพ่ง";
        }else{
          $case_typeName="คดีอาญา";
        }
            echo"
            <tr>
              <td ><a href='?datacase=$case_id&module=2&action=3'><button type='button' class='btn btn-outline-secondary'>เลือก</button></a></td>
              <td><a href='?datacase=$case_id&module=1&action=1'>$case_id</a></td>
              <td>$case_name</td>
              <td>$case_typeName</td>
          </tr>";
        }
?>
<tr>
        <td class="text-center" colspan=4><button type="button" class="btn btn-outline-success btn_add" id="btn_add">เพิ่มคดี</button></td>
</tr>
</table>
<form id="add_case">
<div >
<div class="row" id="add">
    <div class="col-md">
    <label for="">เลขคดี</label>
      <input type="text" class="form-control" placeholder="เลขคดี" name="case_id" id="name" required>
    </div>
    <div class="col-md">
    <label for="">ชื่อคดี</label>
      <input type="text" class="form-control" placeholder="ชื่อคดี" name="case_name"required>
    </div>
    <div class="col-md">
    <label for="">ประเภทคดี</label>
      <input type="text" class="form-control" placeholder="ประเภทคดี" name="case_type"required>
    </div>
    
       <button type="submit" class="btn btn-outline-primary" id="save">บันทึก</button>
   
</div>

</div>

</form>
<script>
   function hidediv(){
       $("#add").hide();
   }
   hidediv()

   $(".btn_add").click(function(){
        $("#add").show();
        $(".btn_add").hide();
        $("#name").focus();
   })
   $("#add_case").submit(function(e){
    e.preventDefault();
	// $check = $("#insertvictim").valid();

	
		var formData = new FormData(this);

		$.ajax({
		url: "../fuction/insert_data_victim.php",
		type: 'POST',
		data: formData,
			success: function (data) {
                alert(data)  
$('#signup').modal("hide")

$('#signup').on('hidden.bs.modal', function (e) {
            swal({
            title: "สมัครสมาชิกสำเร็จ",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
    window.location.href = "index.html";
});
      })
		},
			cache: false,
			contentType: false,
			processData: false
	  });	
      $("#add").hide();
      $(".btn_add").show();
      window.location.href="home.php?&module=2&action=2";
        
});

</script>