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
				<div class="box-body">
					<?php if (!empty($booking_online)) { ?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nomor Invoice</th>
									<th>Tanggal Transaksi</th>
									<th>Tanggal Transaksi</th>
									<th>Tanggal Check-In</th>
									<th>Tanggal Check-Out</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($booking_online as $booking_online) { ?>
									<tr>
										<td><?php echo $booking_online['nomor_invoice']; ?></td>
										<td><?php echo $booking_online['tanggal']; ?></td>
										<td><?php echo $booking_online['id_kamar_tipe']; ?></td>
										<td><?php echo $booking_online['tanggal_checkin']; ?></td>
										<td><?php echo $booking_online['tanggal_checkout']; ?></td>
										<td><?php echo $booking_online['status']; ?></td>
										<td><a class="btn btn-xs btn-primary" href="?module=transaksi/booking-update&booking=<?php echo $booking_online['id_booking']; ?>&kamar=<?php echo $booking_online['id_kamar']; ?>">Update Status</a></td>
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
