<html>
<body>




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

<br><br><br><br><br><br><br><br><br>

<form action="http://nicholashomedeliveredgroceriesversion2.atwebpages.com/home.html">
<button>Go back</button>
</form>


<?php
$servername = "fdb1028.awardspace.net"; 
$username = "4254567_nicholasgroceries";
$password = "bluke987";
$dbname = "4254567_nicholasgroceries";

// Creates a connection with database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection with database to see if login info correct

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


  // updates table with the values but it isnt working
$sql = "UPDATE Registration (username, password, phonenumber, emailaddress, age) VALUES ('
".$_POST["username"]."
', '
".$_POST["password"]."
', '
".$_POST["phonenumber"]."
', '
".$_POST["emailaddress"]."
', '
".$_POST["age"]."
')";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

// closes connection and echo/say is update success
?>


<form action="http://nicholashomedeliveredgroceriesversion2.atwebpages.com/home.html">
<button>Go back</button>
</form>


</body>
</html>
