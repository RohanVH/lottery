<?php
include('config.php');
$sql = "TRUNCATE TABLE randdata";
    $delete = mysqli_query($connectdb, $sql);
if ($delete) {
    echo "<script>alert('Cleared Data...');document.location = 'dashboard.php';</script>";
}

?>