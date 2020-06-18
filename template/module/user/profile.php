<?php

include('component/com-user.php');

?>

<section class="content-header">
	<h1>Edit Profile</h1>
</section>

<section class="content">
	<?php if (isset($_POST['user-update'])) { ?>
		<div class="alert alert-success">
			<h4>Berhasil</h4>
			Anda telah berhasil melakukan perubahan data pengguna.
			<a href="?module=user/user-update&user=<?php echo $user_view['id_user']; ?>"><b>Ubah Lagi</b></a> /
			<a href="?module=user/user-list"><b>Kembali</b></a>
		</div>
	<?php } else { ?>
		<main role="main" class="container">
			<div>
				<div class="box">
					<form action="" method="post">
						<div class="box-body">
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Nama Pengguna</label>
										<input class="form-control" name="nama" value="<?php echo $user_view['nama']; ?>" />
									</div>
									<div class="form-group">
										<label>Batasan Akses</label>
										<input class="form-control" value="<?php echo $user_view['role_name']; ?>" disabled />
									</div>
									<div class="form-group">
										<label>Jabatan</label>
										<input class="form-control" name="jabatan" value="<?php echo $user_view['jabatan']; ?>" readonly />
									</div>
									<div class="form-group">
										<label>Nomor Telp / Handphone</label>
										<input class="form-control" name="nomor_telp" value="<?php echo $user_view['nomor_telp']; ?>" />
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label>Username</label>
										<input class="form-control" name="username" value="<?php echo $user_view['username']; ?>" readonly />
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" name="password" />
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<input type="hidden" name="id_user" value="<?php echo $user_view['id_user']; ?>" />
							<button class="btn btn-success" type="submit" name="user-update">Edit</button>
							<a class="btn btn-warning" href="index.php">Batal</a>
						</div>
					</form>
				</div>
			</div>
		</main>
	<?php } ?>
</section>
