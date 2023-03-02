
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		navigation bar
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		form{
			grid-template-columns: 1/2;
		}
	</style>
</head>
<body>
	<div class="container">
	<header>
	<h2>Train Reservation System!!!!</h3>
</header>

<nav>
	<a href="home.html">HOME</a><a href="history.html">TRANSACTION</a><a href="contact.php">contact us</a><a href="login.php">Login/Sign-in</a></nav>
		<main>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
			<label for="email">Username/email:</label>
			<input type="text" id="email" name="email" placeholder="Enter email" onfocusout="myFunction(event)">
			<!-- <p id="inp" style="visibility:hidden; color:red">enter something</p> -->
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Enter password" onfocusout="myFunction(event)">
			<inpu
			<input type="submit" name="submit" value="submit" >
		</form>
		</main>

	<script type="text/javascript" src="validation.js">
		
	</script></div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	if(isset($_POST['submit']))
	{	echo "check0";

		$user=$_POST['email'];
		$password=$_POST['password'];
		//echo $user;
		$query="INSERT INTO USER (name,password) VALUES('$user','$password')";
		$result=$conn->query($query);
		//echo "check1";
		if($result){
		 header("location:login.php");
    }
	else
	{
			echo "alert('something not right. try again')";
		}

	}
	else{
		echo "else case";
	}

	?>
</body>
</html>