<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/homepage.css">
</head>
<body>

  <!--navBar--> 
  <nav>
<div class="logo">SUPER METRO</div>
<div class="openMenu"><i class="bi bi-list"></i></div>

    <ul class="menu"> 
        <li><a>Hi , Traveller <span><?php echo $_SESSION['user_name'] ?></a></li>
        <li><a href="homepage.php">Home</a></li>
        <i class="fa fa-camera-retro fa-lg"></i> 
        <div class="closeMenu"><i class="bi bi-x"></i></div>
        <li><a href="login_form.php">Sign In /Register</a></li>
    </ul>
  </nav>  
  <!--end of navBar-->
  <!--main-display-->
  <div class="main-display">
    <div class="bus-image">
        <img src="images/main.jpg" height="490px" width="" alt="bus-image">
    </div>
    
    <div class="text-box">
        <div class="wrapper">
            <div class="typing-demo">
            Welcome dear customer
            </div>
        </div>
    </div>
    
  </div>
<!--searchBar-->
<div class="searchBar">
<h1>BOOK <i class="bi bi-caret-right"></i>  PAY   <i class="bi bi-caret-right"></i>   TRAVEL </h1>

<div class="form">
 <form action="searchbus.php" method="post">
        <button name="search_bus" class="search-btn">search bus</button>
  </div>
     </div>
</div>
</div>


<!--end of searchBar-->

<!--ourServices-->
<h2>Our Services</h2>
<div class="services">
    <div class="card">
        <img src="images/wifi.png" width="50px" height="50px" alt="">
        <div class="cardText">
        <h3>full Amenities</h3>
        <p>We offer WIFI connection <br>
           Televisions available behind each seat <br>
           Charging ports all around <br>
        </p>
        </div>
    </div>

    <div class="card">
        <img src="images/car-seat-belt-icon.png" width="50px" height="50px" alt="">
        <div class="cardText">
        <h3>Safety Guaranteed</h3>
        <p>All our vehicles are road worthy <br>
           Safety belts on each seats <br>
           Exit points all over the vehicles
        </p>
        </div>
    </div>
    <div class="card">
        <img src="images/check-time-icon.png" width="50px" height="50px" alt="">
        <div class="cardText">
        <h3>Always on time</h3>
        <p>All our departures and arrivals are always on time unless conditions beyond our control</p>
        </div>
    </div>

    <div class="card">
        <img src="images/comfortable-comfort-icon.png" width="50px" height="50px" alt="">
        <div class="cardText">
        <h3>Comfort Guaranteed</h3>
        <p>Bucket seats <br>
           Recliner seats <br>
           Air conditioned buses
        </p>
        </div>
    </div>
    <div class="card">
        <img src="images/medal.png" width="50px" height="50px" alt="">
        <div class="cardText">
        <h3>Best in EA</h3>
        <p>Voted best transporters in 2022<br>
           Awarded for best parcel delivery<br>
           Awarded for best maintained bus
        </p>
        </div>
    </div>
    <div class="card">
        <img src="images/lipa na mpesa.png" width="50px" height="50px" alt="">
        <div class="cardText">
        <h3>Easy payment</h3>
        <p>Mpesa payment available <br>
           Trusted mode of payment <br>
           Fast and easy Booking
        </p>
        </div>
    </div>


</div>
<!--end of Services-->
<!--topDestinations-->
<h2>Top Destinations</h2>
<div class="topDestinations">

            <div class="tdcard">
                <img src="images/thika.jpg" width="400px" height="250px" alt="">
                <div class="tdcardText">
                    <h3>Thika</h3>
                    <p>ksh.80</p>
                    </div>
                </div>

                <div class="tdcard">
                    <img src="images/kitengela.jpg" width="400px" height="250px" alt="">
                    <div class="tdcardText">
                        <h3>KITENGELA</h3>
                        <p>ksh.100</p>
                        </div>
                    </div>

                    <div class="tdcard">
                        <img src="images/juja.jpg" width="400px" height="250px" alt="">
                        <div class="tdcardText">
                            <h3>JUJA</h3>
                            <p>ksh.70</p>
                            </div>
                        </div>

                        <div class="tdcard">
                            <img src="images/ruiru.jpg" width="400px" height="250px" alt="">
                            <div class="tdcardText">
                                <h3>RUIRU</h3>
                                <p>ksh.60</p>
                                </div>
                            </div>
    </div>
</div>
<!--end of topDestinations-->

<!--footer-->
<footer class="footer">

    <div class="footer-row">
        <div class="footer-col">
            <h1>Stages</h1>
            <ul>
                <li>
                    <a ><p>Nairobi Office <br>
                           Supermetro plaza,<br>
                           Archives,Nairobi,<br>
                           071234567890
                    
                    </p></a>
                </li>
             
            </ul>
            </div>
            
            <div class="footer-col">
                <h1>Follow Us</h1>
                <ul>
                    <li>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-snapchat"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-telegram"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </li>
                </ul>
                </div>
            
                <div class="footer-col">
                    <h1>Top Destinations</h1>
                    <ul>
                        <li>
                            <a>Nairobi CBD - Thika</a>
                        </li>
                        <li>
                            <a>Nairobi CBD - Kitengela</a>
                        </li>
                        <li>
                            <a>Nairobi CBD - Juja</a>
                        </li>
                        <li>
                            <a>Nairobi CBD - Ruiru</a>
                        </li>
                    </ul>
                </div>
    </div>
    
        <ul class="footer-end">
            <li><a href="#">Supermetro- All Rights Reserved</p></a></li>
        </ul>
     
    </footer>
<!--end of footer-->
</body>
<script src="index.js"></script>
</html>