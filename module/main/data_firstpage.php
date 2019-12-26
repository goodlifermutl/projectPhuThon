
<div  class="topbigbody">
    <div class="subbigbody">
      <br>
    <div class="row">
    <div class="col-sm-5">
      
    <p class="text-center"><b>ค้นหาข้อมูล</b></p>
      <a href="#" id="myBtnSc">
      <p class="text-center"><i class="fas fa-search-plus" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    <!-- <div class="col-sm-4">
      <p class="text-center"><b>แก้ไขข้อมูล</b></p>
      <a href="#">
      <p class="text-center"><i class="fas fa-edit" style="font-size: 80px"></i></p>
      </a>
    </div> -->
    <div class="col-sm-5">
      <p class="text-center"><b>เพิ่มข้อมูล</b></p>
      <a href="#" id="myBtnNs">
      <p class="text-center"><i class="fas fa-plus-circle" style="font-size: 80px"></i></i></p>
      </a>
    </div>
    </div>
    </div>
    </div>
  <div class="left-beforfooter">
    <h3>คดีปักหมุด</h3>
    <hr>
    
    <?php
     $con = connect_db();
      $i=0;
      $case_id_pin=array();
     $sql_res = mysqli_query($con,"SELECT cn.case_id,cn.case_name,cn.case_type,cn.case_savetime,cn.case_status FROM case_name as cn INNER JOIN pin_case as rp ON rp.case_id = cn.case_id WHERE rp.user_id ='$_SESSION[user_name]'")or die("select sql responsible_person error".mysqli_error($con));
     $num_loop=mysqli_num_rows($sql_res);
     while(list($case_id_pin[],$case_name,$case_type,$case_date,$status_case)=mysqli_fetch_row($sql_res)){
      if($case_type==1){
        $case_typeName="คดีเพ่ง";
      }else{
        $case_typeName="คดีอาญา";
      }
      ?><?php
          echo"
          <ul class='list-group'>
          <li class='list-group-item'><button type='button' class='btn btn-danger' id='deletelist$i'><i class='far fa-trash-alt' style='font-size: 10px'></i></button> <a href='?datacase=$case_id_pin[0]&module=1&action=1'>$case_name $case_typeName</a></li>
        </ul>";

          $i++;
      }

    ?>
    
  </div>
  <div class="beforfooter">
      <br>
      <h1 class="text-center">สร้างโพสต์</h1>
      <div class="container">
        <div class="row">
          <div class="col">
          <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">ข้อความ : </span>
          </div>
          <textarea class="form-control" id="clk_post" aria-label="With textarea"></textarea>
          </div>
          <hr>
          <?php 
          $showT ="<!--";
          $showN ="-->";
          ?>
          <div class="TagFriend">
          <div class="dropdown">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">แท็กเพื่อน</span>
            </div>
              <input class=" dropdown-toggle" type="text" id="txtdrop" name="sc_friend" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" id="loadDropPF">
              
            </div>
          </div>  
          </div>
          <hr>
          </div>
          <button type="button" class="btn btn-outline-secondary" id="btnTagKaD">แท็กคดี</button>
          <button type="button" class="btn btn-outline-secondary" id="btnTagFri">แท็กเพื่อน</button>
          
          <hr>
          <button type="button" class="btn btn-success btn-lg btn-block">โพสต์</button>
          <br>
          </div>
        </div>
      </div>

</div>
<div class="beforfooter2">
      <br>
      <hr>
      <div class="container">
        <h5 class="text-center">Postอื่นๆ</h5>
        <div class="row">
          <div class="col">
            PostBlock
          </div>
        </div>
        <div class="row">
          <div class="col">
            PostComment
          </div>
        </div>
      </div>

</div>
<div class="clearfloat"></div>


<!-- <div class="footer">1</div> -->

<div class="modal fade" id="SC" role="dialog">
  <div class="modal-dialog modal-xl"  role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
          <h4 style=" justify-content: center"><i class="fas fa-search"></i> ค้นหาข้อมูล</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       </div>
      <?php
      //  $select = mysqli_query($con,"SELECT case_id,case_name,case_type FROM case_name")or die("select sql error".mysqli_error($con));
        ?>
        <div class="modal-body" style="padding:10px 50px;">
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
            <div style="float: right;">
              <button type="button" class="btn btn-danger btn-default" data-dismiss="modal"> Cancel</button>
            </div>
            <div class="clearfloat"></div>
          </div>
      </div>
      </div>

      <div class="modal fade" id="tag_case" role="dialog">
      <div class="modal-dialog modal-xl"  role="document">
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
              <h4 style=" justify-content: center"><i class="fas fa-search"></i> แท็กคดี</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
          </div>
          <?php
          //  $select = mysqli_query($con,"SELECT case_id,case_name,case_type FROM case_name")or die("select sql error".mysqli_error($con));
            ?>
            <div class="modal-body" style="padding:10px 50px;">

            <div class="input-group mb-3">
                <div class="col-3">
                <select class="custom-select" id="inputGroupSelectTag" name="type">
                    <option value="1">เลขคดี</option>
                    <option value="2">ชื่อคดี</option>
                </select>
                </div>
                <div class="col-5">
                <input type="text" class="form-control" placeholder="ค้นหาข้อมูล" name="search" id="textsearchTag">
                </div>
                <div class="col-3">
                <button type="button" class="btn btn-success" id="btnsearchTag">ค้นหา</button>
                </div>
                
              </div>
              <div class="col-auto" id="loadtagCs">
              </div>

            
                </div>
              </div>
              <div class="footer">
                <div style="float: right;">
                  <button type="button" class="btn btn-danger btn-default" data-dismiss="modal"> Cancel</button>
                </div>
                <div class="clearfloat"></div>
              </div>
      </div>
      </div>


      <script>
        $(document).ready(function(){
       // $('.table').DataTable();
        $("#myBtnSc").click(function(){
            $("#SC").modal();
        });
        $("#myBtnNs").click(function(){
          window.location.href="home.php?&module=2&action=2";
        });
        $("#btnTagKaD").click(function(){
          $("#tag_case").modal();
        });
        $(".TagFriend").hide();
        $("#btnTagFri").click(function(){
          $(".TagFriend").show();
        })
        
        })
        </script>
        <script>
 function loadsunass(){
      var id1= $("#inputGroupSelect02").val();
      var id2 = $("#textsearch").val();

      $("#loadid").html("")
    //   $("#loadging").css('display','')
      $.ajax({
        url: "module/main/show_data_search.php",
        data:{type:id1,search:id2},
        type: "POST"
      }).done(function(data){
        $("#loadid").html(data)
      })
    }
 function loadtagsc(){
      var tg1= $("#inputGroupSelectTag").val();
      var tg2 = $("#textsearchTag").val();

      $("#loadtagCs").html("")
    //   $("#loadging").css('display','')
      $.ajax({
        url: "module/fuction/show_data_sc_tag.php",
        data:{type:tg1,search:tg2},
        type: "POST"
      }).done(function(data){
        $("#loadtagCs").html(data)
      })
    }
  function loadDropPF(){
    var dp1= $("#txtdrop").val();
    
    $("#loadDropPF").html("")
    $.ajax({
      url: "module/fuction/show_tag_friend.php",
      data:{sc_friend:dp1},
      type: "POST"
      
    }).done(function(data){
      $("#loadDropPF").html(data)
      alert(data)
    })
  }    
$(document).ready(function() {
    loadsunass()
    loadtagsc()
    
    $("#btnsearch").click(function(){
        var id1= $("#inputGroupSelect02").val();
        var id2 = $("#textsearch").val();
    //alert(id1+id2)
   $.post("module/main/show_data_search.php",{type:id1,search:id2},
    function (data, textStatus, jqXHR) {
    //alert(data)
     $("#loadid").html(data)
     loadsunass()
    }
   );
  })

    $("#txtdrop").change(function(){
      loadDropPF()
    })


 });

 <?php 
 for($e=0;$e<=$num_loop;$e++){
?>
  $("#deletelist<?php echo $e ?>").click(function(){
    var idcase = "<?Php echo $case_id_pin[$e] ?>";

          swal({
        title: "ลบการปักหมุด",
        text: "ต้องการลบใช่หรือไม่!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["ยกเลิก","ตกลง"]
      }).then((willDelete) => {
        if (willDelete) {
          $.post("module/fuction/delete_pin.php",{idcase:idcase}).done(function(data,txtstuta){
            alert(data)
            window.location.href="home.php";
            });
          
        } else {
          

        }       
    });
  })
<?php
 }

 ?>
</script>
