
<div  class="topbigbody">
    <div class="subbigbody">
      <br>
    <div class="row">
    <div class="col-sm-4">
      
    <p class="text-center"><b>ค้นหาข้อมูล</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-search-plus" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>แก้ไขข้อมูล</b></p>
      <a href="#">
      <p class="text-center"><i class="fas fa-edit" style="font-size: 80px"></i></p>
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><b>เพิ่มข้อมูล</b></p>
      <a href="#">
      <p class="text-center"><i class="fas fa-plus-circle" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>
  <div class="beforfooter">
      <br>
      <h1 class="text-center">คดีที่รับผิดชอบ</h1>
      <table class="table">

      <?php 
       
        $con = connect_db();

       $sql_res = mysqli_query($con,"SELECT cn.case_id,cn.case_name,cn.case_type,cn.case_savetime FROM case_name as cn INNER JOIN responsible_person as rp ON rp.case_id = cn.case_id WHERE rp.card_id ='$_SESSION[id_card]'")or die("select sql responsible_person error".mysqli_error($con));

       while(list($case_id,$case_name,$case_type)=mysqli_fetch_row($sql_res)){
        if($case_type==1){
          $case_typeName="คดีเพ่ง";
        }else{
          $case_typeName="คดีอาญา";
        }
            echo"
            <tr>
              <td><a href='?datacase=$case_id&module=1&action=1'>$case_id</a></td>
              <td>$case_name</td>
              <td>$case_typeName</td>
          </tr>";
        }
      ?>
       </table>
       <hr>
      <br>
      <br>
      <br>
      <br>
      <br>
</div>
<div class="footer">1</div>
<div class="modal fade" id="SC" role="dialog">
  <div class="modal-dialog modal-xl  role="document"">
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
          <h4 style=" justify-content: center"><i class="fas fa-search"></i> ค้นหาข้อมูล</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       </div>
      <?php
      //  $select = mysqli_query($con,"SELECT case_id,case_name,case_type FROM case_name")or die("select sql error".mysqli_error($con));
        ?>
        <div class="modal-body" style="padding:40px 50px;">
              <div class="input-group mb-3">
                <div class="col-3">
                <select class="custom-select" id="inputGroupSelect02" name="type">
                    <option value="1">เลขคดี</option>
                    <option value="2">เลขบัตรประจำตัวประชาชน</option>
                    <option value="3">ชื่อนามสกุล</option>
                </select>
                </div>
                <div class="col-5">
                <input type="text" class="form-control" placeholder="ค้นหาข้อมูล" name="search" id="textsearch">
                </div>
                <div class="col-3">
                <button type="button" class="btn btn-success" id="btnsearch">ค้นหา</button>
                </div>
                
              </div>
              <div class="col-auto" id="loadid">
              </div>
            </div>
           </div>
           <div class="footer">
            <div style="float: left;">
              <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"> Cancel</button>
            </div>
            <div style="float: right">  
              <a href="#">ลืมรหัสผ่าน</a>
            </div>
          </div>
      </div>
      </div>
      <script>
        $(document).ready(function(){
        // $('#table_id').DataTable();
        $("#myBtnSc").click(function(){
            $("#SC").modal();
        });
        })
        </script>
        <script>
 function loadsunass(){
      var id1= $("#inputGroupSelect02").val();
      var id2 = $("#textsearch").val();

      $("#loadid").html("")
    //   $("#loadging").css('display','')
      $.ajax({
        url: "show_data_search.php",
        data:{type:id1,search:id2},
        type: "POST"
      }).done(function(data){
        $("#loadid").html(data)
      })
    }  
$(document).ready(function() {
    loadsunass()
    $("#btnsearch").click(function(){
        var id1= $("#inputGroupSelect02").val();
        var id2 = $("#textsearch").val();
    //alert(id1+id2)
   $.post("show_data_search.php",{type:id1,search:id2},
    function (data, textStatus, jqXHR) {
    //alert(data)
     $("#loadid").html(data)
     loadsunass()
    }
   );
  })
 });
</script>
