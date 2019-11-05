<?php
    require '../../db/db-connect.php';
    
    try {
        $username = $_GET["username"];
        $password = password_hash($_GET["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, passwrd) VALUES ('$username', $password);";
        if ($db->query($sql) == TRUE) {
            // User Created
            $_SESSION["logged_in"] = 1;
            $_SESSION["username"] = $username;
            
            header("Location: account.php"); 
        } else {
            // User Not Created
            header("Location: register.php"); 
        }
    }
    catch (Exception $e) {
        // Error
        header("Location: register.php"); 
    }
?>