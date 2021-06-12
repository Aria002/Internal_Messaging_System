<?php include_once "connection.php"; ?>

<?php

	
	echo $qry = "UPDATE `ims` SET  `password` = '".$_REQUEST['password']."' WHERE `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);

	if ($qry_exec) {
		// echo "Registered Successfully";
		header('location: signup.php');
	} else {
		header('location:lo.php');
	}
?>