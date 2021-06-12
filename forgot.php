<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial_scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="s4.css">
	<title>Forgot Password Form</title>
</head>
<body>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="forgot_acc.php" method="post">
			<h2>Enter your Email</h2>
			<input type="email" name="email" placeholder="Email" required/>
			<button type="submit">Go</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="forgot_acc.php" method="post">
			<h2>Enter your Phone Number</h2>
			<input type="varchar" name="phone" placeholder="Phone Number" required/>
			<button type="submit">Go</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Forgot your Password??</h1>
				<p>To change your password using your Phone Number click the button below!!</p>
				<button class="ghost" id="signIn">Use Phone Number</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Having Problem??</h1>
				<p>To change your password using your Email click the button below!!</p>
				<button class="ghost" id="signUp">Use Email</button>
			</div>
		</div>
	</div>
</div>
<script src="buttonsignin.js"></script>
</body>
</html>
