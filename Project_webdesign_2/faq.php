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

<div class="container">
  <div class="row">
    <div class="col-md-3" >

      <nav class="nav flex-column">
          <a class="nav-link active" href="#TopQueries"><i class="icon-chevron-sign-right"></i> Top Queries</a>
          <a class="nav-link" href="#Payments"><i class="icon-chevron-sign-right"></i> Payments</a>
          <a class="nav-link" href="#RAE"><i class="icon-chevron-sign-right"></i> Return and Exchange</a>
      </nav>
    </div>
    <!-- <div class="vl"></div> -->
    <div class="col-md-9">
      <h2>Browse Help Topics</h2>
      <div class="faq">
        <div id="TopQueries">
          <div class="content">
          <h3>Top Queries</h3>
          <hr/>

          <ul>
            <li class="q" data-icon="+">What is Try and Buy Service?</li>
            <li class="a">This service entitles you to try-out your purchases at the time of delivery, pay only for what you like and return the rest on-the-spot. Try and Buy is a paid service, available on most of the products and in 31 Cities, you can enter pin code on product page to check service availability. Try and Buy is only available on orders containing <=3 items in cart. To avail this service min. order value should be Rs.1199 and above. To avail the service, please ensure that you tick the 'Try and Buy' box on check-out page and choose delivery address where you are comfortable trying product.Terms of service may differ for our new customers. Try and Buy will not be available during big sale days; We will re-offer the service, post such events.</li>
            <li class="q" data-icon="+">How do I cancel the order, I have placed?</li>
            <li class="a">You can cancel your order before it has been packed at our warehouse. If your order has already been shipped, you can refuse it at the time of delivery and refund will be processed into the source account, if order amount was paid online.</li>
            <li class="q" data-icon="+">When will the product be picked up, to return?</li>
            <li class="a">Number of days to pickup a product may vary as per the Logistics team that will be assigned to pickup your product. The product will be picked anywhere between 4 – 7 days.</li>
            <li class="q" data-icon="+">Why has FitPlus re-launched its Desktop Site?</li>
            <li class="a">We have decided to bring back the desktop site to deliver the fast purchase experience. The biggest reason to re-launch the site is our Consumer feedback and our belief in empowering our customers with a convenient and easy way of shopping.</li>
          </ul>
        </div>
      </div>
        <div id="Payments">
          <div class="content">
          <h3>Payments</h3>
          <hr/>
          <ul>
            <li class="q" data-icon="+">What should I do if my payment fails?</li>
            <li class="a">Please retry making the payment after ensuring that the information entered is accurate, including all account details, billing addresses and passwords. If your payment still fails, you can use the Cash on Delivery (COD) payment option, if available on the payment page to place your order. If your payment is debited from your account after a payment failure, it will be credited back within 7-10 days, after we receive a confirmation from the bank</li>
            <li class="q" data-icon="+">Why is the transaction amount not converted into EMI in 7 working days?</li>
            <li class="a">Conversion of transaction into EMI is at the sole discretion of card issuing bank and can also be rejected in unfortunate circumstances. In case the paid amount is not converted to EMI within 7 days then contact your card issuing bank.</li>
            <li class="q" data-icon="+">What is the eligibility criteria to avail EMI option?</li>
            <li class="a">EMI is available for all products on Myntra except, Jewellery products. Also, the payment option is available only above a minimum order value which varies from bank to bank. For given order value, only the eligible banks will be displayed under the issuing bank list on the EMI payment page.</li>
            <li class="q" data-icon="+">Why is sum total of EMI’s more than the order value?</li>
            <li class="a">The issuing bank charges interest per EMI transaction. The interest rates are decided by the bank and are displayed at the time of completing the transaction. There is no processing or convenience fees charged on any EMI transactions.</li>
          </ul>
        </div>
      </div>

        <div id="RAE">
          <div class="content">
          <h3>Return and Exchange</h3>
          <hr/>
          <ul>
            <li class="q" data-icon="+">What is Instant Refunds?</li>
            <li class="a">Upon successful pickup of the return product at your doorstep, Myntra will instantly initiate the refund to your source account or chosen method of refund. Instant Refunds is not available in a few select pin codes and for all self ship returns.</li>
            <li class="q" data-icon="+">What is No Questions Asked Returns?</li>
            <li class="a">Once you create a return via App / Desktop as per the returns policy, Myntra will ensure a quick, easy and seamless returns experience for you. Our delivery agents may perform a simple quality check at your doorstep and upon acceptance of the return, your refund will be initiated immediately.</li>
            <li class="q" data-icon="+">How do I return multiple products from a single order?</li>
            <li class="a">If you are returning multiple products from a single order then, you will receive a separate Return ID via e-mail for each item. If you are self-shipping the products, you can ship all the products in a single shipment. Please mention the Return IDs for all the products on a single sheet of paper and place it inside the packet.If mode of return is Pickup, our courier person will pickup the products from the pickup address.</li>
            <li class="q" data-icon="+">Why is my returned product re-shipped?</li>
            <li class="a">This may have happened, if the item you have returned is used, damaged or original tags or MRP tags are missing. For more details, please call our customer care.</li>
          </ul>
        </div>
      </div>


      </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php'
 ?>
