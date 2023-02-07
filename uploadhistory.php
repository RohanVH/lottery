<?php
include_once("config.php");
// creating 48 empty rows in history table

$query = "SELECT * from randdata where `status`='completed'";
$result = mysqli_query($connectdb, $query);
$number=1;
while($number<=49){
        while ($row = mysqli_fetch_array($result)) {
            $date = $row['date'];
            $time = $row['time'];
            $AA = $row['AA'];
            $BB = $row['BB'];
            $CC = $row['CC'];
            $A = $row['a'];
            $B = $row['b'];
            $C = $row['c'];

            
        $insert_blank = "INSERT INTO history Values('','$date','$time','$AA','$BB','$CC','$A','$B','$C')"; //insert blank values
        $inserting = mysqli_query($connectdb, $insert_blank);
        }
        
    
    $number=$number+1;
}
?>