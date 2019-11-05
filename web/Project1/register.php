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
    
    <p> Already have an account? <a href="account.php"> Sign in </a> </p>
    
    <form action = "create_user.php" class=container method=POST>
        
        First name:
        <br/>
        <input type = "text" name = "first" value = "first">
        <br/>
        
        Last name:
        <br/>
        <input type = "text" name = "last" value = "last">
        <br/>
        
        Phone Number:
        <br/>
        <input type = "text" name = "phone" value = "phone">
        <br/>
        
        <label for='username' >Username:</label> <br/>
        <input type='text' name='username' id='username'  maxlength="20" />
        <br/>

        <label for='password' >Password:</label> <br/>
        <input type='password' name='password' id='password' maxlength="30" />
        <br/>       
        
        <br/>
        <button type = "submit" value = "Submit" > Next </button>
        <br/>
        
        <br>
        
    </form>

</body>
</html>


