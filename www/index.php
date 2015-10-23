<?php

// including the db_connect file for database helper functions
include 'db_connect.php';

// opening the connection to the mysql database
$mysql_link = connect('root', '', 'lab_db');

// calling the mysql database to retrieve all active users

$users = $mysql_link->query( "
  SELECT 
    id,
    name,
    phone,
    email
  FROM user
  WHERE active='1'
");

$things = $mysql_link->query( "
  SELECT 
    id,
    name
  FROM thing
");

// display MySQL errors
if($mysql_link->error) throw new \Exception($mysql_link->error);


?><!DOCTYPE>
<html>
  <head>
    <title>
      SQL + PHP = FUN
    </title>
  </head>
  <body>
    <h1>User List</h1>
     <table>
      <tr>
        <th>name</th>
        <th>phone number</th>
        <th>email</th>
        </th>&nbsp;</th>
      </tr>
      <?php foreach($users as $user){ ?>
        <tr>
          <td><a href="user-details.php?id=<?=$user['id']?>"><?=$user['name']?></a></td>
          <td><?=$user['phone']?></td>
          <td><?=$user['email']?></td>
          <td>
            <a href="deactivate-user.php?id=<?=$user['id']?>">
              deactivate
            </a>
          </td>
        </tr>
      <?php } ?>
    </table>

    <h1>New User</h1>
    <form action="create-user.php" method="POST" >
      <input type="text" name="name" /> 
      <input type="text" name="phone" /> 
      <input type="text" name="email" /> 
      <br />
      <?php foreach($things as $thing){ ?>
        <input type="checkbox" name="thing[<?=$thing['id']?>]" /> 
        <?=$thing['name']?>
      <?php } ?>
      <br />
      <button type="submit"> 
        + create user
      </button>
    </form>
  </body>
</html>
