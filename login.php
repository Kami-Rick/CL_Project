<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header" style="font-family: 'Montserrat';">
		<h2>Login </h2>
	</div>

	<form method="post" action="login.php" style="font-family: 'Montserrat';">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member ? <a href="register.php">Sign Up</a>
		</p>
	</form>
</body>
</html>