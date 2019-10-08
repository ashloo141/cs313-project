<?php
    session_start();

    if (!$_SESSION["cart"]) { $_SESSION['cart'] = array();}

    foreach ($_SESSION["cart"] as $key => $val) {
        if ($key === "" || !$key) {
            unset($_SESSION["cart"][$key]);
        }
    }

?>