<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if($conn ) {
  //echo "Connected successfully.<br>";
} else {
   die('Could not connect: ' . mysql_error());
 }
 
 mysql_select_db('Carifund');

 ?>