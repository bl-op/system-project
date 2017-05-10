<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo 'Connected successfully';
   mysql_select_db('TESTA');


   $result = mysql_query("show tables"); // run the query and assign the result to $result
   while($table = mysql_fetch_array($result)) { // go through each row that was returned in $result
    echo($table[0] . "<BR>");    // print the table that was returned on that row.
}

   mysql_close($conn);
?>
