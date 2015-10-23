<?php
// including the db_connect file for database helper functions
include 'db_connect.php';


// TODO: generate a new UUID and set it to a variable



// opening the connection to the mysql database
$mysql_link = connect('root', '', 'lab_db');

$name = $mysql_link->real_escape_string($_POST['name']);
$phone = $mysql_link->real_escape_string($_POST['phone']);
$email = $mysql_link->real_escape_string($_POST['email']);


// TODO: change this query so that it uses the UUID generated above
$users = $mysql_link->query("
  INSERT INTO user (
    id,
    name,
    phone,
    email,
    active
  ) VALUES (
    UUID(), 
    '$name',
    '$phone',
    '$email',
    1
  )
");

if($mysql_link->error) throw new \Exception($mysql_link->error);

// TODO: loop over the $_POST['thing'] array
// TODO: insert the things that were checked for the user 

header('location:/');
?>
