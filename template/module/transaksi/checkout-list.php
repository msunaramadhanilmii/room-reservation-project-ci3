<?php

include('component/com-transaksi.php')

?>

<section class="content-header">
	<h1>Tamu Check Out <span class="small">Daftar tamu yang pernah menginap</span></h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12 ">
			<div class="box box-primary">
				<div class="box-body">
					<?php if (!empty($tamu_checkout)) { ?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nomor Invoice</th>
									<th>Nama Tamu</th>
									<th>Warga Negara</th>
									<th>Tanggal Check-In</th>
									<th>Tanggal Check-Out</th>
									<th>Identitas</th>
									<th>Nomor Identitas</th>
									<th>Nomor Telpon</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tamu_checkout as $tamu_checkout) { ?>
									<tr>
										<td><?php echo $tamu_checkout['nomor_invoice']; ?></td>
										<td><?php echo $tamu_checkout['prefix'] . '. ' . $tamu_checkout['nama_depan'] . '&nbsp;' . $tamu_checkout['nama_belakang']; ?></td>
										<td><?php echo $tamu_checkout['warga_negara']; ?></td>
										<td><?php echo $tamu_checkout['tanggal_checkin']; ?></td>
										<td><?php echo $tamu_checkout['tanggal_checkout']; ?></td>
										<td><?php echo $tamu_checkout['tipe_identitas']; ?></td>
										<td><?php echo $tamu_checkout['nomor_identitas']; ?></td>
										<td><?php echo $tamu_checkout['nomor_telp']; ?></td>
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
					<a class="btn btn-primary pull-left" href="?module=transaksi/checkout-cetak">Cetak</a>
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
