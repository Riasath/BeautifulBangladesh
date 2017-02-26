<!DOCTYPE html>
<html>
<head>
  <title>Beautiful Bangladesh</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>







<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#divisionsId').on('change',function(){
        var divisionsId = $(this).val();
        if(divisionsId){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'divisionsId='+divisionsId,
                success:function(html){
                    $('#district').html(html);
                    $('#Upazila').html('<option value="">Select district first</option>'); 
                }
            }); 
        }else{
            $('#district').html('<option value="">Select country first</option>');
            $('#Upazila').html('<option value="">Select district first</option>'); 
        }
    });
    
    $('#district').on('change',function(){
        var districtId = $(this).val();
        if(districtId){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'districtId='+districtId,
                success:function(html){
                    $('#Upazila').html(html);
                }
            }); 
        }else{
            $('#Upazila').html('<option value="">Select district first</option>'); 
        }
    });
	
	
	$('#Upazila').on('change',function(){
        var upazilaId = $(this).val();
        if(upazilaId){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'upazilaId='+upazilaId,
                success:function(html){
                    $('#village').html(html);
                }
            }); 
        }else{
            $('#village').html('<option value="">Select Upazila first</option>'); 
        }
    });
});
</script>

























</head>
<body>

  <div class ="container">
  <div class="jumbotron">
  <h1>Beautiful Bangladesh</h1>
 
  
</div>
   <div class="row">
   <div class="col-md-3">
            
        </div>

        <div class="col-md-6">
            <?php

       include('dbConfig.php');
    

      $query = $db->query("SELECT * FROM divisions ORDER BY divisionName ASC");
    

        $rowCount = $query->num_rows;
    ?>
        
        <select id="divisionsId" name="divisionsId" class="form-control w_con">
		<option value="">Chose Division</option>
              
              
                                                              
                                  <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['divisionsId'].'">'.$row['divisionName'].'</option>';
            }
        }else{
            echo '<option value="">Division not available</option>';
        }
        ?>     
              
                               
              
   
                            </select>

                            <br>


                            <select id="district" name="districtId" class="form-control w_con">
              
              
                                                              
                                  <option value="">just started</option>      
              
                               
              
   
                            </select>
                          <br>

          <select id="Upazila" name="UpazilaId" class="form-control w_con">
              
              
                                                              
                                  <option value="">just started</option>      
              
                               
              
   
                            </select>
							
							<br>
							
							<select id="village" name="villageId" class="form-control w_con">
              
              
                                                              
                                  <option value="">just started</option>      
              
                               
              
   
                            </select>
         
          </div>

          

   </div>  
   <div class="col-md-3">
            
        </div>                       
  </div>
  </div>


</body>
</html>