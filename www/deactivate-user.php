<?php
// including the db_connect file for database helper functions
include 'db_connect.php';

// opening the connection to the mysql database
$mysql_link = connect('root', '', 'lab_db');

$id = $_GET['id'];

$users = $mysql_link->query("
  UPDATE user 
  SET active=0
  WHERE id='$id'
");

if($mysql_link->error) throw new \Exception($mysql_link->error);

header('location:/');
?>

