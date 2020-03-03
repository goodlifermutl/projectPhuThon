<?php
include("../fuction/connect_db.php");
$con = connect_db();

$sql="SELECT card_id,rp.rank_name,ps_name,ps_lastname,sex,address,ps_num,police_pic,sta_per_police FROM police_person as pp INNER JOIN rank_police as rp ON pp.rank_id = rp.rank_id";


$result=mysqli_query($con,$sql)or die("sql error!!!!!!!".mysqli_error($con));


$num_loop_sql=mysqli_num_rows($result);
$num_peson=1;
$sex;
$per;

// echo $_GET['cardid'];

while(list($p_cardid,$p_rk,$p_name,$p_lastname,$p_sex,$p_address,$p_tel,$p_pic,$p_sta_per)=mysqli_fetch_row($result)){
    $sql2="SELECT user_id FROM user as ur INNER JOIN police_person as pp ON pp.card_id = ur.card_id WHERE pp.card_id ='$p_cardid'";
    $result2=mysqli_query($con,$sql2)or die("sql2 error!!!!!!!".mysqli_error($con));
    list($id_user)=mysqli_fetch_row($result2);
if($p_sex==1){
    $sex="ชาย";
}else{
    $sex="หญิง";
}

if($p_sta_per==1){
    $per="ปฎิบัติงาน";
}else{
    $per="ออกจากราชการ";
}

if(empty($p_pic)){
    $imgshow="icon_user_pic.png";
}else{
    $imgshow=$p_pic;
}
?>
<div class="row mb-2">
    <div class="col-md-12">
    <form class="police_form<?php echo$num_peson ?>" method="post" enctype="multipart/form-data">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

      <img src="image/<?php echo $imgshow ?>" class="mx-auto d-block rounded-circle" width="30%">
        <a name="<?php echo $p_cardid; ?>"></a>
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">คนที่ <?php echo $num_peson ?></strong>


            <div class="col-md">
            <div class="form-row">
                <div>
                <label class="col-sm col-form-label">ชื่อ : </label>
                </div>
                <div class="col-md">
                <select class="custom-select edit<?php echo $num_peson; ?>" id="" name="rank_police[]" disabled required>
                   < <?php $result_rank = mysqli_query($con,"SELECT * FROM rank_police")or die("select rank_police error".mysqli_error($con));
                        while(list($rank_id,$rank_name)=mysqli_fetch_row($result_rank)){
                          $selected=$rank_name==$p_rk?"selected":"";
                          echo"<option value='$rank_id' $selected>$rank_name</option>";
                        }
                   ?>     
                </select>
                </div>
                <div class="col-md">
                <input type="text" class="form-control edit<?php echo $num_peson; ?>" placeholder="ชื่อ" value="<?php echo $p_name ?>" name="name_police[]" disabled required>
                </div>
                <div>
                <label class="col-sm col-form-label">นามสกุล : </label>
                </div>
                <div class="col-md">
                <input type="text" class="form-control edit<?php echo $num_peson; ?>" placeholder="นามสกุล" value="<?php echo $p_lastname ?>" name="lastname_police[]" disabled required>
                </div>
            </div>
            </div>
            <br>
            <div class="col-md">
            <div class="form-row">
            <div>
                <label class="col-sm col-form-label">เลขบัตรประจำตัวประชาชน : </label>
            </div>
            <div class="col-md">
                <input type="text" class="form-control edit<?php echo $num_peson; ?>" placeholder="เลขบัตร" value="<?php echo $p_cardid ?>" name="idcard_police[]" readonly required>
            </div>
            </div>
            </div> 
            <br>
            <div class="col-md">
            <div class="form-row">
            <div>
                <label class="col-sm col-form-label">เบอร์โทรศัพท์มือถือ : </label>
            </div>
            <div class="col-md">
                <input type="text" class="form-control edit<?php echo $num_peson; ?>" placeholder="เบอร์โทรศัพท์" value="<?php echo $p_tel ?>" name="phone_police[]" disabled required>
            </div>
            <div>
                <label class="col-sm col-form-label">เพศ : </label>
            </div>
            <div class="col-md">
                <input type="text" class="form-control edit<?php echo $num_peson; ?>" placeholder="เพศ" value="<?php echo $sex ?>" name="sex_police[]" disabled required>
            </div>
            </div>
            </div>  
            <br>
            <div class="col-md">
            <div class="form-row">
            <div>
                <label class="col-sm col-form-label">ที่อยู่ : </label>
            </div>
            <div class="col-md">
                <input type="text" class="form-control edit<?php echo $num_peson; ?>" placeholder="ที่อยู่" value="<?php echo $p_address ?>" name="address_police[]" disabled required>
            </div> 
            </div>
            </div>
            <br>
            <div class="col-md">
            <div class="form-row">
            <div>
                <label class="col-sm col-form-label" id="label_choice_per<?php echo $num_peson; ?>">สถานะการทำงาน : </label>
            </div>
            <div class="col-md">
                <select class="custom-select edit<?php echo $num_peson; ?>" id="choice_per<?php echo $num_peson; ?>" name="per_police[]" disabled required>
                    <option value="1">ปฏิบัติงาน</option>
                    <option value="2">ออกจากข้าราชการ</option> 
                </select>
            </div>
            </div>
            </div>         
            <p><h3 class="mb-0 text-center">ชื่อผู้ใช้งาน : <?php echo $id_user; ?></h3></p>
            <p><h3 class="mb-0 text-center">สถานะการทำงาน : <?php echo $per; ?></h3></p>
            <!-- <a href="#" id="btn_edit" id="policedata" class="stretched-link">แก้ไขข้อมูล<?php echo $num_peson; ?></a> -->
            <button type="button" id="policedata<?php echo $num_peson; ?>">แก้ไขข้อมูล</button>
            <br>
            <p class="text-center"><button type="submit" class="btn btn-outline-success save" id="save<?php echo $num_peson; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="cancle<?php echo $num_peson; ?>">ยกเลิก</button></p>
        </div>
       </div>
       </form>
    </div>
</div>
<?php $num_peson++; } ?>

<?php 
$num_p_sc=1;
for($i=1;$i<=$num_loop_sql;$i++){
?>
<script>
$("#save<?php echo $num_p_sc; ?>").hide();
$("#cancle<?php echo $num_p_sc; ?>").hide();
$("#choice_per<?php echo $num_p_sc; ?>").hide();
$("#label_choice_per<?php echo $num_p_sc; ?>").hide();

$("#policedata<?php echo $num_p_sc; ?>").click(function(){
    $(".edit<?php echo $num_p_sc; ?>").prop("disabled", false);
    $("#save<?php echo $num_p_sc; ?>").show();
    $("#cancle<?php echo $num_p_sc; ?>").show();
    $("#choice_per<?php echo $num_p_sc; ?>").show();
    $("#label_choice_per<?php echo $num_p_sc; ?>").show();
    swal({
  title: "การแก้ไขข้อมูล",
  text: "ต้องการแก้ไขข้อมูลใช่หรือไม่!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  buttons: ["ยกเลิก","ตกลง"]

        }).then((willDelete) => {
            if (willDelete) {
                // $( "#focus<?php //echo $md ?>" ).focus();
                
            } else {
                
                window.location.href="home_admin.php?module=1&action=9";
            }
    });
})
$("#cancle<?php echo $num_p_sc;  ?>").click(function(){
 $(".edit<?php echo $num_p_sc; ?>").prop("disabled", true);
 $("#save<?php echo $num_p_sc; ?>").hide();
  $("#cancle<?php echo $num_p_sc; ?>").hide();
  window.location.href="home_admin.php?module=1&action=9";
})

$(".police_form<?php echo $num_p_sc; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".police_form<?php echo $num_p_sc; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_police.php",
					        type: 'POST',
					        data: formData,
					        success: function (data) {
								alert(data);
								//swal("บันทึกสำเร็จแล้ว!", "", "success")
								swal("บันทึกสำเร็จ!", {
									icon: "success",
									buttons: false,
									timer: 1000,
								});   
                
                
                window.location.href="home_admin.php?module=1&action=9";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php 
    $num_p_sc++; 
        }
?>
