
<?php
include("header.html");
include("Database.php");
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = '$id'";
$delete = mysqli_query($conn, $sql);    
header("Location: Databasetest.php");
?>