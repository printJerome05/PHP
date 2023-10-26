<?php
include("header.html");

// need to define this in every pages where you want to have the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1> Login </h1>
    <form method="post" action="session.php">
    Username: <br>
    <input type="text" name="username"><br>
    Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">
    </form>
    
</body>
</html>
<?php


if(isset($_POST["login"])){

   

    // you can filter and sanitize here 
    if(!empty($_POST["username"]) && !empty($_POST["password"])){

        $_SESSION["username"] = $_POST["username"];
    
        $_SESSION["password"] = $_POST["password"];
        header("Location: homesesion.php");

     

    }
    else{
        echo "No Input";
    }

   

}
include("footer.html");
?>