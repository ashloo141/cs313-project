<?php
    require '../../db/db-connect.php';
    
    try {
        $f_name = $_POST["first"];
        $l_name = $_POST["last"];
        $phone  = $_POST["phone"];
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users VALUES ('$f_name', '$l_name', '1', '$phone', 
                                          '$username', '$password', SYSDATE);";
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
        header("Location: register.php");
        exit(); 
    }
?>