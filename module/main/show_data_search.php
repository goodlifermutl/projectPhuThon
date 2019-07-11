<?php
include ("../fuction/connect_db.php");
$con = connect_db();
?>
<form method="get">
        <?php
                if(empty($_POST['search'])){
                  $sql="SELECT case_id,case_name,case_type FROM case_name";
                  echo "gggg";
                }else{
                    if($_POST['type']==1){
                        $sql="SELECT * FROM case_name WHERE case_id LIKE '$_POST[search]%'";
                    }else if($_POST['type']==2){
                        $sql="SELECT cn.case_id,cn.case_name,cn.case_type,cn.case_savetime FROM case_name as cn INNER JOIN victim as vt ON cn.case_id = vt.case_id INNER JOIN villain as vl ON cn.case_id = vl.case_id WHERE vt.victim_idcard='$_POST[search]' OR vt.victim_idcard ='$_POST[search]'";
                        $chk_id_card = $_POST['search'];
                      }
                  echo "bbbbbbbbb";
                }
                $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                ?>
              </div>
          <div class="row">
              <div class="col-md">
              <table id="table_id" class="display table">
                    <thead>
                      <tr>
                        <th>เลขคดี</th>
                        <th>ชื่อคดี</th>
                        <th>ประเภทคดี</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while(list($case_id,$case_name,$case_type)=mysqli_fetch_row($select)){
                      if($case_type==1){
                        $case_typeName="คดีเพ่ง";
                      }else{
                        $case_typeName="คดีอาญา";
                      }
                      if($_POST['type']==2){
                        echo"
                          <tr>
                            <td><a href='?datacase=$case_id&search=$chk_id_card&module=1&action=1'>$case_id</a></td>
                            <td>$case_name</td>
                            <td>$case_typeName</td>
                        </tr>";
                      }else{
                          echo"
                          <tr>
                            <td><a href='?datacase=$case_id&module=1&action=1'>$case_id</a></td>
                            <td>$case_name</td>
                            <td>$case_typeName</td>
                        </tr>";
                      }
                      }
                      ?>
                  </tbody>
                </table>
                </form>