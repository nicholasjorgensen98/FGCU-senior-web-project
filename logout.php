<!DOCTYPE html>


<html>




<head>

<title>Nicholas's Home Delivered Groceries</title>

</head>

<body style="background-color:grey;">


<h1>Welcome to Nicholas's Home Delivered Groceries</h1>


<div>


   
 <p style="float: left;"><img src="logo.png" height="200px" width="200px" >

</p>

   
<nav>

<ul>

<button type="button">

<a href="home.html">Homepage</a>

</button>  &nbsp &nbsp &nbsp &nbsp

<button type="button">

<a href="aboutus.html">About Us!  </a> 

</button> 

 &nbsp &nbsp &nbsp &nbsp

<button type="button">

<a href="products.html">Products</a> 
</button> 

&nbsp &nbsp &nbsp &nbsp

<button type="button">

<a href="registerlogin.html">Register & Login</a> 

</button> 

&nbsp &nbsp &nbsp &nbsp

<button type="button">

<a href="check.html">Checkout</a> 

</button> 

&nbsp &nbsp &nbsp &nbsp


</ul>

</nav>


</div>






<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br>

<!-- I wasn't able to get it to logout properly -->

<form action="http://nicholashomedeliveredgroceriesversion2.atwebpages.com/home.html">
<button>Go back</button>
</form>

<p> you have logged out </p<>
 
 <?php
 session_start();

session_unset();
session_destroy();
$_SESSION = array();

?>
 
<!-- I tried to establish there was session , then drop it by unsetting it and destroying and establishing it as an array -->
 
</body>
</html>