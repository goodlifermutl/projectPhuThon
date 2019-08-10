<?php
echo "testpolice";

$con = connect_db();
$sql="SELECT card_id,rp.rank_name,ps_name,ps_lastname,sex,address,ps_num,police_pic,sta_per_police FROM police_person as pp INNER JOIN rank_police as rp WHERE rp.rank_id=pp.rank_id";
$result=mysqli_query($con,$sql)or die("sql error!!!!!!!".mysqli_error($con));
$num_loop_sql=mysqli_num_rows($result);
$num_peson=1;
$sex;
$per;
while(list($p_cardid,$p_rk,$p_name,$p_lastname,$p_sex,$p_address,$p_tel,$p_pic,$p_sta_per)=mysqli_fetch_row($result)){
if($p_sex==1){
    $sex="ชาย";
}else{
    $sex="หญิง";
}

if($p_sta_per==1){
    $per="ปฎิบัติงาน";
}
?>
<div class="row mb-2">
    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

      <img src="image/logo.png" class="mx-auto d-block rounded-circle" width="30%">
      
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">คนที่ <?php echo $num_peson ?></strong>


            <div class="col-md">
            <div class="form-row">
                <div>
                <label class="col-sm col-form-label">ชื่อ : </label>
                </div>
                <div class="col-md">
                <input type="text" class="form-control" placeholder="คำนำหน้าชื่อ" value="<?php echo $p_rk ?>"  disabled required>
                </div>
                <div class="col-md">
                <input type="text" class="form-control" placeholder="ชื่อ" value="<?php echo $p_name ?>" disabled required>
                </div>
                <div>
                <label class="col-sm col-form-label">นามสกุล : </label>
                </div>
                <div class="col-md">
                <input type="text" class="form-control" placeholder="นามสกุล" value="<?php echo $p_lastname ?>" disabled required>
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
                <input type="text" class="form-control" placeholder="เลขบัตร" value="<?php echo $p_cardid ?>"  disabled required>
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
                <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" value="<?php echo $p_tel ?>"  disabled required>
            </div>
            <div>
                <label class="col-sm col-form-label">เพศ : </label>
            </div>
            <div class="col-md">
                <input type="text" class="form-control" placeholder="เพศ" value="<?php echo $sex ?>"  disabled required>
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
                <input type="text" class="form-control" placeholder="ที่อยู่" value="<?php echo $p_address ?>"  disabled required>
            </div>
            </div>
            </div>   

            <p><h3 class="mb-0 text-center">สถานะการทำงาน : <?php echo $per; ?></h3></p>
            <a href="#" class="stretched-link">Continue reading</a>
        </div>
          
      </div>
    </div>
</div>
<?php $num_peson++; } ?>
