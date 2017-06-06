<!DOCTYPE html>
<html>
    <head>
        <title>CariFund</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources\css\stylesheet.css">
    </head>
    <body>
        <header>
        <div class="navibar">
            <p class="navbartext">Logged in as <?php echo $row['firstname']." ".$row['lastname']; ?>. Welcome back!</p>
            <a href="logout.php">Logout</a> 
            <a href="userhome.php">Profile</a>             
            <a href="newproject.php">Start a Project</a>
            <a href="myhome.php">Home</a>
        </div>
        </header>
        <div style="text-align: center; padding: 20% 0px">
           <h1>Error!</h1>
           <h3>You will be redirected to the front page.</h3>
           <meta http-equiv='refresh' content='3; url=myhome.php' />
        </div>
       <div class="info">


          	<table style="width:100%" class="info_table">
                	<tr>
                    	<th>Connect with Us</th>
                    	<th><a href="userabout.html" style="color:white; text-decoration:none;">About</th>
                    	<th><a href="userfaq.html" style="color:white; text-decoration:none;">FAQ</a></th>
                    	<th><a href="userdiscover.html" style="color:white; text-decoration:none;">Discover</a></th>
                   	 
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