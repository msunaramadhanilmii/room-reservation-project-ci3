<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="template/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="template/images/favicon.png" />
</head>

<body>
	<img class="wave" src="template/assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="template/assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="template/assets/img/avatar.png">
				<?php if (isset($errMsg)) { ?>
					<div class="alert alert-danger"><?php echo $errMsg; ?></div>
				<?php } ?>
				<h1 class="title">Welcome</h1>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" name="username" type="text" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" name="password" type="password" class="input">
					</div>
				</div>
				<button name="login" type="submit" class="btn" value="Login" name="login">Login</button>
				<a href="daftar.php" style="text-align:center">Create Account</a>
				<a href="index.php" style="text-align:center">Back</a>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="template/assets/js/main.js"></script>
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
</body>

</html>
