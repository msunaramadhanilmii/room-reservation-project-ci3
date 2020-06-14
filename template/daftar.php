<?php

include('component/com-user-tamu.php');

?>
<!DOCTYPE html>
<html>

<head>
	<title>Hotel Batung Batulis Banjarbaru</title>
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
			<?php if (isset($_POST['tamu-add'])) { ?>
				<div class="alert alert-success">
					<h4>Berhasil</h4>
					Anda telah berhasil melakukan penambahan data pengguna baru
					<a href="login.php" style="text-align:center">Login !!!</a>
				</div>
			<?php } else { ?>
				<form action="" method="post">
					<img src="template/assets/img/avatar.png">
					<?php if (isset($errMsg)) { ?>
						<div class="alert alert-danger"><?php echo $errMsg; ?></div>
					<?php } ?>
					<h1 class="title">Registration Form</h1>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Username</h5>
							<input type="text" name="username" type="text" class="input" required>
						</div>
					</div>
					<div class="input-div pass">
						<div class="i">
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" name="password" type="password" class="input" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5></h5>
							<input type="text" name="prefix" type="text" class="input" placeholder="Mr/Ms/Mrs" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>First Name</h5>
							<input type="text" name="nama_depan" type="text" class="input" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Last Name</h5>
							<input type="text" name="nama_belakang" type="text" class="input" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Telephone number</h5>
							<input type="text" name="nomor_telp" type="text" class="input" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Email</h5>
							<input type="text" name="email" type="text" class="input" required>
						</div>
					</div>
					<button class="btn btn-success" type="submit" name="tamu-add">create account</button>
					<a href="login.php" style="text-align:center">Already have an account</a>
				</form>
			<?php } ?>
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
