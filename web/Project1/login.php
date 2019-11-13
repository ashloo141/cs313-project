<?php require '../../db/db-connect.php'; ?>
<!DOCTYPE html>
<html lang="en">   

    <head>
        <meta charset="UTF-8">
        <title> Toasties </title>
        <link rel ="icon" href ="pics/icon.png">
        <link rel ="stylesheet" type ="text/css" href ="design.css">
        <meta name ="viewport" content ="width=device-width, initial-scale=1, maximum-scale=1">

        <?php
            $error = $_GET("error");
            if ($error) {
                echo "<script>alert('$error');</script>";
            }
        ?>
    </head>

    <body>
        <header>
            <h1> <a class =inv_link href= "home_page.php"><img src="pics/logo.png" width="400px" alt="logo"> </a> </h1>
        </header>
        
        <p> Don't have an account? <a href="register.php"> Create Account </a> </p>

        <div class=container>
            <form id='login' action='verify_login.php' method='POST' accept-charset='UTF-8'>
                
                <legend>Login</legend> <br/>
                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <label for='username' >Username:</label> <br/>
                <input type='text' name='username' id='username'  maxlength="20" />
                <br/>
                <label for='password' >Password:</label> <br/>
                <input type='password' name='password' id='password' maxlength="30" />
                
                <br/>
                <input type='submit' name='Submit' value='Sign in' />
                
            </form>
        </div>
    </body>
</html>


