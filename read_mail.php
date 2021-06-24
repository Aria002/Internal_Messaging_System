<?php include_once "connection.php"; ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location:mail.php');
	}
?>
<?php
	echo $qry = "SELECT * FROM `mails` WHERE  `id` = ".$_REQUEST['id'];
	$qry_exec = mysqli_query($con, $qry);
	while ($row=mysqli_fetch_array($qry_exec,MYSQLI_BOTH)) {
		echo "ID:" . $row['id'] . "<br/>";
   	 	echo "Sender:" . $row['senderId'] . "<br/>";
   	 	echo "Receiver:" . $row['receiverId'] . "<br/>";
    	echo "Email Subject:" . $row['subject'] . "<br/>";
    	echo "Mail content:" . $row['content'] . "<br/>";
    	echo "<br/>";
	}