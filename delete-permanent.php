<?php include_once "connection.php"; ?>
<?php

	$q1 = mysqli_query($con, "DELETE FROM `mails` WHERE `deleteStatusReceiver` = 'true' AND `id` = ".$_REQUEST['id']);

	if ($q1) {
		header('location:trash.php');
	} 
	else {
		header('location:trash.php?message=Failed to delete');
	}

?>