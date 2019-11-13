<?php 
    require '../../db/db-connect.php';
    
    try {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $select_sql = "SELECT passwrd, username FROM users WHERE username='$username';";

        foreach ($db->query($select_sql) as $row) {

            // If the password in the database matches the inputted password
            if (password_verify($password, $row["pass"])) {
                $_SESSION["id"] = $row["account_id"];
                $_SESSION["username"] = $username;
                echo "0";
            }

            // If the password in the database matches the inputted password
            if (password_verify($password, $row["pass"])) {
                $_SESSION["username"] = $username;
                header("Location: account.php");
            }
            else {
                // User Not Created
                header("Location: login.php"); 
            }
        }

        
    }
    catch (Exception $e) {
        // Error
        header("Location: login.php"); 
        exit();
    }
?>
