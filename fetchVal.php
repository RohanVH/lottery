<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
$result = mysqli_query($connectdb, "SELECT AA,BB,CC,a,b,c FROM randdata WHERE id = $id");
if (!$result) {
    echo '';
}
$row = mysqli_fetch_row($result);
if($row){

    $aa = $row[0];
    $bb = $row[1];
    $cc = $row[2];
    $a = $row[3];
    $b = $row[4];
    $c = $row[5];
}
else{
    echo "";
}
?>
<br>
<br>
<br>
<div class="container">
    <br>
    <div class="container d-flex justify-content-center">
        <center><h3 style="font-family:Times New Roman, Times, serif;" class="text-danger"><span class="h2">JODI</span></h3></center>
        <table class="table  table-hover text-center h4 border border-dark border-5">
            <tr style="background-color:black;color:white;" class="my-5 ">
                <th>AA</th>
                <th>BB</th>
                <th>CC</th>
            </tr>
            <tr class="my-4 bg-light">
                <th>
                    <?php
                    if ($row) {
                        
                        $aa = $row[0];  
                        echo $aa;
                    }
                    else{
                        echo '';
                    }
                    
                    ?>
                </th>
                <th>
                    <?php
                    if ($row) {
                        
                        $bb = $row[1];
                        echo $bb;
                    } else {
                        echo '';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    if ($row) {

                        $cc = $row[2];
                        echo $cc;
                    } else {
                        echo '';
                    }

                    ?>
                </th>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <center><h3 style="font-family:Times New Roman, Times, serif;" class="text-danger">SINGLE</h3></center>
    <div class="container d-flex justify-content-center">
        <table class="table table-hover text-center h4 border border-dark border-5">
            <tr style="background-color:black;color:white">
                <th>A</th>
                <th>B</th>
                <th>C</th>
            </tr>
            
            <tr class="my-3 bg-light">
                <th>
                    <?php
                    if ($row) {
                        
                        $a = $row[3];
                        echo $a;
                    } else {
                        echo '';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    if ($row) {

                        $b = $row[4];
                        echo $b;
                    } else {
                        echo '';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    if ($row) {

                        $c = $row[5];
                        echo $c;
                    } else {
                        echo '';
                    }
                    ?>
                </th>
            </tr>
           
        </table>
    </div>

    <?php include("results.php"); ?>
</div>
<br>