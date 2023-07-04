<?php
include("config.php");
session_start();
if (isset($_POST['submit']))
{
   $name=mysqli_real_escape_string($conn,$_POST['name']);
   $code=mysqli_real_escape_string($conn,$_POST['code']);
   $telephonenumber=($_POST['telephonenumber']);
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $select = "SELECT * FROM searchbuses WHERE email = '$email' && telephonenumber ='$telephonenumber' && 
   name = '$name' && code = '$code'";
   $result = mysqli_query($conn,$select);
   if(mysqli_num_rows($result) > 0){

    $error[] = 'user already booked';

 }else{

       $insert = "INSERT INTO searchbuses(name, email,telephonenumber,code) VALUES('$name','$email',
       '$telephonenumber','$code')";
       mysqli_query($conn, $insert);  
       header('location:ticket.php');
 }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" con tent="width=device-width, initial-scale=1.0">
    <title>buses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel='stylesheet' href='style/buses.css'>
</head>
<body>
     <!--navBar--> 
  <nav>
<div class="logo">SUPER METRO</div>
<div class="openMenu"><i class="bi bi-list"></i></div>

    <ul class="menu">
        <li><a href="homepage.php">Home</a></li>
        <i class="fa fa-camera-retro fa-lg"></i> 
        <li><a href="logout.php">Log Out</a></li>
        
        <div class="closeMenu"><i class="bi bi-x"></i></div>
    </ul>
  </nav>  
  <!--end of navBar-->
    <!--start of avialble buses-->
    <div class="buses-available-container">
        <!--1st bus-->
        <div class="bus">
            <p>Bus 1</p>
           <p>Destinations: Nairobi - Thika <br>
        Time: 8:00 am <br>
       Route Code: NRTH </p> 

           
            <!--start of form-->
            <div class='book-form'>
<form action="" method='post'>
    <h1>Book here below</h1>
    <?php
    if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> 
<input type='text' name='name' required placeholder='enter your full names'>
<input type='telephone' name='telephonenumber' required placeholder='enter your phone number'>
<input type='email' name='email' required placeholder='enter your email '>
<input type='text' name='code' required placeholder='enter route code above'>
<button type='submit' name='submit' value='submit' class='submit-btn'>BOOK NOW</button>
</form>
            </div>
           <!--details--> 
           <h3>Booking Info</h3>
          <p>Fill in your details in all the fields
            <br>
            Contact us incase of any issue -071234567890
          </p> 
            <!--end of form-->
        </div>
        <!--end of 1st bus-->
        <!--start of 2nd bus-->
        <div class="bus">
            <p>Bus 1</p>
           <p>Destinations: Nairobi - Kitengela <br>
        Time: 8:00 am 
        <br>
       Route Code: NRKIT </p> 
           
            <!--start of form-->
            <div class='book-form'>
<form action="" method='post'>
    <h1>Book here below</h1>
    <?php
    if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> 
<input type='text' name='name' required placeholder='enter your full names'>
<input type='telephone' name='telephonenumber' required placeholder='enter your phone number'>
<input type='email' name='email' required placeholder='enter your email '>
<input type='text' name='code' required placeholder='enter route code above'>
<button type='submit' name='submit' value='submit' class='submit-btn'>BOOK NOW</button>
</form>
            </div>
           <!--details--> 
           <h3>Booking Info</h3>
          <p>Fill in your details in all the fields
            <br>
            Contact us incase of any issue -071234567890
          </p> 
            <!--end of form-->
        </div>
        <!--end of 2nd bus-->
        <!--start of 3rd bus-->
        <div class="bus">
            <p>Bus 1</p>
           <p>Destinations: Nairobi - Juja <br>
        Time: 8:00 am 
        <br>
       Route Code: NRJU </p> 
           
            <!--start of form-->
            <div class='book-form'>
<form action="" method='post'>
    <h1>Book here below</h1>
    <?php
    if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> 
<input type='text' name='name' required placeholder='enter your full names'>
<input type='telephone' name='telephonenumber' required placeholder='enter your phone number'>
<input type='email' name='email' required placeholder='enter your email '>
<input type='text' name='code' required placeholder='enter route code above'>
<button type='submit' name='submit' value='submit' class='submit-btn'>BOOK NOW</button>
</form>
            </div>
           <!--details--> 
           <h3>Booking Info</h3>
          <p>Fill in your details in all the fields
            <br>
            Contact us incase of any issue -071234567890
          </p> 
            <!--end of form-->
        </div>
        <!--end of 3rd bus-->
        <!--start of 4th bus-->
        <div class="bus">
            <p>Bus 1</p>
           <p>Destinations: Nairobi - Ruiru <br>
        Time: 8:00 am 
        <br>
       Route Code: NRRU</p> 
           
            <!--start of form-->
            <div class='book-form'>
<form action="" method='post'>
    <h1>Book here below</h1>
    <?php
    if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> 
<input type='text' name='name' required placeholder='enter your full names'>
<input type='telephone' name='tlelephonenumber' required placeholder='enter your phone number'>
<input type='email' name='email' required placeholder='enter your email '>
<input type='text' name='code' required placeholder='enter route code above'>
<button type='submit' name='submit' value='submit' class='submit-btn'>BOOK NOW</button>
</form>
            </div>
           <!--details--> 
           <h3>Booking Info</h3>
          <p>Fill in your details in all the fields
            <br>
            Contact us incase of any issue -071234567890
          </p> 
            <!--end of form-->
        </div>
        <!--end of 4th bus-->
    </div>

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
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="#">Supermetro- All Rights Reserved</p></a></li>
    </ul>
 
</footer>
<!--end of footer--> 
    
</body>
<script src="index.js"></script>
</html>