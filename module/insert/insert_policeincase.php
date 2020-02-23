
<h1 class="text-center">จัดการผู้รับผิดชอบคดี</h1>
<table class="table" id="myTable">
<thead>
    <tr>
      <th scope="col">ยกเลิกผู้รับผิดชอบคดี</th>
      <th scope="col">เลขคดี</th>
      <th scope="col">ชื่อบุคคล</th>
    </tr>
  </thead>
<?php

$con = connect_db();

$sql_res = mysqli_query($con,"SELECT case_id,io.card_id,pp.ps_name FROM inquiry_official as io INNER JOIN police_person as pp ON pp.card_id = io.card_id ")or die("select sql responsible_person error".mysqli_error($con));
$sql_name = mysqli_query($con,"SELECT card_id,ps_name FROM police_person")or die("select sql responsible_person error".mysqli_error($con));
$sql_ic = mysqli_query($con,"SELECT case_id FROM case_name")or die("select sql responsible_person error".mysqli_error($con));
$sqli_num_row=mysqli_num_rows($sql_res);
$i=1;
       while(list($case_id,$card_id,$name)=mysqli_fetch_row($sql_res)){
        // if($case_type==1){
        //   $case_typeName="คดีเพ่ง";
        // }else{
        //   $case_typeName="คดีอาญา";
        // }
        ?>
       
            <form id='de_case' method='post'>
            <input type='hidden' id='datasend<?php echo $i ?>' value='<?php echo $case_id ?>' name='decasesend' >
            <tr>
              <td ><button type='button' id='btnDelete<?php echo $i ?>' class='btn btn-outline-secondary'>ลบ</button></td>
              <td><?php echo $case_id ?></td>
              <td><?php echo $name ?></td>
          </tr>
          </form>
    <?php
          $i++;
        }
?>

</table>
  <hr style="border: solid 5px;">
  <p class="text-center"><td class="text-center" colspan=4><button type="button" class="btn btn-outline-success btn_add btn-lg" id="btn_add">เพิ่มผู้รับผิดชอบคดี</button></p>

<form id="add_case" method="post">
<div >
<div class="row" id="add">
    <div class="col-md">
    <label for="">เลขคดี</label>
    <select class="custom-select " id="" name="case" required>
                <option selected value="0">เลขคดี</option>
                <?php while(list($caseid)=mysqli_fetch_row($sql_ic)){ ?>
                    <option  value="<?php echo $caseid ?>"><?php echo $caseid ?></option>
                <?php
                }
                ?>
            </select>
    </div>

    <div class="col-md">
    <label for="">บุคคล</label>
      <!-- <input type="text" class="form-control" placeholder="ประเภทคดี" name="case_type"required> -->
      <select class="custom-select " id="" name="person" required>
                <option selected value="0">บุคคล</option>
                <?php while(list($card,$name)=mysqli_fetch_row($sql_name)){ ?>
                    <option  value="<?php echo $card ?>"><?php echo $name ?></option>
                <?php
                }
                ?>
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
		url: "module/fuction/police_incase_insert.php",
		type: 'POST',
		data: formData,
			success: function (data) {
      //alert(data) 

            swal({
            title: "จัดการผู้รับผิดชอบคดีเรียบร้อยแล้ว",
            icon: "success",
            button: "ตกลง",
          }).then((value) => {
    window.location.href = "home.php?&module=2&action=19";
});

		},
			cache: false,
			contentType: false,
			processData: false
	  });	
    
});
<?php
$md=1;
for($f=1;$f<=$sqli_num_row;$f++){ ?>

$("#btnDelete<?php echo$md; ?>").click(function(){
  var send = $("#datasend<?php echo$md; ?>").val();

  swal({
        title: "ลบผู้รับผิดชอบคดี",
        text: "ต้องการลบผู้รับผิดชอบคดีหรือไม่!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["ยกเลิก","ตกลง"]
      }).then((willDelete) => {
        if (willDelete) {
          $.post("module/fuction/police_incase_delete.php",{decasesend:send}).done(function(data,txtstuta){
            alert(data)
            window.location.href="home.php?&module=2&action=19";
            });
          
        } else {
          

        }       
    });
					      
})
<?php
$md++;
}
?>
</script>