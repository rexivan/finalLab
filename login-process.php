<!DOCTYPE html>
<?php
session_start();
?>
<html>
<?php
include 'functions/db_connect.php';
include 'functions/function.php';
$isCorrect = true;
$varLosenord = mysqli_real_escape_string($conn, $_POST['losenord']);
$emailLogin = mysqli_real_escape_string($conn, $_POST['emailLogin']);

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$emailLogin)) {
$isCorrect = false;
}

$sql = "SELECT db_pw, db_usr, db_slt FROM db_usrs WHERE db_eadress = '$emailLogin'";
 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$storedSalt = $row["db_slt"];
$storedUsername = $row["db_usr"];
$storedPw = $row["db_pw"];
$storedHash = sha1($varLosenord . $storedSalt);

 
if ($storedHash == $storedPw)
{
        $_SESSION['email']=$emailLogin;
        $_SESSION['username'] = $storedUsername;
        header('Location: http://localhost/finalLab/finalLab/comments.php');
}
else {
    $isCorrect = false;
}
if($isCorrect == false)
{
	alertEcho('Could not login, please check that it is the correct password.', 'index.php');
}
 
?>
</html>