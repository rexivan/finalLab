<!DOCTYPE html>
<?php 
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="css/stylesheet.css">
	</head>
	<body>
		<form id="formen" name ="minForm" method="post" action="comments-process.php">
			<label for="namn"> <h1>Du postar kommentarer som:</h1></label>
				<input type="text" name="email" id="email" size="36" value="<?php echo $_SESSION['username'];?>" readonly>
			<label for="inlagg"><h1>Din kommerntar:</h1></label>
				<input type="text" id="inlagg"name="inlagg"><br>
			<input type="submit" id="knappen">
		</form>

		<script src="js/main.js"></script>

		<form action="register.php">
			<input type="submit" value="Go to registrering!"
</html>
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

foreach($rows as $row){ 
    $usrname = stripslashes($row['cmt_usr']);
    $commentMsg = stripcslashes($row['cmt_msg']);
    
    echo "<br> Username: ";
    echo $usrname . '<br/>';
    echo "Comment: ";
    echo $commentMsg . '<br/>';
}


?>