<?php 
$mysqli = new mysqli('localhost','jaja','','librarian');

if ($mysqli->connect_errno)
{
    echo $mysqli->connect_error;
}

?>