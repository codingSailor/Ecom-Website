<?php
include "header.php";
include "menu.php";

?>
        
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Display item</h2>
                <div class="block">
                    <?php

                    $res=mysqli_query($link,"select * from product");
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>"; echo "product image"; echo "</th>";
                    echo "<th>"; echo "product name"; echo "</th>";
                    echo "<th>"; echo "product price"; echo "</th>";
                    echo "<th>"; echo "product price"; echo "</th>";
                    echo "<th>"; echo "product category"; echo "</th>";
                    echo "</tr>";
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";
                        echo "<td>"; ?> <img src=""> echo "product image"; echo "</th>";
                        echo "<th>"; echo "product name"; echo "</th>";
                        echo "<th>"; echo "product price"; echo "</th>";
                        echo "<th>"; echo "product price"; echo "</th>";
                        echo "<th>"; echo "product category"; echo "</th>";
                        echo "</tr>";

                    }
                    echo "</table>";

                    ?>
                </div>
            </div>
<?php
include "footer.php";
?>
