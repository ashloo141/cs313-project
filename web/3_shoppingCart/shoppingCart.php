<!DOCTYPE html>
<html lang="en">   

<head>
    <meta charset="UTF-8">
    <title> PosterVille </title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <meta name = "viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>

    <header>
        <h1 style = "margin-top: 100px"> Welcome to PosterVille </h1>
        <p> Where you can buy all kinds of posters. </p>
    </header>
    
    <form action = "shoppingcart.php" onload="">
                
        <div>
            Disney's Beauty and the Beast= $15.00
            <input type = "checkbox" id = "b&b" onclick="check(this)">
            <br>

            Marvel's Iron Man = $20.00
            <input type = "checkbox" id = "iron" onclick="check(this)">
            <br>

            Pokemon's Pikachu  = $20.00
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
        
    </form>
</body>

</html>