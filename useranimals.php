<?php
include ("getproject.php");
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
            <a href="logout.php">Logout</a> 
			<a href="userhome.php">Profile</a>
			<a href="newproject.php">Start a Project</a>
            <a href="myhome.php">Home</a>
        </div>
        </header>

        <div class="poverty">
        <h1 style="text-align: center;">Category: Animals</h1>
        <?php
        if (mysql_num_rows($animals) > 0){ //check if projects available
        while($row = mysql_fetch_assoc($animals)){ ?>
        <div class="categoryinfo">
            <img src="<?php echo $row['projectImg']; ?>" class="categoryimg">
            <h2><a href="project.php?id=<?php echo $row['projectID']; ?>"><?php echo $row['projectTitle']; ?></a><h2>
            <p style="font-size: 17px;"><?php echo $row['beneficiary']; ?><p>
            <p style="font-size: 15px;">Description: <br></br><?php echo $row['projectDesc']; ?></p>
            <br></br>
            <br></br>
         </div>   
            <?php } ?>
        <?php } else{ ?>
        <br></br>
         <h1 class="errormsg"><?php echo "Sorry! There are no projects available currently, please visit again next time.";?></h1>
         <br></br>
         <input type="submit" name="returnhome" value="Return To Home" onclick="returnhome()" class="btn" style="align: center; margin-left: 550px;">
        <?php } ?>
        </div>
        </div>
        <br></br>
        <div class="info">


          	<table style="width:100%" class="info_table">
                	<tr>
                    	<th>Connect with Us</th>
                    	<th><a href="userabout.html" style="color:white; text-decoration:none;">About</a></th>
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
function returnhome(){
    window.location.href = "myhome.php";
            
}
</script>