<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template Page</title>
</head>
<style>
    body {
        margin: 0;
    }

    header {
        font-family: Arial, Helvetica, sans-serif;
        width: 100%;
        background-color: #1c3948;

        color: #e4960e;
        font-size: 65px;
        text-shadow: 2px 2px 5px #000000;
    }

    .header_button {
        width: 25%;
        height: 50px;
        background-color: #eba92a;
        transition-duration: 0.4s;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        font: bold;
    }

    .header_button:hover {
        background-color: white;
        color: black;
        border: 2px solid #000000;
    }

    footer {
        font-family: Arial, Helvetica, sans-serif;
        width: 100%;
        background-color: #1c3948;

        color: #e4960e;
        font-size: 30px;
        position: absolute;
        bottom: 0px;
    }

    .subhead {
        width: auto;
        padding: 20px 10px 0 20px;

        margin-bottom: 10px;

        transition-duration: 0.4s;
        font: 30px Arial, sans-serif;
    }
    #announcement, #newbook{
        font-weight: bold;
        margin-bottom: 10px;
    }
    table, tr, td, th{
        font-family: Arial;
        border: 2px solid;
        border-collapse: collapse;
        text-align: center;
        padding: 5px;
    }
    .center {
        margin-top: 2%;
        margin-left: auto;
        margin-right: auto;
    }

</style>
<header>
    <div style="padding: 20px">Librariann</div>
</header>
<body>
<div>
    <button class="header_button"><strong>Item</strong></button
    ><button class="header_button"><strong>Borrow</strong></button
    ><button class="header_button"><strong>Books</strong></button
    ><button class="header_button"><strong>Login</strong></button>
</div>
<?php
require_once ('connect.php');
$bookname=$_POST['bookname'];
if(isset($bookname) & !empty($bookname)){
    $q = "select book_id, book_name, author from book where book_name like '%".$bookname."%';";
    if ($results=$mysqli->query($q)){
        $count = $results->num_rows;
        echo "<br>";
        echo "<label class='subhead' id='announcement'>Here are $count books for you => </label>";
    }
    if ($mysqli->query($q)){
        if ($results=$mysqli->query($q)) {
            echo "<table class='center'>";
            echo "<th>Book ID</th><th>Book Name</th><th>Author</th>";
            while ($rows = $results->fetch_array()) {
                echo "<tr>";
                echo "<td>" . $rows['book_id'] . "</td>";
                echo "<td>" . $rows['book_name'] . "</td>";
                echo "<td>" . $rows['author'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $results->free();

        }

    }
}
?>
</body>
<footer><div style="padding: 10px">Contact Information</div></footer>
</html>
