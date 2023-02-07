<?php
 require 'init.php';
 $AA = $_POST['AA'];
 $BB = $_POST['BB'];
 $CC = $_POST['CC'];
 $a = $_POST['a'];
 $b = $_POST['b'];
 $c = $_POST['c'];

 $query = $db->query("INSERT INTO randdata('AA','BB','CC','a'.'b','c')VALUES('$AA','$BB','$BB','$a','$b','$c')");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }