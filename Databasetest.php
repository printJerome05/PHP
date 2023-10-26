<?php

include("header.html");
include("Database.php");

// code below insert data manually
//$sql = "INSERT INTO users (username, password) VALUES ('Jerome', 'Marco1')";
//mysqli_query($conn, $sql);



// data input from textbox
if(isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) && empty($password)){
        echo"One of Feilds Are empty";
    }else{
     

        $sql = "INSERT INTO users(username, password) VALUES ('$username','$password')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        
       
    }

  
}


?>
<style>


table, th, td{
    
    
    border: 1px solid black;
    text-align: center;
}

.deletebutton{

    background-color: red;
    color: white;
}

.adelete{
    color: white;
    text-decoration: none;
}

.updatebutton{

background-color: blue;
color: white;
}

.aupdate{
    color: white;
    text-decoration: none;
}




</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Test</title>
</head>
<body>
    <h1>Welcome to database testing</h1>
    <h2>Register</h2>
    <br>
    <form action="Databasetest.php" method="post">
    <label>Inserting to database</label>
    <br>
    <br>
    Input username: 
    <input type="text" name="username">
    <br>
    <br>
    Input Password:
    <input type="text" name="password">
    <br>
    <input type="submit" value="Register" name="register">
    </form>

    <h1>USERS LIST</h1>
    <table style="width: 50%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include("Database.php");
                // code for the table data
                $sql = "Select * FROM users";
                $Result = $conn->query($sql);  

            while($row = $Result->fetch_assoc()){ 
                echo "<tr>
                        <td>" .$row["id"] . "</td>
                        <td>" .$row["username"] . "</td>
                        <td>" .$row["password"] . "</td> 
                    
                        <td><button class='deletebutton'><a class='adelete' href = 'delete.php?id=$row[id]'>Delete</button>
                            <button class='Updatebutton'><a class='aupdate' href = 'update.php?id=$row[id]&us=$row[username]&ps=$row[password]'>Update</button></td>
                       
                    
                    
                
                        </tr>"; 

            }


            ?>
        </tbody>
    </table>
   
</body>
</html>
<?php
include("footer.html");


    


?>