<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
include('config.php');

date_default_timezone_set('Asia/Kolkata');
if (date('ha') == '09am') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $id = 1;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {

                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 2;
                include_once("update_complete.php");
                // update status
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 3;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';

                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 4;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '10am') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 5;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 6;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 7;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 8;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '11am') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 9;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 10;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 11;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 12;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '12pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 13;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 14;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 15;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 16;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '01pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 17;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 18;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 19;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 20;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '02pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 21;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 22;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 23;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 24;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '03pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 25;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 26;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 27;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 28;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '04pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 29;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 30;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 31;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 32;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '05pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 33;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 34;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 35;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 36;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '06pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 37;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 38;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 39;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 40;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '07pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 41;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 42;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 43;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 44;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }
    }
}
if (date('ha') == '08pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 45;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 15 && date('i') < 30) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 46;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 30 && date('i') < 45) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 47;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                
            }
        }


        if (date('i') >= 45 && date('i') < 60) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 48;
                include_once("update_complete.php");
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
               
            }
        }
    }
}
if (date('ha') == '09pm') {
    for ($number = 0; $number <= 59; $number++) {

        if (date('i') >= 00 && date('i') < 15) {
            $number = strval($number);
            if (date('i') == date($number)) {
                $date = date('d-m-Y');   //format dd-mm--yy
                $id = 49;
                include_once("update_complete.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(300000);

                        //   -->
                        </script>';
                include_once("results.php");
                include_once('uploadhistory.php');
                
            }
            
        }
        if (date('i')>=15 && date('i')<30){
            include_once("update_complete.php");
            include_once("results.php");
        }
        if (date('i')>=30 && date('i')<45){
            include_once("update_complete.php");
            include_once("results.php");
        }
        if (date('i')>=45 && date('i')<60){
            include_once("update_complete.php");
            include_once("results.php");
        }
    }
}




if (date('ha') == '10pm' || date('ha') == '11pm' || date('ha') == '12am'|| date('ha') == '01am'|| date('ha') == '02am'|| date('ha') == '03am'|| date('ha') == '04am'|| date('ha') == '05am') {
    include_once("update_complete.php");
    include_once("results.php");
    
}
if(date('ha') =='06am' || date('ha') =='07am' || date('ha') == '08am'){
    // include_once("update_complete.php");
    include_once("results.php");
    include_once("config.php");
    $result = mysqli_query($connectdb, "SELECT * FROM randdata");
    if (mysqli_num_rows($result) != 0) {
        $number = 1;
        while ($number < 49) {
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
            $date = date("d/m/Y");
            $time = '';
            $status = '';
            $sql = "UPDATE `randdata` SET `AA` = '$aa', `BB` = '$bb', `CC` = '$cc', `a` = '$a', `b` = '$b', `c` = '$c',`date`='$date',`status`='' WHERE `id` = $number";
            $dataupdate = mysqli_query($connectdb, $sql);
            if ($dataupdate) {

                $number = $number + 1;
            }
        }
    }
}
?>