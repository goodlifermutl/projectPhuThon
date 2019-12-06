<?php
	//session_start();
    // include("fc/db_fc.php");
	$con=connect_db();
    $re_user=mysqli_query($con,
    "SELECT rank_id,ps_name,ps_lastname,card_id,sex,address,ps_num,police_pic
    FROM  police_person WHERE card_id ='$_SESSION[id_card]'")or die("SQL.error>>user".mysqli_error($conh));
	list($id_rank,$ps_name,$ps_lastname,$card_id,$sex,$address,$ps_tel,$name_pic)=mysqli_fetch_row($re_user);
	echo $card_id,$ps_name;
	echo "gggg";
	if(empty($card_id)){
		$id_rank="";$ps_name="";$ps_lastname="";$card_id="";$sex="";$address="";$ps_tel="";
	}
?>
<div class="headtitle text-center p-2 row mb-2 row">
	<div class="col-md-2" ></div>
    <div class="col-md">
        <h3>ประวัติส่วนตัว</h3>
    </div>
     <div class="col-md-2" ></div>
</div>
<div class="row">   
    <div class="col-lg-4">
	<form id="dataPro" method="post">
	<!-- <form id="imgPro" method="post"> -->
		<div class="card">
			<?php 
				if(empty($name_pic)){
					$name_pic="icon_user_pic.png";
				}
			?>
			<img class="card-img-top img-thumbnail" src="image/<?php echo $name_pic; ?>" alt="Card image cap">
			<!-- <div class="card-body text-center">
				<div class="form-group row-md">
					<button type="button" class="btn btn-outline-primary">อัพโหลดภาพ</button>
				</div>
			</div> -->

			<div class="input-group mb-3">
			<div class="custom-file">
            <input type="file" class="custom-file-input edit_rs" id="customFile" name="profile_pic" disabled>
            <label class="custom-file-label" for="customFile">Choose file</label>
        	</div>
			</div>
		</div>
	<!-- </form> -->
	</div>

	<!-- <form id="dataPro" method="post"> -->
    <div class="col-lg" style='padding-top:20px;'>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 label col-form-label ">ชื่อ</label>
				<div class="col-sm">
				<select class="custom-select edit_rs" id="focus" name="pro_title" style="" disabled required>
						<option value=0 disabled selected>คำนำหน้าชื่อ</option>
                    	<?php $result_rank = mysqli_query($con,"SELECT * FROM rank_police")or die("select education error".mysqli_error($con));
                        while(list($rank_id,$rank_name)=mysqli_fetch_row($result_rank)){
                        $selected=$id_rank==$rank_id?"selected":"";
                          echo"<option value='$rank_id' $selected>$rank_name</option>";
                        }
                   ?> 
                   
                </select>
				</div>
				<div class="col-sm-5">
					<input type="text" style="border:none; background:#fff; " class="form-control edit_rs"  placeholder="ชื่อ"  name="pro_name" value="<?php echo $ps_name; ?>" id="staticEmail" disabled required>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label ">นามสกุล</label>
				<div class="col-sm-10">
					<input type="text" style="border:none; background:#fff;" class="form-control edit_rs"  placeholder="นามสกุล"  name="pro_lastname" value="<?php echo $ps_lastname; ?>"disabled required>
				</div>
			</div>
			<div class="form-group row">
				<label for="" class="col-sm-2 col-form-label">เลขบัตรประจำตัวประชาชน</label>
				<div class="col-md">
					<input type="text" style="border:none; background:#fff;" class="form-control"  placeholder="เลขบัตรประจำตัวประชาชน"  name="pro_card_id" value="<?php echo $_SESSION['id_card']; ?>"readonly required>
				</div>
			</div>
			<div class="form-group row">
				<label for="" class="col-sm-2 col-form-label " maxlength="13" >โทร</label>
				<div class="col-sm-10">
					<input type="text" style="border:none; background:#fff;" class="form-control edit_rs"  placeholder="เบอร์โทร"  name="pro_tel" value="<?php echo $ps_tel; ?>"disabled required>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label ">เพศ</label>
				<div class="col-sm-3">
				<select class="custom-select edit_rs" id="focus" name="pro_sex" style="" disabled required>
						<option value=0 disabled selected>เพศ</option>
						<option value=1>ชาย</option>
						<option value=2>หญิง</option>
                </select>
				</div>
			</div>
            <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label ">ที่อยู่</label>
				<div class="col-sm-10">
					<div class="form-group">
					  <label for="addre"></label>
					  <textarea class="form-control edit_rs" name="pro_address" id="addre" rows="3" disabled required><?php echo $address; ?></textarea>
					</div>
				</div>
			</div>
            
            <div class="card-body text-center">
					<div class="form-group row-md">
							<button type="button" class="btn btn-outline-primary" id="editPro">แก้ไขประวัติส่วนตัว</button>
							<?php
								if(empty($card_id)){
									$file = 'profile_insert.php'
									?>
									<button type="submit" class="btn btn-outline-primary" id="savePro">บันทึก</button>
									<button type="button" class="btn btn-outline-danger" id="canclePro">ยกเลิก</button>
									<?php

								}else{
									$file = 'profile_update.php'
									?>
									<button type="submit" class="btn btn-outline-primary" id="updatePro">บันทึกแก้ไข</button>
									<button type="button" class="btn btn-outline-danger" id="canclePro">ยกเลิก</button>
									<?php
								}
							?>
						</div>
				</div> 
    </div>
</form>
</div>
<script>
$("#canclePro").hide();
$("#savePro").hide();
$("#updatePro").hide();
$("#editPro").click(function(){
	alert("gggg")
	$(".edit_rs").prop("disabled", false);
	$( "#focus" ).focus();
	$("#savePro").show();
	$("#updatePro").show();
	$("#canclePro").show();
	$("#editPro").hide();
});
$("#dataPro").submit(function(e){


 e.preventDefault();
 alert("gg")
//   $check = $("#victim").valid();
//   if($check == true){

  var formData = new FormData(this);
//   var idc = $(this).data("idcard");
    
        $.ajax({
            url: "module/fuction/<?php echo $file; ?>",
            type: 'POST',
            data: formData,
            success: function (data) {
             alert(data)  
			 $("#savePro").hide();
        
      swal({
      title: "บันทึกข้อมูลส่วนตัวแล้ว",
      icon: "success",
      button: "ตกลง",
    }).then((value) => {
      
      window.location.href="home.php?module=1&action=5";
});

},
            cache: false,
            contentType: false,
            processData: false
});	
// }


})
$("#canclePro").click(function(){
	window.location.href="home.php?module=1&action=5";
	
});
</script>