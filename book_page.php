<?php 
require_once('connect.php');
session_start(); 

?>

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
      bottom: 0px;
    }

    .grid-container {
      display: grid;
      grid-template-columns: 337px 337px 337px 337px;
      padding: 10px;
    }
    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      /* border: 1px solid rgba(0, 0, 0, 0.8); */
      padding: 20px;
      font-size: 30px;
      text-align: center;
    }
  </style>
  <header>
    <div style="padding: 20px">Librariann</div>
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
    <div id="actual_content">
      <div
        style=" padding: 20px; font-size: 30px; font-family: Arial, Helvetica, sans-serif;">

        <form id="search_area" style="margin-left: 20px; margin-top: 20px" action="" method="get">
        <h5>Search for book</h5>
          <input
            type="text"
            placeholder="Type to search..."
            style="
              width: 30%;
              height: 30px;
              font-size: 20px;
              margin-right: 10px;
            " name="search"
            value='<?php if (isset($_GET['search']) && $_GET['search']) {echo $_GET['search'];}?>'
          />
          <input type="submit" style="padding: 9px" />
        </form>
      </div>
      <div style="padding: 20px">
        <div class="grid-container">
          <!-- Book -->
          <?php 
          

          if(isset($_GET['search']) && $_GET['search'])
          {
            $search = $_GET['search'];
            $query2 = "SELECT * from book WHERE book_name LIKE '%$search%'";
            $result = $mysqli->query($query2);
          }
          else
          {
            $query = "SELECT * from book";
            $result = $mysqli->query($query);
          }

          while($row=$result->fetch_array())
          {
            echo "<div class=\"grid-item\">
            <div>
              <img
                src=\"".$row['book_img']."\"
                alt=\"book\"
                width=\"150px\"
              />
            </div>
            <div>".$row['book_name']."</div>
          <div>ID: ".$row['book_id']."</div>
          </div>";
          }
          
          ?>
          
          <!-- <div class="grid-item">
            <div>
              <img
                src="assets/book_detail_large (1).gif"
                alt="book"
                width="150px"
              />
            </div>
            <div>Citrus Vol.2</div>
          </div>
          <div class="grid-item">
            <div>
              <img
                src="assets/book_detail_large (2).gif"
                alt="book"
                width="150px"
              />
            </div>
            <div>Citrus Vol.3</div>
          </div>
          <div class="grid-item">
            <div>
              <img src="assets/9781626922174.jfif" alt="book" width="150px" />
            </div>
            <div>Citrus Vol.4</div>
          </div>
          <div class="grid-item">
            <div>
              <img
                src="assets/Harry_Potter_and_the_Philosopher's_Stone_Book_Cover.jpg"
                alt="book"
                width="150px"
              />
            </div>
            <div>Harry potter and the Philosopher's Stone</div>
          </div>
          <div class="grid-item">
            <div>
              <img
                src="assets/book_detail_large (3).gif"
                alt="book"
                width="150px"
              />
            </div>
            <div>นิทานพันดาว</div>
          </div>
          <div class="grid-item">
            <div>
              <img src="assets/400716.jpg" alt="book" width="150px" />
            </div>
            <div>Introduction to the Theory of Computation</div>
          </div> -->
        </div>
      </div>
    </div>
  </body>
  <footer><div style="padding: 10px">Contact Information</div></footer>
</html>
