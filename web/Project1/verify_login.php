  
<?php 
    require '../../db/db-connect.php';
    session.start();
    
    try {
        $u_name = $_POST["username"];
        $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $db->query("SELECT user_type FROM users u WHERE u.passwrd = '$pass' AND u.username = '$u_name';") as $row;
        
        if ($db->query($sql) == TRUE) {
            // User Created
            header("Location: account.php"); 
            exit();
        } 
        else {
            // User Not Created
            header("Location: login.php"); 
            exit();
        }
    }
    catch (Exception $e) {
        // Error
        header("Location: login.php"); 
        exit();
    }
?>