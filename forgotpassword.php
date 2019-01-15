<!DOCTYPE html>
<html lang="nl">
<head>
	<title>WebChat - Register</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container" style="height: 350px;">
		<img src="img/forgot password.png" alt="Register">
		<form action="" method="post">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter Username">
			</div>
            <div class="form-input">
				<input type="email" name="email" placeholder="Enter Email">
			</div>
			<input type="submit" name="submit" class="btn-login" value="Forgot Password">
            <p style="color: #FFF; font-weight: bold;">
				<?php 
					if(isset($_POST['submit'])) {
						header('Location: index.php');
					}
				?>
			</p>
		</form>
	</div>
</body>
</html>