<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location:signup.php');
	}
?>
<?php
	
	$q1 = mysqli_query($con, "SELECT `name`, `email` FROM `ims` WHERE `id` = ".$_SESSION['id']);

	$user = mysqli_fetch_array($q1);


	echo 'Welcome to your profile '.$user['name'];
	echo '<br>';

	echo 'Email: '.$user['email'];

?>


<br>
<br>
<br>
<br>
<a href="logout.php">Logout</a>