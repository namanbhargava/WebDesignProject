<?php

session_start();
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>FITPLUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="js/angular.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Shadows+Into+Light" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="images/logo.ico" />
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<section id="shop">
  <nav class="navbar fixed-top navbar-inverse navbar-toggleable-md">
    <!-- <div class="container"> -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myContent">
    <span class="navbar-toggler-icon"</span></button>
      <a href="index.php" class="navbar-brand"> <img src="images/logo-1.png"></a>
      <div class="collapse navbar-collapse" id="myContent">
        <div class="navbar-nav mr-auto">
          <a class="nav-link nav-item active" href="index.php"> SHOP</a>
          <div class="dropdown">
            <a class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" href="#"> PRODUCTS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="fitplusApparels.php"> FitPlus Apparels</a>
              <a class="dropdown-item" href="#"> FitPlus Equipments</a>
              <a class="dropdown-item" href="fitplusSports.php"> FitPlus Sports</a>
            </div>
          </div>
          <a class="nav-link nav-item" href="#"> OUR TEAM</a>
          <a class="nav-link nav-item" href="contact.php"> CONTACT US</a>
        </div>

        <?php
          if(isset($_SESSION['u_id'])){

            echo '<form style="padding-right:10px" class="form-inline" action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit" class="btn">Logout</button>
            </form>

            <form class="form-inline" action="order.php" method="POST">
                <button type="submit" name="move_to_cart" class="btn">CART</button>
                <a class="nav-link nav-item" href="faq.php">FAQs</a>
            </form>';

          }
          else{
            echo '<form class="form-inline" action="includes/login.inc.php" method="POST">
                <input class="form-control mr-sm-2" type="text" name="uid" placeholder="Username/email">
                <br>
                <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit" class="btn">Login</button>
                <a class="nav-link nav-item" href="signup.php">SIGN UP</a>
                <a class="nav-link nav-item" href="faq.php">FAQs</a>
            </form>';
          }
        ?>
      </div>
    <!-- </div> Container closing --> -->
  </nav>
</section>
