<?php include_once "connection.php"; ?>
<?php
	 $q1 = mysqli_query($con, "SELECT `id` FROM `ims` WHERE `Email` = '".$_REQUEST['email']."' AND `Password` = '".$_REQUEST['password']."'");
	$num = mysqli_num_rows($q1);

	if ($num === 1) {
		session_start();

		$user = mysqli_fetch_array($q1);
		$_SESSION['id'] = $user['id'];
		header('location:choose.php');

	} else {
		header('location:signup.php?message=Email or Password Incorrect. Please check your credentials');
	}

?>