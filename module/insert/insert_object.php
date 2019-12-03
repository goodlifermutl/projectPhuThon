<?php $con = connect_db(); ?>
<div class="container">
    <div class="col-md">
    <h1 class="text-center">เพิ่มข้อมูลกลาง</h1>
    </div>
    <form id="insert_villain" method="post">
      <div class="text-center">
      <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">ชื่อของกลาง: </label>
          </div>
          <div class="col-md-3">
              <input type="text" class="form-control " placeholder="" value="" id="focus<?php echo $i?>" name="villain_titlename" required>
          </div>
          <div class="col-sm-0" align=""> วันที่รับของกลาง </div>
                   <div class="col-sm-3" align="">
                     <input  name="dates " type="date" required class="form-control" id="dates" />
                   </div>
      </div>
      </div>
    </div>
      <p></P>
      <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">ลักษณะของกลาง: </label>
          </div>
          <div class="col-md-3">
              <input type="text" class="form-control " placeholder="" value="" id="focus<?php echo $i?>" name="villain_titlename" required>
          </div>
          <div>
              <label class="col-sm col-form-label">ขนาดของกลาง: </label>
          </div>
          <div class="col-md-3">
              <input type="text" class="form-control " placeholder="" value="" id="focus<?php echo $i?>" name="villain_titlename" required>
          </div>

      </div>
      </div>
<p></P>
  <script type='text/javascript'>
     function preview_image(event)
     {
          var reader = new FileReader();
          reader.onload = function()
          {
               var output = document.getElementById('showimg');
               output.src = reader.result;
          }
          reader.readAsDataURL(event.target.files[0]);
     }
     </script>
</head>
<body>
<div class="container">
<div class="row">
 <div class="col-md-2"></div>
 <div class="col-md-7">
  <h4> รูปภาพของกลาง</h4>
   <form action="http://devbanban.com/" method="get" enctype="multipart/form-data" class="form-horizontal">

   <div class="form-group">
                       <div class="col-md-3"></div>
                       <div class="col-md-7">
                        preview <br>

                        <img  id="showimg" alt="" width="300" height="300">
                       </div>
                   </div>
     <div class="form-group">
                       <label class="control-label col-md-3"  >เลือกภาพ :</label>
                       <div class="col-md-6">
                           <input type="file" class="form-control" id="showimg" name="showimg" accept="image/png, image/jpeg, image/gif " onchange="preview_image(event)">
                       </div>
                   </div>
