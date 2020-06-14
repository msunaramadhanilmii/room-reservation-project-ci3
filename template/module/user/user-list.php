<?php

include('component/com-user.php');

?>

<section class="content-header">
	<h1>Pengguna <span class="small">Administrasi pengguna system</span></h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12 ">
			<div class="box box-primary">
				<div class="box-header">
					<div class="box-header">
						<a class="btn btn-info" href="?module=user/user-add">Tambah User</a>
					</div>
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nama User</th>
									<th>User Role</th>
									<th>Jabatan</th>
									<th>Nomor Telp / Handphone</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($user as $user) { ?>
									<tr>
										<td><?php echo $user['nama']; ?></td>
										<td><?php echo $user['role_name']; ?></td>
										<td><?php echo $user['jabatan']; ?></td>
										<td><?php echo $user['nomor_telp']; ?></td>
										<td>
											<a class="btn btn-xs btn-info" href="?module=user/user-update&user=<?php echo $user['id_user']; ?>">Edit</a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
</section>
<script>
	$(function() {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>
