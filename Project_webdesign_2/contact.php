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

<div id='map'>
</div>


<?php
  include_once 'footer.php'
 ?>
