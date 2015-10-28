<?php
// including the db_connect file for database helper functions
include 'db_connect.php';

// opening the connection to the mysql database
$mysql_link = connect('root', '', 'lab_db');

// TODO: generate a new UUID and set it to a variable
$UUID = get_uuid($mysql_link);

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
    '$UUID',
    '$name',
    '$phone',
    '$email',
    1
  )
");

if($mysql_link->error) throw new \Exception($mysql_link->error);

// TODO: loop over the $_POST['thing'] array
foreach($_POST['thing'] as $key => $value) {

  $users = $mysql_link->query("
    INSERT INTO user_thing (
      user_id,
      thing_id
      )
    VALUES (
      '$UUID',
      '$key'
      )
    ");

}
// TODO: insert the ids of the things that were checked for the user  into the user_thing table
$mysql_link->query("
  INSERT INTO user_thing (
    thing_id
    )
  VALUES (
    '$thing'
    )
");
if($mysql_link->error) throw new \Exception($mysql_link->error);

header('location:/');
?>
