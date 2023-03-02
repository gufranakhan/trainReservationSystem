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
	<a href="book.php">HOME</a><a href="history.html">TRANSACTION</a><a href="contact.php">contact us</a><a href="register.php">Registration / Signup</a></nav>
		<main>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
			<label for="email">Username/email:</label>
			<input type="text" id="email" name="email" placeholder="Enter email" onfocusout="myFunction(event)">
			<!-- <p id="inp" style="visibility:hidden; color:red">enter something</p> -->
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Enter password" onfocusout="myFunction(event)">
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

	if(isset($_POST['submit'])){	
		echo "check0";

		$user=$_POST['email'];
		$password=$_POST['password'];
		//echo $user;
		//$query="SELECT * FROM USER WHERE name='$user' AND password='$password";
		$query = "SELECT * FROM USER WHERE name='$user' AND password='$password'";
		$result=$conn->query($query);
		//echo "check1";
		if($result){
			session_start();
			$_SESSION['name']=$user;
		 	header("location:book.php");
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
		<footer><?php include "footer.html"?></footer>

</body>
</html>
