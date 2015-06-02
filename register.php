<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/main.css">
		<h1> Registrering </h1>
	</head>
	<body>
		<form id="formen" name ="minForm" method="post" action="register-process.php">
			<label for="email"><h1>Min email-adress</h1></label>
				<input type="text" id="form_eadress" name="form_eadress" required>
			<label for="username"><h1>Mitt anvandarnamn</h1></label>
				<input type="text" id="form_usr" name="form_usr" required>
			<label for="password"> <h1>Mitt losenord</h1></label>
				<input type="password" id="form_pw" name="form_pw" required>
			<label for="password"> <h1>Bekrafta losenord</h1></label>
				<input type="password" id="form_pw2" name="form_pw2" required><br>
				<br>
			<input type="submit" name="Registrera" id="knappen">
		</form>

		


	</body>
</html>