<?php
$con = connect_db();

$select = mysqli_query($con,"SELECT case_id,case_name,case_type FROM case_name")or die("select sql error".mysqli_error($con));

if(empty($_SESSION['user_name'])){
  $com_s="<!--";
  $com_e="-->"
  ?>
  <script>
  swal({
      title: "กรุณาเข้าสู่ระบบ",
      icon: "warning",
  }).then((value) => {
window.location.href = "index.html";
  });
</script>
<?php
}else{
  $com_s="";
  $com_e="";
}
?>
<?php echo $com_s ?>

<div class="row" style="border: 1px solid #000000;">
<div class="col-1 c1" style="border: 1px solid #00FFFF;">
<a href="#" id="myBtnSc">
<p class="text-center"><i class="fas fa-search-plus" style="font-size: 35px"></i></i></p>
</a>

<a href="#">
<p class="text-center"><i class="fas fa-plus-circle" style="font-size: 35px"></i></i></p>
</a>
</div>
<div class="col-md c2" style="border: 1px solid #00FF00;">

<a name="ผู้เสียหาย"></a>
    <div class="victim">
      <p><h1 class="text-center">ผู้เสียหาย</h1></p>
      <br>
   
      <?php 
      if(empty($_GET['datacase'])){
        $data = "";
      }else{
        $data=$_GET['datacase'];
    
        if(empty($_GET['search'])){
          $search = "";
          $l=0;
        }else{
          $search="#".$_GET['search'];
          $l=1;
        }
        $sex_name;
        $i=1;

        $result_chk_victim = mysqli_query($con,"SELECT case_id FROM victim  WHERE case_id = '$data'")or die("resualt_chk_victim sqli error".mysqli_error($con));
        $result_victim = mysqli_query($con,"SELECT vm.title_name, vm.victim_name,vm.victim_lastname,vm.victim_sex,vm.victim_idcard,vm.victim_address,ed.edu_name,vm.victim_image,vm.victim_race,vm.victim_nationality,vm.victim_career FROM victim as vm  INNER JOIN education as ed ON vm.victim_education = ed.edu_id WHERE case_id = '$data'")or die("resualt_victim sqli error".mysqli_error($con));
        list($case_id)=mysqli_fetch_row($result_chk_victim);
        $num_loop=mysqli_num_rows($result_victim);
        if(empty($case_id)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($title_name,$victim_name,$victim_lastname,$victim_sex,$victim_idcard,$victim_address,$victim_education,$victim_image,$victim_race,$victim_nationality,$victim_careen)=mysqli_fetch_row($result_victim)){
    
          if($victim_sex == 1){
            $sex_name = "ชาย";
            $sex1="selected";
            $sex2="";
          }else{
            $sex_name = "หญิง";
            $sex1="";
            $sex2="selected";
          }
        ?>
        <form class="victim<?php echo$i ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        <a name="<?php echo $victim_idcard ?>"></a>
        <a name="<?php echo $victim_name ?>"></a> 
        <a name="<?php echo $victim_lastname ?>"></a> 
         <div class="col-md">
         <b><label for="formGroupExampleInput">ผู้เสียหาย คนที่ <?php echo $i; ?></label></b><button type="button" id="victim_test<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         <p><img src="../../image/<?php echo $victim_image; ?>.png" class="img-fluid mx-auto d-block" alt="Responsive image"></p>
          <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">รหัสคดี : </label>
          </div>
          <div class="col-2">
              <input type="hidden" value="<?php echo$i; ?>" name="victim_i[]?>">
              <input type="text" class="form-control" placeholder="เลขคดี" value="<?php echo $case_id; ?>"  name="victim_case[]" readonly required>
            </div>
            <div>
              <label class="col-sm col-form-label>ชื่อ : </label>
            </div>
            <div class="col-1">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="คำนำหน้าชื่อ" value="<?php echo $title_name; ?>" id="focus<?php echo $i?>" name="victim_titlename[]" disabled required>
              
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ชื่อ" value="<?php echo $victim_name; ?>" name="victim_name[]"disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">นามสกุล : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="นามสกุล" value="<?php echo $victim_lastname; ?>" name="victim_lastname[]" disabled required>
            </div>
            </div>
          </div>
          
          <p></p>
          <div class="col-md">
          <div class="form-row">
            <div>
              <label class="col-sm col-form-label">เชื้อชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="เชื้อชาติ" value="<?php echo $victim_race; ?>" name="victim_race[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">สัญชาติ : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="สัญชาติ" value="<?php echo $victim_nationality; ?>" name="victim_nationality[]" disabled required>
            </div>
            <div>
              <label class="col-sm col-form-label">อาชีพ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="อาชีพ" value="<?php echo $victim_careen; ?>" name="victim_careen[]" disabled required>
            </div>
          </div>
          </div>
          
        <p></p>

        <div class="col-md">
          <div class="form-row">
          <div>
              <label class="col-sm col-form-label">เลขบัตรประจำตัวประชาชน : </label>
            </div>
            <div class="col-md">
              <input type="text" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" id="victim_idcard<?php echo $i; ?>" name="victim_idcard[]" data-idcard="<?php echo $victim_idcard ?>"  value="<?php echo $victim_idcard; ?>" readonly required>
            </div>
            <div>
              <label class="col-sm col-form-label" >ระดับการศึกษา : </label>
            </div>
            <div class="col-3">
              <select class="custom-select edit<?php echo $i; ?>" id="" name="victim_edu[]" disabled required>
                   < <?php $result_edu = mysqli_query($con,"SELECT * FROM education")or die("select education error".mysqli_error($con));
                        while(list($edu_id,$edu_name)=mysqli_fetch_row($result_edu)){
                          $selected=$edu_name==$victim_education?"selected":"";
                          echo"<option value='$edu_id' $selected>$edu_name</option>";
                        }
                   ?> 
                   
                </select>
            </div>
            <div>
              <label class="col-sm col-form-label">เพศ : </label>
              
            </div>
            <div class="col-md">
              <select class="custom-select edit<?php echo $i; ?>" id="" name="victim_sex[]" disabled required>
                    <option value="1" <?php echo$sex1 ?>>ชาย</option>
                    <option value="2" <?php echo$sex2 ?>>หญิง</option>
                </select>
            </div>
          </div>
        </div>

            <p></p>
            <div class="col-md">
            <div class="form-row">
            <div>
              <label class="col-sm col-form-label">ที่อยู่ : </label>
            </div>
            <div class="col-md">
            <input type="text" class="form-control edit<?php echo $i; ?>" placeholder="ที่อยู่" value="<?php echo $victim_address; ?>" name="victim_address[]" disabled required>
            </div>
            </div>
          </div>
          <p></p>
          <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success save" id="save<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="cancle<?php echo $i; ?>">ยกเลิก</button></p>
            </div>
        </div>
        <hr>
                      </form>
      <?php
      $i++;
      
      }
    }
  }
      ?>
     
     </div>

</div>
<div class="col-1 c3" style="border: 1px solid #FF0000;">

</div>
</div>