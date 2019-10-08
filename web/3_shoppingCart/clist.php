<?php 
    $total = 0.00;

    echo "Items in Cart: " . count($_SESSION["cart"]) . "<br><br>";

    foreach ($_SESSION["cart"] as $item => $val) {
        echo "<div id='" . $item . "' style='text-align:left; margin-left: 40px;' > <button type='submit'> Remove </button> " . $item . ": $10.00 </div> <br>";
        $total += 10;
    }

    echo "Total: $" . $total . ".00 <br><br>";
?>