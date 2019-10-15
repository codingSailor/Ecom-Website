<?php
session_start();
include "header.php";

 if (is_array($_COOKIE['item']))  //this is for chec cookies are available or nor
{
    foreach ($_COOKIE['item'] as $name1 => $value)
    {

        if (isset($_POST["delete$name1"]))
        {

            setcookie("item[$name1]", "", time()-1800);
            ?>
            <script type="text/javascript">
                window.location.href = window.location.href;
            </script>
            <?php
        }
    }
}

?>
<body>
<div class="wrapper">
<section id="cart_items">
    <div class="container">
      
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          
          <form name="form1" action="" method="post">
          <?php
          global $d;
          $d = 0;
           if (is_array($_COOKIE['item'] ) )  //this is for check cookies are available or nor
           {

            $d = $d + 1;
           }

           if($d == 0)
           {
            echo "No Record available in cart";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>"; 
           }
           else
           {
            ?>
            <thead>
            <tr class="cart_menu">
              <td class="image">Item</td>
              <td class="description"></td>
              <td class="price">Price</td>
              <td class="quantity">Quantity</td>
              <td class="total">Total</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
          <?php

            foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
            {

            $values11 = explode("__", $value);

               ?>

                 <tr>
              <td class="cart_product">
                <a href=""><img src="../admin/<?php echo $values11[0]; ?>" alt="" height="50" width="50"></a>
              </td>
              <td class="cart_description">
                <h4><a href=""><?php echo $values11[1]; ?></a></h4>
                
              </td>
              <td class="cart_price">
                <p>Rs.<?php echo $values11[2]; ?></p>
              </td>
              <td class="cart_quantity">
                <div class="cart_quantity_button">
                  
                  <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $values11[3]; ?>" autocomplete="off" size="2" readonly>
                  
                </div>
              </td>
              <td class="cart_total">
                <p class="cart_total_price">Rs.<?php echo $values11[4]; ?></p>
              </td>
              
              <td class="cart_delete">
                <input type="submit" name="delete<?php echo $name1;
                                ?>" value="del" id="s3">
              </td>
            </tr>

               <?php
            }

          ?> 

            </tbody>
          </form>
        </table>
        <center>
        <td align="right">
            <?php
           }
             $tot=0;

             if (is_array($_COOKIE['item']))
             {

                foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
               {

                $values11 = explode("__", $value);
                $tot = $tot + $values11[4];

                }
                $_SESSION["pay"] = $tot;
              }
          ?>
          <p class="cart_total_price">Rs.<?php echo $tot ?></p>
          </td>
          </center>

         
      </div>
    </div>
  </section> <!--/#cart_items-->
</div>

</body>
<center>            
<a href="Checkout.php">
<input type="button" value="Checkout">
</a>
</center> 

<?php

 include "footer.php";

?>
