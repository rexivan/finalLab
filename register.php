<!DOCTYPE html>
<html>
        <head>
                <link rel="stylesheet" href="css/main.css">
                <h1> Register account </h1>
        </head>
        <body>
                <form id="formen" name ="minForm" method="post" action="register-process.php">
                        <label for="email"><h4>Email:</h4></label>
                                <input type="text" id="form_eadress" name="form_eadress" required>
                        <label for="username"><h4>Username:</h4></label>
                                <input type="text" id="form_usr" name="form_usr" required>
                        <label for="password"> <h4>Password:</h4></label>
                                <input type="password" id="form_pw" name="form_pw" required>
                        <label for="password"> <h4>Confirm password:</h4></label>
                                <input type="password" id="form_pw2" name="form_pw2" required><br>
                                <br>
                        <input type="submit" name="Registrera" id="knappen">
                </form>
 
               
 		<script src="java/jsRegister.js"></script>
 
        </body>
</html>