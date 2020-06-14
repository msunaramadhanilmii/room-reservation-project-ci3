<?php

include('component/com-tamu.php');

?>

<section class="content-header">
	<h1>Buku Tamu <span class="small">Administrasi tamu hotel</span></h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12 ">
			<div class="box box-primary">
				<div class="box-header">
					<a class="btn btn-success" href="?module=tamu/tamu-add">Tambah Tamu Baru</a>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Negara</th>
								<th>Identitas</th>
								<th>Nomor Identitas</th>
								<th>Nomor Telpon</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($tamu as $tamu) { ?>
								<tr>
									<td><?php echo $tamu['prefix'] . '. ' . $tamu['nama_depan'] . '&nbsp;' . $tamu['nama_belakang']; ?></td>
									<td><?php echo $tamu['warga_negara']; ?></td>
									<td><?php echo $tamu['tipe_identitas']; ?></td>
									<td><?php echo $tamu['nomor_identitas']; ?></td>
									<td><?php echo $tamu['nomor_telp']; ?></td>
									<td><?php echo $tamu['email']; ?></td>
									<td>
										<a class="btn btn-xs btn-info" href="?module=tamu/tamu-update&tamu=<?php echo $tamu['id_tamu']; ?>">Edit</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<a class="btn btn-primary pull-left" href="?module=tamu/tamu-cetak">Cetak</a>
				</div>
			</div>
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
