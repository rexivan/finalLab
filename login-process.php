<!DOCTYPE html>
<html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_finallab";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$saltLosenord = md5("losenord");
$emailLogin = $_POST['emailLogin'];

$storedSalt = "SELECT 'db_slt' FROM db_usrs WHERE ('db_eadress' == 'emailLogin')";

if($saltLosenord == $storedSalt)
{
	$_SESSION['email']=emailLogin;
	echo "Login succesful!";
}
else {
	echo "Wrong password!";
}


?>
</html>