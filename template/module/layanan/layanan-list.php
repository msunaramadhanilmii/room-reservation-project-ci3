<?php

include('component/com-layanan.php');

?>

<section class="content-header">
	<h1>Layanan <span class="small">Administrasi layanan hotel</span></h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12 ">
			<div class="box box-primary">
				<div class="box-header">
					<a class="btn btn-success" href="?module=layanan/layanan-add">Tambah Layanan Baru</a>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nama Layanan</th>
								<th>Kategori</th>
								<th>Harga</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($layanan as $layanan) { ?>
								<tr>
									<td><?php echo $layanan['nama_layanan']; ?></td>
									<td><?php echo $layanan['nama_layanan_kategori']; ?></td>
									<td>Rp <?php echo number_format($layanan['harga_layanan']) . ' / ' . $layanan['satuan']; ?></td>
									<td>
										<a class="btn btn-xs btn-info" href="?module=layanan/layanan-update&layanan=<?php echo $layanan['id_layanan']; ?>">Update</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<a class="btn btn-primary pull-left" href="?module=layanan/layanan-cetak">Cetak</a>
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
