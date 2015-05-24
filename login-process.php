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


$sql = "SELECT db_pw FROM db_usrs WHERE db_eadress = '$emailLogin'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$storedSalt = $row["db_pw"];

echo "$md5_password och $storedSalt";


if($md5_password == $storedSalt)
{
	$_SESSION['email']=$emailLogin;
	$_SESSION['loggedIn']=true;
	echo "Login succesful!";
	header('Location: http://localhost/finalLab/finalLab/index');
}
else {
	echo "Wrong password!";
}


?>
</html>