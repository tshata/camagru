<?php

$servername = "localhost";
$username = "root";
$password = "Lw7en3xBSylH3KN1";

//create connection

$connection = new mysqli($servername, $username, $password);

//check connection

if ($connection->connect_error)
{
  die("Connection failed: " .$connection->connect_error);
}
//echo "Connection successful";
?>