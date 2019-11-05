<?php require '../../db/db-connect.php'; ?>
<!DOCTYPE html>
<html lang="en">   

    <head>
        <meta charset="UTF-8">
        <title> Toasties </title>
        <link rel ="icon" href ="pics/icon.png">
        <link rel ="stylesheet" type ="text/css" href ="design.css">
        <meta name ="viewport" content ="width=device-width, initial-scale=1, maximum-scale=1">
    </head>

    <body>
        <header>
            <h1> <a class =inv_link href= "home_page.php"><img src="pics/logo.png" width="400px" alt="logo"> </a> </h1>
        </header>
    
    <h1> Guest checkout.</h1>

    <br> 
    <div class = container>

    <?php 
        $total = 0.00;
        $order = $_POST[$food];
        echo "Items in Cart: " . count($_SESSION["order"]) . "<br><br>";

        // foreach ($_SESSION["order"] as $item) {
            
            foreach ($db->query('SELECT item_name, item_price, item_info FROM food_items WHERE item_name = '$order';') as $row) {
                $food = $row['item_name'];
                $info = $row['item_info'];
                $price = $row['item_price'];
            }
            echo "<div id='" . $food . "' style='text-align:left; margin-left: 300px;' > <button type='submit'> Remove </button> " . $food . ": $". $price ." </div> <br>";
            $total += $price;
        // }

        echo "Total: $" . $total . "0 <br><br>";
    ?>

    <form action = "result.php" method=POST>
        
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
        <br>  
        
        <br>
        <button type = "submit" value = "Submit" > Next </button>
        <br>
        
        <br>
        
    </form>
    
</body>
</html>


