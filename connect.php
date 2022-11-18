<?php 
$mysqli = new mysqli('localhost','root','','lab12');

if ($mysqli->connect_errno)
{
    echo $mysqli->connect_error;
}

?>