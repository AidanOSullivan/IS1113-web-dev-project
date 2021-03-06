<?php
// start session
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
         <!-- adding toolbar -->
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


        <title>Select Product </title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
   
    </head>
    <body>
      
      <!--  adding background image and toolbar links-->
        
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
          <li><a href="../About.html">About Me</a></li>
        </ul>
        
        
      </nav>
    </div>
  </header>
  
        
        
        <h4> Select a product</h4>
 <!--  coding for shop -->
<br/>
<form method="POST" action="Ebus2.php">
    
    <label for="salesforce">
    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
    SalesForce @$100
    </label>
    
    <br/>
    
    <label for="cloud9">
    <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
    Cloud 9 @ $200
    </label>
              
              <br/>
    
    <label for="aws">
 <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
    AWS @ $300
    </label>
    
    <br/>
  
    <label for="gmail">
 <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
    Gmail @ $400
    </label>
              
              <br/>
              
               <br/>
              <br/>
    
    <label for="subtotal">
        Sub Total
        <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
    </label>
    
    <br/>
    <br/>
    
    <label for="discount">
    Discount @ 5%
    <input type="text" id="discount" name="discount" value="0.00" readonly/>
    </label>
    
    <br/>
    <br/>
    
    <label for="vat">
   <b>Vat @ 10%</b> 
    <input type="text" id="vat" name="vat" value="0.00" readonly/>
    </label>
              
    <br/>
    <br/>
    
    <label for="total">
       <b><i>Total</i></b>:
        <input type="text" id="total" name="total" value="0.00" readonly/>
    </label>
    
    <br/>
    <br/>
    
    <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>


</form>

 <!--  calculate and clear button -->
<br/>
<button onClick="calcSub()">Calculate Cost</button>
<a role="button" href="Ebus1.php">Clear Choice</a>

    </body>
</html>