<?php
ini_set( "display_errors", 0);
  include_once 'header.php';
  if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="order.php"</script>';
                }
           }
      }

      if($_GET["action"] == "deleteap")
      {
           foreach($_SESSION["shopping_cart_apparels"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["idap"])
                {
                     unset($_SESSION["shopping_cart_apparels"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="order.php"</script>';
                }
           }
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

<h3> Order Details from Sports </h3>
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th width="40%">Name</th>
      <th width="10%">Quantity</th>
      <th width="40%">Price</th>
      <th width="40%">Total</th>
      <th width="40%">Action</th>
    </tr>
<?php

if(!empty($_SESSION["shopping_cart"]))
{
  $total1 = 0;
  foreach($_SESSION["shopping_cart"] as $keys => $values)
  {
?>
  <tr>
    <td><?php echo $values["item_name"]; ?></td>
    <td><?php echo $values["item_quantity"]; ?></td>
    <td>$<?php echo $values["item_price"]; ?></td>
    <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
    <td><a href="order.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
  </tr>
<?php
      $total1 = $total1 + ($values["item_quantity"] * $values["item_price"]);
  }
?>

  <tr>
      <td colspan='3' align="right"> Total </td>
      <td align="right">$ <?php echo number_format($total1, 2); ?></td>
      <td></td>
  </tr>
<?php
}
?>
</table>
</div>

<h3> Order Details from Apparels </h3>
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th width="40%">Name</th>
      <th width="10%">Quantity</th>
      <th width="40%">Price</th>
      <th width="40%">Total</th>
      <th width="40%">Action</th>
    </tr>
<?php

if(!empty($_SESSION["shopping_cart_apparels"]))
{
  $total2 = 0;
  foreach($_SESSION["shopping_cart_apparels"] as $keys => $values)
  {
?>
  <tr>
    <td><?php echo $values["item_name"]; ?></td>
    <td><?php echo $values["item_quantity"]; ?></td>
    <td>$<?php echo $values["item_price"]; ?></td>
    <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
    <td><a href="order.php?action=deleteap&idap=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
  </tr>
<?php
      $total2 = $total2 + ($values["item_quantity"] * $values["item_price"]);
  }
?>

  <tr>
      <td colspan='3' align="right"> Total </td>
      <td align="right">$ <?php echo number_format($total2, 2); ?></td>
      <td></td>
  </tr>
<?php
}
?>

<?php
$tot =0;
$tot = $total1+$total2;
 ?>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>


<tr>
      <td colspan='3' align="right"><b> Bill Total </b></td>
      <td align="right"><b>$ <?php echo number_format($tot, 2); ?></b></td>
      <td></td>
    </tr>
</table>



</div>
<?php
  include_once 'footer.php'
 ?>
