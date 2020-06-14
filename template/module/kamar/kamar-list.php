<?php

include('component/com-kamar.php');

?>
<section class="content-header">
	<h1>Kamar <span class="small">Informasi kamar</span></h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12 ">
			<div class="box box-primary">
				<div class="box-header">
					<a class="btn btn-success" href="?module=kamar/kamar-add">Tambah Kamar</a>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nomor Kamar</th>
								<th>Tipe Kamar</th>
								<th>Harga / Malam</th>
								<th>Max. Dewasa</th>
								<th>Max. Anak-anak</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($kamar as $kamar) { ?>
								<tr>
									<td><?php echo $kamar['nomor_kamar']; ?></td>
									<td><?php echo $kamar['nama_kamar_tipe']; ?></td>
									<td>Rp <?php echo number_format($kamar['harga_malam']); ?></td>
									<td><?php echo $kamar['max_dewasa']; ?> Orang</td>
									<td><?php echo $kamar['max_anak']; ?> Orang</td>
									<td><?php echo $kamar['status_kamar']; ?></td>
									<td>
										<a href="?module=kamar/kamar-update&kamar=<?php echo $kamar['id_kamar']; ?>" class="btn btn-xs btn-info">Update</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<a class="btn btn-primary pull-left" href="?module=kamar/kamar-cetak">Cetak</a>
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
