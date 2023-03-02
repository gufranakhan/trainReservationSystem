<?php 

$servername = "localhost";
$subjectname = "root";
$content= "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $subjectname, $content, $dbname);

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
	<meta name="viewport" content="width=device-width, subject-scale=1">
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
	textarea{
		width: 100%;
		height: 75px;
	}
	a[href="logout.php"]{
		color:white;
		background-color: red;
		right:5px;
	}
	</style>
</head>
<body>
	<div class="container">
<?php include 'header.html';?>
		<main>
	<form action="" method="post">
			<label for="subject">subject:</label>
			<input type="text" id="subject" name="subject" placeholder="Enter subject " onfocusout="myFunction(event)">
			<label for="content">content:</label>
			<textarea  name="content" onfocusout="myFunction(event)"></textarea> 
			<input type="submit" id='btn' value="submit" name="submit">
		</form>
	</main>
	<content>
	<?php
	if(isset($_POST['submit'])){
		$subject=$_POST['subject'];
		$content=$_POST['content'];
		$user=$_SESSION['name'];
		
		$query="insert into subject (subject, content, user) values ('$subject','$content','$user')";
		$result=$conn->query($query);
		//echo "check1";
		if($result){
			echo "everything's saved and good<br>";
			echo $content;
		}

		 else {
		 	echo "No data found!!!";
			
		}
	}

	

	?>
	</content>
	<h2><?php echo $_SESSION['name'];?></h2>
	<footer><?php include "footer.html"?></footer>
		
		
		<script type="text/javascript" src="validation.js"></script>
		<script type="text/javascript" >
			form.addEventListener('submit', e => e.preventDefault());
		</script>

</body>
</html>