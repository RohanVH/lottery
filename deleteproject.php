<?php
 require 'init.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'];

	$query = $db->query("DELETE FROM randdata WHERE id = $id ");
	header('location: create-project.php');
}