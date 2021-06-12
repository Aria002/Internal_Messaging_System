<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location:signup.php');
	}
?>
<?php 
	
	session_start();

	session_destroy();

	header('location: signup.php');

 ?>