<!DOCTYPE html>
<?php 
session_start();
include 'db_connect.php';
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
				<textarea name="inlagg" rows ="5"> </textarea>><br>
			<input type="submit" id="knappen">
		</form>
		<form method="link" action="logout.php">
		<input type="submit" value="Logout">
		</form><br>

		<script src="js/main.js"></script>


</html>
<?php

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
