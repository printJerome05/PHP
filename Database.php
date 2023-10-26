<?php
// this file need to be a header in a file where you want to implement database


    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jerome";
    $conn = new mysqli($server, $username, $password, $database);   
    if($conn->connect_error){
        die("Connection Failed". $conn->connect_error);
    }
  


    
    
?>