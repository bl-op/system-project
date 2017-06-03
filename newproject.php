<?php
include("session.php");
?>

<!DOCTYPE html>

<html>
  <head>
  <title>CariFund - New Project</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources\css\stylesheet.css">

  <div class="navibar">
      <ul>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="#">Profile</a></li>   
          <li><a href="newproject.php">Start a Project</a></li>
          <li><a href="myhome.php">Home</a></li>
      </ul>
  </div>

  </head>

  <body>
    <br><br>
    <div class="newproject" style="height: 650px">
  	<form action="forms.php" method="post">
  	   <p>Project Title: <input type="text" name="projectTitle" required></p>
       <p>Project Beneficiary: <input type="text" name="beneficiary" required></p>
       <p>Beneficiary Location: <input type="textarea" name="beneficiaryLocation" required></p>

  	   <p>Donation Goal: $ <input type="number" name="donationGoal" required></p>
       <p>Tag: <input type="text" name="projectTags" placeholder="Separate tags by commas" required></p>
       <p>Category:
       <select name="category" style="float:right" required>
          <option value="Poverty">Poverty</option>
          <option value="Education">Education</option>
          <option value="Health">Health</option>
          <option value="Animals">Animals</option>
          <option value="Environment">Environment</option>
          <option value="Other">Other</option>
       </select></p>

       <p>Project Description:</p>
       <textarea name="projectDesc" style="width:100%; height:150px; padding:5px" required></textarea>
       <p>Cover Picture: <input type="text" name="projectImg"></p>
       <br></br>
       
       <div style="display:none">
         <input type="text" name="ownerID" id="userID">
       </div>
       
  	  <P><INPUT TYPE=SUBMIT VALUE="Submit" name="new-project" style="width: 75px">
  	</FORM>
    </div>

    <div class="info">

          	<table style="width:100%" class="info_table">
                	<tr>
                    	<th>Connect with Us</th>
                    	<th><a href="about.html" style="color:white; text-decoration:none;">About</th>
                    	<th><a href="faq.html" style="color:white; text-decoration:none;">FAQ</a></th>
                    	<th><a href="discover.html" style="color:white; text-decoration:none;">Discover</a></th>
                   	 
                	</tr>
                 	<tr>
                     	<td><a href="emailus.html" style="color:white; text-decoration:none;">Email</a></td>
                 	</tr>
                 	<tr>
                     	<td><a href="https://www.facebook.com/" style="color:white; text-decoration:none;">Facebook</a></td>
                 	</tr>
            	</table>


     	</div>
  </body>
  
<script>

fillUserIDfornow();

function fillUserIDfornow(){
  document.getElementById("userID").value = "<?php echo $row['firstname']." ".$row['lastname'] ?>";
}

</script>
</html>
<?php ob_end_flush(); ?>
