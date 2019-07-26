<style>
a{
  color: black;
}
a:hover{
  color: yellow;
}
</style>
<div  class="topbigbody">
    <div class="subbigbody">
      <br>
    <div class="row">
    <div class="col-sm-4">
      
    <p class="text-center"><b>เพิ่มข้อมูลผู้เสียหาย</b></p>
      <a href="#" id="myBtnNsVT">
      <p class="text-center"><i class="far fa-user" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูลผู้ต้องหา</b></p>
      <a href="#">
      <p class="text-center"><i class="fas fa-user-secret" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูลของกลาง</b></p>
      <a href="#" id="myBtnNs">
      <p class="text-center"><i class="fas fa-shoe-prints" style="font-size: 80px"></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>
    <div  class="topbigbody">
    <div class="subbigbody">
      <br>
    <div class="row">
    <div class="col-sm-4">
      
    <p class="text-center"><b>เพิ่มบันทึกการจับกุม</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูลหมายจับ</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มคำร้องออกหมายจับ</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>
    <div  class="topbigbody">
    <div class="subbigbody">
      <br>
    <div class="row">
    <div class="col-sm-4">
      
    <p class="text-center"><b>เพิ่มรายงานการสอบสวน</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มหมายเรียกผู้ต้องหา</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มคำให้การผู้ต้องหา</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>
    <div  class="topbigbody">
    <div class="subbigbody">
      <br>
    <div class="row">
    <div class="col-sm-12">
      
    <p class="text-center"><b>เพิ่มหมายค้น</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-sticky-note" style="font-size: 80px"></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>
<div class="footer">1</div>

<script>
        $(document).ready(function(){
        $("#myBtnNsVT").click(function(){
            swal({
            title: "การเพิ่มข้อมูล",
            text: "ต้องการเพิ่มข้อมูลใช่หรือไม่!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["ยกเลิก","ตกลง"]
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location.href="../main/home.php?&module=2&action=4";
                
            } else {
                
                window.location.href="../main/home.php?&module=2&action=3";
            }
            });
        });
        })
        </script>