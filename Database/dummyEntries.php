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

   #=================dummy entries: cfUsers

   $sql = 'insert into cfUsers (firstname, lastname, email, password)'.
   'values ("Darryl", "Lee", "dt2017@hotmail.com", 14423),'.
   '("Darrow", "Andromedus", "primus@mars.com", 30),'.
   '("Mathew", "Lionheart", "lionMatt@mars.com", 3224);';

   $retval = mysql_query($sql, $conn);

   mysql_close($conn);
?>
