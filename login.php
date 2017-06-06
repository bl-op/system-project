<?php
session_start();
?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources\css\stylesheet.css">
    </head>
    <body>
        <header>
        <div class="navibar">
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Login</a>
            <a href="about.html">About</a>
            <a href="carifund.php">Home</a>
        </div>
        </header>
        <?php
        if (isset($_SESSION['error'])) {
            echo '<p class="message"> '.$_SESSION['error'].'</p>';
            unset($_SESSION['error']);
            }
        ?>
        <div class="loginform">
            <form action="loginvalid.php" method="post">
                	<h1 style="font-family:Trebuchet MS;color:dimgray; text-align: center;">Welcome!</h1>
                	<label style="color:dimgray"><b> Email </b></label>
                 	<input type="text" placeholder="Enter Email" name="useremail">
                	<br></br>
                	<label style="color:dimgray"><b> Password</b></label>
                	<input type="password" placeholder="Enter password" name="userpassword">
                    <br></br>
                	<input type="submit" name="login" class="btn" value="Login!">
                    </form>
                    
            <form action="signup.php">
                	<p style="font-family:Trebuchet MS; size:big;color:dimgray">Are you new? Join us now!</p>
                	<button><b>Sign up!</b></button>
            </form>
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
</html>