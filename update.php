<?php
include("header.html");
include("Database.php");

$id = $_GET['id'];
$username = $_GET['us'];
$password = $_GET['ps'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
<style>
.updateform{
    
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.submitbtn{
    width: 250px;
    height: 50px;
    margin-top: 20px;
   font-size: 20px;
   font-weight: bold;
    color: white;
    background-color: green;

}
h1{
    font-size: 50px;
    position: relative;
    left: 50px;
}
</style>
</head>
<body>
    <div class="updateform">
    <form action="" method="get" > 
        <h1>Update</h1>
        <label>Id: </label>
        <input type="text" name="id" readonly value="<?php echo $id ?>">
        <br>
        <br>
        <label>Username: </label>
        <input type="text" name="username" value="<?php echo $username ?>">
        <br>
        <br>
        <label>Password: </label>
        <input type="text" name="password" value="<?php echo $password ?>">
        <br>
        <input class="submitbtn" type="submit" value="Update" name="update">
    </form>  
    </div>  
</body>
</html>

<?php
include("Database.php");


if(isset($_GET['update'])){
    $id= $_GET['id'];
    $username = $_GET['username'];  
    $password= $_GET['password'];


$sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
$update = mysqli_query($conn, $sql);    
header("Location: Databasetest.php");

}
?>