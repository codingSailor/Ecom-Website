<?php
$id = $_GET["id"];
include "header.php";
include "dbconnect.php";

if (isset($_POST["submit1"])) {
    $d = 0;
    if (is_array($_COOKIE['item'])) //this is for checking cookies available or not
    {

        foreach ($_COOKIE['item'] as $name => $value) {
            $d = $d + 1;
        }
        $d = $d + 1;
    } else {
        $d = $d + 1;
    }

    //to get item description from table
    $res3 = mysqli_query($link, "select * from product where id=$id");
    while ($row3 = mysqli_fetch_array($res3)) {
        $img1 = $row3["product_image"];
        $nm = $row3["product_name"];
        $prize = $row3["product_price"];
        $qty = "1";
        $total = $prize * $qty;
    }

    if (is_array($_COOKIE['item']))  //this is for check cookies are available or nor
    {
        foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
        {
            $values11 = explode("__", $value);
            $found = 0;
            if ($img1 == $values11[0])      //this is for check same cookies available or not if available then increase qty
            {
                //check here for quantity add in the cart for more than available quantity
                $found = $found + 1;
                $qty = $values11[3] + 1;

                $tb_qty;
                $res = mysqli_query($link, "select * from product where product_image='$img1'");
                while ($row = mysqli_fetch_array($res)) {
                    $tb_qty = $row["product_qty"];
                }

                if ($tb_qty < $qty) {
                    ?>
                    <script type="text/javascript">
                        alert("this much quantity not available");
                    </script>
                    <?php

                } else {

                    $total = $values11[2] * $qty;
                    setcookie("item[$name1]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 1800);
                }
            }

        }

        if ($found == 0) {
            $tb_qty;
            $res = mysqli_query($link, "select * from product where product_image='$img1'");
            while ($row = mysqli_fetch_array($res)) {
                $tb_qty = $row["product_qty"];
            }

            if ($tb_qty < $qty) {
                ?>
                <script type="text/javascript">
                    alert("this much quantity not available");
                </script>
                <?php

            } else {

                setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 1800);//new

            }
        }

    } else {
        $tb_qty;
        $res = mysqli_query($link, "select * from product where product_image='$img1'");
        while ($row = mysqli_fetch_array($res)) {
            $tb_qty = $row["product_qty"];
        }

        if ($tb_qty < $qty) {
            ?>
            <script type="text/javascript">
                alert("this much quantity not available");
            </script>
            <?php

        } else {
            setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 1800);//new
        }
    }


}

?>

<section>
<div class="wrapper">
<div class="carouselbox">

                    <?php
                     $res=mysqli_query($link,"select * from product where id=$id");
                     while($row=mysqli_fetch_array($res))
                     {
                       
                       ?>
                        
                         <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="../admin/<?php echo $row["product_image"]; ?>" alt="" />
                                
                            </div>
                            

                        </div>
                        
                     <form name="form1" action="" method="post">   
                        
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo $row["product_name"]; ?></h2>
                                <p>Web ID: <?php echo $row["id"]; ?></p>
                                
                                <span>
                                    <span>Rs.<?php echo $row["product_price"]; ?></span><br><br>
                                    
                                    <label>Quantity:</label>
                                    <input type="text" value="1" />
                                    <button type="submit" name="submit1" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </span>
                                <p><b>Availability:</b> <?php echo $row["product_qty"]; ?></p>
                                
                                
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    </form>
                    <!-- end here-->

                       <?php

                     }
                     
                    ?>

                    
                    
 </div>
 </div>
                 
</section>

<?php

include "footer.php";
?>