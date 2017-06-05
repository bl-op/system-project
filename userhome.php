<?php
include("session.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>User Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
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
  
    <div class="profilecontainer">
      <h1 style="text-align: center">User Profile</h1>

      <p style="text-align: center"><b>About Me</b><br><br>
      First Name: <?php echo $row['firstname'];?>
      Last Name: <?php echo $row['lastname'];?>
      Email: <?php echo $row['email'];?>
      </p>

      <!-- to insert project history? -->
    </div>
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
