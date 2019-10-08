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
        <h1><a href="shoppingcart.php">  PosterVille: Confirmation. </h1> </a>
        <p> Not done? 
            <a href="viewCart.php"> <button> Back to Cart </button> </a> 
        </p>
    </header>
    
    <br> 
    <div class = container>
        <?php
            foreach ($_SESSION["items"] as $key => $value) {
                unset($_SESSION["items"][$key]);
            }
            echo $_POST["first"] . $_POST["last"] . ", your poster has been sent to <br>";
            echo $_POST["city"] . ", " . $_POST["state"];
        ?>
    </div>
    
</body>
</html>