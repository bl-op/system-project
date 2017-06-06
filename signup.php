<?php
session_start();
?>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources\css\stylesheet.css">
    </head>
    <body>
        <header>
        <div class="navibar">
            <a href="signup.php">Sign Up</a>
            <a href="login.html">Login</a>
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
        <div class="signupform">
            <form action="login.php">
                	<p style="font-family:Trebuchet MS; font-size: 13px;color:dimgray">Already a member?</p>
                	<button><b>Login!</b></button>
            </form>
            <form action="forms.php" method="post">
                	<h1 style="font-family:Trebuchet MS;color:dimgray; text-align: center;">Sign up!</h1>
                    <input type="text" placeholder="Enter First Name" name="firstname" required>
                    <input type="text" placeholder="Enter Last Name" name="lastname" required>
                    <input type="text" placeholder="Enter Email" name="email" required>
                	<input type="password" placeholder="Enter password" id="password" name="password" required>
                    <input type="password" placeholder="Confirm password" id="confirm_password" name="confirm_password"required>
                    <br></br>
                	<input type="submit" name="create" value="Create Account!" onclick="signup()" class="btn">    
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

<script>

function signup(){
    // check if password and confirm password match; allows account to be created if it's valid.
    var password = document.getElementById("password")
    var confirm_password = document.getElementById("confirm_password");
    
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Do Not Match!");
        } else {
            confirm_password.setCustomValidity('');
            }
            
}

</script>
