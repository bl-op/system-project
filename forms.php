<?php

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

  # Form: New Project
  if(!empty($_POST['new-project'])) {
    $projectTitle = $_POST['projectTitle'];
    $beneficiary = $_POST['beneficiary'];
    $beneficiaryLocation = $_POST['beneficiaryLocation'];
    $donationGoal = $_POST['donationGoal'];
    $projectTags = $_POST['projectTags'];
    $category = $_POST['category'];
    $projectDesc = $_POST['projectDesc'];

    if(empty($_POST['projectImg'])){
      $projectImg = "NONE";
    } else {
      $projectImg = $_POST['projectImg'];
    }

    $sql = "insert into cfProjects (projectTitle, beneficiary,".
          " beneficiaryLocation, donationGoal, donationProgress,".
          " projectTags, projectCategory, projectDesc, projectImg)".
          " values ('{$projectTitle}','{$beneficiary}','{$beneficiaryLocation}',".
          " {$donationGoal},0,'{$projectTags}','{$category}','{$projectDesc}', '{$projectImg}');";

    $retval = mysql_query($sql, $conn);

    if($retval){
      echo "Entered successfully.<br>";
    } else {
      echo "No good.<br>" . mysql_error();
    } #End of Form: New Project

    // elseif (!empty($_POST['submission button's name here])) {
    //   # code...
    // }

  } #The end brace to decide which form

#Form: Member Sign-up
if(!empty($_POST['create'])) {
  $sql = "insert into cfUsers (firstname, lastname, email, password)".
   "values ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['email']}','{$_POST['password']}');";

   $retval = mysql_query($sql, $conn);

   if($retval){
     echo "New member added!<br>";
   } else {
     echo "Error!<br>" . mysql_error();
   }
}
 ?>
