<!DOCTYPE html>
<html>
<?php
session_start();

include 'functions/db_connect.php';
include 'functions/function.php';

$varUsr = mysqli_real_escape_string($conn, $_POST['form_usr']);
$varEmailaddress = mysqli_real_escape_string($conn, $_POST['form_eadress']);
$varLosenord = mysqli_real_escape_string($conn, $_POST['form_pw']);
$varLosenord2 = mysqli_real_escape_string($conn, $_POST['form_pw2']);
$salt = uniqid(mt_rand(), true);
$hash = sha1($varLosenord . $salt);
$phpArray = array();

if (empty($varLosenord)) {
array_push($phpArray, 1);} 

if (empty($varEmailaddress)) {
array_push($phpArray, 1);} 

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$varEmailaddress)) {
array_push($phpArray, 1);}

$sqlmail = "SELECT * FROM db_usrs WHERE db_eadress = '$varEmailaddress'";
$result = mysqli_query($conn, $sqlmail);
$number_of_rows = mysqli_num_rows($result);

//if(number_of_rows == 0)
if($varLosenord == $varLosenord2 && 0===count($phpArray) && $number_of_rows == 0){
$sql = "INSERT INTO db_usrs (db_eadress, db_pw, db_slt, db_usr) VALUES ('$varEmailaddress', '$hash', '$salt', '$varUsr')" ;

if(! mysqli_query($conn, $sql)){
	die("Could not connect123:"  . mysqli_error($conn));

}
		alertEcho('Registration successfull!', 'index.php');
}
else{
	alertEcho('Registration unsuccessfull!', 'register.php');
}

?>
</html>