<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>User Profile</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<body>
		<header>
		<div class="navibar">
	        <ul>
	            <li><a href="login.html">Login</a></li>
	            <li><a href="about.html">About</a></li>
	            <li><a href="newproject.html">Start a Project</a></li>
	            <li><a href="carifund.html">Home</a></li>
	        </ul>
	    </div>
	    </header>

  <body>
	  
	  	<div class="profilecontainer">
			<h1 style="text-align: center">User Profile</h1>

			<p style="text-align: center">About Me<br><br>
			Hello <?php echo $row['firstname']." ".$row['lastname']; ?>! Currently displaying your user profile details.</p>

		</div>

  </body>

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
</html>
