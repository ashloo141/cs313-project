<?php require 'session.php'?>
<!DOCTYPE html>
<html lang="en">   

<head>
    <meta charset="UTF-8">
    <title> PosterVille Confirmation </title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>

    <header>
        <h1> PosterVille: Confirmation. </h1>
        <p> Not done? 
            <a href="shoppingCart.php"> <button> Back to Browsing </button> </a> 
        </p>
    </header>
    
    <br> 
    <div class = container>
        <?php

            foreach ($_SESSION["cart"] as $item => $val) {
                echo "<div id='" . $item . "' style='text-align:left; margin-left: 300px;' >" . $item . "</div> <br>";
            }

            foreach ($_SESSION["items"] as $key => $value) {
                unset($_SESSION["items"][$key]);
            }
            echo $_POST["first"] . " " . $_POST["last"] . ", Your following poster(s) have been sent.<br>";
            //echo "Poster on it's way to " . $_POST["city"] . ", " . $_POST["state"] . "! <br> <br>";
        ?>

    </div>

    <?php session_destroy(); ?>
</body>
</html>