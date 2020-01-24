
<h1 class="text-center">เลือกเพิ่มคดี</h1>
<table class="table" id="myTable">
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

</table>
  <hr style="border: solid 5px;">
  <p class="text-center"><td class="text-center" colspan=4><button type="button" class="btn btn-outline-success btn_add btn-lg" id="btn_add">เพิ่มคดี</button></p>

<form id="add_case" method="post">
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
      <!-- <input type="text" class="form-control" placeholder="ประเภทคดี" name="case_type"required> -->
      <select class="custom-select " id="" name="case_type" required>
                <option selected value="0">ประเภทคดี</option>
                <option value="1" >คดีเพ่ง</option>
                <option value="2" >คดีอาญา</option>
            </select>
    </div>
    
       <button type="submit" class="btn btn-outline-primary" id="save">บันทึก</button>&nbsp;
       <button type="button" class="btn btn-outline-danger" id="cancle">ยกเลิก</button>
   
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
   $("#cancle").click(function(){
    // window.location.href="home.php?&module=2&action=2";
    $("#add").hide();
    $(".btn_add").show();
   })
   $("#add_case").submit(function(e){
    e.preventDefault();
	// $check = $("#insertvictim").valid();

	
		var formData = new FormData(this);

		$.ajax({
		url: "module/fuction/insert_case.php",
		type: 'POST',
		data: formData,
			success: function (data) {
      //alert(data) 

            swal({
            title: "เพิ่มคดีเรียบร้อยแล้ว",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
    window.location.href = "home.php?&module=2&action=2";
});

		},
			cache: false,
			contentType: false,
			processData: false
	  });	
    
});

 $(document).ready( function () {
    $('#myTable').DataTable({
      "aLengthMenu": [[5, 10, -1], [5, 10,"All"]]

    });

} );


</script>