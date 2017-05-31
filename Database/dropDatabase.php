<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo 'Connected successfully';

   mysql_select_db('Carifund');

   #Safely drops database

   $sql = 'drop database Carifund';

   $retval = mysql_query($sql, $conn);

   if($retval){
     echo "Database Dropped.";
   } else {
     echo "Not dropped";
   }
   mysql_close($conn);
?>
