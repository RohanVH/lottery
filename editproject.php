<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM randdata WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($row as $row){
				// $id = $row->id;
				$AA = $row->AA;
				$BB = $row->BB;
				$CC = $row->CC;
				$A = $row->a;
				$B = $row->b;
				$C = $row->c;
    }
}else{
	header('location: create-project.php');
}
?>

<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>CHANGE/ADD DATA</h3>
<?php include 'edit-form.php'; ?>
<?php include 'footer.php'; ?>
