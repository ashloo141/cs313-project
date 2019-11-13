<?php
    require '../../db/db-connect.php';
    
    try {
        // test
        $f_name = $_POST["first"];
        $l_name = $_POST["last"];
        $phone  = $_POST["phone"];
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users VALUES (DEFAULT, '$f_name', '$l_name', 1, '$phone', 
                                          '$username', '$password');";

        if ($db->query($sql) == TRUE) {
            // User Created
            $_SESSION["logged_in"] = 1;
            $_SESSION["username"] = $username;
            
            header("Location: account.php");
            exit();
        } else {
            // User Not Created
            header("Location: register.php");
            exit();
        }
    }
    catch (Exception $e) {
        // Error
        $message = urlencode($e->getMessage());
        header("Location: create_user.php?error=$message");
        exit(); 
    }
?>