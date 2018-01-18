<?php

  include_once 'header.php';
  $connect = mysqli_connect("localhost","root", "", "loginsystem");
  if(isset($_POST["add_apparels_to_cart"]))
 {

   if(isset($_SESSION['u_id'])){
     if(isset($_SESSION["shopping_cart_apparels"]))
     {
          $item_array_id = array_column($_SESSION["shopping_cart_apparels"], "item_id");
          if(!in_array($_GET["idap"], $item_array_id))
          {
               $count = count($_SESSION["shopping_cart_apparels"]);
               $item_array = array(
                    'item_id' => $_GET["idap"],
                    'item_name' => $_POST["hidden_name"],
                    'item_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"]
               );
               $_SESSION["shopping_cart_apparels"][$count] = $item_array;
          }
          else
          {
               echo '<script>alert("Item Already Added")</script>';
               echo '<script>window.location="fitplusApparels.php"</script>';
          }
     }
     else
     {
          $item_array = array(
               'item_id' => $_GET["idap"],
               'item_name' => $_POST["hidden_name"],
               'item_price' => $_POST["hidden_price"],
               'item_quantity' => $_POST["quantity"]
          );
          $_SESSION["shopping_cart_apparels"][0] = $item_array;
     }
   }
   else {
      echo '<script>window.location="index.php"</script>';
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

<div class="container" style="width:700px;">
  <h3 align="center">Shopping cart</h3><br />

    <div class="row">
    <?php
      $query = "SELECT * FROM tbl_apparels ORDER BY id_apparels ASC";
      $result = mysqli_query($connect, $query);
      if(mysqli_num_rows($result)> 0)
        {
          while($row = mysqli_fetch_array($result))
          {
      ?>
      <div class="col-md-4">
            <form method="post" action="fitplusApparels.php?action=addap&idap=<?php echo $row["id_apparels"]; ?>" >
              <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                <img src= "images/<?php echo $row["image_apparels"]; ?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row["name_apparels"]; ?> </h4>
                <h4 class="text-danger">$<?php echo $row["price_apparels"]; ?> </h4>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["name_apparels"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["price_apparels"]; ?>" />
                <input type="submit" name="add_apparels_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
              </div>
            </form>
    </div>
    <?php
          }
        }
    ?>
</div>
</div>

<?php
  include_once 'footer.php'
 ?>
