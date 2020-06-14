<?php

include('component/com-booking.php')

?>

<center>
	<h3>Laporan Daftar Tamu Reservasi / Booking</h3>
</center>
<section class="content">
	<div class="box">
		<div class="box-header">
			<div class="box-body">
				<?php if (!empty($tamu_booking)) { ?>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nomor Invoice</th>
								<th>Nama Tamu</th>
								<th>Warga Negara</th>
								<th>Kedatangan</th>
								<th>Kepulangan</th>
								<th>Nomor Telpon</th>
								<th>Email</th>
								<th>Status</th>
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
			</div>
		</div>
	</div>
	<?php
	echo "Tanggal dan Waktu saat laporan ini dicetak : " . date("d-m-Y , h:i:sa") . "<br>";
	?>
</section>
<script>
	window.print();
</script>
