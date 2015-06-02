<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="main.css">
		<h1> Registrering </h1>
	</head>
	<body>
		<form id="formen" name ="minForm" method="post" action="register-process.php">
			<label for="email"><h1>Min email-adress</h1></label>
				<input type="text" id="form_eadress" name="form_eadress">
			<label for="username"><h1>Mitt anvandarnamn</h1></label>
				<input type="text" id="form_usr" name="form_usr">
			<label for="password"> <h1>Mitt losenord</h1></label>
				<input type="password" id="form_pw" name="form_pw">
			<label for="password"> <h1>Bekrafta losenord</h1></label>
				<input type="password" id="form_pw2" name="form_pw2"><br>
				<br>
			<input type="submit" name="Registrera" id="knappen">
		</form>

		


	</body>
</html>