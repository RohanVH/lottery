<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM randdata WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($r as $r){
      $id = $r->id;
      $AA = $r->AA;
      $BB = $r->BB;
      $CC = $r->CC;
      $A = $r->a;
      $B = $r->b;
      $C = $r->c;
    }
}else{
	header('location: create-project.php');
}
?>

<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>CHANGE/ADD DATA</h3>
<?php include 'edit_std_form.php'; ?>
<?php include 'footer.php'; ?>