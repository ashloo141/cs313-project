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
            <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
                <fieldset>
                <legend>Login</legend>
                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <label for='username' >UserName*:</label>
                <input type='text' name='username' id='username'  maxlength="20" />
                <br/>
                <label for='password' >Password*:</label>
                <input type='password' name='password' id='password' maxlength="30" />
                

                <input type='submit' name='Submit' value='Sign in' />
                
                </fieldset>
            </form>

        </div>
    </body>
</html>


