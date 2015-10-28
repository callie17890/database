<?php

// TODO: make a database connection
include 'db_connect.php';
$mysql_link = connect('root', '', 'lab_db');

// TODO: retrieve the user's id from the query string
$userID = $_GET['id'];

// TODO: retrieve the information for a single user using SQL
$user_info = $mysql_link->query( "
SELECT
  id,
  name,
  phone,
  email
  FROM
    user
WHERE
  id = '$userID'
");


if($mysql_link->error) throw new \Exception($mysql_link->error);
// TODO: use fetch_assoc() to put the user's information into an array
//         save this array as $user
$user = $user_info->fetch_assoc();

// TODO: make a second query to retrieve the list of things that are associated with the user as found in the user_thing join table
$things = $mysql_link->query( "
SELECT
  thing.name
FROM
  user_thing
JOIN
  thing
ON user_thing.thing_id = thing.id
WHERE user_thing.user_id = '$userID'
");

if($mysql_link->error) throw new \Exception($mysql_link->error);

?><!DOCTYPE>
<html>
  <head>
    <title>user details</title>
  </head>
  <body>
    <h1><?=$user['name']?>'s details</h1>
    <a href="deactivate-user.php?id=<?=$user['id']?>">
      deactivate
    </a>
    <table>
      <tr>
        <th>phone number</th>
        <td><?=$user['phone']?></td>
      </tr>
      <tr>
        <th>email</th>
        <td><?=$user['email']?></td>
      </tr>
    </table>
    <ul>
    <!-- TODO: display a list of the things that are associated with the user -->
    <?php foreach($things as $thing){ ?> 
        <li><?=$thing['name']?></li>
      <?php } ?>

    </ul>

  </body>
</html>

