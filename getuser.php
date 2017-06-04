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

 $id = mysqli_query("SELECT owner FROM cfProjects");
 $result = mysqli_query("SELECT * FROM cfUsers WHERE userID='$id'");
 $row = mysql_fetch_array($result);
 $viewowner = $row['userID'];

 ?>