<!-- database file names:
 1. config.php 
2. db. php-->

<?php
$server='localhost';
$username='root';
$password='';
$dbname= 'laxmi-lottery';
$connectdb=mysqli_connect($server,$username,$password,$dbname);
?>