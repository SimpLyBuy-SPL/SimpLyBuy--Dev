<?php include('SimplyBuyServer.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
	
	<div class="Header">
		<h2>Login</h2>
	</div>

	<form method="post" action="Login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="Button">Login</button>
		</div>
		<p>
			Not a Member? <a href="Register.php">Register Now!</a>
		</p>
	</form>
	
</body>
</html>