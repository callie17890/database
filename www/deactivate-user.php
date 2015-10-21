<?php
// including the db_connect file for database helper functions
include 'db_connect.php';

// opening the connection to the mysql database
$mysql_link = connect('root', '', 'lab_db');

// TODO: find the user's id using the information sent in via the query string 

// TODO: call $mysql_link's `query` function and update the user's active flag to be 0
//        i.e. SET active='0'

// TODO: add the line to display MySQL errors

// TODO: redirect the user back to index.php
?>

