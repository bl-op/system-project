<?php

ob_start();
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

// count table row
$count=mysql_num_rows($result);

// table row is 1 row when $useremail and userpassword is valid
if($count==1){

$_SESSION['user'] = $row['userID'];
header("location:myhome.php");
}
else {
echo "Wrong Username or Password";
header("location:login.html");
}
ob_end_flush();
?>
