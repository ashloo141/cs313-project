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
    <div class = container>
        <form action = "home_page.php" method=POST>
        <?php 
            foreach ($db->query('SELECT item_name, item_price, item_info FROM food_items;') as $row) {
                $food = $row['item_name'];
                $info = $row['item_info'];
                $price = $row['item_price'];

                echo "<b>$food</b>: $ $price - $info";
                echo "<br/>";
                echo "<br/>";
            }
        ?>
        </form>
        
        <a href="login.php"> <button> Checkout as User </button> </a>
        <a href="guest.php"> <button> Checkout as Guest </button> </a>
        <br> <br>
    </div>
    
</body>
</html>


