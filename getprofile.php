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
 #=============Get Latest Projects

 $result = mysql_query("SELECT * FROM cfusers WHERE userID=".$_SESSION['id']);
 $row = mysql_fetch_array($result);
 $id = $_GET['userID'];
 ?>
