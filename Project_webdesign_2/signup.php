<?php
  include_once 'header.php'
 ?>

 <fieldset class="col-md-6">
   <form class="signup-form" action="includes/signup.inc.php" method="POST" >

      <div class="textintro">
        <?php

             if(isset($_SESSION['u_message'])){
             echo "Registered";
             session_unset();
             session_destroy();
             
            // echo "You are logged in!";
             }
           ?>
        <h1>Hi There!</h1>
        <p>Register here</p>
      </div>

      <div class="form-group col-md-8 first">
        <input type ="text" name="first" class="form-control" placeholder="Firstname">
      </div>

      <div class="form-group col-md-8 last">
        <input type="text" name="last" class="form-control" placeholder="Lastname">
      </div>

      <div class="form-group col-md-8 email">
        <input type="text" name="email" class="form-control" placeholder="E-mail">
      </div>

      <div class="form-group col-md-8 username">
        <input type="text" name="uid" class="form-control" placeholder="Username">
      </div>

      <div class="form-group col-md-8 pass">
        <input type="text" name="pwd" class="form-control" placeholder="Password">
      </div>


      <button type="submit" name="submit" class="btn btn-primary regSub">Sign Up</button>
      <p></p>

    </form>
</fieldset>

 <?php
   include_once 'footer.php'
  ?>
