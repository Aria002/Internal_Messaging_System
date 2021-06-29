<?php include_once "connection.php"; ?>
<?php

	$q1 = mysqli_query($con, "UPDATE `mails` SET `deleteStatusSender` = 'true' WHERE `id` = ".$_REQUEST['id']);

	if ($q1) {
		header('location:sent_box.php');
	} 
	else {
		header('location:sent_box.php?message=Failed to delete');
	}

?>