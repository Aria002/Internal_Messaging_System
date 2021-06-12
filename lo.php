<?php include_once "connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<link rel="stylesheet" href="s4.css">
</head>
<body>
	<form action="update_a.php" method="post">
		<input type="hidden" name="id" value="<?=$_GET['id']?>" /><br>
		<!-- <input type="email" name="email" placeholder="Email" /><br> -->
		Password: <input type="password" name="password"><br><br>
		<button type="submit" value="Update">
	</form>
</body>
</html>
