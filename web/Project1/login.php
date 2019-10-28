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
        
        <p> Don't have an account? <a href="register.php"> Create Account </a> </p>

        <div class=container>
            <form action = "result.php" method=POST>
                
                Username:
                <br>
                <input type = "text" name = "user" value = "">
                <br>
                
                Password:
                <br>
                <input type = "text" name = "pswd" value = "">
                <br>

                <br>
                <button type = "submit" value = "submit" >Sign in </button>
                <br>
                <br>
                
            </form>
        </div>
    </body>
</html>


