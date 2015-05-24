<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_finallab";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(! $conn){
	die('Could not connect: ' . mysql_error($conn));
}


$sql = "SELECT * FROM db_comments";
$result = mysqli_query($conn, $sql);
$rows = array();
while($row = $row = mysqli_fetch_assoc($result))
    $rows[] = $row;

$_SESSION['rowsarray'] = $rows;
?>