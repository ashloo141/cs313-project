<?php 
    $total = 0.00;

    echo count($_SESSION);
    
    foreach ($_SESSION["cart"] as $item => $val) {
        echo "<div id='" . $item . "'> <button type='submit'> Remove </button> " . $item . ": $10.00 </div> <br>";
        $total += 10;
    }

    echo "Total: $" . $total . ".00";
?>