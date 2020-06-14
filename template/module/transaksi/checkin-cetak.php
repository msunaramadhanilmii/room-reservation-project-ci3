<?php

include('component/com-transaksi.php')

?>

<section class="content-header">
	<h1></h1>
</section>

<center>
	<h3>Laporan Tamu in-House</h3>
</center>
<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if (!empty($tamu_inhouse)) { ?>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th># Kamar</th>
							<th>Nama Tamu</th>
							<th>Tanggal Check-In</th>
							<th>Tanggal Check-Out</th>
							<th>Identitas</th>
							<th>Nomor Identitas</th>
							<th>Nomor Telpon</th>
							<th>Nomor Invoice</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($tamu_inhouse as $tamu_inhouse) { ?>
							<tr>
								<td><?php echo $tamu_inhouse['nomor_kamar']; ?></td>
								<td><?php echo $tamu_inhouse['prefix'] . '. ' . $tamu_inhouse['nama_depan'] . '&nbsp;' . $tamu_inhouse['nama_belakang']; ?></td>
								<td><?php echo $tamu_inhouse['tanggal_checkin']; ?></td>
								<td><?php echo $tamu_inhouse['tanggal_checkout']; ?></td>
								<td><?php echo $tamu_inhouse['tipe_identitas']; ?></td>
								<td><?php echo $tamu_inhouse['nomor_identitas']; ?></td>
								<td><?php echo $tamu_inhouse['nomor_telp']; ?></td>
								<td><?php echo $tamu_inhouse['nomor_invoice']; ?></td>
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
