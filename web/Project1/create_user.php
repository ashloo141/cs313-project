Skip to content
 Zuzuni7 / CS313
Code Issues 0 Pull requests 0 Projects 0 Wiki Security Pulse Community
CS313/web/TeamActivity/ta07/create_user.php
 Your Name changed the flippin thing
d20e89b 7 days ago
28 lines (23 sloc)  713 Bytes
  
<?php
    require 'dbConnect.php';
    session.start();
    
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