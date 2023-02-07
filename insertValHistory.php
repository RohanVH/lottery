<?php

$displayed_values = mysqli_query($connectdb, "SELECT AA,BB,CC,a,b,c FROM randdata WHERE id =$id");
$row = mysqli_fetch_row($displayed_values);
if($row){
    $aa = $row[0];
    $bb = $row[1];
    $cc = $row[2];
    $a = $row[3];
    $b = $row[4];
    $c = $row[5];
    $update_blankTable="UPDATE history SET `date`='$date',`start_time` = '$start_time',`end_time`='$end_time',`AA`='$aa',`BB`='$bb',`CC`='$cc',`a`='$a',`b`='$b',`c`='$c' WHERE id = $id"; //update blank values
    $process_update=mysqli_query($connectdb,$update_blankTable);
    if($process_update){
        echo '';
    }
}
?>