<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My User Profile</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link rel="stylesheet" href="resources\css\stylesheet2.css">
	</head>
	<body>
		<header>
		<div class="navibar">
	      	<ul>
		          <a href="logout.php">Logout</a>
		          <a href="profile.php?id=<?php echo $previewID1; ?>">Profile</a>
		          <a href="newproject.php">Start a Project</a>
		          <a href="myhome.php">Home</a>
	      	</ul>
	  	</div>
	    </header>
  
		<div class="profilecontainer">
			<h1 style="text-align: center">User Profile</h1>

			<p style="text-align: center">About Me<br><br>
			<?php echo $row['firstname']." ".$row['lastname']; ?></p>


			<!-- to insert project history? -->
		</div>

  		<div class="info">


          	<table style="width:100%" class="info_table">
                	<tr>
                    	<th>Connect with Us</th>
                    	<th><a href="about.html" style="color:white; text-decoration:none;">About</a></th>
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
