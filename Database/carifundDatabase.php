<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo 'Connected successfully<br>';

   $sql = 'CREATE Database Carifund';
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }

   echo "Database Carifund created successfully<br>";

   mysql_select_db('Carifund');

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

   echo "Table created: cfUsers<br>";

   #=================create table: cfProjects

   $sql = 'create table cfProjects ( '.
         ' projectID int(9) not null auto_increment,'.
         ' projectTitle varchar(50) not null, '.
         ' beneficiary varchar(50) not null,'.
         ' beneficiaryLocation varchar(50) not null,'.
         ' donationGoal int(7) not null,'.
         ' donationProgress varchar(7) not null,'.
         ' projectTags varchar(20) not null,'.
         ' projectCategory enum("Health", "Poverty",'.
         ' "Education", "Animals", "Environment", "Other") not null,'.
         ' projectDesc text not null,'.
         ' ownerID text not null,'.
         ' projectImg blob,'.
         ' primary key(projectID));';

   $retval = mysql_query($sql, $conn);

   if(! $retval ) {
       die('Table creation failed: cfProjects' . mysql_error());
    }

    echo "Table created: cfProjects<br>";

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

     echo "Table created: cfDonations<br>";

     //NEED TO DO: Normalized table for userProjects
     mysql_close($conn);
?>
