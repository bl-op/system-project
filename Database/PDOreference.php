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
  $stmt = $pdo->query('SELECT * FROM cfUsers');
  echo "Users in cfUsers table: <br>";
  while ($row = $stmt->fetch())
  {
      echo $row['userID'] . " | " . $row['firstname'] . " | " . $row['lastname']." | " . $row['email']." | " . $row['password'].
      '<br>';
  }
  $stmt = $pdo->query('SELECT * FROM cfProjects');

  echo "<br><br>Projects table: <br>";

  while ($row = $stmt->fetch())
  {
      echo $row['projectID'] . " | " . $row['projectTitle'] . " | " . $row['beneficiary']. " | ".
      $row['beneficiaryLocation'] . ' | ' . $row['donationProgress'] .
      ' out of ' . $row['donationGoal'] . " | " . $row['ownerID'] . '<br>';
  }
?>