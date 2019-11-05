<?php

    try {
        $dbUrl = getenv('DATABASE_URL');
        $dbOpts = parse_url($dbUrl);
        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"], '/');
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $_SESSION['db'] = $db;
    } catch (PDOException $ex) {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }

function SanitizeForSQL($str)
{
    if( function_exists( "mysql_real_str" ) )
    {
            $r_str = mysql_real_str($str);
    }
    else
    {
            $r_str = addslashes($str);
    }
    return $r_str;
}

function checkLogin($username,$password)
{
    $username = $this->SanitizeForSQL($username);

    $qry = "SELECT * FROM users WHERE username='$username' and passwrd='$password' ";
    $result = mysql_query($qry,$this->connection);
    
    if(!$result || mysql_num_rows($result) <= 0)
    {
        $this->HandleError("Error logging in. The username or password does not match");
        return false;
    }
    
    $row = mysql_fetch_assoc($result);
    $_SESSION['username']  = $row['username'];
    
    return true;
}

function RedirectToURL($url)
{
    header("Location: $url");
    exit;
}

?>