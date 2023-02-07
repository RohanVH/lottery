<?php

include_once("config.php");

?>

<!doctype html>
<html>

<head>

    <title>Admin:: editTable</title>
    <link href='style_table.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='tableeditor.js' type='text/javascript'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">

    <div class='container text-light'>
        <br>
        <table width='100%' border='0' class="table table-striped table-hover">
            <tr class="text-center">
                <th width='10%' class="text-danger">ID</th>
                <th width='10%' class="text-danger">AA</th>
                <th width='10%' class="text-danger">BB</th>
                <th width='10%' class="text-danger">CC</th>
                <th width='10%' class="text-danger">A</th>
                <th width='10%' class="text-danger">B</th>
                <th width='10%' class="text-danger">C</th>
                <th width='10%' class="text-danger">TIME</th>
                <th width='10%' class="text-danger">DATE</th>
                <th width='10%' class="text-danger">STATUS</th>
            </tr>
            <?php
            $query = "select * from randdata where status='completed'";
            $result = mysqli_query($connectdb, $query);
            $count = 1;
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $AA = $row['AA'];
                $BB = $row['BB'];
                $CC = $row['CC'];
                $a = $row['a'];
                $b = $row['b'];
                $c = $row['c'];
                $time = $row['time'];
                $date = $row['date'];
                $status = $row['status'];
            ?>
                <tr>
                    <td style="display:flex;justify-content:center;background-color:black;color:white;"><b><?php echo $count; ?></b></td>
                    <td>
                        <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='AA_<?php echo $id; ?>'><b><?php echo $AA; ?></b></div>
                    </td>
                    <td>
                        <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='BB_<?php echo $id; ?>'><b><?php echo $BB; ?></b> </div>
                    </td>
                    <td>
                        <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='CC_<?php echo $id; ?>'><b><?php echo $CC; ?></b> </div>
                    </td>
                    <td>
                        <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='a_<?php echo $id; ?>'><b><?php echo $a; ?></b> </div>
                    </td>
                    <td>
                        <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='b_<?php echo $id; ?>'><b><?php echo $b; ?></b> </div>
                    </td>
                    <td>
                        <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='c_<?php echo $id; ?>'><b><?php echo $c; ?></b> </div>
                    </td>
                    <td style="background-color:black;">
                        <div style="display:flex;justify-content:center;" class="text-danger"><b> <?php echo $time; ?></b></div>
                    </td>
                    <td style="background-color:black;">
                        <div style="display:flex;justify-content:center;" class="text-danger"><b> <?php echo $date; ?></b></div>
                    </td>
                    <td style="background-color:black;" class="text-success">
                        <div style="display:flex;justify-content:center;" contentEditable='true' class='edit' id='status_<?php echo $id; ?>'><b><?php echo $status; ?> </b></div>
                    </td>
                </tr>
            <?php
                $count++;
            }
            ?>
        </table>
        <br>
    </div>

</body>

</html>



<!-- echo '<tr class="my-4 bg-light"><td width="20%" style="color:green;background-color:black">' . '⏱️' . $date = $row['date'] . '</td>';
echo '<td width="10%" style="color:white;background-color:black">' . $time = $row['time'] . '</td>';
echo '<td width="10%">' . $aa = $row['AA'] . '</td>';
echo '<td width="10%">' . $bb = $row['BB'] . '</td>';
echo '<td width="10%">' . $cc = $row['CC'] . '</td>';
$n = $n + 1; -->