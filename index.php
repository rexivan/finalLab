<!DOCTYPE html>
<?php 
session_start(); 
 if(isset($_SESSION['email'])){
 	echo "Welcome ". $_SESSION[ 'username'] . " You're already logged in.";
?> <html> 	
	<head>
		<link rel="stylesheet" href="main.css">
	</head>
	<form method="link" action="logout.php">
		<input type="submit" value="Logout">
		</form><br>
		<form method="link" action="comment.php">	
		<input type="submit" value="Go to comment section!">
		</form></html>

<?php }
 else{ ?>
 	<html>
		<link rel="stylesheet" href="css/stylesheet.css">
		<h1> Logga in </h1>
	<body>

		<form id="formen" name ="minForm" action="login-process.php" onclick="return validera()" method="post">
			<label for="email"><h1>Min email-adress</h1></label>
				<input type="text" id="emailLogin"name="emailLogin">
			<label for="losenord"> <h1>Mitt losenord</h1></label>
				<input type="password" id="losenord" name="losenord"><br>
				<br>
			<input type="submit" name="submit" id="submit">
		</form><br>
				Not registered? Register now! <br>
		<form method="link" action="register.php">
		<input type="submit" value="Register">
		</form>
	<script src="main.js"></script>

	</body>
</html>
<?php 

}

?>