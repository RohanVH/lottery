
<?php
date_default_timezone_set('Asia/Kolkata');
include("config.php");
echo date('ha');
if (date('ha')== '09pm' || date('ha') == '10pm'|| date('ha') =='11pm' || date('ha') == '12am'|| date('ha') =='01am' || date('ha') =='02am' || date('ha') =='03am' || date('ha') =='04am' || date('ha') =='05am' || date('ha') =='06am' || date('ha') =='07am' || date('ha') == '08am') {
    $sql = "TRUNCATE TABLE randdata";
    $delete = mysqli_query($connectdb, $sql);
    if ($delete) {
        echo "<h4>all rows deleted.</h4>";
    }
}
elseif (date('ha')<'09am'){

    
    $result = mysqli_query($connectdb, "SELECT * FROM randdata");
    if (mysqli_num_rows($result)!=0){
        $number=1;
        while($number<49){
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

            $time = '';
            $status = '';
            $sql = "UPDATE `randdata` SET `AA` = '$aa', `BB` = '$bb', `CC` = '$cc', `a` = '$a', `b` = '$b', `c` = '$c' WHERE `id` = $number";
            $dataupdate = mysqli_query($connectdb, $sql);
            if($dataupdate){

                echo "<h4>Numbers Updated.</h4>";
                $number=$number+1;
            }
        }
    }
    if(mysqli_num_rows($result)==0){
        $num=1;
        while ($num < 49) {
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

            $time = '';
            $status = '';
            $sql1 = "INSERT INTO `randdata` VALUES ('', '$aa', '$bb', '$cc', '$a', '$b', '$c', '', '')";
            $datainsert = mysqli_query($connectdb, $sql1);
            if($datainsert){
    
                $num = $num + 1;
            }
            echo "<h4>Numbers Uploaded.</h4>";
        }
        
    }

}




?>