<!DOCTYPE html>
<?php 
session_start(); 
 if(isset($_SESSION['email'])){
 	echo "Welcome ". $_SESSION[ 'username'] . " You're already logged in.";
?> <html> 		<form method="link" action="logout.php">
		<input type="submit" value="Logout">
		</form></html>
<?php }
 else{ ?>
 	<html>
	<head>
		<link rel="stylesheet" href="css/stylesheet.css">
		<h1> Logga in </h1>
	</head>
	<body>

		<form id="formen" name ="minForm" method="post" action="login-process.php">
			<label for="email"><h1>Min email-adress</h1></label>
				<input type="text" id="emailLogin"name="emailLogin">
			<label for="losenord"> <h1>Mitt losenord</h1></label>
				<input type="password" id="losenord" name="losenord"><br>
				<br>
			<input type="submit" name="submit" id="submit">
		</form>
	<script src="main.js"></script>

	</body>
</html>
<?php 

}

?>