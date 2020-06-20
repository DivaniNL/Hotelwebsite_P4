<?php
include_once 'query.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Go Exploore</title>
  <meta name="author" content="Dylan van Nierop"/>
  <meta name="description" content="Go Exploore, trusted since 2001. Best Tours!">
  <meta name="keywords" content="exploore, tours, train, plane, tickets, not-free-but-good" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="favicon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script defer src="fontawesome/js/all.js"></script>
  <meta name="theme-color" content="#fafafa"/>
</head>
<body>
  <main>
    <section id="start-adventure">
      <header>
        <div id="mid">
          <div id="headertop">
            <div id="telephone">
              <i class="fas fa-phone-alt headerlogos"></i>+123 4567 8900
            </div>
            <div id="mail">
              <i class="fas fa-envelope headerlogos"></i> free @psdfreebies.com
            </div>
            <div class='right'>
              <div id="logos">
                <i class="fab fa-facebook-f headerlogos"></i>&nbsp;&nbsp;&nbsp;
                <i class="fab fa-google-plus-g headerlogos"></i>&nbsp;&nbsp;&nbsp;
                <i class="fab fa-vk headerlogos"></i>&nbsp;&nbsp;&nbsp;
                <i class="fab fa-youtube headerlogos"></i>
              </div>
              <div id="user">
                <i class="fas fa-user headerlogos"></i> Login
              </div>
              <div id="key">
                <i class="fas fa-key headerlogos"></i> Sign up
              </div>
            </div>
          </div>
          <hr>
          <div id="headerbottom">
            <div id="logo">
              <img id="logoimg" src="img/Exploore.png"><br><span style="font-size: 7.8px">CREATIVE TAGLINE HERE</span>
            </div>
            <nav id="navigation">
              <button id="hamburger"></button>
              <!-- EXTRA DIV OM REVERSE LI TE VOORKOMEN -->
              <ul class="hidden" id="menu">
                <li>
                  <a title='contact'>CONTACT</a>
                </li>
                <li>
                  <a title='blog'>BLOG</a>
                </li>
                <li>
                  <a title='about'>ABOUT</a>
                </li>
                <li>
                  <a title='discount'>DISCOUNT</a>
                </li>
                <li>
                  <a title='destination'>DESTINATION</a>
                </li>
                <li>
                  <a title='home' src='index.html'>HOME</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <article id="description" class="show">
        <div id="titletext">
          <h1>Start Your Greatest</h1><br>
          <h5>ADVENTURE WITH US!</h5><Br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam.</p>
          <button id="clickhere">CLICK HERE</button>
          </div>
      </article>
    </section>
    <section id="search">
      <content>
        <h2> BOOKINGS</h2>
        <br>

        <?php
          $conn = new mysqli("localhost", "u534128_hotel", "!Chessy00", "u534128_bookings");
          $selectquery ="SELECT * FROM booking";
          echo $selectquery;
          $result  = mysqli_query($conn, $selectquery) or die(mysqli_error($conn));
          echo "<table border=1><tr>
          <th>Check in</th>
          <th>Check out</th>
          <th>Adults</th>
          <th>Children</th>
          </tr>
          ";
          while($row = $result->fetch_assoc()){
          echo "<tr><td>".$row['check_in']."</td><td>".$row['check_out']."</td><td>".$row['adults']."</td><td>".$row['children']."</td></tr>";
        }
        echo "</table>";
          ?>
      </content>
    </section>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/typehead.js/0.9.3/typeahead.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>