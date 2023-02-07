<?php 
include_once("config.php");
if(isset($_POST['field']) && isset($_POST['value']) && isset($_POST['id'])){
    $field = mysqli_real_escape_string($connectdb,$_POST['field']); 
    $value = mysqli_real_escape_string($connectdb,$_POST['value']); 
    $editid = mysqli_real_escape_string($connectdb,$_POST['id']);
    
    $query = "UPDATE randdata SET ".$field."='".$value."' WHERE id=".$editid;
    mysqli_query($connectdb,$query);
    
    echo 1;
}else{
    echo 0;
}

exit;