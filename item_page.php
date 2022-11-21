<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index Page</title>
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
      position: fixed;
      bottom: 0px;
    }
    .subhead {
      width: auto;
      padding: 20px 10px 0 20px;

      margin-bottom: 10px;

      transition-duration: 0.4s;
      font: 30px Arial, sans-serif;
    }
    #announcement,
    #newbook {
      font-weight: bold;
      margin-bottom: 10px;
    }

    ul {
      list-style-type: none;
      width: 25%;
      margin: 0;
      padding: 1%;
      overflow: hidden;
      background-color: #eba92a;
    }
    a {
      text-decoration: none;
      text-align: justify;
    }

    img {
      padding: 0 20px 0;
      align-content: center;
    }
    #extra1,
    #extra2,
    #extra3,
    #extra4,
    #extra5 {
      padding: 0 100px 0;
    }
    html {
      scroll-behavior: smooth;
      overflow: scroll;
      overflow-x: hidden;
    }

    figure {
      display: inline-block;
    }
    figcaption {
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

      session_start();
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
    <div class="subhead" id="announcement">Announcement</div>

    <marquee behavior="scroll" direction="left" scrollamount="10">
      <figure>
        <img
          src="./assets/400.png"
          style="width: 250px; height: 168px"
          id="extra1"
        />
        <a
          href="https://library.siit.tu.ac.th/blog/2022/01/siit-library-prevention-of-covid19"
          ><figcaption>SIIT Library: Prevention of COVID-19</figcaption></a
        >
      </figure>
      <figure>
        <img
          src="\css326\assets\760.png"
          style="width: 250px; height: 172px"
          id="extra2"
        />
        <a href="https://library.siit.tu.ac.th/th/blog/2022/09/openathens"
          ><figcaption>OpenAthens</figcaption></a
        >
      </figure>
      <figure>
        <img
          src="\css326\assets\112.png"
          style="width: 250px; height: 193px"
          id="extra3"
        />
        <a
          href="https://library.siit.tu.ac.th/th/blog/2022/11/data-science-from-scratch--first-principles-with-python"
          ><figcaption>Top Book Borrowed!</figcaption></a
        >
      </figure>
      <figure>
        <img
          src="\css326\assets\132.png"
          style="width: 250px; height: 133px"
          id="extra4"
        />
        <a href="https://library.siit.tu.ac.th/blog/2022/07/newscenter"
          ><figcaption>NEWSCenter</figcaption></a
        >
      </figure>
      <figure>
        <img
          src="\css326\assets\100.png"
          style="width: 250px; height: 136px"
          id="extra5"
        />
        <a
          href="https://library.siit.tu.ac.th/blog/2021/10/ethesis-format-checking-services"
          ><figcaption>E-thesis format checking services</figcaption></a
        >
      </figure>
    </marquee>
    <br />

    <div>
      <div class="subhead" id="newbook">New Book Arrived !!!</div>
      <figure>
        <img src="Harry Potter and the Philosopher's Stone" style="width: 150px; height: 199px" />
        <figcaption>Harry Potter and the Philosopher's Stone </figcaption>
      </figure>
      <figure>
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSyDaN5FijaQ_3OuhFtfYLkXDkAfv07RnKNiNwUzbvOjAE2V9EQ" style="width: 150px; height: 199px" />
        <figcaption>Harry Potter and the Chamber of Secrets</figcaption>
      </figure>
      <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh1m68UISOwEUsmJVsXRqkQRxDDikdklLlJJL8P00ReMgJU65o" style="width: 150px; height: 199px" />
        <figcaption>Harry Potter and the Prisoner of Azkaban</figcaption>
      </figure>
      <figure>
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSQ1bZhaGKFZeAQjDSG-l3u10L6cEVo0V5aq0UaPlp_JInnCuoR" style="width: 150px; height: 199px" />
        <figcaption>Harry Potter and the Goblet of Fire</figcaption>
      </figure>
      <figure>
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQCPNZndZABecOc65sVX1iBUpRMyNpniSEpGldvnsvrquvfPe_h" style="width: 150px; height: 199px" />
        <figcaption>Harry Potter and the Order of the Phoenix</figcaption>
      </figure>
      <br />
      <br />
      <br />
      <br />
    </div>
  </body>
  <footer><div style="padding: 10px">Contact Information</div></footer>
</html>
