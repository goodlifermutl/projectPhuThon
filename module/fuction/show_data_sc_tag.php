<?php
include ("../fuction/connect_db.php");
$con = connect_db();
?>
<style>
.dataTables_filter {
display: none; 
}
</style>
<?php
if(empty($_POST['search'])){ 
    
    $sql_res = "SELECT cn.case_id,cn.case_name,cn.case_type FROM case_name as cn";
}else if($_POST['type']=='1'){
    $sql_res = "SELECT cn.case_id,cn.case_name,cn.case_type FROM case_name as cn WHERE case_id='%$_POST[search]%'";
}

$result=mysqli_query($con,$sql_res)or die("select sql responsible_person error".mysqli_error($con));
?>
                <table id="myTable11" class="display table">
                <thead>
                    <tr>
                      <th scope="col">โปรดเลือก</th>
                      <th scope="col">เลขคดี</th>
                      <th scope="col">ชื่อคดี</th>
                      <th scope="col">ประเภทคดี</th>
                    </tr>
                  </thead>
                <?php
                      while(list($case_id,$case_name,$case_type)=mysqli_fetch_row($result)){
                        if($case_type==1){
                          $case_typeName="คดีเพ่ง";
                        }else{
                          $case_typeName="คดีอาญา";
                        }
                            echo"
                            <tr>
                              <td ><button type='button' class='btn btn-outline-secondary'>เลือก</button></td>
                              <td>$case_id</td>
                              <td>$case_name</td>
                              <td>$case_typeName</td>
                          </tr>";
                        }
                ?>

                </table>
<script>
 $(document).ready( function () {
    $('#myTable11').DataTable({
      "aLengthMenu": [[5, 10, -1], [5, 10,"All"]]

    });

} );
</script>