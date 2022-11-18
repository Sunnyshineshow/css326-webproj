<?php 
$mysqli = new mysqli('localhost','root','','librarian');

if ($mysqli->connect_errno)
{
    echo $mysqli->connect_error;
}

?>