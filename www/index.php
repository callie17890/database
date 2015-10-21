<?php

// including the db_connect file for database helper functions
include 'db_connect.php';

// opening the connection to the mysql database
$mysql_link = connect('root', '', 'lab_db');

// calling the mysql database to retrieve all active users

$users = $mysql_link->query(
// TODO: write a query to retrieve all users who are active
//         i.e. WHERE active='1'
);

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
      </tr>
        <th>name</th>
        <th>phone number</th>
        <th>email</th>
        </th>&nbsp;</th>
      </tr>
      <?php // this code loops over all of the users 
            // you can address each user as `$user` within this loop
         foreach($users as $user){ ?>
        <tr>
          <!-- TODO: Display the user's information -->
          <td></td>
          <td></td>
          <td></td>
          <td><!--TODO: make this URL's query string reference the correct user -->
            <a href="deactivate-user.php?id=">
              deactivate
            </a>
          </td>
        </tr>
      <?php } ?>
    </ul>

    <h1>New User</h1>
    <!-- TODO: make this form submit via POST to create-user.php -->
    <form>
      <input type="text" name="name" /> 
      <input type="text" name="phone" /> 
      <input type="text" name="email" /> 
      <button type="submit"> 
        + create user
      </button>
    </form>
  </body>
</html>
