<?php 
    require '../../db/db-connect.php';
    
    try {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $select_sql = "SELECT passwrd, username FROM users WHERE username='$username';";

        foreach ($db->query($select_sql) as $row) {

            // If the password in the database matches the inputted password
            if (password_verify($password, $row["pass"])) {
                $_SESSION["username"] = $username;
                header("Location: account.php");
                exit();
            }
            else {
                // User Not Created
                header("Location: login.php"); 
                exit();
            }
        }

    }
    catch (Exception $e) {
        // Error
        header("Location: login.php"); 
        exit();
    }
?>
