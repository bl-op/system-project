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
  
    <div class="profilecontainer" style="text-align: center;">
      <h1 style="text-align: center">User Profile</h1>

      <p style="text-align: center"><b>About Me</b><br><br>
      First Name: <?php echo $row['firstname'];?><br>
      Last Name: <?php echo $row['lastname'];?><br>
      Email: <?php echo $row['email'];?>
      </p>

      Project History<br>
      <?php
      include("connection.php");
      $owner = $row['userID'];
      //History query
      $history = mysql_query("SELECT * FROM cfprojects WHERE owner = $owner;");
      //History result
      while ($row = mysql_fetch_array($history)) {
        $data[] = $row;
      }
      foreach ($data as $row) {
        ?> <a href="project.php?id=<?php echo $row['projectID']; ?>"><?php echo $row['projectTitle']."<br/>"; ?>
      <?php }
      ?> 

      </p>

    </div>
      <div class="info" style="position: absolute; bottom:0; left: 0; right: 0;">
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