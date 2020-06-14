<?php

include('component/com-transaksi.php')

?>

<section class="content-header">
	<h1></h1>
</section>
<center>
	<h3>Laporan History Tamu</h3>
</center>
<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if (!empty($tamu_checkout)) { ?>
				<table class="table table-bordered table-striped">
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
		</div>
	</div>
	<?php
	echo "Tanggal dan Waktu saat laporan ini dicetak : " . date("d-m-Y h:i:sa") . "<br>";
	?>
</section>
<script>
	window.print();
</script>
