<?php include_once "connection.php"; ?>
<?php
	
	session_start();
    // print_r($_REQUEST);die();
	$qry = "INSERT INTO `messages` VALUES ('','".$_REQUEST["senderId"]."', '".$_REQUEST['receiverId']."', '".$_REQUEST['text']."','','unread','false','false')";
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		echo json_encode(array('status' => 'success'));
	} else {
		echo json_encode(array('status' => 'failed'));
	}
?>