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
        <h1> Toasties: Check out. </h1> 
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
        
        Address Line 1:
        <br>
        <input type = "text" name = "address" value = "">
        
        <br>
        Address Line 2:
        <br>
        <input type = "text" name = "address1" value = "">
        
        <br>
        City:
        <br>
        <input type = "text" name = "city" value = "">
        
        <br>
        Zip Code:
        <br>
        <input type = "text" name = "zipcode" value = "">
        
        <br>
        State:
        <br>
        <input type = "text" name = "state" value = "">
        
        <br>
        Country:
        <br>
        <input type = "text" name = "country" value = "">
        <br> <br>
        
        
        <br>
        Credit Card Type:
        <br>
        
        <div>
            <input type = "radio" id = "visa">
            Visa
            <br>

            <input type = "radio" id = "mastercard">
            MasterCard
            <br>

            <input type = "radio" id = "amexpress">
            American Express
            <br>
        </div>
        
        CC Number: 
        <input type = "text" id = "ccn" placeholder = "xxxx xxxx xxxx xxxx" size="16" maxlength="20">
        <br>
        
        CC Expiration: 
        <input type = "text" id = "expm" placeholder = "mm" size="2" maxlength="2"> / 
        <input type = "text" id = "expyr" placeholder = "yyyy" size="4" maxlength="4">
        
        <br>
        <button type = "submit" value = "Submit" > Next </button>
        <br>
        
        <br>
        
    </form>
    
</body>
</html>