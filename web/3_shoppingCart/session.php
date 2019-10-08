<?php
    session_start();

    if (!$_SESSION["cart"]) { $_SESSION['cart'] = array();}


    if (!$_SESSION["cart"][$_POST["item"]]) {
        $_SESSION["cart"][$_POST["item"]] = true;
    }
    else {
        unset($_SESSION["cart"][$_POST["item"]]);
    }

    foreach ($_SESSION["cart"] as $key => $val) {
        if ($key === "" || !$key) {
            unset($_SESSION["cart"][$key]);
        }
    }

?>