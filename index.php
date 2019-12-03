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
    
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="#" id="myBtnlogin"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div>
    <br>
    <p><img src="image/Logo.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
</div>

  </div>
  
</div>

<div class="footer">
<ul class="menu nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="#" id="myBtnsignup"><i style="font-size: 64px" class="fas fa-user-plus"></i><br><b>สมัครสมาชิก</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="index.php"><i style="font-size: 64px" class="far fa-question-circle"></i><br><b>คู่มือการใช้งาน</b></a>
      </li>
  </ul>
</div>

 
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    

      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <h4 style="padding-left: 120px"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="module/fuction/chk_user.php" id="matchlogin">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> ชื่อผู้ใช้</label>
              <input type="text" class="form-control" id="usrname" name="username" placeholder="กรอกชื่อผู้ใช้งาน" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> รหัสผ่าน</label>
              <input type="password" class="form-control" id="psw" name="pw" placeholder="กรอกรหัสผ่าน" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="footer">
            <div style="float: left;">
              <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"> Cancel</button>
            </div>
            <div style="float: right">  
              <a href="reset_pass.php">ลืมรหัสผ่าน</a>
            </div>
          </div>
      </div>
      
    </div>
  </div> 
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    

      <div class="modal-content">
        <div class="modal-header" style="padding: 35px 50px">
            <h4 style="padding-left: 90px"><i class="fas fa-user-plus"></i> สมัครสมาชิก</h4>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.href = 'index.php';">&times;</button>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="" id="matchpass">
            <div class="form-group">
              <label for="usrname"><i class="fas fa-user"></i> ชื่อผู้ใช้</label>
              <input type="text" class="form-control chk_user" id="usrname" name="usrname" placeholder="กรอกชื่อผู้ใช้งาน" required>
              <span id='showtxtuser' style="color:red"></span>
            </div>
            <div class="form-group">
              <label for="psw"><i class="fas fa-key"></i> รหัสผ่าน</label>
              <input type="password" class="form-control password" id="psw" name="psw" placeholder="กรอกรหัสผ่าน" required>
            </div>
            <div class="form-group">
              <label for="psw"><i class="fas fa-lock"></i> ยืนยันรหัสผ่าน</label>
              <input type="password" class="form-control confpass" id="psw2" name="psw2" placeholder="ยืนยันรหัสผ่าน" required>
            </div>
            <div class="form-group">
              <label for="psw"><i class="fas fa-address-card"></i> เลขบัตรประจำตัวประชาชน</label>
              <input type="number" min="0" class="form-control chk_idcard" id="idcard" name="idcard" placeholder="กรอกเลขประจำตัวประชาชน" required>
              <span id='showtxtidcard' style="color:red"></span>
            </div>
            <div class="form-group">
              <label for="psw"><i class="fas fa-address-card"></i> E-mail</label>
              <input type="email" min="0" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>           
              <button type="submit" class="btn btn-success btn-block" id="submit"> สมัครสมาชิก</button>
              <button class="btn btn-success btn-block" id="spingg" disabled>
              <span class="spinner-border spinner-border-sm"></span>
              Loading..
              </button>
          </form>
        </div>
        <div class="footer">
          <div style="float: left;">
            <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal" onclick="window.location.href = 'index.php';"> Cancel</button>
          </div>
          <div style="float: right">  
            <a href="#">เข้าสู่ระบบ</a> | <a href="reset_pass.php">ลืมรหัสผ่าน</a>
          </div>
        </div>
      </div>
      
    </div>
  </div> 

</div>

 
<script>
$(document).ready(function(){
  $("#myBtnlogin").click(function(){
    $("#login").modal();
  });
 $("#spingg").hide();
 

 
});
$(document).ready(function(){
  $("#myBtnsignup").click(function(){
    $("#signup").modal({backdrop: 'static', keyboard: false}); 
  }); 

  $('.chk_user').blur(function() {
				var text = $(this).val();
       //alert(text)
				if(text!=""){
				$.getJSON( "module/fuction/check_username.php", function( data ) {
				  var items = [];
          //alert(data)
				  $.each( data, function( key, val ) {
            //alert(val)
				    if(val == text ){
				    	$('#showtxtuser').html("<b>ชื่อผู้ใช้ถูกใช้แล้ว !!!!</b>");
              $("input:text").val("");
				    	 return false;

				    }else{
				    	$('#showtxtuser').html("");
				    }
				  });

				});
				}
			});

      $('.chk_idcard').blur(function() {
				var idcard = $(this).val();
       //alert(text)
				if(idcard!=""){
				$.getJSON( "module/fuction/check_idcard.php", function( data ) {
				  var items = [];
          //alert(data)
				  $.each( data, function( key, val ) {
            //alert(val)
            //alert(idcard)
				    if(idcard === val ){
				    	$('#showtxtidcard').html("<b>ชื่อผู้ใช้ถูกใช้แล้ว !!!!</b>");
              $(".chk_idcard").val("");
				    	 return false;

				    }else{
				    	$('#showtxtidcard').html("");
				    }
				  });

				});
				}
			});

});

$('#matchpass').validate({ 
								
          rules: {
          usrname:{
          minlength:6
          },
          psw: { 
           minlength:8
           },
           psw2: {
            minlength:8,
          equalTo: ".password"
           },
          idcard: {
          minlength:13,
          maxlength:13
          }
    }
  });

  $("#matchpass").submit(function(e){
				e.preventDefault();
				$check = $("#matchpass").valid();

				if($check == true){
				var formData = new FormData(this);
              $("#spingg").show();
              $("#submit").hide();
					    $.ajax({
					        url: "module/fuction/add_user.php",
					        type: 'POST',
					        data: formData,
					        success: function (data) {
                   //alert(data)  
              $('#signup').modal("hide")

$('#signup').on('hidden.bs.modal', function (e) {
            swal({
            title: "กรุณาตรวจสอบอีเมลของท่าน",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
    window.location.href = "index.php";
});
      })
		},
					        cache: false,
					        contentType: false,
					        processData: false
	  });	
	}
});
</script>
</body>
</html>