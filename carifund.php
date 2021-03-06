<?php
include("getproject.php");
 ?>

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
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Login</a>
            <a href="about.html">About</a>
            <a href="carifund.php">Home</a>
        </div>
        </header>
        
        <div><img src="crowdfunding.png" class="homeimage"></div>
        <div class="listproject">
        <p>Latest Projects</p>
        <div id="latest">
        
        <div class="thumbnail"><img src="<?php echo $previewpic1; ?>" class="preview">
        <p><a href="viewproject.php?id=<?php echo $previewID1; ?>"><?php echo $previewTitle1; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic2; ?>" class="preview">
        <p><a href="viewproject.php?id=<?php echo $previewID2; ?>"><?php echo $previewTitle2; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic3; ?>" class="preview">
        <p><a href="viewproject.php?id=<?php echo $previewID3; ?>"><?php echo $previewTitle3; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic4; ?>" class="preview">
        <p><a href="viewproject.php?id=<?php echo $previewID4; ?>"><?php echo $previewTitle4; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic5; ?>" class="preview">
        <p><a href="viewproject.php?id=<?php echo $previewID5; ?>"><?php echo $previewTitle5; ?></a></p></div>

        </div>
        </div>

        <div class="exploreCategory">
        <button class="btn" style="font-size:25px; text-align: center;height: 50px;" onclick="openMenu()">Explore Categories</button>
        <br></br>
        </div>

        <div class="category">
            <div id="categorymenu" class="categorymenu">
            <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
            <div class="contents">
            <a href="poverty.php">Poverty</a>
            <a href="education.php">Education</a>
            <a href="health.php">Health</a>
            <a href="animals.php">Animals</a>
            <a href="environment.php">Environment</a>
            <a href="other.php">Others</a>
            </div>
        </div>

        <div class="works" >
             	<h1 style="text-align: center;">How does CariFund work?</h1>
         	</div>

         	<div class="steps">
            	<div class="step1">
                	<img src="find.png" class="stepimage">
                	<p>
                    	1. Find<br /><br />
                    	Find a project that you would like to support.
                	</p>
            	</div>


            	<div class="step2">
                	<img src="pay.png" class="stepimage">
                	<p>
                    	2. Pay<br/><br />
                    	Follow the easy steps that allows you to complete the payment.
                	</p>  
         	</div>


         	<div class="step3">
             	<img src="idea.png" class="stepimage">
             	<p>
                 	3. Idea<br/><br />
                	If you have a vision for a new project just add a new one.   
             	</p>
        	</div>
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
function openMenu() {
    document.getElementById("categorymenu").style.height = "100%";
}

function closeMenu() {
    document.getElementById("categorymenu").style.height = "0%";
}
</script>