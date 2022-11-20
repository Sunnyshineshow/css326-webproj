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
  </style>
  <header>
    <div style="padding: 20px">Librariann</div>
  </header>
  <body>

    <div>
      <a href="./item_page.html"
        ><button class="header_button"><strong>Item</strong></button></a
      ><a href="./borrow_page.php"
        ><button class="header_button"><strong>Borrow</strong></button></a
      ><a href="book_page.php"
        ><button class="header_button"><strong>Books</strong></button></a
      ><a href="SignIn_page.php"
        ><button class="header_button"><strong>Login</strong></button></a
      >
    </div>

    <?php
    $Book_name = $_POST["Book_name"];
    $User_nameandlastname = $_POST["User_namenlastname"];
    $Book_ID = $_POST["Book_ID"];
    $User_telno = $_POST["User_telno"];
    $User_address = $_POST["User_address"];
    $User_time = $_POST["User_time"];

    echo $Book_name. " ". $User_nameandlastname. " ". $Book_ID. " ". $User_telno. " ". $User_address. " ". $User_time. " ";
    
    ?>




    <!-- <div id="wrapper"> -->
    <div id="actual_content">
      <div id="box">
        <div id="leftbox" , class="split left">
          <label class="label"><strong>Book's name</strong></label>
          <input class="bookname_textbox" type="text" style="top: 32px" /><br />

          <label class="label" style="top: 110px"
            ><strong>Name-Lastname</strong></label
          >
          <input
            class="bookname_textbox"
            type="text"
            style="top: 142px"
          /><br />

          <label class="label" style="top: 190px"
            ><strong>Telephon No.</strong></label
          >
          <input
            class="bookname_textbox"
            type="text"
            style="top: 252px"
          /><br />

          <label class="label" style="top: 270px"
            ><strong>Address</strong></label
          >
          <input
            class="bookname_textbox"
            type="text"
            style="top: 362px; width: 50%; height: 40px"
          /><br />
        </div>

        <div id="rightbox" , class="split right">
          <label class="label"><strong>Time to pick up the book</strong></label
          ><br />
          <input
            class="bookname_textbox"
            type="text"
            style="left: 70px; top: 80px"
          /><br />

          <!-- <label class="label" ><strong>Address</strong></label><br>
                <input class="bookname_textbox" type="text" style="left:70px;top: 80px;width:50%;height: 80px;"><br> -->

          <label class="label" style="top: 100px"
            ><strong>Track Number</strong></label
          >
          <input
            class="bookname_textbox"
            type="text"
            style="left: 70px; top: 190px"
          /><br />

          <!-- <label class="label" style="top:170px"><strong>Time to pick up the book</strong></label><br>
                <input class="bookname_textbox" type="time" style="left: 70px;top: 260px;width:50%;"><br> -->

          <label class="label" style="top: 190px"
            ><strong>Duration of borrowing</strong></label
          >
          <input
            class="bookname_textbox"
            type="text"
            style="left: 70px; top: 310px"
          /><br />

          <div class="form-submit-button">
            <input type="submit" name="submit" value="Confirm Reserve" />
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </body>
  <footer><div style="padding: 10px">Contact Information</div></footer>
</html>
