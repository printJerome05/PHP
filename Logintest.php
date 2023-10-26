<?php
include("header.html");

include("Database.php");
//to login
if(isset($_POST["login"])){

    $usernamelogin = $_POST["usernamelogin"];
    $passwordlogin = $_POST["passwordlogin"];
    $loginsql = "SELECT * FROM users WHERE username='$usernamelogin'";
    $Result = mysqli_query($conn, $loginsql);
    $row = mysqli_fetch_assoc($Result);
    if(mysqli_num_rows($Result) > 0){
        if($passwordlogin == $row["password"]){
            echo "You are logged in";
            mysqli_close($conn);
        }
        else{
            echo "Wrongpassword";
        }
    }  
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Login</h2>
    <form action="Logintest.php" method="post" autocomplete="off">
    Username: <input type="text" name="usernamelogin">
    <br>
    Password: <input type="text" name="passwordlogin">
    <br>
    <input type="submit" value="Login" name="login">
    </form> 
</body>
</html>
<?php
include("footer.html");
?>