<?php
session_start();    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>Home</h2>
    
    <form action="homesesion.php" method="post">
    <button type="submit" name="logout">Logout</button>
</form>
    
    
</body>
</html>
<?php
//displaying the login names and password
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if(isset($_POST["logout"])){
    session_destroy();
    header("Location: session.php");
}


?>