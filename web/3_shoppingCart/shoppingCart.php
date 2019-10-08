<?php require 'session.php'?>
<!DOCTYPE html>
<html lang="en">   

<head>
    <meta charset="UTF-8">
    <title> PosterVille </title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>

    <header>
        <h1> Welcome to PosterVille </h1>
        <p> Where you can buy all kinds of posters for ONLY $10 each. </p>
    </header>
    
    <br> 
    <div class = container>
        <form action = "shoppingCart.php/#cart" method=POST onsubmit="event.preventDefault()">
            <?php require 'list.php'?>
            <br> <br>
            <a href="viewCart.php"> <button id="cart"> View Cart </button> </a>
            <br> <br>
        </form>

    </div>
    
</body>
</html>