<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body class="bg-dark">
    <div class="container bg-light">

        <br>
        <?php include('searchhistory.php'); ?>
        <br>
        <table class="table table-hover">
            <tr class="table-dark">
                <th>Date</th>
                <th>Time</th>
                <th>AA</th>
                <th>BB</th>
                <th>CC</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
            </tr>

            <?php
            include_once("config.php");
            if (isset($_POST['search'])) {
                $date = $_POST['date'];
                $date = str_replace("-", "/", "$date");
                $date = explode("/", $date);
                $date = "$date[2]/$date[1]/$date[0]";
                $date = strval("$date");


                $query = "SELECT DISTINCT `time`,`date`,`AA`,`BB`,`CC`,`a`,`b`,`c` from history where date='$date'";
                $result = mysqli_query($connectdb, $query);

                while ($row = mysqli_fetch_array($result)) {

                    $time = $row['time'];
                    $date = $row['date'];
                    $AA = $row['AA'];
                    $BB = $row['BB'];
                    $CC = $row['CC'];
                    $A = $row['a'];
                    $B = $row['b'];
                    $C = $row['c'];
            ?>
                    <tr class="table-secondary">
                        <td class="font-weight-bold"><?php echo "$date"; ?></td>
                        <td class="font-weight-bold"><?php echo "$time"; ?></td>
                        <td class="font-weight-bold"><?php echo "$AA"; ?></td>
                        <td class="font-weight-bold"><?php echo "$BB"; ?></td>
                        <td class="font-weight-bold"><?php echo "$CC"; ?></td>
                        <td class="font-weight-bold"><?php echo "$A"; ?></td>
                        <td class="font-weight-bold"><?php echo "$B"; ?></td>
                        <td class="font-weight-bold"><?php echo "$C"; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "";
            }
            ?>
        </table>
        <br>
        <br>
        <br>
    </div>
</body>

</html>