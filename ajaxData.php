<?php

include('dbConfig.php');

if(isset($_POST["divisionsId"]) && !empty($_POST["divisionsId"])){

    $query = $db->query("SELECT * FROM districts WHERE divisionId = ".$_POST['divisionsId']." ORDER BY districtName ASC");
    
 
    $rowCount = $query->num_rows;
    
  
    if($rowCount > 0){
        echo '<option value="">Select District</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['districtId'].'">'.$row['districtName'].'</option>';
        }
    }else{
        echo '<option value="">district not available</option>';
    }
}

if(isset($_POST["districtId"]) && !empty($_POST["districtId"])){
 
    $query = $db->query("SELECT * FROM upazila WHERE districtId = ".$_POST['districtId']." ORDER BY upazilaName ASC");

    $rowCount = $query->num_rows;
    
    if($rowCount > 0){
        echo '<option value="">Select Upazila</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['upazilaId'].'">'.$row['upazilaName'].'</option>';
        }
    }else{
        echo '<option value="">Upazila is not available</option>';
    }
}

if(isset($_POST["upazilaId"]) && !empty($_POST["upazilaId"])){
 
    $query = $db->query("SELECT * FROM village WHERE upazilaId = ".$_POST['upazilaId']." ORDER BY villageName ASC");

    $rowCount = $query->num_rows;
    
    if($rowCount > 0){
        echo '<option value="">Select Village</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['villageId'].'">'.$row['villageName'].'</option>';
        }
    }else{
        echo '<option value="">Upazila is not available</option>';
    }
}


?>