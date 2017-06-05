<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home|<?php echo $row['firstname']. $row['lastname']; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources\css\stylesheet.css">
    </head>
    <body>
        <header>
        <div class="navibar">
            <p class="navbartext">Logged in as <?php echo $row['firstname']." ".$row['lastname']; ?>. Welcome back!</p>
            <a href="logout.php">Logout</a> 
            <a href="profile.php?id=<?php echo $previewID1; ?>">Profile</a>             
            <a href="newproject.php">Start a Project</a>
            <a href="myhome.php">Home</a>
        </div>
        </header>
        
        <div><img src="crowdfunding.png" class="homeimage"></div>

        <?php
        include("getproject.php");
        ?>

        <div class="listproject">
        <p>Latest Projects</p>

        <div id="latest">
        <div class="thumbnail"><img src="<?php echo $previewpic1; ?>" class="preview">
        <p><a href="project.php?id=<?php echo $previewID1; ?>"><?php echo $previewTitle1; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic2; ?>" class="preview">
        <p><a href="project.php?id=<?php echo $previewID2; ?>"><?php echo $previewTitle2; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic3; ?>" class="preview">
        <p><a href="project.php?id=<?php echo $previewID3; ?>"><?php echo $previewTitle3; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic4; ?>" class="preview">
        <p><a href="project.php?id=<?php echo $previewID4; ?>"><?php echo $previewTitle4; ?></a></p></div>
    
        <div class="thumbnail"><img src="<?php echo $previewpic5; ?>" class="preview">
        <p><a href="project.php?id=<?php echo $previewID5; ?>"><?php echo $previewTitle5; ?></a></p></div>

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
            <a href="userpoverty.php">Poverty</a>
            <a href="usereducation.php">Education</a>
            <a href="userhealth.php">Health</a>
            <a href="useranimals.php">Animals</a>
            <a href="userenvironment.php">Environment</a>
            <a href="userother.php">Others</a>
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

<script>
function openMenu() {
    document.getElementById("categorymenu").style.height = "100%";
}
function closeMenu() {
    document.getElementById("categorymenu").style.height = "0%";
}
</script>
<?php ob_end_flush(); ?>
