<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_finallab";

$varUsr = $_POST['form_usr'];
$varEmailaddress = $_POST['form_eadress'];
$varLosenord = $_POST['form_pw'];
$md5_password = md5($varLosenord);
$salt = uniqid(mt_rand(), true);
$phpArray = array();
$sec = "2";


if (empty($varLosenord)) {
array_push($phpArray, 1);} 


//if (!preg_match("/^[a-zA-Z ]*$/",$varNamn)) {
//array_push($phpArray, 1);}

if (empty($varEmailaddress)) {
array_push($phpArray, 1);} 


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$varEmailaddress)) {
array_push($phpArray, 1);}




$conn = mysqli_connect($servername, $username, $password, $dbname);
if(! $conn){
	die('Could not connect: ' . mysql_error($conn));
}





if(0===count($phpArray)) {
$sql = "INSERT INTO db_usrs (db_eadress, db_pw, db_slt, db_usr) VALUES ('$varEmailaddress', '$md5_password', '$salt', '$varUsr')" ;
echo "Registration successfull!";

if(! mysqli_query($conn, $sql)){
	die("Could not connect123:"  . mysqli_error($conn));
}
}
//else {
	//header('Location: inlogg_grej.php');
//}


?>

<form action="login.php">
			<input type="submit" value="Now take me to the login page!"
	</body>

</html>