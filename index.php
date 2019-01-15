<!DOCTYPE html>
<html>
<head>
	<title>WebChat - Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<img src="img/login.png" alt="Login" style="border-radius: 50%;">
		<form action="chat.php">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter Username">
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter Password">
			</div>
			<input type="submit" name="submit" class="btn-login" value="Login">
			<br>
			<a href="forgotpassword.php">Forgot your password?</a>
			<br><br>
			<a href="register.php">Create new account</a>
		</form>
	</div>
</body>
</html>