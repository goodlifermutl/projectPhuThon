<?php session_start() ?>

<html lang="en">
<head>
  <title>PhuThon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/af7942016f.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <?php //validate ?>
		<script src="js/validate/jquery.validate.min.js" ></script>
		<script src="js/validate/additional-methods.min.js" ></script>
		<script src="js/validate/localization/messages_th.min.js" ></script>
		<script src="js/validateSetdef.js" ></script> 
		<?php //END validate ?>
</head>
<body>

 <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> 
  <div class="container-fluid">
   
      <a class="navbar-brand" href="index.php"><i style="font-size: 36px" class="fas fa-h-square"></i> PhuThon pak5</a>
    
  </div>
</nav>

<div class="container">
  <div style="border:solid 1px red;width:100%;height:80%;padding-top:10%">
  <h3 class="text-center">กรุณาตรวจสอบอีเมลและกรอกรหัสยืนยันตัวตน</h3><br>
  <form id="btngg">
  <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">ขอรับรหัสผ่านการยืนยันอีกครั้ง : </label>
        </div>
        <div> 
        <button type="submit" class="btn btn-secondary btn-sm"><span class="glyphicon glyphicon-off"></span> รับรหัสการยืนยัน</button>
        </div>
        </div>
  </div>
  </form>
  <p></p>
  <form method="post" action="module/fuction/verification_chk_code.php">
  <div class="col-md">
        <div class="form-row">
        <div>
            <label class="col-sm col-form-label">รหัสยืนยันตัวตน : </label>
        </div>
        <div class="col-md">
        <input type="text" class="form-control " placeholder="รหัสยืนยันตัวตน" value="" name="verification"  required>
        </div>
        </div>
        <br><p class="text-center"><button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-off"></span> ยืนยัน</button></p>  
    </div>
    </form>
  </div>
  
</div>

<div class="footer">
</div>
 
<script>
$("#btngg").submit(function(e){
        alert("gg")
				e.preventDefault();
				
				
				var formData = new FormData(this);

					    $.ajax({
					        url: "module/fuction/verification_update_code.php",
					        type: 'POST',
					        data: formData,
					        success: function (data) {
                   alert(data)  

                  swal({
                  title: "กรุณาตรวจสอบอีเมลของท่าน",
                  icon: "success",
                  button: "ตกลง",
                }).then((value) => {
          window.location.href = "verification_user.php";
      });
		},
					        cache: false,
					        contentType: false,
					        processData: false
	  });	
});

// $("#btnaa").submit(function(e){
//         alert("gg")
// 				e.preventDefault();
				
				
// 				var formData = new FormData(this);

// 					    $.ajax({
// 					        url: "module/fuction/verification_chk_code.php",
// 					        type: 'POST',
// 					        data: formData,
// 					        success: function (data) {
//                    alert(data)  
//                    swal({
//                 title: "กรุณาเข้าสู่ระบบอีกครั้ง",
//                 icon: "success",
//             }).then((value) => {
//         window.location.href = "../../index.php";
//         });
// 		},
// 					        cache: false,
// 					        contentType: false,
// 					        processData: false
// 	  });	
// });
</script>

</body>
</html>