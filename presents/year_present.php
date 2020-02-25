<?php
$select = mysqli_query($con,"SELECT permiss_id FROM user WHERE user_id='$_SESSION[user_name]'")or die("select sql error".mysqli_error($con));
list($permiss)=mysqli_fetch_row($select);
// echo $permiss;
if($permiss=='1'){
  $aaa="<!--";
  $aaa2="-->";
  $bbb="";
  $bbb2="";
}else if($permiss=='2'){
  $bbb="<!--";
  $bbb2="-->";
  $aaa="";
  $aaa2="";
}

?>
<form method="post">
<?php echo $bbb; ?>
<div class="form-group row" style="text-align:right;">
    <label for="yearinsert" class=" col-sm col-form-label"><b>สถิติในปี</b></label>
    <div class="col-md">
    <select class="form-control" id="yearinsert" required name="year">
		<?php  
			$date_now=date("Y");
			echo"<option value='$date_now'>$date_now</option>";
			for($i=1;$i<=4;$i++){
				$year=$date_now-$i;
				echo"<option value='$year'>$year</option>";
			}
		?>
      </select>
    </div>
  </div>
  <div  class="row">
    <div class="col-md"> 
        
            <div class="col-auto" id='loaddataInasm'></div>
        </div>
    </div>
    <?php echo $bbb2; ?>
</form>

  <script>

   function loadyearsent(){
    var year_th = $("#yearinsert").val();
    // alert(id)
    $("#loaddataInasm").html("")
    //   $("#loadging").css('display','')
    $.ajax({
    url: "presents/present.php",
    data:{year:year_th},
    type: "POST"
    }).done(function(data){
    $("#loaddataInasm").html(data)
    })

    }

$(document).ready(function() {
    loadyearsent()

    $("#yearinsert").change(function(){
      var id = $("#yearinsert").val();
      //alert(id)
   $.post("presents/present.php",{no:id},
    function (data, textStatus, jqXHR) {
    //alert(data)
     $("#inputNo").html(data)
     loadyearsent()
    }
   );
   
  })
})

  </script>