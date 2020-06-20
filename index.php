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
        <h2> FIND HOTELS</h2>
        <br>
        <form method="POST" action="index.php">
          <table>
            <tr class="labels">
              <td style='padding-left: 10px;'>
                <label>Where</label>
              </td>
              <td style='padding-left: 10px;'>
                <label>Check In</label>
              </td>
              <td style='padding-left: 10px;'>
                <label>Check Out</label>
              </td>
              <td style='padding-left: 10px;'>
                <label>Adult</label>
              </td>
              <td style='padding-left: 10px;'>
                <label>Child</label>
              </td>
            </tr>
            <tr>
            <td class='alwayshundred'><span class="labels2">Where</span>
                <input class='db_where' name="query" style="width:229px" type="text" required>
              </td>
                <input type= "hidden" id="hidden_field" name="hidden_field">
              <td><span class="labels2">Check In</span>
                <input class='db_check_in' name="checkin" style="width:167px" type="date" placeholder="DD-MM-YYYY" required>
              </td>
              <td><span class="labels2">Check Out</span>
                <input class='db_check_out' name="checkout" style="width:167px" type="date" placeholder="DD-MM-YYYY" required>
              </td>
              <td><span class="labels2">Adult</span>
                <input class='db_adult' name="adult" style="width:107px" type="number" min= 0 placeholder="1" required>
              </td>
              <td><span class="labels2">Child</span>
                <input class='db_child' name="child" style="width:107px" type="number" min= 0 placeholder="0" required>
              </td>
              <td class="db_button">
                <input type="submit" name ="submit" placeholder="submit" id="clickhere" style='background-color: #333; height: 50px; margin-left: 15px; color: white;'value="CLICK HERE">
              </td>
            </tr>
          </table>
        </form>
        <?php
        $hotel_id = $_POST['hidden_field'];
        echo $hotel_id;
        echo "test";
        if(isset($_POST['submit'])){
        echo "test2";
          $conn = new mysqli("localhost", "u534128_hotel", "!Chessy00", "u534128_bookings");
          $hotel_id_two = mysqli_real_escape_string($conn, $hotel_id);
          $where_input = mysqli_real_escape_string($conn, $_POST['query']);
          $checkin_input = mysqli_real_escape_string($conn, $_POST['checkin']);
          $checkout_input = mysqli_real_escape_string($conn, $_POST['checkout']);
          $adult_input = mysqli_real_escape_string($conn, $_POST['adult']);
          $child_input = mysqli_real_escape_string($conn, $_POST['child']);
          echo "te";
          $invoerquery ="INSERT INTO `booking`(hotel_id, check_in,check_out,adults, children) VALUES($hotel_id_two,'$checkin_input','$checkout_input',$adult_input,$child_input)";
          echo $invoerquery;
          mysqli_query($conn, $invoerquery) or die(mysqli_error($conn));
          }
          ?>
      </content>
    </section>
    <section class="split">
      <figure id='left' >
      </figure>
      <content id='right'>
        <article>
          <h1>Trusted since 2001<br>We are Exploore</h1><br>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</h4>
          <div class='checks'>
            <table>
              <tr>
                <td>
                  <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                </td>
                <td class='rightofchecks'>
                  <span><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do
                      eiusmod</strong></span>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                </td>
                <td class='rightofchecks'>
                  <span><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<Br> sed do
                      eiusmod</strong></span>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                </td>
                <td class='rightofchecks'>
                  <span><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do
                      eiusmod</strong></span>
                </td>
              </tr>
            </table>
          </div>
        </article>
      </content>
    </section>
    <section id='below_split'>
      <article>
        <h1>Our Best Services<br>We are Travel Agent</h1>
      </article>
      <section class="inner_split">
        <content id='inner_left'>
          <article>
            <div class='checks'>
              <table>
                <tr>
                  <td class="icons" style="text-align: right; padding-right: 15px;">
                    <i class="fas fa-plane"
                      style="color: #00a4ff; font-size:225%; rotate: -45deg; padding-top: 2px;"></i>
                  </td>
                  <td class='rightofchecks'>
                    <h3 style="font-weight: 50; margin-bottom: 5px">Lorem Ipsum Dolor Sit</h3><span>Lorem ipsum dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod</strong></span>
                  </td>
                </tr>
                <tr>
                  <td class="icons" style="text-align: right; padding-right: 15px;">
                    <i class="fas fa-university" style="color: #00a4ff; font-size:315%; padding-top: 2px;"></i>
                  </td>
                  <td class='rightofchecks'>
                    <h3 style="font-weight: 50; margin-bottom: 5px">Lorem Ipsum Dolor Sit</h3><span>Lorem ipsum dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod</strong></span>
                  </td>
                </tr>
                <tr>
                  <td class="icons" style="text-align: right; padding-right: 20px;">
                    <i class="fas fa-utensils" style="color: #00a4ff; font-size:275%;"></i>
                  </td>
                  <td class='rightofchecks'>
                    <h3 style="font-weight: 50; margin-bottom: 5px">Lorem Ipsum Dolor Sit</h3><span>Lorem ipsum dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod</strong></span>
                  </td>
                </tr>
              </table>
            </div>
          </article>
        </content>
        <content id='inner_right'>
          <article>
            <div class='checks'>
              <table>
                <tr>
                  <td class="icons" style="text-align: right; padding-right: 25px;">
                    <i class="fas fa-train" style="color: #00a4ff; font-size:275%; padding-top: 2px;"></i>
                  </td>
                  <td class='rightofchecks'>
                    <h3 style="font-weight: 50; margin-bottom: 5px">Lorem Ipsum Dolor Sit</h3><span>Lorem ipsum dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod</strong></span>
                  </td>
                </tr>
                <tr>
                  <td class="icons" style="text-align: right; padding-right: 15px">
                    <i class="fas fa-bicycle" style="color: #00a4ff; font-size:310%; padding-top: 2px;"></i>
                  </td>
                  <td class='rightofchecks'>
                    <h3 style="font-weight: 50; margin-bottom: 5px">Lorem Ipsum Dolor Sit</h3><span>Lorem ipsum dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod</strong></span>
                  </td>
                </tr>
                <tr>
                  <td class="icons" style="text-align: right; padding-right: 20px;">
                    <i class="far fa-eye" style="color: #00a4ff; font-size:275%;"></i>
                  </td>
                  <td class='rightofchecks'>
                    <h3 style="font-weight: 50; margin-bottom: 5px">Lorem Ipsum Dolor Sit</h3><span>Lorem ipsum dolor
                      sit amet, consectetur adipiscing elit, sed do eiusmod</strong></span>
                  </td>
                </tr>
              </table>
            </div>
          </article>
        </content>
      </section>
    </section>
    <section id='three_tours'>
      <h2>Trusted Since 2001<br>We are Travel Agent</h2>
      <ul>
        <li>
          <div class='smaller-top'>
            <div class='icon'><i class="fas fa-car-alt"></i></div>
            <h3>Low Budget Trip</h3>
          </div>
          <div class='bigger'>
            &dollar;500
          </div>
          <div class='smaller-bottom'>
            <div class='checkmarks'>
              <table>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Lorem ipsum dolor</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Sit amet consect</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Eturadipiscing elit</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Psum dolor</strong></span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </li>
        <li>
          <div class='smaller-top'>
            <div class='icon'><i class="fas fa-train"></i></div>
            <h3>Mid Budget Trip</h3>
          </div>
          <div class='bigger'>
            &dollar;800
          </div>
          <div class='smaller-bottom'>
            <div class='checkmarks'>
              <table>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Lorem ipsum dolor</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Sit amet consect</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Eturadipiscing elit</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>psum dolor</strong></span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </li>
        <li>
          <div class='smaller-top'>
            <div class='icon'><i class="fas fa-plane"></i></div>
            <h3>High Budget Trip</h3>
          </div>
          <div class='bigger'>
            &dollar;1000
          </div>
          <div class='smaller-bottom'>
            <div class='checkmarks'>
              <table>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Lorem ipsum dolor</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Sit amet consect</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>Eturadipiscing elit</strong></span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="fas fa-check-circle" style="color: #00a4ff; font-size: 130%"></i>
                  </td>
                  <td>
                    <span><strong>psum dolor</strong></span>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section id='no_sym_split'>
      <section id='inner_split'>
        <section id='left'>
          <img id='left_img' src="img/no_sym_split.png">
        </section>
        <section id='right'>
          <h2>&hairsp; Trusted Since 2001<br>We are Travel Agent</h2>
          <div id='bar_horizontal'>
            <div id='arrow_1'>
              <i class="fas fa-plane" style="color: #ffffff;"></i> <span>Flight</span>
            </div>
            <div id='arrow_2'>
              <i class="fas fa-car-alt" style="color: #000000;"></i> <span>Cab</span>
            </div>
            <div id='arrow_3'>
              <i class="fas fa-university" style="color: #000000;"></i> <span>Hotel</span>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla</p>
          <div id="center_res"><span class='outer'><a class='btn' title='click here'>CLICK HERE</a></span></div>
        </section>
      </section>
    </section>
    <section id='pack_and_go'>
      <h2>Pack and Go<br>Awesome Tours</h2>
      <ul>
        <li>
          <img src="img/li1_pag.png" alt='this image contains white buildings on a shore.'><br>
          <span class='nights'>7 Day + 6 Night</span>
          <span class='city'>New York + Paris</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
          <span class='money'>&dollar;600</span>
          <span><a class='btn' title='book now'>BOOK NOW</a></span>
        </li>
        <li>
          <img src="img/li2_pag.png" alt='this image contains three temples with stairs'><br>
          <span class='nights'>7 Day + 6 Night</span>
          <span class='city'>New York + Paris</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing <br>elit. Lorem ipsum dolor sit</span>
          <span class='money'>&dollar;1000</span>
          <span><a class='btn' title='book now'>BOOK NOW</a></span>
        </li>
        <li>
          <img src="img/li3_pag.png" alt='this image contains two kids in a rowingboat near a pier'><br>
          <span class='nights'>7 Day + 6 Night</span>
          <span class='city'>New York + Paris</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
          <span class='money'>&dollar;800</span>
          <span><a class='btn' title='book now'>BOOK NOW</a></span>
        </li>
      </ul>
    </section>
    <section id='go_explore'>
      <h2>Trusted Since 2001<br>GO EXPLOORE</h2>
      <ul>
        <li>
          <img src="img/go_explore_1.png" alt='this image contaisn a train which was build in 2007'><br>
          <span class='btn'><a title='book now'>BOOK NOW</a></span><br>
          <span class='city'>Lorem Ipsum Dolor</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
            adipiscing</span>
        </li>
        <li>
          <img src="img/go_explore_2.png" alt='this image contains a lime-colored car near the beach'><br>
          <span class='btn'><a title='book now'>BOOK NOW</a></span><br>
          <span class='city'>Lorem Ipsum Dolor</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
            adipiscing</span>
        </li>
        <li>
          <img src="img/go_explore_3.png" alt='this image contains two kids washing theirself in a cave.'><br>
          <span class='btn'><a title='book now'>BOOK NOW</a></span><br>
          <span class='city'>Lorem Ipsum Dolor</span>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
            adipiscing</span>
        </li>
      </ul>
    </section>
    <section id='new_york_paris'>
      <article>
        <figure><img src="img/title.png" alt='this image contains a swimming pool with two seats and a umbrella made of straw'></figure>
        <h5>7 Day + 6 Night</h5>
        <div id='hundred-hidden' style='display: inline-block;'>
          <table class="t_one">
            <tr>
              <Td>
                <i class="fas fa-plane"
                  style="color: #00a4ff; font-size:200%; transform: rotate(-45deg); padding-top: 2px; margin-bottom: 5px;"></i><br>
                Flight
              </Td>
              <Td>
                <i class="fas fa-university"
                  style="color: #00a4ff; font-size:200%; padding-top: 2px; margin-bottom: 5px;"></i><br>
                Hotel
              </Td>
              <Td>
                <i class="fas fa-car-alt"
                  style="color: #00a4ff; font-size:200%; padding-top: 2px; margin-bottom: 5px; "></i><br>
                Transport
              </Td>
            </tr>
          </table>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.</p>
        <table class='t_two'>
          <tr>
            <Td class="money2">
              &dollar;1000
            </Td>
            <Td>
              <a title='book now'>BOOK NOW</a>
            </Td>
          </tr>
        </table>
      </article>
    </section>
    <section id='reviews'>
      <content>
        <h2>Customer Reviews<br>We Are Travel Agent</h2>
        <br>
        <span>”Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur.”</span>
        <br>
        <div class='stars'>
          <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i
            class="far fa-star"></i>
        </div>
        <table>
          <tr>
            <Td>
              <figure>
              </figure>
            </Td>
            <Td>
              <article>
                <h3>John Smith</h3><span>Solo Traveller</span>
              </article>
            </Td>
          </tr>
        </table>
      </content>
    </section>
    <section id='contact'>
      <figcaption>
        <h2>Start Your Journey<br>Contact Us</h2>
        <i class="fas fa-map-marker-alt" style="color: #f0d839"></i>
      </figcaption>
      <table>
        <ul>
          <li>
            <figure>
              <i class="far fa-envelope" style="font-size: 3vw; font-weight: 100;"></i>
            </figure>
          </li>
          <li>
            <article>
              <h3>EMAIL</h3><span>free @psdfreebies.com<br>free @psdfreebies.com</span>
            </article>
          </li>
          <!---->
          <li>
            <figure>
              <i class="fas fa-mobile-alt" style="font-size: 3vw; font-weight: 100;"></i>
            </figure>
          </li>
          <li>
            <article>
              <h3>CALL US !</h3><span>+123 456 7890<br>+123 456 7890</span>
            </article>
          </li>
          <!---->
          <li>
            <figure>
              <i class="fas fa-map-marked-alt" style="font-size: 2vw; font-weight: 100;"></i>
            </figure>
          </li>
          <li>
            <article>
              <h3>ADDRESS</h3><span>123, Main Road, New City,<br>My Country 123456</span>
            </article>
          </li>
        </ul>
      </table>
    </section>
    <section id='circles'>
      <ul>
        <li>
          <i class="fab fa-facebook-f"></i>
        </li>
        <li>
          <i class="fab fa-google-plus-g"></i>
        </li>
        <li>
          <i class="fab fa-vk"></i>
        </li>
        <li>
          <i class="fab fa-youtube"></i>
        </li>
        <li>
          <i class="fab fa-linkedin-in"></i>
        </li>
        <li>
          <i class="fab fa-digg"></i>
        </li>
        <li>
          <i class="fab fa-deviantart"></i>
        </li>
      </ul>
    </section>
    <footer>
      Copyright 2019, All Right Reserved
    </footer>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/typehead.js/0.9.3/typeahead.min.js"></script>
        <script>
            $(document).ready(function(){
                $('input.db_where').typeahead({
                    name: 'db_where',
                    remote: 'query.php?query=%QUERY',
                    valueKey: 'value'
                }).on('typeahead:selected', function(event, selection){
                    $("#hidden_field").val(selection.hotel_id)
                   
            });
          });
        </script>
  <script src="js/main.js"></script>
</body>
</html>