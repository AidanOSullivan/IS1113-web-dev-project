<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
     <title> RECEIPT </title>
     
     <style>
        
        h1 {
    color: lightblue;
    font-family: verdana;
    font-size: 300%;
    text-align: center;
}
            
            body {
	margin: 0;
	background: #222;
	font-family: 'Work Sans', sans-serif;
	font-weight: 400;
	background-repeat: no-repeat;
    background-size: cover;
    color: lightblue;
    text-align: center;
}

.container {
	width: 80%;
	margin: 0 auto;
}

header {
  background: #55d6aa;
}

header::after {
  content: '';
  display: table;
  clear: both;
}

.logo {
  float: left;
  
}

nav {
  float: right;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-left: 70px;
  padding-top: 23px;

  position: relative;
}

nav a {
  color: #444;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 14px;
}

nav a:hover {
  color: #000;
}

nav a::before {
  content: '';
  display: block;
  height: 5px;
  background-color: #444;

  position: absolute;
  top: 0;
  width: 0%;

  transition: all ease-in-out 250ms;
}

nav a:hover::before {
  width: 100%;
}

p {  text-align: center;
  color: lightblue;
}
</style>

     </head>
      <body>
        <body style="background-image:url(../../oceanback.jpg)" class="body">
         
      <header>
    <div class="container">
      <h1 class="logo"></h1>
      

      <nav>
        <ul>
        <li><a href="../homepage.html">Home</a></li>
          <li><a href="../CV/cv_page1.html">CV</a></li>
          <li><a href="../ecommerce/Ebus1.php">Shop</a></li>
          <li><a href="../Interests/InterestsHP.html">Interests</a></li>
          <li><a href="#">About Me</a></li>
        </ul>
        
        
      </nav>
    </div>
  </header>
  
      <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
  
         
         <h1> RECEIPT</h1>
         
         <p>
         <?php
         // echo session variables from previous page
         echo "Total is " . $_SESSION["total"] . ". ";
         ?>
         
         <br/>
         
         <?php
         // echo session variables from previous page
         echo "Name: " . $_SESSION["user_name"] . ". ";
         ?>
         
         <br/>
         
         <?php
         // echo session variables from previous page
         echo "Email: " . $_SESSION["user_email"] . ". ";
         ?>
         
         </p>
     </body>
</html>