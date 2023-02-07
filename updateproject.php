<?php
 require 'init.php';
 if(isset($_POST['id']) AND !empty($_GET['id'])){
	$AA = $_POST['AA'];
	$BB = $_POST['BB'];
	$CC = $_POST['CC'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$id = $_POST['id'];

	$query = $db->query("UPDATE randdata SET AA = '$AA', BB = '$BB',CC = '$CC',a='$a',b='$b',c='$c' WHERE id = $id");
	header('location: create-project.php');
	
}
if($query){
	echo 'true';
}else{
	echo 'false';
}
?>