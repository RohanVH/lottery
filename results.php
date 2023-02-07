<div class="container bg-dark" style="border-radius: 0 0 50px 50px;">

    <label for="" class=" h2 text-center">Results:</label><br>

    <p class="my-4 d-flex justify-content-center">
        <a href="getHistory.php"><button class="btn btn-danger btn-lg"><span class="fa fa-history text-dark">&nbsp;&nbsp;</span>History</button></a>&nbsp;&nbsp;
        <a class="btn btn-danger btn-lg" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Jodi</a>&nbsp;&nbsp;
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Single</button>&nbsp;&nbsp;
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Both</button>
    </p>
    <div class="row">
        <!-- jodi -->
        <div class="col my-5">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body border border-dark" style="border-radius: 20px;" id="table">
                    <?php
                    include_once('config.php');
                
                    ?>
                    <div class="bg-light text-danger text-center" style="position: sticky; top: 0; ">
                        <span class="h3 my-3">JODI</span>
                    </div>
                    <table class="table  table-hover text-center h4 border border-dark border-5">
                        <tr style="background-color:black;color:white;" class="my-5 ">
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>AA</th>
                            <th>BB</th>
                            <th>CC</th>
                        </tr>
                        <?php
                         $query = "select * from randdata where status='completed'";
                         $result = mysqli_query($connectdb, $query);
                         $count = 1;
                         while ($row = mysqli_fetch_array($result)) {
                             $id = $row['id'];
                             $aa = $row['AA'];
                             $bb = $row['BB'];
                             $cc = $row['CC'];
                             $a = $row['a'];
                             $b = $row['b'];
                             $c = $row['c'];
                             $time = $row['time'];
                             $date = $row['date'];
                             $status = $row['status'];
                             echo '<tr class="my-4 bg-light"><td width="20%" style="color:green;background-color:black">' . '⏱️' . $date = $row['date'] . '</td>';
                            echo '<td width="10%" style="color:white;background-color:black">' . $time = $row['time'] . '</td>';
                            echo '<td width="10%">' . $aa . '</td>';
                            echo '<td width="10%">' . $bb . '</td>';
                            echo '<td width="10%">' . $cc . '</td>';
                            $count++;
                         }
                        
                        ?>
                        <style>
                            #table {
                                height: 700px;
                                border: 25px;
                                padding: 20px;
                                overflow: auto;
                            }
                        </style>

                    </table>
                    <?php


                    ?>
                </div>
            </div>
        </div>
        <!-- single -->
        <div class="col my-5">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body border border-dark" style="border-radius: 20px;" id="table">
                    <?php
                    $get_status = "SELECT * from randdata where `status`='completed'";
                    $query = mysqli_query($connectdb, $get_status);
                    $rows = mysqli_fetch_array($query);
                    ?>
                    <div class="bg-light text-danger text-center" style="position: sticky; top: 0; ">
                        <span class="h3 my-3">SINGLE</span>
                    </div>
                    <table class=" table table-hover text-center h4 border border-dark border-5">
                        <tr style="background-color:black;color:white;" class="my-5 ">
                            <th>DATE</th>
                            <th>time</th>
                            <th>AA</th>
                            <th>BB</th>
                            <th>CC</th>
                        </tr>
                        <?php
                        $query = "select * from randdata where status='completed'";
                        $result = mysqli_query($connectdb, $query);
                        $count = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $aa = $row['AA'];
                            $bb = $row['BB'];
                            $cc = $row['CC'];
                            $a = $row['a'];
                            $b = $row['b'];
                            $c = $row['c'];
                            $time = $row['time'];
                            $date = $row['date'];
                            echo '<tr class="my-4 bg-light"><td width="20%" style="color:green;background-color:black">' . '⏱️' . $date = $row['date'] . '</td>';
                            echo '<td width="10%" style="color:white;background-color:black">' . $time = $row['time'] . '</td>';
                            echo '<td width="10%">' . $a . '</td>';
                            echo '<td width="10%">' . $b . '</td>';
                            echo '<td width="10%">' . $c . '</td>';
                            $count++;

                        }
                        ?>
                        <style>
                            #table {
                                height: 700px;
                                border: 25px;
                                padding: 20px;
                                overflow: auto;
                            }
                        </style>
                    </table>
                    <?php


                    ?>
                </div>
            </div>
        </div>
    </div>


</div>
<br>
<br>
<br>