<?php 
echo "current user: ".get_current_user();

echo "script was executed under user: ".exec('whoami');
//include "signal/conn.php";

$servername = "localhost";
$username = "root";
$password= "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if(!isset($_SESSION['name'])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>booking forum</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style type="text/css">
		*{
			margin:0;
			padding: 0;
		}
	.container{
		display: grid;
		gap:1px;

		grid-template-columns: "30% 20% 50%";
		}

	header{
			grid-column:1 / 4;
			margin:0;
			padding: 0;
			
		}

	h2{
		padding:18px;
		background-color: #444;
		color:white;
		}

	nav{
			grid-column: 1/4;
			
			background-color: #444;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}

	nav a{
			color:white;
			text-decoration: none;
			padding: 5px;
			}

	main{
				grid-column: 1/2;

		}
	form{
				display: flex;
				margin:5px;
				padding:5px;
				flex-direction: column;
				justify-content:space-between ;
				align-items: center;
		}
		pre,select{
			width: 100%;
		}

	input,label{
				width:100%;
				margin:5px;
				padding:5px;
		}
	label {
			font-weight: bold;
			margin-bottom: 10px;
		}
	footer{
		grid-column:1 / 4;
		position: fixed;
			margin:0;
			bottom: 0;
			padding: 30px;
			background-color: grey;
			color: white;
			
			width: 100%;

	}
	content{
		grid-column:2 / 4;
			margin:0;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			width: 100%;
			box-sizing: border-box;
			background-color: mintcream;
			display: flex;
			flex-direction: column;
	}
	.result{
		
			margin:0;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			width: 100%;
			box-sizing: border-box;
			background-color: mintcream;
	}
	</style>
</head>
<body>
	<div class="container">
		<?php include 'header.html';?>
		<main>
	<form action="" method="post">
		<pre>
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

// Modify the query to retrieve the data you need
$query = "SELECT id, name FROM station";
$result = $conn->query($query);

echo "<select name='train' >";

// Loop through the data and create an option for each item
while($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
}

echo "</select>";

// Close the database connection
$conn->close();

?>
		</pre>
			<label for="initial">Source:</label>
			<input type="text" id="initial" name="initial" placeholder="Enter source" onfocusout="myFunction(event)">
			<label for="final">Destination:</label>
			<input type="text" id="final" name="final" placeholder="Enter destination" onfocusout="myFunction(event)">
			<label for="date">Date:</label>
			<input type="date" id="date" name="date" onfocusout="myFunction(event)">
			<input type="submit" id='btn' value="submit" name="submit">
		</form>
	</main>
	<content>
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

	//echo "check0";
	if(isset($_POST['submit'])){
		$user=$_POST['initial'];
		$password=$_POST['final'];
		$train=$_POST['train'];
		echo $train;
		//echo $user;
		$query="select * from train where initial='$train' and final='$password'";
		$result=$conn->query($query);
		//echo "check1";
		if($result){
			while($row=$result->fetch_assoc()){
				echo "<div class='result'> initial :".$row['initial']." -- "."final :".$row['final']."</div>";
			}
		}

		 else {
		 	echo "No data found!!!";
			
		}
	}

	

	?>
	</content>
	<footer><?php include "footer.html"?></footer>
		
		
		<script type="text/javascript" src="validation.js"></script>
		<script type="text/javascript" >
			form.addEventListener('submit', e => e.preventDefault());
		</script>

</body>
</html>