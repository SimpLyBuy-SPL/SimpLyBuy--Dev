<?php include('SimplyBuyServer.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
	<div class="Header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="pass2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="Button">Free Register</button>
		</div>
		<p>
			Already a Member? <a href="login.php">Log in</a>
		</p>
	</form>
</body>
</html>