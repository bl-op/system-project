<?php

$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
 
 if($conn ) {
    echo "Connected successfully.<br>";
    } else {
        die('Could not connect: ' . mysql_error());
    }
         
        mysql_select_db('Carifund');

function getUsersData($id)
{
    $array = array();
    $q = mysql_query("SELECT * FROM `cfusers` WHERE `id`=".$id);
    while($r = mysql_fetch_assoc($q))
    {
        $array['id'] = $r['id'];
        $array['firstname'] = $r['firstname'];
        $array['lastname'] = $r['lastname'];
    }
    return $array;
}

function getId($username)
{
    $q = mysql_query("SELECT `id` FROM `cfusers` WHERE `username`='".$username."'");
    while($r = mysql_fetch_assoc($q))
    {
        return $r['id'];
    }
}

?>
