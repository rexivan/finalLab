<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="css/stylesheet.css">
		<h1> Logga in </h1>
	</head>
	<body>
		<form id="formen" name ="minForm" method="post" action="login.php">
			<label for="email"><h1>Min email-adress</h1></label>
				<input type="text" id="emailaddress2"name="emailaddress2">
			<label for="losenord"> <h1>Mitt losenord</h1></label>
				<input type="password" id="losenord" name="losenord"><br>
				<br>
			<input type="submit" name="Logga in" id="knappen">
		</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mindatabas";

$saltLosenord = md5("losenord");


$storedSalt = "SELECT 'dsalt' FROM anvandare WHERE ('email' == 'emailadress')";



?>
		


	</body>
</html>