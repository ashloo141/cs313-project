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
        <h1> Smith's Toasties</h1>
        <p> Fresh. Fast. Freaking Good. </p>
        <p> IBC </p>
    </header>
    
    <br> 
    <?php session_destroy(); ?>

    <p> You have been logged out. </p>
</body>
</html>