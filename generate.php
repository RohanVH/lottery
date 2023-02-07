<?php
include("config.php");
$result = mysqli_query($connectdb, "SELECT * FROM randdata");
if(mysqli_num_rows($result)==0){
    $num=1;
    while ($num < 50) {
        $x = 2; //pair of two digits
        $aa  = substr(str_shuffle("0123456789"), 0, $x);
        $bb = substr(str_shuffle("2345678910"), 0, $x);
        $cc = substr(str_shuffle("2341056789"), 0, $x);
        $v1 = strval($aa);
        $v2 = strval($bb);
        $v3 = strval($cc);

        $a = $v1[strlen($v1) - 2];
        $b = $v2[strlen($v2) - 2];
        $c = $v3[strlen($v3) - 2];

        $date =date('d/m/Y');
        $status = '';
        $sql1 = "INSERT INTO `randdata` VALUES ('', '$aa', '$bb', '$cc', '$a', '$b', '$c', '', '','')";
        $datainsert = mysqli_query($connectdb, $sql1);
        if($datainsert){

            $num = $num + 1;
        }
    }
    echo "<script>alert('New Data Uploaded...');document.location = 'dashboard.php';</script>";
}
// time update

$query = "UPDATE `randdata` SET `time`='09:00am' , `date`='$date' where id='1'";
mysqli_query($connectdb, $query);

$query = "UPDATE `randdata` SET `time`='09:15am' , `date`='$date' where id='2'";
mysqli_query($connectdb, $query);

$query = "UPDATE `randdata` SET `time`='09:30am' , `date`='$date' where id='3'";
mysqli_query($connectdb, $query);

$query = "UPDATE `randdata` SET `time`='09:45am' , `date`='$date' where id='4'";
mysqli_query($connectdb, $query);

$query = "UPDATE `randdata` SET `time`='10:00am' , `date`='$date' where id='5'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='10:15am' , `date`='$date' where id='6'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='10:30am' , `date`='$date' where id='7'";
mysqli_query($connectdb, $query);

$query = "UPDATE `randdata` SET `time`='10:45am' , `date`='$date' where id='8'";
mysqli_query($connectdb, $query);

$query = "UPDATE `randdata` SET `time`='11:00am' , `date`='$date' where id='9'";
mysqli_query($connectdb, $query);

$query = "UPDATE `randdata` SET `time`='11:15am' , `date`='$date' where id='10'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='11:30am' , `date`='$date' where id='11'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='11:45am' , `date`='$date' where id='12'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='12:00pm' , `date`='$date' where id='13'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='12:15pm' , `date`='$date' where id='14'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='12:30pm' , `date`='$date' where id='15'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='12:45pm' , `date`='$date' where id='16'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='01:00pm' , `date`='$date' where id='17'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='01:15pm' , `date`='$date' where id='18'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='01:30pm' , `date`='$date' where id='19'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='01:45pm' , `date`='$date' where id='20'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='02:00pm' , `date`='$date' where id='21'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='02:15pm' , `date`='$date' where id='22'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='02:30pm' , `date`='$date' where id='23'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='02:45pm' , `date`='$date' where id='24'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='03:00pm' , `date`='$date' where id='25'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='03:15pm' , `date`='$date' where id='26'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='03:30pm' , `date`='$date' where id='27'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='03:45pm' , `date`='$date' where id='28'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='04:00pm' , `date`='$date' where id='29'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='04:15pm' , `date`='$date' where id='30'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='04:30pm' , `date`='$date' where id='31'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='04:45pm' , `date`='$date' where id='32'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='05:00pm' , `date`='$date' where id='33'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='05:15pm' , `date`='$date' where id='34'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='05:30pm' , `date`='$date' where id='35'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='05:45pm' , `date`='$date' where id='36'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='06:00pm' , `date`='$date' where id='37'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='06:15pm' , `date`='$date' where id='38'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='06:30pm' , `date`='$date' where id='39'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='06:45pm' , `date`='$date' where id='40'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='07:00pm' , `date`='$date' where id='41'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='07:15pm' , `date`='$date' where id='42'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='07:30pm' , `date`='$date' where id='43'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='07:45pm' , `date`='$date' where id='44'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='08:00pm' , `date`='$date' where id='45'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='08:15pm' , `date`='$date' where id='46'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='08:30pm' , `date`='$date' where id='47'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='08:45pm' , `date`='$date' where id='48'";
mysqli_query($connectdb, $query);


$query = "UPDATE `randdata` SET `time`='09:00pm' , `date`='$date' where id='49'";
mysqli_query($connectdb, $query);


?>
