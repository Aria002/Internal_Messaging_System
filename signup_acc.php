<?php include_once "connection.php"; ?>
<?php

	// print_r($_REQUEST);die();

	//checking for duplicate email
     $q1 = mysqli_query($con, "SELECT `id` FROM `ims` WHERE `Email` = '".$_REQUEST['email']."' OR `Phone` = '".$_REQUEST['Phone']."'");
	$num = mysqli_num_rows($q1);

	if ($num === 0) {
		$qry = "INSERT INTO `ims` VALUES ('', '".$_REQUEST['name']."','".$_REQUEST['dob']."', '".$_REQUEST['email']."','".$_REQUEST['Phone']."', '".$_REQUEST['password']."')";
		$qry_exec = mysqli_query($con, $qry);
		if ($qry_exec) {
			header('location:signup.php');
			} else {
			echo "Failed";
		}
	} else {
		echo "Email id or phone no already exists. Please try a different email id or phone no.";
	}
?>