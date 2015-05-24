<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/stylesheet.css">
	</head>
	<body>
		<form id="formen" name ="minForm" method="post" action="databasGrej.php">
			<label for="namn"> <h1>Du postar kommentarer som:</h1></label>
				<input type="text" name="email" id="email" size="36" value="<?php echo $_SESSION['namn'];?>" readonly>
			<label for="inlagg"><h1>Din kommerntar:</h1></label>
				<input type="text" id="inlagg"name="inlagg"><br>
			<input type="submit" id="knappen">
		</form>

		<script src="js/main.js"></script>

		<form action="registrering.php">
			<input type="submit" value="Go to registrering!"
	</body>
</html>