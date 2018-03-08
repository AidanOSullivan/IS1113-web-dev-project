<?php
// start session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
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

h2{
  text-align: center;
  color: lightblue;
}
</style>
        
        <title> enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <body style="background-image:url(../../oceanback.jpg)" class="body">
        
 <header>
    <div class="container">
      <h1 class="logo"></h1>
      <img src="../mistlogo.JPG" alt="logo" class="logo" height="75" width="250">

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
  
  
  
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "ebus3.php">
                
                <label for="user_email">
                     Email:
                </label>
                
                <input type="email" id="user_email" placeholder="john@email.com">
                    
                
                <br/>
                <br/>
                
                
                 <label for="user_name">
                     Name:
                </label>
                
                <input type="text" id="user_name" placeholder="John Appleseed">
                    
                
                <br/>
                <br/>
                
                <label for="user_pin">
                     PIN:
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                    <br/>
                    <br/>
                    <br/>
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        // set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
         
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
    
    
    
</html>
