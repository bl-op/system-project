<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo 'Connected successfully';

   $sql = 'CREATE Database TESTA';
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }

   echo "Database TESTA created successfully\n";

   mysql_select_db('TESTA');

   #=================create table: cfUsers

   $sql = 'create table cfUsers ( '.
         ' userID int(9) not null auto_increment,'.
         ' firstname varchar(30) not null,'.
         ' lastname varchar(30) not null,'.
         ' email varchar(50) not null,'.
         ' password varchar(40) not null,'.
         ' primary key(userID) );';


   $retval = mysql_query( $sql, $conn );

  if(! $retval ) {
      die('Table creation failed: cfUsers' . mysql_error());
   }

   echo "Table created: cfUsers\n";

   #=================create table: cfProjects

   $sql = 'create table cfProjects ( '.
         ' projectID int(9) not null auto_increment,'.
         ' projectTitle varchar(50) not null, '.
         ' projectGoal int(7) not null,'.
         ' donationProgress int(7) not null,'.
         ' projectCategory varchar(30) not null,'.
         ' beneficiaryLocation varchar(50) not null,'.
         ' projectBeneficiary varchar(50) not null,'.
         ' primary key(projectID));';

   $retval = mysql_query($sql, $conn);

   if(! $retval ) {
       die('Table creation failed: cfProjects' . mysql_error());
    }

    echo "Table created: cfProjects\n";

    #=================create table: cfDonations

    $sql = 'create table cfDonations ( '.
          ' donationID int(9) not null auto_increment, '.
          ' donorID int(9) not null,'.
          ' projectID int(9) not null,'.
          ' amount int(9) not null,'.
          ' primary key(donationID));';

    $retval = mysql_query($sql, $conn);

    if(! $retval ) {
        die('Table creation failed: cfDonations' . mysql_error());
     }

     echo "Table created: cfDonations\n";

     #=================dummy entries: cfUsers

     $sql = 'insert into cfUsers (firstname, lastname, email, password)'.
     'values ("Azmie", "Binti", "azmirdottir@some", 123);';

     mysql_close($conn);
?>
