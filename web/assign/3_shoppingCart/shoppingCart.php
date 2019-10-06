<!DOCTYPE html>
<html lang="en">   

<head>
    <meta charset="UTF-8">
    <title> PosterVille </title>
    <link rel="stylesheet" type="text/css" href="design.css">]
    <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>

    <header>
        <h1 style = "margin-top: 100px"> BuyStuff.com </h1>
        <p> Welcome to PosterVille </p>
    </header>
    
    <form action = "shoppingcart.php" onload="">
                
        <div>
            Disney's Beauty and the Beast= $10.00
            <input type = "checkbox" id = "b&b" onclick="check(this)">
            <br>

            Marvel's Iron Man = $20.00
            <input type = "checkbox" id = "iron" onclick="check(this)">
            <br>

            Pokemon's Pikachu  = $30.00
            <input type = "checkbox" id = "pika" onclick="check(this)">
            <br>

            <?php
                
                $('#b&b :checkbox').click(function() {
                    var $this = $(this);
                    // $this will contain a reference to the checkbox   
                    if ($this.is(':checked')) {
                        // checkbox was checked 
                    } else {
                        // checkbox was unchecked
                    }
                });
            ?>
        </div>
        
        <br>
        Total:
        <br>
        <p id="calc"></p>
        
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
        <input type = "text" id = "ccn" placeholder = "xxxx xxxx xxxx xxxx" size="16" maxlength="20" onchange="isCCNvalid()">
        <br>
        <span id="validccn" style='color:red' hidden="hidden">Invalid credit card number
        <br></span>
        
        CC Expiration: 
        <input type = "text" id = "expm" placeholder = "mm" size="2" maxlength="2"> / 
        <input type = "text" id = "expyr" placeholder = "yyyy" size="4" maxlength="4">
        
        <br>
        <input type = "reset" value = "Reset" onreset="default">
        <br>
        
        <br>
        <input type = "submit" value = "Submit" onsubmit = "validateForm()" >
        <br>
        
        <br>
        
    </form>
</body>

</html>