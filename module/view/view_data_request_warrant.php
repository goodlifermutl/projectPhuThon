<a name="คำร้องออกหมายจับ"></a>
<br>
<br>
<br>
<br>
    <div class="dataview">
      <p><h1 class="text-center">คำร้องออกหมายจับ</h1></p>
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
        
        $result_chk_rw = mysqli_query($con,"SELECT  rw_case FROM request_warrant  WHERE rw_case = '$data'")or die("result_chk_object sqli error".mysqli_error($con));
        $result_data_rw = mysqli_query($con,"SELECT no_rw, rw_no, rw_court, rw_cell, rw_judge, rw_type, rw_Petitioner, rw_policename, rw_position, rw_age, rw_career, rw_Workplace, rw_phone, rw_dos, rw_cherk1, rw_cherk2, rw_incident, rw_circumstances,rw_action, rw_Documentary, rw_Arrest, rw_warrant, rw_petition, rw_position2, rw_ornot, rw_Request, rw_warrant2, rw_Court2 FROM request_warrant  WHERE rw_case = '$data'".mysqli_error($con));
        list($case_id_rw)=mysqli_fetch_row($result_chk_rw);
        $num_loop=mysqli_num_rows($result_data_rw);
        // echo $data,$num_loop;
        if(empty($case_id_rw)){
          ?><script>swal("sorry!", "ไม่พบข้อมูลบางส่วน!", "error")</script><?php
          echo "<h5 class='text-center'>----ไม่พบข้อมูล----</h5>";
        }else {
        
        while(list($no_rw,$rw_no,$rw_court,$rw_cell,$rw_judge,$rw_type,$rw_Petitioner,$rw_policename,$rw_position,$rw_age,$rw_career,$rw_Workplace,$rw_phone,$rw_dos,$rw_cherk1,$rw_cherk2,$rw_incident,$rw_circumstances,$rw_action,$rw_Documentary,$rw_Arrest,$rw_warrant,$rw_petition,$rw_position2,$rw_ornot,$rw_Request,$rw_warrant2,$rw_Court2)=mysqli_fetch_row($result_data_rw)){

            if($rw_type == 1){
                $status1="selected";
                $status2="";
              }else if(($rw_type == 2)){
                $status2="selected";
                $status1="";
              }

              if($rw_cherk1 == "true1"){
                $check1="checked";
                
              }if($rw_cherk2 == "true2"){
                $check2="checked";
                
              }if($rw_cherk1!="true1"){
                $check1="";
                
              }if($rw_cherk2!="true2"){
                $check2="";
              }

              if($rw_ornot == 1){
                $rcheck1="checked";
                $rcheck2="";
              }else if($rw_ornot == 2){
                $rcheck2="checked";
                $rcheck1="";
              }

        ?>
        
        <input type="hidden" id="chk_link" value="<?php echo $l  ?>">
        
         <div class="col-md">
         <b><label for="formGroupExampleInput">คำร้องออกหมายจับ ฉบับที่ <?php echo $i; ?></label></b><button type="button" id="btn_edit3<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button><button type="button" id="btn_report_rw<?php echo $i ?>"><i class="fas fa-edit" style="font-size: 10px"></i></button>
         
        </div>
        <div class="col-md">

    </div>
    <form class="save3<?php echo$i ?>" method="post" id="insertReWa">
    <div class="col">
  <div class="form-group row">
  <input type="hidden" id="" value="<?php echo $no_rw  ?>" name="rw_no_up[]">
    <label class="col-form-label">คำร้องที่ : </label>
    <div class="col-2">
    <input type="text" class="form-control editrw<?php echo $i; ?>" id="focusrw<?php echo $i ?>" value="<?php echo $rw_no ?>" name="rw_no[]" disabled>
    </div>
    <label class="col-form-label">ขอหมายจับรับที่ร้อง ศาล : </label>
    <div class="col">
    <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_court ?>" name="rw_court[]" disabled>
    </div>
    <label class="col-form-label">เรียกสอบ : </label>
    <div class="col-2">
    <input type="date" class="form-control editrw<?php echo $i; ?>" value="<?php echo $rw_cell ?>" id=""name="rw_cell[]" disabled>
    </div>
  </div>
    <div class="form-group row">
      <label class="col-form-label">ผู้พิพากษา : </label>
      <div class="col-5">
      <input type="text" class="form-control editrw<?php echo $i; ?>" value="<?php echo $rw_judge ?>" id=""name="rw_judge[]" disabled>
      </div>
      <div class="col-md-2">
        <select class="custom-select editrw<?php echo $i; ?>" id="" value="<?php echo $rw_type ?>" name="rw_type[]" disabled >
                <option disabled selected value="0">ประเภทคดี</option>
                <option value="1" <?php echo $status1 ?>>คดีเพ่ง</option>
                <option  value="2" <?php echo $status2 ?>>คดีอาญา</option>
                   
        </select>   
        </div>
      </div>
    
      <p></p>
      <div class="form-group row">
        <label class="col-form-label">ผู้ร้อง : </label>
        <div class="col-5">
        <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_Petitioner ?>" name="rw_Petitioner[]" disabled>
        </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label">ข้าพเจ้า : </label>
          <div class="col">
          <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_policename ?>" name="rw_policename[]" disabled>
          </div>
          <label class="col-form-label">ตำแหน่ง : </label>
          <div class="col">
          <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_position ?>" name="rw_position[]" disabled>
          </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label">อายุ : </label>
            <div class="col">
            <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_age ?>" name="rw_age[]" disabled>
            </div>
            <label class="col-form-label">อาชีพ : </label>
            <div class="col">
            <input type="text" class="form-control editrw<?php echo $i; ?>"  id="" value="<?php echo $rw_career ?>" name="rw_career[]" disabled>
            </div>
            <label class="col-form-label">สถานที่ทำงาน : </label>
            <div class="col">
            <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_Workplace ?>" name="rw_Workplace[]" disabled>
            </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label">โทรศัพท์ : </label>
              <div class="col-5">
              <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_phone ?>" name="rw_phone[]" disabled>
              </div>
              </div>
              <p></p>
              <div class="col-md">
              <div class="form-row">
              <div>
                  <label class="col-form-label">ขอยื่นคำร้องขอออกหมายจับต่อศาล ดังมีข้อความที่จะกล่าวดังต่อไปนี้ </label>
                </div>
              </div>
              </div>
              <div>
                  <label class="col-form-label">ข้อ 1. </label>
                  </div>
                  <div class="col-md">
                      <input type="text" class="form-control editrw<?php echo $i; ?>" placeholder="ด้วย" id="changAdd" value="<?php echo $rw_dos ?>" name="rw_dos[]" disabled>
                  </div> 
              <hr>
              <p></p>
              
                <div class="form-group row">
                  <label class="col-form-label">ซึ่งมีตำหนิรูปพรรณตามที่แนบมาพร้อมนี้ : </label>
                </div>

                  <div class="form-check">
                    <input class="form-check-input position-static editrw<?php echo $i; ?>" type="checkbox" id="blankCheckbox" value="true1" aria-label="..."name="rw_cherk1[]" <?php echo $check1 ?> disabled>
                    <label class="form-check-label" for="exampleRadios1">ได้หรือน่าจะได้กระทำความผิดอาญาร้ายแรงซึ่งมีอัตราโทษจำคุกอย่างสูงเกิน 3 ปี</label>
                  </div>
                  <p></p>
                  <div class="form-check">
                    <input class="form-check-input position-static editrw<?php echo $i; ?>" type="checkbox" id="blankCheckbox" value="true2" aria-label="..."name="rw_cherk2[]" <?php echo $check2 ?> disabled>
                    <label class="form-check-label" for="exampleRadios1">ได้หรือน่าจะได้กระทำความผิดอาญา  และน่าจะหลบหนีหรือไปยุ่งเหยิงกับพยานหลักฐานหรือก่ออันตรายประการอื่น</label>
                  </div>
                  <p></p>
                  <div class="form-group row">
                    <label class="col-form-label">เหตุเกิดที่ : </label>
                    <div class="col">
                    <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_incident ?>" name="rw_incident[]" disabled>
                    </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label">มีพฤติการณ์กระทำความผิดที่เกี่ยวกับเหตุออกหมายจับ คือ	 : </label>
                      <div class="col">
                      <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_circumstances ?>" name="rw_circumstances[]" disabled>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-form-label">การกระทำของผู้ต้องหาเป็นการกระทำความผิด ฐาน : </label>
                        <div class="col">
                        <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_action ?>" name="rw_action[]" disabled>
                        </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label">พยานเอกสาร และพยานวัตถุ : </label>
                          <div class="col">
                          <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_Documentary ?>" name="rw_Documentary[]" disabled>
                          </div>
                          </div>
                          <p></p>
                          <div class="col-md">
                          <div class="form-row">
                          
                          <?php 
    $po=1;
    $police_result=mysqli_query($con," SELECT * FROM witness_request_warr WHERE witness_case = '$case_id_rw'")or die("sql error!!!".mysqli_error($con));
    $loop_wir=mysqli_num_rows($police_result);
    while(list($no_witness,$winess_case,$rw_witness)=mysqli_fetch_row($police_result)){
        
    ?>
        <div>
        <label class="col-form-label">พยานปากที่ <?php echo $po ?> : </label>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" value="<?php echo $rw_witness ?>" readonly>
        </div> 
        <input type="hidden"  value="<?php echo $id_po_ca_ar ?>" name="rw_wir_id[]">
        <input type="hidden"  value="<?php echo $loop_wir ?>" name="rw_loop[]">
       <?php $po++; } ?>


                          </div>
                          </div>
                          <hr>
                          <p></p>
                          <div class="col-auto" id="loadvill2">
                          </div>
                          <p></p>
                          
                            <div class="form-group row">
                              <label class="col-form-label">ข้อ 2. ผู้ร้องประสงค์จะทำการจับกุม : </label>
                              <div class="col">
                              <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_Arrest ?>" name="rw_Arrest[]" disabled>
                              </div>
                              <label class="col-form-label">จึงขอให้ศาลออกหมายจับ : </label>
                              <div class="col">
                              <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_warrant ?>" name="rw_warrant[]" disabled>
                              </div>
                              <label class="col-form-label">มาดำเนินคดี</label>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label">ในการยื่นคำร้องนี้ ผู้ร้องได้มอบหมายให้  : </label>
                                <div class="col">
                                <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_petition ?>" name="rw_petition[]" disabled>
                                </div>
                                <label class="col-form-label">ตำแหน่ง : </label>
                                <div class="col">
                                <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_position2 ?>" name="rw_position2[]" disabled>
                                </div>
                                </div>
                                  <!-- <div class="form-group row">
                                  <label class="col-form-label">ผู้ร้อง </label>
                                  <div class="form-check form-check-inline">
                                      &nbsp;<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"name="rw_check3">
                                      <label class="form-check-label" for="inlineCheckbox2">เคย</label>
                                    </div>
                                    
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"name="rw_check4">
                                      <label class="form-check-label" for="inlineCheckbox2">ไม่เคย</label>
                                    </div>
                                    <label class="col-form-label">ร้องขอให้ศาล </label>
                                    <div class="col">
                                    <input type="text" class="form-control" id=""name="rw_Request">
                                    </div>
                                    </div> -->
                                    <div class="form-group row"> 
                                    <div class="form-check">
                                    <label class="form-check-label">ผู้ร้อง </label>&nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="form-check-input editrw<?php echo $i; ?>" type="radio" name="exampleRadios[]" id="exampleRadios1" value="1" <?php echo $rcheck1 ?> disabled>
                                      <label class="form-check-label" for="exampleRadios1">
                                        เคย
                                      </label>
                                    </div>&nbsp;
                                    <div class="form-check">
                                      <input class="form-check-input editrw<?php echo $i; ?>" type="radio" name="exampleRadios[]" id="exampleRadios2" value="2" <?php echo $rcheck2 ?> disabled>
                                      <label class="form-check-label" for="exampleRadios2">
                                        ไม่เคย
                                      </label>
                                      <label class="form-check-label">ร้องขอให้ศาล </label>
                                      
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control editrw<?php echo $i; ?>" id="" value="<?php echo $rw_Request ?>" name="rw_Request[]" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-form-label">ออกหมายจับบุคคลดังกล่าว  โดยอาศัยเหตุแห่งการร้องขอเดียวกันนี้ หรือเหตุอื่น ๆ ( ระบุ ) </label>
                                  </div>
                                  <div class="col">
                                    <textarea class="form-control editrw<?php echo $i; ?>" id="exampleFormControlTextarea1" rows="3" value="" name="rw_warrant2[]" disabled><?php echo $rw_warrant2 ?></textarea >
                                    </div>
                                    <p></p>
                                    <div class="form-group row">
                                    <label class="col-form-label">และมีคำสั่งศาล</label>
                                    <div class="col">
                                      <textarea class="form-control editrw<?php echo $i; ?>" id="exampleFormControlTextarea1" rows="3" value="" name="rw_Court2[]" disabled><?php echo $rw_Court2 ?></textarea>
                                  </div>
                                  </div>
                              <hr>

    <p></p>
    <div class="col-md">
            <p class="text-center"><button type="submit" class="btn btn-outline-success savebtn3" id="savebtn3<?php echo $i; ?>" data-idcard="<?php echo $victim_idcard ?>">บันทึก</button>
            <button type="button" class="btn btn-outline-danger" id="canclebtn3<?php echo $i; ?>">ยกเลิก</button></p>
            </div>
            </div>
    </form>

      <?php
        $i++;
      }
    }
}
      ?>
     
     </div>

<?php  
$md=1;
  for($y=1;$y<=$num_loop;$y++){
    
?>
<script>

var id<?php echo $md;?> = $("#id<?php echo $md; ?>").val()


$("#savebtn3<?php echo $md ?>").hide();
$("#canclebtn3<?php echo $md ?>").hide();

$("#btn_edit3<?php echo $md; ?>").click(function(){
    $(".editrw<?php echo $md; ?>").prop("disabled", false);
    $("#savebtn3<?php echo $md ?>").show();
    $("#canclebtn3<?php echo $md ?>").show();
    swal({
  title: "การแก้ไขข้อมูล",
  text: "ต้องการแก้ไขข้อมูลใช่หรือไม่!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  buttons: ["ยกเลิก","ตกลง"]
})
.then((willDelete) => {
  if (willDelete) {
    $( "#focusrw<?php echo $md ?>" ).focus();
    
  } else {
    
    window.location.href="home.php?datacase=<?php echo $case_id_rw; ?>&module=1&action=1";
  }
});
})

$("#btn_report_rw<?php echo $md; ?>").click(function(){
    swal({
  title: "รายงานPDF",
  text: "ต้องการออกรายงานใช่หรือไม่?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  buttons: ["ยกเลิก","ตกลง"]
})
.then((willDelete) => {
  if (willDelete) {
    var reidcard = "<?php echo $case_id_rw; ?>";
      $.post("module/fuction/test_send_reidcard.php",{reidcard}).done(function(data,txtstuta){
      alert(reidcard)
      alert(data)
      window.open('module/fuction/request_warrant_report.php','_blank');
     })
}
else {
    window.location.href="home.php?datacase=<?php echo $case_id_rw; ?>&module=1&action=1";
  }
});
})


$("#canclebtn3<?php echo $md;  ?>").click(function(){
 // alert("ggg")
 $(".editrw<?php echo $md; ?>").prop("disabled", true);
 $("#savebtn3<?php echo $md ?>").hide();
  $("#canclebtn3<?php echo $md ?>").hide();
  window.location.href="home.php?datacase=<?php echo $case_id_rw; ?>&module=1&action=1";
})
$(".save3<?php echo$md; ?>").submit(function(){
  alert("ggggggg")
  $check = $(".save3<?php echo$md; ?>").valid();

		if($check == true){
  var formData = new FormData(this);
  $.ajax({
					        url: "module/fuction/update_data_request_warrant.php",
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
                
                
                window.location.href="home.php?datacase=<?php echo $case_id_rw; ?>&module=1&action=1";
					        },
					        cache: false,
					        contentType: false,
					        processData: false
					    })
}
})
</script>
<?php $md++; } ?>