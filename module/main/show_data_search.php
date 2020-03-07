<?php
include ("../fuction/connect_db.php");
$con = connect_db();
?>
<style>
.dataTables_filter {
display: none; 
}
</style>
<form method="get">
        <?php
                if(empty($_POST['search'])){
                  $sql="SELECT case_id,case_name,case_type,case_savetime,case_status FROM case_name";
                  $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                  list($chk_case_id)=mysqli_fetch_row($select);
                  //echo "gggg";
                  $chk_id_card = "";
                  $chk_name_lastname = "";
                }else{
                    if($_POST['type']==1){
                        $sql="SELECT * FROM case_name WHERE case_id LIKE '$_POST[search]%'";
                        $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                        list($chk_case_id)=mysqli_fetch_row($select);
                    }else if($_POST['type']==2){
                        // $sql="SELECT cn.case_id,cn.case_name,cn.case_type,cn.case_savetime FROM case_name as cn INNER JOIN victim as vt ON cn.case_id = vt.case_id INNER JOIN villain as vl ON cn.case_id = vl.case_id WHERE vt.victim_idcard='$_POST[search]' OR vl.villain_idcard ='$_POST[search]'";
                        $sql="SELECT * FROM case_name WHERE case_id IN (SELECT case_id FROM villain WHERE villain_idcard = '$_POST[search]')";
                        $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                        list($chk_case_id)=mysqli_fetch_row($select);
                        echo $chk_case_id;
                        //echo "pass";
                        if(empty($chk_case_id)){
                          $sql = "SELECT * FROM case_name WHERE case_id IN (SELECT case_id FROM victim WHERE victim_idcard = '$_POST[search]')";
                          $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                          list($chk_case_id)=mysqli_fetch_row($select);
                          // echo"ggg";
                        }
                        $chk_id_card = $_POST['search'];
                      
                      }else if($_POST['type']==3){
                        $sql="SELECT * FROM case_name WHERE case_id IN (SELECT case_id FROM villain WHERE villain_name LIKE '$_POST[search]%'OR villain_lastname LIKE '$_POST[search]%')";
                        $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                        list($chk_case_id)=mysqli_fetch_row($select);
                        //echo"villainPass";
                        if(empty($chk_case_id)){
                        $sql="SELECT * FROM case_name WHERE case_id IN (SELECT case_id FROM victim WHERE victim_name LIKE '$_POST[search]%'OR victim_lastname LIKE '$_POST[search]%')";
                        $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                        list($chk_case_id)=mysqli_fetch_row($select);
                        //echo"victimPass";
                        }
                        $chk_name_lastname = $_POST['search'];
                      }
                  //echo "bbbbbbbbb";
                }
                $select = mysqli_query($con,"$sql")or die("select sql error".mysqli_error($con));
                ?>
              </div>
          <div class="row">
              <div class="col-md">
              <table id="myTable" class="display table">
                    <thead>
                      <tr>
                        <th>ดูข้อมูล</th>
                        <th>เลขคดี</th>
                        <th>ชื่อคดี</th>
                        <th>ประเภทคดี</th>
                        <th>วันเดือนปี</th>
                        <th>สถานะคดี</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(empty($chk_case_id)){
                        
                        echo"<tr>
                        <td colspan='3'>ไม่พบข้อมูล</td>
                        </tr>";
                      }
                      while(list($case_id,$case_name,$case_type,$case_date,$status_case)=mysqli_fetch_row($select)){
                      if($case_type==1){
                        $case_typeName="คดีเพ่ง";
                      }else{
                        $case_typeName="คดีอาญา";
                      }
                      if($_POST['type']==2){
                        echo"
                          <tr>
                          <td><a href='?datacase=$case_id&search=$chk_id_card&module=1&action=1'><button type='button' class='btn btn-outline-secondary'>ดูข้อมูล</button></a></td>
                            <td>$case_id</td>
                            <td>$case_name</td>
                            <td>$case_typeName</td>
                            <td>$case_date</td>
                            <td>$status_case</td>
                        </tr>";
                      }else if($_POST['type']==3){
                        echo"
                          <tr>
                          <td><a href='?datacase=$case_id&search=$chk_name_lastname&module=1&action=1'><button type='button' class='btn btn-outline-secondary'>ดูข้อมูล</button></a></td>
                            <td>$case_id</td>
                            <td>$case_name</td>
                            <td>$case_typeName</td>
                            <td>$case_date</td>
                            <td>$status_case</td>
                        </tr>";
                      }
                      else{
                          echo"
                          <tr>
                            <td><a href='?datacase=$case_id&module=1&action=1'><button type='button' class='btn btn-outline-secondary'>ดูข้อมูล</button></a></td>
                            <td>$case_id</td>
                            <td>$case_name</td>
                            <td>$case_typeName</td>
                            <td>$case_date</td>
                            <td>$status_case</td>
                        </tr>";
                      }
                      }
                      ?>
                  </tbody>
                </table>
                </form>
        
<script>
 $(document).ready( function () {
  $.getScript('module/fuction/mydatatable.js')
    // $('#myTable').DataTable({
    //   "aLengthMenu": [[5, 10, -1], [5, 10,"All"]]

    // });

} );
</script>


             