<?php
ob_start();
session_start();
<<<<<<< HEAD

$id = (isset($_GET['id'])) ? $_GET['id'] : $_SESSION['id'];
$query = "SELECT * FROM cfusers WHERE userID = $id";

=======
$id = (isset($_GET['id'])) ? $_GET['id'] : $_SESSION['id'];
$query = "SELECT * FROM cfusers WHERE userID = $id";
>>>>>>> refs/remotes/origin/master
// if session is not set this will redirect to userhome page
if( !isset($_SESSION['id']) ) {
	header("Location:userhome.php?id=" . $_SESSION['id']);
 	exit;
}
<<<<<<< HEAD

=======
>>>>>>> refs/remotes/origin/master
// select logged in users detail
$result = mysql_query("SELECT * FROM cfusers WHERE userID=".$_SESSION['id']);
$row = mysql_fetch_array($result);
$id = $_GET['userID'];
<<<<<<< HEAD
?>
=======
?>
>>>>>>> refs/remotes/origin/master