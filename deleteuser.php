<?php
 require 'init.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'];

	$query = $db->query("DELETE FROM auth WHERE id = $id ");
	header('location: user.php');
}