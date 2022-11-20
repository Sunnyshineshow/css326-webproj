<?php require_once('connect.php')?>
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
    .center {
      text-align: center;
    }

    .label {
      width: auto;
      height: 30px;
      left: 80px;
      top: 30px;

      position: relative;
      transition-duration: 0.4s;

      font-family: Arial, Helvetica, sans-serif;
      font-size: 22px;
      font: bold;
    }
    .bookname_textbox {
      width: 40%;
      height: 20px;
      position: absolute;
      background-color: #bebdbd;
      left: 300px;
      padding: 10px;
      margin: 10px 8px;
    }
    .bookname_textbox:hover {
      background-color: #d2d0d0;
      border: 2px solid;
    }
    .bookname_textbox:focus {
      background-color: #c2c2c2;
      border: 2px solid;
    }
    .split {
      height: 0px;
      width: 50%;
      position: relative;
      z-index: 1;
      top: 10px;
      padding-top: 20px;
    }

    /* Control the left side */
    .left {
      left: 0;
    }

    /* Control the right side */
    .right {
      right: 0;
      left: 710px;
    }

    .form-submit-button {
      top: 380px;
      left: 280px;
      height: 40px;
      width: 150px;
      position: absolute;
      text-align: center;
    }
    .header {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #1c3948;
      text-decoration: none;
      color: #e4960e;
      font-size: 65px;
      text-shadow: 2px 2px 5px #000000;
    }
  </style>
  <header>
  <div style="padding: 20px"><a href="./home_page.php" class="header">Librariann</a></div>
  </header>
  <body>

  <div>
      <a href="./item_page.php"
        ><button class="header_button"><strong>Item</strong></button></a
      ><a href="./borrow_page.php"
        ><button class="header_button"><strong>Borrow</strong></button></a
      ><a href="book_page.php"
        ><button class="header_button"><strong>Books</strong></button></a
      ><?php 
      if (isset($_SESSION['username']) && $_SESSION['username'])
      {
        echo "<a href=\"user_page.php\"
        ><button class=\"header_button\"><strong>User</strong></button></a
      >";
      }
      else
      {
        echo "<a href=\"SignIn_page.php\"
        ><button class=\"header_button\"><strong>Login</strong></button></a
      >";
      }
      
      ?>
    </div>

    <?php 
require_once('connect.php');
//./Confirmborrow_page.php

    $isValid = true;
    $book_name = $_POST['Book_name'];
    $client_name = $_POST['User_namenlastname'];
    $book_id = $_POST['Book_ID'];
    $client_telno = $_POST['User_telno'];
    $client_address = $_POST['User_address'];
    $client_return_time = $_POST['User_time'];

    if ($book_name && $client_name && $book_id && $client_telno && $client_address && $client_return_time)
    {
        $query = "SELECT book.book_id,book_name,borrowed_status FROM book INNER JOIN bookshelf ON bookshelf.book_id = book.book_id WHERE book.book_id = $book_id";

        $result = $mysqli->query($query);

        if ($result->num_rows == 1)
        {
            //Gogo
            $isValid = true;
            while ($row=$result->fetch_array())
            {
              $book_name = $row['book_name'];
              $status = $row['borrowed_status'];

              if ($status != "available")
              {
                $isValid = false;
                echo "Book is not valid";
              }
            }
        }
        else
        {
            $isValid = false;
            echo "No such book existed";
        }
    }
    else
    {
        $isValid = false;
        echo "Please fill all forms";
    }


?>




    <!-- <div id="wrapper"> -->
    <div id="actual_content">
      <form id="box" action="./borrow_save.php" method="post">
        
        <div id="leftbox" , class="split left">
        <input type="hidden" value='<?=$book_id?>' name="book_id">
          <label class="label"><strong>Book's name</strong></label>
          <input type="hidden" value='<?php echo $book_name;?>' name="book_name">
          <input class="bookname_textbox" type="text" style="top: 32px" value='<?=$book_name?>' disabled/><br />

          <label class="label" style="top: 110px"
            ><strong>Name-Lastname</strong></label
          >
          <input type="hidden" value='<?php echo $client_name;?>' name="client_name">
          <input
            class="bookname_textbox"
            type="text"
            style="top: 142px"
            value='<?php echo $client_name;?>' disabled
          /><br />

          <label class="label" style="top: 190px"
            ><strong>Telephon No.</strong></label
          >
          <input type="hidden" value='<?=$client_telno?>' name="client_telno">
          <input
            class="bookname_textbox"
            type="text"
            style="top: 252px"
            value='<?=$client_telno?>' disabled
          /><br />

          <label class="label" style="top: 270px"
            ><strong>Address</strong></label
          >
          <input type="hidden" value='<?=$client_address?>' name="client_address">
          <input
            class="bookname_textbox"
            type="text"
            style="top: 362px; width: 50%; height: 40px"
            value='<?=$client_address?>' disabled
          /><br />
        </div>

        <div id="rightbox" , class="split right">
          <label class="label"><strong>Time to pick up the book</strong></label
          ><br />
          <input type="hidden" value='<?=$client_return_time?>' name="client_return_time">
          <input
            class="bookname_textbox"
            type="text"
            style="left: 70px; top: 80px"
            value='<?=$client_return_time?>' disabled
          /><br />

          <!-- <label class="label" ><strong>Address</strong></label><br>
                <input class="bookname_textbox" type="text" style="left:70px;top: 80px;width:50%;height: 80px;"><br> -->

          <label class="label" style="top: 100px"
            ><strong>Track Number</strong></label
          >
          <input
            class="bookname_textbox"
            type="text"
            style="left: 70px; top: 190px" disabled
            
          /><br />

          <!-- <label class="label" style="top:170px"><strong>Time to pick up the book</strong></label><br>
                <input class="bookname_textbox" type="time" style="left: 70px;top: 260px;width:50%;"><br> -->

          <label class="label" style="top: 190px"
            ><strong>Duration of borrowing</strong></label
          ><input type="hidden" value='7' name="duration">
          <input
            class="bookname_textbox"
            type="text"
            value="7"
            style="left: 70px; top: 310px" disabled
          /><br />

          <div class="form-submit-button">
            <input type="submit" name="submit" value="Confirm Reserve" <?php if (!$isValid) { echo "disabled";} ?>/>
          </div>
        </div>
</form>
    </div>
    <!-- </div> -->
  </body>
  <footer><div style="padding: 10px">Contact Information</div></footer>
</html>
