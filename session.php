<?php
 ob_start();
 session_start();
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
 
 if($conn ) {
     // echo "Connected successfully.<br>";
     } else {
         die('Could not connect: ' . mysql_error());
         }
         
         mysql_select_db('Carifund');
         

 // select logged in users detail
 $result=mysql_query("SELECT * FROM cfUsers WHERE userID = '" . $_SESSION[ 'userID' ] . "'" );
 $row=mysql_fetch_array($result);
 // if session is not set, return to login page
 if( !isset($_SESSION[ 'userID' ]) ) {
     header("Location: login.php");
     exit;
     }
?>