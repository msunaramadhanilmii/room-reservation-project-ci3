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
					<?php if (!empty($tamu_refund)) { ?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nomor Invoice</th>
									<th>Nama Tamu</th>
									<th>Tanggal Check-In</th>
									<th>Tanggal Check-Out</th>
									<th>Nomor Telpon</th>
									<th>Email</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tamu_refund as $tamu_refund) { ?>
									<tr>
										<td><?php echo $tamu_refund['nomor_invoice']; ?></td>
										<td><?php echo $tamu_refund['prefix'] . '. ' . $tamu_refund['nama_depan'] . '&nbsp;' . $tamu_refund['nama_belakang']; ?></td>
										<td><?php echo $tamu_refund['tanggal_checkin']; ?></td>
										<td><?php echo $tamu_refund['tanggal_checkout']; ?></td>
										<td><?php echo $tamu_refund['nomor_telp']; ?></td>
										<td><?php echo $tamu_refund['email']; ?></td>
										<td><?php echo $tamu_refund['status']; ?></td>
										<td><a class="btn btn-xs btn-primary" href="?module=transaksi/booking-update&booking=<?php echo $tamu_refund['id_booking']; ?>&kamar=<?php echo $tamu_refund['id_kamar']; ?>">Edit</a></td>
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
					<a class="btn btn-primary pull-left" href="?module=transaksi/booking-refund-cetak">Cetak</a>
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
