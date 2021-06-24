<?php include_once "connection.php"; ?>
<?php

	$q1 = mysqli_query($con, "UPDATE `mails` SET `deleteStatusReceiver` = 'true' WHERE `id` = ".$_REQUEST['id']);

	if ($q1) {
		header('location:mail.php');

	} else {
		header('location:mail.php?message=Failed to delete');
	}

?>