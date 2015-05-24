<!DOCTYPE html>
<?php
session_start();
?>
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

$phpArray = array();

if (empty($emailLogin)) {
array_push($phpArray, 1);} 


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailLogin)) {
array_push($phpArray, 1);}





$sql = "SELECT db_pw, db_usr FROM db_usrs WHERE db_eadress = '$emailLogin'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$storedSalt = $row["db_pw"];
$storedUsername = $row["db_usr"];



if($md5_password == $storedSalt && 0===count($phpArray))
{
	$_SESSION['email']=$emailLogin;
	$_SESSION['username'] = $storedUsername;
	echo "Login succesful!";
	header('Location: http://localhost/finalLab/finalLab/comments.php');
}
else {
	echo "<script>
		alert(Could not login, please check that your username and password is correct.);
		window.location.href='http://localhost/finalLab/finalLab/comments.php';
		</script>";
}


?>
</html>