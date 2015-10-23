<?php

// TODO: make a database connection

// TODO: retrieve the user's id from the query string

// TODO: retrieve the information for a single user using SQL

// TODO: use fetch_assoc() to put the user's information into an array
//         save this array as $user

// TODO: retrieve the list of things that are associated with the user as found in the user_thing join table

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
    </ul>
  </body>
</html>

