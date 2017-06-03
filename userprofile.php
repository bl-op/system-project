<?php

function getUsersData($id)
{
    $array = array();
    $query = mysql_query("SELECT * FROM cfusers WHERE id=".$id);
    while($row = mysql_fetch_assoc($result))
    {
        $array['id'] = $row['id'];
        $array['firstname'] = $row['firstname'];
        $array['lastname'] = $row['lastname'];
    }
    return $array;
}

function getId($username)
{
    $query = mysql_query("SELECT `id` FROM `cfusers` WHERE `username`='".$username."'");
    while($row = mysql_fetch_assoc($result))
    {
        return $row['id'];
    }
}

?>
