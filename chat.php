<!DOCTYPE html>
<html lng="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible"content="ie=edge">
	<title>user's list design</title>
	<link rel="stylesheet" href="list style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="wrapper">
		<section class="users">
			<header>
				<div class="content">
					<img src="bgmoon.jpg" alt="#">
					<div class="details">
						<span>Me</span>
						
					</div>
				</div>
				<div class="search">
					<span class="text">Select an user to start the chat</span>
					<input type="text" placeholder="Enter a name to search">
					<button><i class="fa fa-search"></i></button>
				</div>
				<div class="dropdown">
 					<a class="dropbtn"><i class="fa fa-bars"></i></a>
 					<div class="dropdown-content">
    					<a href="#">Profile</a>
    					<a href="#">Contacts</a>
   						<a href="mail.php">Mail</a>
    					<a href="#">Contact Us</a>
    					<a href="logout.php">Logout</a>
 					</div>
				</div>

			</header>
			
			<div class="users_list">
				<a href="#">
					<div class="content">
						<img src="stars.jpg" alt="#">
						<div class="details">
							<span>User</span>
							<p>hi hello</p>
						</div>
					</div>
					<div class="status_dot"><i class="fa fa-circle"></i></div>
				</a>
			</div>
		</section>
	</div>
	<script src="javausers.js"></script>
</body>
</html>