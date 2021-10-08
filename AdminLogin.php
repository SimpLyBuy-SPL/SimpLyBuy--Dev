<?php include('SimplyBuyServer.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login Form</title>
	<link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>
	
	<div class="Header">
		<h2>Admin Login</h2>
	</div>

	<form method="post" action="AdminAuth.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Admin Name</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>PassCode</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="Button">Login</button>
		</div>
	</form>
	
</body>
</html>