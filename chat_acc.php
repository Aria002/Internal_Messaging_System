<?php include_once "connection.php"; ?>
<?php
	session_start();

     $q1 = mysqli_query($con, "SELECT `id` FROM `ims` WHERE `Phone` = '".$_REQUEST['Phone']."'");
	$num = mysqli_num_rows($q1);
	$chat = mysqli_fetch_array($q1);
	if ($num === 1) {
		$qry = "INSERT INTO `contacts` VALUES ('".$_SESSION['id']."', '".$chat['id']."','".$_REQUEST['Phone']."','inactive')";
		$qry_exec = mysqli_query($con, $qry);
		if ($qry_exec) {
			header('location:chat.php');
			} else {
			echo "Failed";
		}
	} else {
		echo "Phone no does not exists. Please try a exists phone no.";
	}
?>