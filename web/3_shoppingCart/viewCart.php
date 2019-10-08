<?php require 'session.php'?>
<!DOCTYPE html>
<html lang="en">   

<head>
    <meta charset="UTF-8">
    <title> PosterVille Cart </title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>

    <header>
        <h1> PosterVille: Viewing Cart.</h1>
        <p> 
            Not done? Keep Browsing. 
            <a href="shoppingCart.php"> 
                <button> Back </button> 
            </a> 
        </p>
    </header>
    
    <br> 
    <div class = container>
        <form action = "viewCart.php" method=POST>
            <?php require 'clist.php'?>
            <button type = "submit" value = "Submit" > Check out </button>
        </form>

    </div>
    
</body>
</html>