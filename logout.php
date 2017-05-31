<?php
session_start();
if(session_destroy()) // Destroy all sessions
{
header("Location: carifund.php"); // Redirect to Cari Fund home page
}
?>