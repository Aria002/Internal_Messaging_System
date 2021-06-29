<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	// if (isset($_SESSION['id'])) {
	// 	 $q1 = mysqli_query($con, "SELECT `id` FROM `ims` WHERE `id` =".$_SESSION['id']);
	// 	 $row = mysqli_fetch_array($q1);
	// }
	echo $_SESSION["email"];die();
	echo $qry = "INSERT INTO `mails` VALUES ('','".$_SESSION["email"]."', '".$_REQUEST['receiverId']."', '".$_REQUEST['subject']."','".$_REQUEST['content']."','','unread','false','false')";
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		header('location: mail.php');
	} else {
		echo "Failed";
	}
?>