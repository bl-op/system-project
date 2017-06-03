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
 
 //get last
 $result = mysql_query("SELECT * FROM cfProjects ORDER BY projectID DESC LIMIT 1");
 $row = mysql_fetch_array($result);
 $previewTitle1 = $row["projectTitle"];
 $previewID1 = $row["projectID"];
 
 //get 2nd last
 $result = mysql_query("SELECT * FROM cfProjects ORDER BY projectID DESC LIMIT 1,1");
 $row = mysql_fetch_array($result);
 $previewTitle2 = $row["projectTitle"];
 $previewID2 = $row["projectID"];

 //get 3rd last
 $result = mysql_query("SELECT * FROM cfProjects ORDER BY projectID DESC LIMIT 2,1");
 $row = mysql_fetch_array($result);
 $previewTitle3 = $row["projectTitle"];
 $previewID3 = $row["projectID"];

 //get 4th last
 $result = mysql_query("SELECT * FROM cfProjects ORDER BY projectID DESC LIMIT 3,1");
 $row = mysql_fetch_array($result);
 $previewTitle4 = $row["projectTitle"];
 $previewID4 = $row["projectID"];

 //get 5th last
 $result = mysql_query("SELECT * FROM cfProjects ORDER BY projectID DESC LIMIT 4,1");
 $row = mysql_fetch_array($result);
 $previewTitle5 = $row["projectTitle"];
 $previewID5 = $row["projectID"];

 ?>