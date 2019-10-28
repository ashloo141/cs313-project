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
        <h2> Account Settings </h2>
        <?php
            $username = $_POST["username"];
            $query = "SELECT first_name, last_name, username, user_type, phone_number, 
                             created_date FROM users WHERE username='$username'";
            foreach ($db->query($query) as $row) {
                $f_name = $row['first_name'];
                $l_name = $row['last_name'];
                $u_name = $row['username'];
                $type   = $row['user_type'];
                $ph_num = $row['phone_number'];
                $c_date = $row['created_date'];
                
                echo "Welcome $l_name, $f_name! <br>";

                echo "Username: $u_name";
                echo "Name: $f_name $l_name";
                echo "Phone Number: $ph_num";
            }

            echo "Account Created on $c_date";
        ?>
        <br/>
        <a href='logout.php'><button>Logout</button></a>
        <br/>
    </div>

</body>
</html>