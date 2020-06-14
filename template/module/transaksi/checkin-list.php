<?php

include('component/com-transaksi.php')

?>

<section class="content-header">
	<h1>Tamu In-House <span class="small">Daftar tamu yang sedang menginap</span></h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12 ">
			<div class="box box-primary">
				<div class="box-body">
					<?php if (!empty($tamu_inhouse)) { ?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th># Kamar</th>
									<th>Nama Tamu</th>
									<th>Tanggal Check-In</th>
									<th>Tanggal Check-Out</th>
									<th>Jumlah Deposit</th>
									<th>Nomor Invoice</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tamu_inhouse as $tamu_inhouse) { ?>
									<tr>
										<td><?php echo $tamu_inhouse['nomor_kamar']; ?></td>
										<td><?php echo $tamu_inhouse['prefix'] . '. ' . $tamu_inhouse['nama_depan'] . '&nbsp;' . $tamu_inhouse['nama_belakang']; ?></td>
										<td><?php echo $tamu_inhouse['tanggal_checkin']; ?></td>
										<td><?php echo $tamu_inhouse['tanggal_checkout']; ?></td>
										<td>Rp <?php echo number_format($tamu_inhouse['deposit']); ?></td>
										<td><?php echo $tamu_inhouse['nomor_invoice']; ?></td>
										<td><a class="btn btn-xs btn-primary" href="?module=transaksi/checkin-update&transaksi=<?php echo $tamu_inhouse['id_transaksi_kamar']; ?>&kamar=<?php echo $tamu_inhouse['id_kamar']; ?>">Ubah</a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php } else { ?>
						<div class="alert alert-warning">
							<h4>Mohon maaf</h4>
							Untuk sementara tidak ada tamu yang sedang menginap.
						</div>
					<?php } ?>
					<a class="btn btn-primary pull-left" href="?module=transaksi/checkin-cetak">Cetak</a>
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
