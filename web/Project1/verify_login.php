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
            }
        }

        if (!isset($_SESSION["username"])) {
            throw new Exception("No username matches this password.");
        }
    }
    catch (Exception $e) {
        // Error
        header("Location: login.php"); 
        exit();
    }
?>
