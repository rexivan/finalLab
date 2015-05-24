<!DOCTYPE html>
<html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_finallab";

$varUsr = $_POST['form_usr'];
$varEmailaddress = $_POST['form_eadress'];
$varLosenord = $_POST['form_pw'];
$varLosenord2 = $_POST['form_pw2'];
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




if($varLosenord == $varLosenord2){
if(0===count($phpArray)) {
$sql = "INSERT INTO db_usrs (db_eadress, db_pw, db_slt, db_usr) VALUES ('$varEmailaddress', '$md5_password', '$salt', '$varUsr')" ;

if(! mysqli_query($conn, $sql)){
	die("Could not connect123:"  . mysqli_error($conn));

}
	echo "<script>
		alert('Registration successfull!');
		window.location.href='http://localhost/finalLab/finalLab/index.php';
		</script>";
}
}
else{
	echo "Passwords dont match! Hit 'BACKSPACE' and try again!";
}


?>
</html>