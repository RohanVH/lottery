<?php
if(!isset($id)){
    $id = '';
    }
//update status in randdata table 
$date=date("d/m/Y");
$update_status="UPDATE randdata SET `status`= 'completed',`date`='$date' WHERE id <= '$id'";
$status_data = mysqli_query($connectdb, $update_status);

?>