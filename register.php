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




<?php
$servername = "fdb1028.awardspace.net"; 
$username = "4254567_nicholasgroceries";
$password = "bluke987";
$dbname = "4254567_nicholasgroceries";

// gives php the data base variable so it has the information to access it 
// it also create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Checks connection to the database and lets me know if theres an error with the if statement
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 // fowards the information in the data base
 
$sql = "INSERT INTO Registration (username, password, phonenumber, emailaddress, age) VALUES ('
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

// another if state to tell me if the user was able to register or if there was an error 

if (mysqli_query($conn, $sql)) {
    echo "Thank you for registering!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<form action="http://nicholashomedeliveredgroceriesversion2.atwebpages.com/home.html">
<button>Go back</button>
</form>


</body>
</html>


