<?php
session_start();

include 'db_connect.php';
include 'function.php'

$varUsr = $_SESSION['username'];
$varComment = mysqli_real_escape_string($conn, $_POST['inlagg']);


if (empty($varComment)) {
	alertEcho('Comment field can not be empty', 'comments.php');
	}

$sql = "INSERT INTO db_comments (cmt_usr, cmt_msg) VALUES ('$varUsr', '$varComment')" ;

if(! mysqli_query($conn, $sql)){
	die("Could not connect123:"  . mysqli_error($conn));

}
	alertEcho('Your comment have been posted.', 'comments.php');

?>