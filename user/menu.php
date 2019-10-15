<?php

include "dbconnect.php";
include "header.php"; 


?>

<section> 

<div class="wrapper">


<?php
$res=mysqli_query($link,"select * from product");
while($row=mysqli_fetch_array($res))
{
?>

   <div class="productbox">
   <img src="../admin/<?php echo $row["product_image"]; ?>" alt="" width="200" height="381" class="img-responsive"/>
   <h4><?php echo $row["product_name"]; ?></h4>
   <h5>Rs.<?php echo $row["product_price"]; ?></h5>
   <a type="submit" name="submit1" href="productdetail.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View</a>
   </div>

<?php 
}

?>

  
  </div>
</section>

<?php

include "footer.php";

?>
