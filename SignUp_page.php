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
    .user_information {
      width: 25%;
      height: 20px;
      position: absolute;
      background-color: #bebdbd;
      left: 300px;
      padding: 10px;
      margin: 10px 8px;
    }
    .user_information:hover {
      background-color: #d2d0d0;
      border: 2px solid;
    }
    .user_information:focus {
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

    .submit-button {
      top: 360px;
      left: 350px;
      height: 40px;
      width: 200px;
      position: absolute;
      text-align: center;
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
    <!-- <div id="wrapper"> -->
    <form id="actual_content" action="" method="post">
      <div id="box">
        <div id="leftbox" , class="split left">
          <label class="label"><strong>Name</strong></label>
          <input class="user_information" type="text" name="fname" style="top: 32px" /><br />

          <label class="label" style="top: 110px"
            ><strong>Lastname</strong></label
          >
          <input
            class="user_information"
            type="text"
            style="top: 142px"
            name="lname"
          /><br />

          <label class="label" style="top: 190px"
            ><strong>Occupation</strong></label
          >
          <input
            class="user_information"
            type="text"
            style="top: 252px"
          /><br />

          <label class="label" style="top: 270px"
            ><strong>Telephone No.</strong></label
          >
          <input
            class="user_information"
            type="text"
            style="top: 362px"
            name="tel_no"
          /><br />
        </div>

        <div id="rightbox" , class="split right">
          <label class="label"><strong>Username</strong></label
          ><br />
          <input class="user_information" type="text" style="top: 32px" name="username" /><br />

          <label class="label" style="top: 100px"
            ><strong>Password</strong></label
          ><br />
          <input
            class="user_information"
            type="password"
            style="top: 142px"
            name="password"
          /><br />

          <label class="label" style="top: 170px"
            ><strong>Confirm Password</strong></label
          ><br />
          <input
            class="user_information"
            type="password"
            style="top: 252px"
            name="cfpassword"
          /><br />

          <div class="submit-button">
            <input type="submit" name="submit" value="Submit" />
          </div>
        </div>
      </div>
  </form>
  </body>
  <footer><div style="padding: 10px">Contact Information</div></footer>

  <?php 
  if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cfpassword']) &&isset($_POST['fname']) &&isset($_POST['lname']) &&isset($_POST['tel_no']))
  {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tel_no = $_POST['tel_no'];

    $q = "INSERT INTO user (username,password,fname,lname,tel_no) VALUES ('$username', PASSWORD('$password'), '$fname','$lname','$tel_no')";

    if(!$mysqli->query($q))
    {
      echo $mysqli->error;
    }
    //Navigate Here

    //header("Location: ./SignIn_page.php");
  }
  ?>
</html>
