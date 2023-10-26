<?php
include("header.html");
              // cookies
   // cookie have a key and value pair
   // you can see cookie in the inspect then cookies
   // the 86400 is a second means its 1 day
             // key       // value
             setcookie("fave_color", "blue", time() + (86400), "/");
             // to set it to how many days just multiply it. 2 means 2 days before it expire
             setcookie("fave_food", "pizza", time() + (86400 * 2) , "/");
          
             // displaying cookies using for each
          
             foreach($_COOKIE as $k => $v){
                echo "{$k} = {$v} <br>";
             }

//to remember in php
//    $_POST 
//          > cant be seen on the searchbar
//    $_GET
//          > seen on the search bar best use for bookmark
//    include()
//           > use to include pages,html like header and footer
//    cookies
//           > use to store information to have a targeted advertisement
//    Session
//           > use to store information on the user to be use in across multiple pages.
//             A user is assigned a session id  ex. Login Credentials
//             Best use for login and logout
//             sesion_start(); = is defined in the uppermost before the html
//             header("Location: index.php") = use to go to a page
//             sesion_stop(); = use to stop session and logout
//    Password_hash
//           > use to hide senstive data from 3rd parties. Basically hashing 
//             is a function where for example password is being randomized like 
//             a set of number,symbols and letters to hide the original form of data
//             to 3rd party apps. But in the database data is in the original form
//    Conencting to mySQL database
//           > using mysqli extension 
//           > or PDO (PHP DATA OBJECTS)

          
?>
<?php

$name = "jerome";

$age = 10;

// if the bolean is false it will display nothing
// if its true it will display 1
$isTrue = false;
$isBig = true;

echo"Hello <br>";

echo $name;
echo "<br>";
echo $age;
echo "name {$name} <br>";
echo "age<br>";
echo "example <br>";
echo $isTrue;
echo "Is the isTrue: {$isTrue} <br>";
echo "Is you size big?: {$isBig} <br>";



$one = 1;
$two = 2;
$total = $one + $two;   
echo $total;
echo "<br>";
$total = 100;
echo $total;

/* $_GET, $_POST = special variable used to colelct data from a html form
                   data is sent ot the file in the action attribute of <form>\
                   <form action="file.php" mehtod="get">

   $_GET = DATA is appened to the url
           not secure
           char limit 
           Bookmark is possible w/ values
           get requests can be cached
           better for a search page
     
   $_POST = data is package inside the body of the http request
            more secure
            no data limit
            cannot bookmark
            get request are no cached
            better for submitting credentials

*/

// example of post method cannot see in the url or https
echo "<br>";
echo "{$_POST["username"]} <br>";
echo "{$_POST["pass"]} <br>";

// example of get method
echo "<br>";
echo "{$_GET["username1"]} <br>";
echo "{$_GET["pass1"]} <br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!--example of post method needed a action where you will pass the data the method is what kind of a post or a get-->
 <form action="index.php" method="post">
<h1>Login POST</h1>
<label>User:</label><br>
<!--defining the name to be called on the php file-->
<input type="text" name="username"><br>
<label>Password:</label><br>
<!--defining the name to be called on the php file-->
<input type="password" name="pass"><br>
<input type="submit" value="Log in">
 </form>


  <!--example of get method needed a action where you will pass the data the method is what kind of a post or a get-->
  <form action="index.php" method="get">
<h1>Login GET</h1>
<label>User:</label><br>
<!--defining the name to be called on the php file-->
<input type="text" name="username1"><br>
<label>Password:</label><br>
<!--defining the name to be called on the php file-->
<input type="password" name="pass1"><br>
<input type="submit" value="Log in">
 </form>

  <!--ADDING TWO NUMBERS-->
 <form action="index.php" method="post">
    <h1>Add 2 Numbers</h1>
    <label>number 1:</label>
    <input type="text" name="add1">
    <br>
    <label>number 2:</label>
    <input type="text" name="add2">
    <br>
    <input type="submit" value="add">
 </form>
 <?php
    $num1 = $_POST["add1"];
    $num2 = $_POST["add2"];
    $total = $num1 + $num2;
    echo $total;

 ?>

 <form action="index.php" method="post">
   <h1>MULTIPLY</h1>
   <br>
   <label>number1: </label>
   <input type="text" name="multi1">
   <br>
   <label>number2: </label>
   <input type="text" name="multi2">
   <br>
   <button type="submit">Multiply</button>
</form>
<?php
    $num1 = $_POST["multi1"];
    $num2 = $_POST["multi2"];
    $total = $num1 * $num2;   
    echo $total;
   
    
   ?>

   <!--IF ELSE-->
   <form action="index.php" method="get">
    <label>EnterAge  </label>
    <input type="text" name="age">
    <button type="submit">SUBMIT</button>
   </form>  
   <?php

   $age =  $_GET["age"];

   if($age <= 17){
      echo"UnderAge";
    }
    else if($age >= 18)
    {
      echo"Adult";
    }

   ?>

     <!--BOOLEAN-->
<br>
   <?php

   $isCorrect = true;

   // if you dont state ==, it will automatically state that if it is true
   if($isCorrect){
   echo"Correct";
   }
   else{
      echo"False";
   }

   ?>


     <!--for loop-->
     <h1>For Loop</h1>
     <br>
   <?php

   $sample = 10;
   
   for($i = 0; $i < $sample;$i++){
      echo"Hello <br>";
   }

   ?>

   <?php
   $sample = 10;
   for($i = 0; $i < $sample;$i++){
      echo"Hello <br>";
   }
   ?>
   <br>
    <!--for loop with input-->
    <form action="index.php" method="get">
      <label>Enter A number to count</label>
      <input type="text" name="number">
      <input type="submit" value="submit">
   </form>
   <?php
   // 0 to the number
   $number = $_GET["number"];
   for($i = 0; $i <= $number; $i++){
      echo "Counting: {$i} <br>";
   }

   $number1 = 100;
   // number to zero reverse order count
   for ($i = $number1; $i >= 0; $i--) {
      echo "Reverse: {$i} <br>";
  }
   ?>

   <!--While loop-->
  <h1>While Loop</h1>
   <?php
   $number = 10;

   while(0 <= $number){
      $number--;
      echo"Number: {$number} <br>";
   }
   ?>

<!--For loop-->
  <h1>for Loop</h1>
   <?php
   
   for($i = 0; $i < 5;$i++){
      echo "hi: {$i} <br>";
   }
   ?>

    <!--Array-->
  <h1>array</h1>
   <?php

   //for each loop
   // need to have = array
   $foods =  array("apple","mango","joydee","coconut");
   foreach($foods as $food ){
      echo "{$food} <br>";
   }

   // to print individual array
   echo $foods[1];
   
   ?>


   <!--Switch-->
   <h1>Switch</h1>
   <?php

   $grade = "f";

   switch($grade){
      case "a":
         echo"you pass";
         break;
      case "f":
         echo"you failed";
         break;
      default:
      echo "invalid grade";
      break;
   }
   ?>

    <!--Associative array= made of key=>value -->
    <h1>Switch</h1>
   <?php

   $Capital = array("Philippines"=>"Manila",
                     "USA"=> "Washington",
                     "Japan"=> "Tokyo",);

   // to print this associative array
   // k and v shortcut for key and value
   foreach($Capital as $k => $v){
      echo "{$k} = {$v} <br>";
   }
   ?>


<!--isset() and empty() -->
<h1>isset() and empty()</h1>
   <?php
   // isset() = returns true if a variable is declared and not null
   // empty() = returns true if a variable is not declared, false, null

   // best for validations if else login register
   // isset and emty is just like if else
   $name = "jerome";
   $age = null;
   echo isset($name);
   echo "<br>";
   echo isset($age);
   echo "<br>";
   echo empty($name);
   echo "<br>";
   echo empty($age);

   ?>


<!--RADIO BUTTON -->
<h1>RADIO BUTTONS</h1>
<form actionm="index.php "method="Post">
   <!--RADIO BUTTON need same name to not clicked all the value -->
   <input type="radio" value="green" name="color">
   Green<br>
   <input type="radio" value="blue" name="color">
   Blue<br>
   <input type="radio" value="red" name="color">
   Red<br>
   <input type="Submit" value="Submit" name="submit">

</form>
   <?php
   if(isset($_POST["submit"])){
      if(isset($_POST["color"])){
         $choice = $_POST["color"];
         echo $choice;

      }else{
         echo "Please Select Value";
      }
   }

   ?>

   <!--CHECK BOX -->
<h1>CHECKBOX</h1>
   <!--using checkbox you can select all name will be different -->
<form actionm="index.php "method="get">
   <input type="checkbox" value="pizza" name="pizza">
   Pizza<br>
   <input type="checkbox" value="burger" name="burger">
   Burger<br>
   <input type="checkbox" value="Chicken" name="Chicken">
   Chicken<br>
   <input type="submit" value="Submit" name="confirm">
</form>
   <?php
   if(isset($_GET["confirm"])){

      if(isset($_GET["pizza"])){
        echo "You like pizza <br>";
      }
     

      if(isset($_GET["burger"])){
         echo "You like burger <br>";
      }
     
      if(isset($_GET["Chicken"])){
         echo "You like Chicken <br>";
      }
      if(empty($_GET["pizza"])){
         echo "You dont like pizza <br>";
       }
       if(empty($_GET["burger"])){
         echo "You dont like burger <br>";
      }
      if(empty($_GET["Chicken"])){
         echo "You dont like Chicken <br>";
      }
      
      }
   ?>

   <h1> Functions </h1>
   <?php

   //functions
   function sayHello(){
      echo "Hello";
   }

   sayHello();
   echo "<br>";
   //function with method
   function sayHi($name){
      echo "Hello {$name}";
   }
   
   echo "<br>";   
   sayHi("jerome");

   //math functions
   function add($num1, $num2){
      return $num1 + $num2;   
   }
   echo "<br>";   
   echo add(1,2);

   ?>

   <h1> Function from the user Input</h1>
   <form action="index.php" method="get">
   <label>Enter Number 1 </label>
   <input type="text" name="num1">
   <br>
   <label>Enter Number 2 </label>
   <input type="text" name="num2">
   <br>
   <button type="submit">ADD</button>
   <br>
   </form>
   <?php
   $number1 = $_GET["num1"];
   $number2 = $_GET["num2"];

   function Addtwo($num1, $num2){
      $total = $num1 + $num2; 
      echo "Equals to {$total}"; 
   }

   Addtwo($number1,$number2);

   ?>

   <h1>Filter and Validations</h1>
   <form action="index.php" method="post">
   <label>Name</label>
   <input type="text" name="name">
   <br>
   <label>Age</label>
   <input type="text" name="age">
   <br>
   <label>Email</label>
   <input type="text" name="email">
   <br>
   <input type="submit" value="login" name="login">
   </form>

   <?php
   if(isset($_POST["login"])){

      // THERE ARE MANY FILTER types
      $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    

      $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
      $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

      echo $name;
      if(empty($email)){
         echo "Wrong Input";
         echo"<br>";
      }else{
         echo "Your email is {$email}";
         echo"<br>";
      }

      if(empty($age)){
         echo "Wrong Input";
         echo"<br>";
      }else{
         echo "Your age is {$age}";
         echo"<br>";
      }



   }

   ?>
   <!--Include Function

      this code is defined on the upper or the lower part of html for footer and header

   -->

   <h1>Include funcntion</h1>
   <?php

   ?>

 <!--Cookies

      A stored information about user's web broswer
      for targeted advertisement, browing prefenrences, and 
      other non-sensitive data

   -->

   <h1>Cookies</h1>
   <p>Can be seen on the upper form of html</p>

   <h1>Hashing</h1>
   <!-- Password Hashing is a way to protect something sensitive like password
        Basically hasshing transforms data to a letter,number or symbols
        via numerical processes.
        It is use to hide original information to 3rd parties
   -->

   <form action="index.php" method="post">
      <label>Correct Password is password123</label>
      <br>
      <label>Password</label>
      <Input type="password" name="pass">
      <input type="submit" name="Login" value="login">

</form>
   <?php

   // setting a password
   $password = "password123";
   echo $password;
   echo "<br>";

   $userInput = $_POST["pass"];

                                  // passsword_default is constant
   $hash = password_hash($password, PASSWORD_DEFAULT);

   // password now become hash
   echo "Hashed Pasword Below:";
   echo "<br>";
   echo $hash;

   echo "<br>";
   echo "<br>";
   echo "Below is the result of password Checking <br>";
   // use to verify password
   if(isset($_POST["Login"])){
      if(empty($_POST["pass"])){
         echo"Empty Field";
      }else{
          // password_verify to verify the password
          if(password_verify($userInput, $hash)){
             echo "You are logged in <br>";
         }else{
             echo "Wrong Password <br>";
      }
     
   }
   }else{
      
   }
   




   ?>

   


   


</body>
</html>
<?php
include("footer.html");
?>