<?php
  include_once 'header.php'
 ?>

<section class="marquee">

    <?php

         if(isset($_SESSION['u_id'])){
         echo "<div style='text-align:center'><h4>Welcome ". $_SESSION['u_first']."!</h4></div>";
        // echo "You are logged in!";
         }
    ?>

    <marquee behavior="scroll" scrollamount="15">FREE SHIPPING on over 10,000 Items and all orders over $75. Use code IPFL2R52 at checkout.</marquee>
  </section>

  <div class="fluid-container">
    <div class="row">
      <section class="col-sm-12">
        <div class="carousel slide" id="featured" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#featured" data-slide-to="0" class="active"></li>
            <li data-target="#featured" data-slide-to="1"></li>
            <li data-target="#featured" data-slide-to="2"></li>
            <li data-target="#featured" data-slide-to="3"></li>
            <li data-target="#featured" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <image classv="d-block img-fluid" src="images/cp1.png" />
            </div>
            <div class="carousel-item">
              <image class="d-block img-fluid" src="images/cp2.png" />
            </div>
            <div class="carousel-item">
              <image class="d-block img-fluid" src="images/cp3.png" />
            </div>
            <div class="carousel-item">
              <image class="d-block img-fluid" src="images/cp4.png" />
            </div>
            <div class="carousel-item">
              <image class="d-block img-fluid" src="images/cp5.png" />
            </div>
            <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
          </a>

            <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
        </div>
      </section>
    </div>
  </div>

  <section class="hidden-md-down" id="products">
    <h4>Products</h4>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mt-5">
            <img class="card-img-top img-fluid" src="images/1replace.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">FootBall Shoes</h4>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- col-lg-4 -->

        <div class="col-lg-4">
          <div class="card mt-5">
            <img class="card-img-top img-fluid" src="images/2replace.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Slacks</h4>
            </div>
          </div>
          <!-- card -->
        </div>

        <div class="col-lg-4">
          <div class="card mt-5">
            <img class="card-img-top img-fluid" src="images/8replace.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Sports Equipments</h4>
            </div>
          </div>
          <!-- card -->
        </div>
      </div>
      <!--row -->
      <br>
      <div class="row">
        <div class="col-lg-4">
          <div class="card mt-5">
            <img class="card-img-top img-fluid" src="images/4replace.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Sport Shirts</h4>
            </div>
          </div>
          <!-- card -->
        </div>
        <!-- col-lg-4 -->

        <div class="col-lg-4">
          <div class="card mt-5 mb-4">
            <img class="card-img-top img-fluid" src="images/5replace.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">BasketBall Shoes</h4>
            </div>
          </div>
          <!-- card -->
        </div>

        <div class="col-lg-4">
          <div class="card mt-5 pb-5">
            <img class="card-img-top img-fluid" src="images/9replace.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title pb-5">Balls</h4>
            </div>
          </div>
          <!-- card -->
        </div>

        <div class="col-lg-12 text-center pt-5">
          <a class="btn btn-secondary" href="explore.php">EXPLORE MORE</a>
        </div>

      </div>
      <!--row -->
    </div>
    <!--container -->

  </section>

  <section id="team">
    <h4>Our Team</h4>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 mt-5">
          <img class="rounded-circle mb-3 img-fluid" src="images/figure_1.png" class="rounded-circle" width="150" height="150" />
          <h4>Qian Liao</h4>
        </div>

        <div class="col-sm-3 mt-5">
          <img class="rounded-circle mb-3 img-fluid" src="images/figure_2.png" class="rounded-circle" width="150" height="150" />
          <h4>Min Hu</h4>
        </div>

        <div class="col-sm-3 mt-5">
          <img class="rounded-circle mb-4 img-fluid" src="images/Naman.png" class="rounded-circle" width="150" height="150" />
          <h4>Naman Bhargava</h4>
        </div>

        <div class="col-sm-3 mt-5">
          <img class="rounded-circle mb-3 img-fluid" src="images/figure_4.png" class="rounded-circle" width="150" height="150" />
          <h4>Jiawei Yao</h4>
        </div>
      </div>
      <!--row -->
    </div>
    <!--Container -->
  </section>


  <section id="contactus" ng-app>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="heading">FeedBack</h2>
          <p>Please fill out the following form</p>
        </div>
        <!--col-lg-12 -->
      </div>
      <!--1st Row -->
      <div class="row">
        <div class="col-lg-12">
          <form id="contactform" name="contactform" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group pb-2">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                  ng-model='user.name'
                  ng-required='true' />
                  <p class="error validationerror" ng-show='contactform.name.$invalid && contactform.name.$touched'>Fill the firstName</p>
                </div>
                <!--1st form group> -->
                <div class="form-group pb-2">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                  ng-model='user.email'
                  ng-required='true' />
                  <p class="error validationerror" ng-show='contactform.email.$invalid && contactform.email.$touched'>Fill the Email</p>
                </div>
                <!--2nd form group> -->
                <div class="form-group pb-2">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone"
                  ng-model='user.phone'
                  ng-required='true'/>
                  <p class="error validationerror" ng-show='contactform.phone.$invalid && contactform.phone.$touched'>Fill the Phone Number</p>
                </div>
                <!--3rd form group> -->
              </div>
              <!--col-md-6 -->
              <div class="col-md-6">
                <div class="form-group pb-2">
                  <textarea class="form-control" placeholder="Your Message" name='comment'
                  ng-model='user.comment'
                  ng-required='true'></textarea>
                  <p class="error validationerror" ng-show='contactform.comment.$invalid && contactform.comment.$touched'>Fill the comments section</p>
                </div>
              </div>
              <!-- 2nd col-md-6 inside row-->
              <!--        <div class="clearfix"></div>    -->

              <div class="col-lg-12 text-center pt-4">
                <button type="submit" class="btn btn-default">Send Message</button>
              </div>
            </div>
            <!-- form row -->
          </form>
        </div>
        <!--inner col-lg-12 -->
      </div>
      <!-- 2nd Row -->
    </div>
    <!-- container -->
  </section>

  <?php
    include_once 'footer.php'
   ?>
