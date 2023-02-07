<?php
  require 'init.php';
  $AA = $_POST['AA'];
  $BB = $_POST['BB'];
  $CC = $_POST['CC'];
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  if(isset($_GET['id']) AND !empty($_GET['id'])){
	 $id = $_GET['id'];
  $query = $db->query("UPDATE randdata SET AA = '$AA', BB = '$BB',CC = '$CC',a='$a',b='$b',c='$c' WHERE id = '$id'");}
 
 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }