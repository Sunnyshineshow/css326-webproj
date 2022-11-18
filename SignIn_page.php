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

    .Usernamenpass_textbox {
      width: 40%;
      height: 50px;
      background-color: white;
      display: block;
      margin: auto;
      width: 50%;
      padding: 10px;
    }

    .Usernamenpass_textbox:hover {
      background-color: white;
      color: #827676;
      border: 2px solid #827676;
    }


    .sign_in_button {
      height: 50px;
      background-color: white;
      display: block;
      margin: auto;
      width: 20%;
      padding: 10px;
    }

    .sign_in_button:hover {
      background-color: white;
      color: #827676;
      border: 2px solid #827676;
    }

    .submit_button {
      width: 25%;
      height: 50px;
      background-color: #e4960e;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 25px;
      font: bold;
      display: block;
      margin: 0 auto;
      padding: 10px;
    }

    .submit_button:hover {
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
  </style>

  <header>
    <div style="padding: 20px">Librariann</div>
  </header>
  
  <body>
    <div>
      <button class="header_button"><strong>Item</strong></button
      ><a href="./borrow_page.html"><button class="header_button"><strong>Borrow</strong></button
      ></a><button class="header_button"><strong>Books</strong></button
      ><button class="header_button"><strong>Login</strong></button>
    </div>

    <FORM action="user_page.html" method="POST">
    <div>
      <br /><input
        class="Usernamenpass_textbox"
        type="text"
        placeholder="Username" name="username"
      /><br /><br />
      <input class="Usernamenpass_textbox" type="password" placeholder="Password" name="password"/>
    </div>
    <div style="text-align: center">
      <br />
      <input type="submit" class="submit_button" value="log in" style="text-align: center;"> 
      
      <div style="margin: 10px"><a href=" ">Forget the password</a></div>
      
    </div>

    <div>
      <a href="  "> <button class="sign_in_button"><strong>Sign up</strong></button></a>
    </div>
  
  </FORM>
  </body>
  
  <footer><div style="padding: 10px">Contact Information</div></footer>
</html>
