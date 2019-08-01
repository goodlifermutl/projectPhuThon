<?php
    // include("fc/db_fc.php");
    // $con=connect_db();
    // $re_user=mysqli_query($con,
    // "SELECT username,pwd,email,tel,fname,lname
    // FROM users 
    // WHERE id='$_SESSION[user_id]'")or die("SQL.error>>user".mysqli_error($conh));
    // list($username,$pwd,$email,$tel,$fname,$lname)=mysqli_fetch_row($re_user);
     
?>
<style></style>
<div class="headtitle text-center p-2 row mb-2 row">
	<div class="col-md-2" ></div>
    <div class="col-md">
        <h3>ประวัติส่วนตัว</h3>
    </div>
     <div class="col-md-2" ></div>
</div>
<div class="row">   
    <div class="col-lg-4">
			<div class="card">
				<img class="card-img-top img-thumbnail" src="" alt="Card image cap">
				<div class="card-body text-center">
					<div class="form-group row-md">
							<button type="button" class="btn btn-outline-primary">อัพโหลดภาพ</button>
						</div>
				</div>
			</div>
	</div>
    <div class="col-lg" style='padding-top:20px;'>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 label col-form-label ">ชื่อ</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="id" name="gen_id" value="" hidden>
					<input type="text" class="form-control" placeholder="id" name="old_pic" value="" hidden>
					<input type="text" style="border:none; background:#fff; " class="form-control"  placeholder="ชื่อ"  name="fname" value="" id="staticEmail" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label ">นามสกุล</label>
				<div class="col-sm-10">
					<input type="text" style="border:none; background:#fff;" class="form-control"  placeholder="นามสกุล"  name="lname" value=""readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="" class="col-sm-2 col-form-label">e-mail</label>
				<div class="col-md">
					<input type="text" style="border:none; background:#fff;" class="form-control"  placeholder="e-mail"  name="email" value=""readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="" class="col-sm-2 col-form-label " maxlength="13" >โทร</label>
				<div class="col-sm-10">
					<input type="text" style="border:none; background:#fff;" class="form-control"  placeholder="เบอร์โทร"  name="tel" value=""readonly>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label ">facebook</label>
				<div class="col-sm-10">
					<input type="text" style="border:none; background:#fff;" class="form-control"  placeholder="facebook"  name="facebook" value=""readonly>
				</div>
			</div>
            <div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label ">instagram</label>
				<div class="col-sm-10">
					<input type="text" style="border:none; background:#fff;" class="form-control"  placeholder="instagram"  name="ig" value=""readonly>
				</div>
			</div>
            
            <div class="form-group row">
            <div class="text-center">
            <button type="button" class="btn btn-outline-primary">แก้ไขประวัติส่วนตัว</button>
            </div>
            </div>  
    </div>
</div>