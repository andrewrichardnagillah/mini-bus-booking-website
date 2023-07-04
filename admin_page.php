
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="style/register.css">

</head>
<body>
 <!--navBar--> 
<nav>
<div class="logo">SUPER METRO </div>
<div class="openMenu"><i class="bi bi-list"></i></div>

    <ul class="menu">
    <li><a> <h1> Hi , Admin <span><?php echo $_SESSION['admin_name'] ?></span></h1></a></li>
        <li><a href="logout.php">Log Out</a></li>
        <i class="fa fa-camera-retro fa-lg"></i> 
        <div class="closeMenu"><i class="bi bi-x"></i></div>
    </ul>
  </nav>  
  <!--end of navBar--> 
<!--body-->
<div class="">

</div>

</body>
</html>  