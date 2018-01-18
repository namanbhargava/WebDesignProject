<?php
  include_once 'header.php';
  $connect = mysqli_connect("localhost","root", "", "loginsystem");
  if(isset($_POST["add_to_cart"]))
 {

   if(isset($_SESSION['u_id'])){
     if(isset($_SESSION["shopping_cart"]))
     {
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
          if(!in_array($_GET["id"], $item_array_id))
          {
               $count = count($_SESSION["shopping_cart"]);
               $item_array = array(
                    'item_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'item_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"]
               );
               $_SESSION["shopping_cart"][$count] = $item_array;
          }
          else
          {
               echo '<script>alert("Item Already Added")</script>';
               echo '<script>window.location="fitplusSports.php"</script>';
          }
     }
     else
     {
          $item_array = array(
               'item_id' => $_GET["id"],
               'item_name' => $_POST["hidden_name"],
               'item_price' => $_POST["hidden_price"],
               'item_quantity' => $_POST["quantity"]
          );
          $_SESSION["shopping_cart"][0] = $item_array;
     }
   }
   else {

      echo '<script>window.location="fitplusSports.php?formsubmit=1"</script>';


   }

 }
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


<div class="container" style="width:100%;">
  <h3 align="center">Shopping cart</h3>

  <?php

  if(isset($_GET['formsubmit'])) {

     // if the form has been submitted
     echo "<div style='text-align:center; color:red'><h6>Please login to add products to CART</h6></div>";

   }
   else if(isset($_GET['action'])){

     echo "<div style='text-align:center; color:red'><h6>Product added to CART</h6></div>";
   }
   ?>

    <div class="row">
    <?php
      $query = "SELECT * FROM tbl_product ORDER BY id ASC";
      $result = mysqli_query($connect, $query);
      if(mysqli_num_rows($result)> 0)
        {
          while($row = mysqli_fetch_array($result))
          {
      ?>
      <div class="col-md-3 mt-5">

            <form method="post" action="fitplusSports.php?action=add&id=<?php echo $row["id"]; ?>" >
              <div style="border:1px solid #ddd;border-radius:5px; padding:16px;" align="center">
                <img src= "images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                <p><?php echo $row["name"]; ?> </p>
                <p><b>$<?php echo $row["price"]; ?> </b></p>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info" value="Add to Cart" />
              </div>
            </form>
    </div>
  </br>
    <?php
          }
        }
    ?>
</div>
</div>

 <?php
   include_once 'footer.php'
  ?>
