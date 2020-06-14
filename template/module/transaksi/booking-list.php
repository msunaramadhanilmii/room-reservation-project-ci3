<?php

include('component/com-booking.php')

?>

<section class="content-header">
	<h1>List Reservasi / Booking </h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12 ">
			<div class="box box-primary">
				<div class="box-header">
					<a class="btn btn-success" href="?module=transaksi/booking">Tambah Reservasi / Booking</a>
				</div>
				<div class="box-body">
					<?php if (!empty($tamu_booking)) { ?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nomor Invoice</th>
									<th>Nama Tamu</th>
									<th>Warga Negara</th>
									<th>Tanggal Check-In</th>
									<th>Tanggal Check-Out</th>
									<th>Nomor Telpon</th>
									<th>Email</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tamu_booking as $tamu_booking) { ?>
									<tr>
										<td><?php echo $tamu_booking['nomor_invoice']; ?></td>
										<td><?php echo $tamu_booking['prefix'] . '. ' . $tamu_booking['nama_depan'] . '&nbsp;' . $tamu_booking['nama_belakang']; ?></td>
										<td><?php echo $tamu_booking['warga_negara']; ?></td>
										<td><?php echo $tamu_booking['tanggal_checkin']; ?></td>
										<td><?php echo $tamu_booking['tanggal_checkout']; ?></td>
										<td><?php echo $tamu_booking['nomor_telp']; ?></td>
										<td><?php echo $tamu_booking['email']; ?></td>
										<td><?php echo $tamu_booking['status']; ?></td>
										<td><a class="btn btn-xs btn-primary" href="?module=transaksi/booking-update&booking=<?php echo $tamu_booking['id_booking']; ?>&kamar=<?php echo $tamu_booking['id_kamar']; ?>">Update Status</a></td>
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
					<a class="btn btn-primary pull-left" href="?module=transaksi/booking-cetak">Cetak</a>
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
