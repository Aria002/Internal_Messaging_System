<?php
	
	session_start();
	if (isset($_SESSION['id'])) {
		header('location: choose.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial_scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="s4.css">
	<title>Slider SignIN/SignUP Form</title>
</head>
<body>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup_acc.php" method="post">
			<h2>Create Account</h2>
			<input type="text" name="name" placeholder="Name" required/>
			<input type="date" name="dob" placeholder="Birthday" required>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="VARCHAR" name="Phone" placeholder="Phone" required/>
			<input class="password" name="password" type="password" id="myInput" placeholder="Password" required/>
			<input class="password" type="checkbox" id="password" onclick="myFunction()"> 
			<label for="password" style="font-size: 12px;">Show Password</label>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login_acc.php" method="post">
			<h1>Login</h1>
			<span><u>Welcome to your account</u></span>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="VARCHAR" name="Phone" placeholder="Phone" required/>
			<input type="password" name="password" type="password" placeholder="Password" required/>
			<a href="forgot.php">Forgot your password</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back Friend !!</h1>
				<p>To keep connected with your friends please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<h2>New Here?</h2>
				<p>Enter your personal details and get started!! <u>Use your email and phone number for registration</u></p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="buttonsignin.js"></script>
</body>
</html>