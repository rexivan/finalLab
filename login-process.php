<!DOCTYPE html>
<html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_finallab";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$varLosenord = $_POST['losenord'];
$md5_password = md5($varLosenord);
$emailLogin = $_POST['emailLogin'];

$storedSalt = "SELECT 'db_pw' FROM db_usrs WHERE ('db_eadress' == '$emailLogin')";

if($md5_password == $storedSalt)
{
	//$_SESSION['email']=emailLogin;
	echo "Login succesful!";
}
else {
	echo "Wrong password!";
}


?>
</html>