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

</section>

<div id='searcharea'>
  <label for="search">Product Directory</label>
  <p>Search</p>
  <input type="search" name="search" id="search" placeholder="info" />
</div>
<div id='update'></div>

  <article class="attractions">

			<aside>
				<div>
					<img src="images/PSG_jersey_tn.png">
					<h3>FitPlus Apparels</h3>
					<h5>Shop FitPlus.com and Enjoy free shipping and returns with FitPlus </h5>
        <div class="expanding_panel" data-link-text="Read more">
					<p>FitPlus clothing is designed for performance, freedom of movement and total comfort. To stay dry and comfortable when the competition heats up, try styles made with sweat-wicking Dri-FIT fabric. And check out FitPlus Pro compression clothing to layer under your uniform on game day. For cold-weather workouts, Nike Therma-FIT microfiber fleece provides insulation from cold and wind with minimal weight and bulk. In men’s clothing you’ll also find college fan gear, from shorts to T-shirts.</p>
        </div>
				</div>
			</aside>

			<aside>
				<div>
					<img src="images/Nike_Shoes_1_tn.png">
					<h3>FitPlus Equipments</h3>
					<h5>Outdoor, Fishing, Hunting, Cycling, Water Sports</h5>
          <div class="expanding_panel" data-link-text="Read more">
					<p>The right team sports equipment helps define your season. Turn to FitPlus Sporting Goods for all your essentials. Athletes of all stripes can find the sports gear they need most. Discover specially curated collections of baseball gear, lacrosse gear, basketball gear, football gear, hockey gear and soccer gear, plus so much more.</p>
					<p>From the gridiron to the hockey rink, the right sports equipment can be a game-changer. Find team uniforms, field and court accessories and even basic essentials for your gym bag. Shop collections for volleyball gear, tennis gear and wrestling gear.</p>
        </div>
				</div>
			</aside>

			<aside>
				<div>
					<img src="images/10.jpg.jpg">
					<h3>FitPlus Sports</h3>
					<h5>All you need to be on top of your game</h5>
          <div class="expanding_panel" data-link-text="Read more">
					<p>Break out of your busy routine and take time to play. Whatever your game, you’ll easily find everything you need here at Target. It’s all categorized to land you on exactly what you’re looking for. Getting the right equipment may be just the motivation you need to get moving. Plus, you can get the kiddos into sporting action, too. Target’s baseball equipment selection is stocked with everything you’ll need to play ball. You could even set up your own little ballpark. Shop the best brands for gloves, practice nets, kits and more. Toughen up your little soccer stars with soccer equipment for kids. We offer apparel, goals, balls and protective gear. If you’re into something calmer like golf, check out Target’s golf equipment, including bags, clubs, balls and gloves.</p>
        </div>
				</div>
			</aside>

		</article>
</section>




<div class="container">
   <div class="shuffle-group">
    	<div data-si-mousemove-trigger="100" class="shuffle-me">
    	   <div class="images" style="margin-top: 40px;">
  	        <img src="images/cpp1.png">
  	        <img src="images/cpp2.png">
  	        <img src="images/cpp3.png">
            <img src="images/cpp4.png">
            <img src="images/cpp5.png">
            <img src="images/cpp6.png">
            <img src="images/cpp7.png">
  	     </div>
  	 </div>
   </div>
 </div>

<?php
  include_once 'footer.php'
 ?>
