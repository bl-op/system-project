<?php
  $host = 'localhost';
  $db   = 'carifund';
  $user = 'root';
  $pass = '';
  $charset = 'utf8';
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  $pdo = new PDO($dsn, $user, $pass, $opt);
  
  $sth = $pdo->query('SELECT * FROM cfUsers WHERE userID='.$_GET['id']);
  $sth1 = $pdo->query('SELECT * FROM cfProjects WHERE owner='.$_GET['id']);
  
  $result = $sth->fetchAll();
  $user = $sth1[0]['owner'];
  $history = mysql_query("SELECT * FROM cfprojects WHERE owner = $user;"); 

?>

<html>
    <head>
        <title><?php echo $result[0]["firstname"]?>'s User Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources\css\stylesheet.css">
    </head>
    <header>
        <div class="navibar">
            <a href="logout.php">Logout</a>
            <a href="userhome.php">Profile</a>               
            <a href="newproject.php">Start a Project</a>
            <a href="myhome.php">Home</a>
        </div>
        </header>
    <body>

    <!-- insert details here -->
    <div class="profilecontainer">
      <h1 style="text-align: center">User Profile</h1>

      <p style="text-align: center">About Me<br><br>
      First Name: <?php echo $result[0]["firstname"]?><br>
      Last Name: <?php echo $result[0]["lastname"]?><br>
      Email: <?php echo $result[0]["email"]?><br><br>

      Project History<br>
      <?php 
      if (mysql_num_rows($history) > 0){ 
      //check if projects available
        
        while($row = mysql_fetch_assoc($history)){
          echo $history[0]['projectTitle'] ?><br>

        <?php } ?> 
      <?php } ?>
      <?php else {
          echo "No projects found";
        } ?>

    </div>

    </body>
    <br></br>
    <footer class="info">
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
    </footer>

</html>
