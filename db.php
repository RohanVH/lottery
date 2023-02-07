<?php
try{
  $db = new PDO('mysql:host=localhost;dbname=laxmi-lottery','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('<h4 style="color: #e4e4e4">Error connecting to the database. Please check app init file</h4>');
}
//database file names:
//  1. config.php 
//  2. db. php