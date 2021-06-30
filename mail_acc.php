<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	// if (isset($_SESSION['id'])) {
	// 	 $q1 = mysqli_query($con, "SELECT `id` FROM `ims` WHERE `id` =".$_SESSION['id']);
	// 	 $row = mysqli_fetch_array($q1);
	// }
	// print_r($_REQUEST);
	// echo $_SESSION["email"];die();
	$qry = "INSERT INTO `mails` VALUES ('','".$_SESSION["email"]."', '".$_REQUEST['receiverId']."', '".$_REQUEST['subject']."','".$_REQUEST['content']."','','unread','false','false')";
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		header('location: sent_box.php');
	} else {
		echo "Error Occurred. Please try again later!";
	}
?>