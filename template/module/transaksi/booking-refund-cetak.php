<?php

include('component/com-booking.php')

?>

<center>
	<h3>Laporan Daftar Refund Transaksi</h3>
</center>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if (!empty($tamu_refund)) { ?>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nomor Invoice</th>
							<th>Nama Tamu</th>
							<th>Tanggal Check-In</th>
							<th>Tanggal Check-Out</th>
							<th>Nomor Telpon</th>
							<th>Email</th>
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
	<?php
	echo "Tanggal dan Waktu saat laporan ini dicetak : " . date("d-m-Y , h:i:sa") . "<br>";
	?>
</section>
<script>
	window.print();
</script>
