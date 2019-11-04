<?php require '../../db/db-connect.php'; ?>
<!DOCTYPE html>
<html lang="en">   

    <head>
        <meta charset="UTF-8">
        <title> Toasties </title>
        <link rel ="icon" href ="pics/icon.jpg">
        <link rel ="stylesheet" type ="text/css" href ="design.css">
        <meta name ="viewport" content ="width=device-width, initial-scale=1, maximum-scale=1">
    </head>

    <body>
        <header>
            <h1> <a class =inv_link href= "home_page.php"> Smith's Toasties </a> </h1>
            <p> Fresh. Fast. Freaking Good. </p>
            <p> IBC </p>
        </header>
    
    <p> Already have an account? <a href="account.php"> Sign in </a> </p>
    
    <form action = "checkout.php" class=container method=POST>
        
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
        <button type = "submit" value = "Submit" > Next </button>
        <br>
        
        <br>
        
    </form>

</body>
</html>


