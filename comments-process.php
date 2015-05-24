<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_finallab";

$varUsr = $_SESSION['username'];
$varComment = $_POST['inlagg'];


if (empty($varComment)) {
	echo "<script>
		alert('Comment field can't be empty.);
		window.location.href='http://localhost/finalLab/finalLab/comments.php';
		</script>";
	}

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(! $conn){
	die('Could not connect: ' . mysql_error($conn));
}

$sql = "INSERT INTO db_comments (cmt_usr, cmt_msg) VALUES ('$varUsr', '$varComment')" ;

if(! mysqli_query($conn, $sql)){
	die("Could not connect123:"  . mysqli_error($conn));

}
echo "<script>
		window.location.href='http://localhost/finalLab/finalLab/index-process.php';
		</script>";
?>