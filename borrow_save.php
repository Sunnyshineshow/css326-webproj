<?php

require('connect.php');
session_start();

$book_id = $_POST['book_id'];
$client_name = $_POST['client_name'];
$client_telno = $_POST['client_telno'];
$client_address = $_POST['client_address'];
$client_return_time = $_POST['client_return_time'];
$track_number = $book_id.$client_telno.date("Y/m/d");
$username = $_SESSION['username'];

$query = "SELECT user_id FROM user WHERE username = '$username'";
$res = $mysqli->query($query);
$row = $res->fetch_array();

$user_id = $row[0];

$query = "SELECT collection_id FROM bookshelf WHERE book_id = $book_id";
$res = $mysqli->query($query);
$row = $res->fetch_array();

$collection_id = $user_id[0];

$query = "INSERT INTO borrowed_book (book_id,user_id,collection_id,date_borrowed,date_expired) VALUES
($book_id,$user_id,$collection_id,CURDATE(),CURDATE()+7)";

if ($mysqli->query($query))
{
    $query = "UPDATE bookshelf SET borrowed_status = 'borrowed' WHERE book_id=$book_id";

    if($mysqli->query($query))
    {
        header("Location: ./user_page.php");
    }
    else
    {
        echo "An error has occured".$mysqli->error;
    }
}
else
{
    echo "An error occured";
}
?>