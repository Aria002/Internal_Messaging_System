<?php include_once "connection.php"; ?>
<?php
	 $q1 = mysqli_query($con, "SELECT `id` FROM `ims` WHERE `Email` = '".$_REQUEST['email']."' OR `phone` = '".$_REQUEST['phone']."' ");
	$num = mysqli_num_rows($q1);
	$row=mysqli_fetch_array($q1);

	if ($num === 1) {
		header('location:loc.php?id='.$row["id"]);

	} else {
		header('location:forgot.php');
		}

?>