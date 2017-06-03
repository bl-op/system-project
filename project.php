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
  
  $sth = $pdo->query('SELECT * FROM cfProjects WHERE projectID='.$_GET['id']);
  
  $result = $sth->fetchAll();
?>

<html>
    <head>
        <title><?php echo $result[0]["projectTitle"]?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources\css\stylesheet.css">
    </head>
    <body>
    <header>
        <div class="navibar">
            <a href="logout.php">Logout</a>
            <a href="#">Profile</a>               
            <a href="newproject.php">Start a Project</a>
            <a href="myhome.php">Home</a>
        </div>
        </header>
      
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      
      <div style="padding: 10px 15%">
        
        <?php 
        
        if($result[0]['projectImg']!="NONE"){
          $img = $result[0]['projectImg'];
        } else {
          $img = "resources/carifund.png";
        }
        
        ?>
       <img src=<?php echo $img ?> id="cover">
       <h1 style="margin-bottom:-15px"><?php echo $result[0]["projectTitle"]?></h1>
       
       <p id="category"><?php echo $result[0]["projectCategory"]?></p>
       <p id="tag"><?php echo $result[0]["projectTags"]?></p>

       <p id="beneficiary"><?php echo $result[0]["beneficiary"]?>
        <br><span id="location"><?php echo $result[0]["beneficiaryLocation"]?></span></p>
        
       <p id="donationAmount">RM <?php echo $result[0]["donationProgress"]?> of
       RM <?php echo $result[0]["donationGoal"]?> Donated</p>
       
      <div id="donationMeter">
        <div id="donationProgress">
      </div></div>
      
      <form action="forms.php" method="post" style="margin-top:3px">
        <input type="number" id="amount" name="amount" style="width: 100px; border-radius:10px" min="5" required>
        <input type="submit" VALUE="Donate" name="donate" id="donate">
      <div style="display:none">
        <input type="text" id="userID" name="userID">
        <input type="text" id="projID" name="projID">
      </div>
      </form>

      
      <div style="margin-top:10px">
        <div class="fb-like" data-href="https://www.google.com" data-layout="button_count" 
        data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
        <div class="fb-save" data-uri="https://www.google.com" data-size="small"></div>
      </div>
      
      <!--Owner of the Project Here-->
      <h3 style="margin-bottom:3px"><?php echo $result[0]['ownerID'] ?></h3>
      <p style="margin-top:0px">Organizer</p>
      
      <div style="background-color:mediumseagreen; width:100%; height:10px; margin: 10px 0px"></div>
      
       <h3 id="description">Project Details</h3>
       <?php echo $result[0]["projectDesc"]?>
       </div>
    </body>
    <br></br>
    <footer class="info">
  	<table style="width:100%" class="info_table">
        	<tr>
            	<th>Connect with Us</th>
            	<th><a href="#" style="color:white; text-decoration:none;">About</th>
            	<th><a href="#" style="color:white; text-decoration:none;">FAQ</a></th>
            	<th><a href="#" style="color:white; text-decoration:none;">Discover</a></th>
           	 
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

<script>

progressBar(); 
fillHiddenForm();

function progressBar(){
  
  var goal = <?php echo $result[0]["donationGoal"]?>;
  var presentAmount = <?php echo $result[0]["donationProgress"]?>;
  var bar = document.getElementById("donationProgress"); 

  var progress = presentAmount * 100 /goal;
  
  if(progress>100){
    progress = 100;
  }
  
  bar.style.width=progress+"%";
}

function fillHiddenForm(){
  //AJAX cannot be used on locahost without extra configuration, so for the purpose of this assignment's
  //presentation and 'working system', this is the workaround
  
    document.getElementById("projID").value = <?php echo $result[0]["projectID"]?>;
    document.getElementById("userID").value = "ASK1";
}
</script>