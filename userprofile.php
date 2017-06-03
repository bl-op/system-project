<?php

require("dbc.php");

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
