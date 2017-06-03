<?php
session_start();
require("userprofile.php");
?>

<!DOCTYPE html>

<html>
  <head>
  <title>User Profile</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources\css\stylesheet.css">

  <div class="navibar">
      <ul>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="userhome.php">Profile</a></li>   
          <li><a href="newproject.php">Start a Project</a></li>
          <li><a href="myhome.php">Home</a></li>
      </ul>
  </div>
  	
  	<?php
  	if(isset($_SESSION['username']))
  	{
  		$usersData = getUsersData(getId($_SESSION['username']));
  		?>

  		<div class="profilecontainer">
			<h1>User Profile</h1>
			

  		<?php echo $usersData['firstname']." ".$usersData['lastname']."'s Profile"; ?>

  		</div>
  			
  	}

  </head>

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
</html>
