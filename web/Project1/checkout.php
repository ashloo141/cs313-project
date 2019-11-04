<?php require '../../db/db-connect.php'; ?>
<!DOCTYPE html>
<html lang="en">   

    <head>
        <meta charset="UTF-8">
        <title> Toasties </title>
        <link rel="stylesheet" type="text/css" href="design.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
    </head>

<body>
    <header>
        <h1> <a class =inv_link href= "home_page.php"><img src="pics/logo.png" width="400px" alt="logo"> </a> </h1>
        <h1> Check out. </h1> 
        <p> Not done? 
            <a href="home_page.php"> <button> Back to Cart </button> </a> 
        </p>
    </header>
    
    <br> 
    <div class = container>

    <?php echo "Items in Cart: " . count($_SESSION["cart"]) . "<br><br>"; ?>

    <form action = "result.php" method=POST>
        
        First name:
        <br>
        <input type = "text" name = "first" value = "">
        <br>
        
        Last name:
        <br>
        <input type = "text" name = "last" value = "">
        <br>
        
        Phone Number:
        <br>
        <input type = "text" name = "phone" value = "">
        <br>
        <br>
        <br>
        
        
        <br>
        <button type = "submit" value = "Submit" > Next </button>
        <br>
        
        <br>
        
    </form>
    
</body>
</html>