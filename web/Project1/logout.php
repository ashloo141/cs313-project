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
            <h1> <a class =inv_link href= "home_page.php"><img src="pics/logo.png" width="400px" alt="logo"> </a> </h1>
        </header>
    
    <br> 
    <?php session_destroy(); ?>

    <p> You have been logged out. </p>
</body>
</html>