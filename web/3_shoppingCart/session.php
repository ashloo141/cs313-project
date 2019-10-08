<?php
    session_start();

    if (!$_SESSION["cart"]) { $_SESSION['cart'] = array();}

    
    if (!$_SESSION["items"][$_POST["item"]]) {
        $_SESSION["items"][$_POST["item"]] = true;
    }
    else {
        unset($_SESSION["items"][$_POST["item"]]);
    }

    foreach ($_SESSION["cart"] as $key => $val) {
        if ($key === "" || !$key) {
            unset($_SESSION["cart"][$key]);
        }
    }

?>