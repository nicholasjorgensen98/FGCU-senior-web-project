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
$holdusername = "";

// Creates a connection with database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Checks if my login is correct
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//selects the user if its exists in the database with select if not print error

$sql = "SELECT username, password from Registration";
$holdusername = mysqli_real_escape_string($conn, $_POST['username']);

if (mysqli_query($conn, $sql)) {
    echo "Welcome " . $holdusername;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// even though I have it selecting the columns from the table , im not sure if it working

mysqli_close($conn);
?>
<form action="home.html">
<button>Go back</button>
</form>

</body>
</html>

</body>
</html>
