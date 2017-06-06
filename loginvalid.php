<?php

ob_start();
session_start();
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);

  if($conn ) {
    echo "Connected successfully.<br>";
  } else {
     die('Could not connect: ' . mysql_error());
   }

   mysql_select_db('Carifund');
   
$useremail=$_POST['useremail']; 
$userpassword=$_POST['userpassword']; 

// protect SQL injection
$useremail = mysql_real_escape_string($useremail);
$userpassword = mysql_real_escape_string($userpassword);
$result=mysql_query("SELECT * FROM cfUsers WHERE email='$useremail' and password='$userpassword'");
$row=mysql_fetch_array($result);
// count table row
$count=mysql_num_rows($result);

// table row is 1 row when $useremail and $userpassword is valid
if($count==1){

$_SESSION['userID'] = $row['userID']; // initialize session
header("location:myhome.php");
}
else {
header("location:login.php");
$_SESSION['error'] = "Wrong Username or Password";
}
ob_end_flush();
?>