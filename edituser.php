<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM auth WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($row as $row){
        $name = $row->username;
        $id = $row->id;
        $passkey = $row->password;
    }
}else{
	header('location: user.php');
}
?>

<body>
<?php include("user.php");?>