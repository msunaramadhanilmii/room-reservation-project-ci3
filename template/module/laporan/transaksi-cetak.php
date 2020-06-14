<?php

include('component/com-laporan.php');

?>
<?php if (isset($_POST['laporan-transaksi'])) { ?>
	<center>
		<h3>Laporan Transaksi Kamar</h3>
	</center>
	<div class="box">
		<div class="box-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nomor Invoice</th>
						<th>Tanggal Transaksi</th>
						<th>Tanggal Check-In</th>
						<th>Tanggal Check-Out</th>
						<th>Total Biaya Kamar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($laporan_transaksi as $laporan_transaksi) { ?>
						<tr>
							<td><?php echo $laporan_transaksi['nomor_invoice']; ?></td>
							<td><?php echo $laporan_transaksi['tanggal']; ?></td>
							<td><?php echo $laporan_transaksi['tanggal_checkin']; ?></td>
							<td><?php echo $laporan_transaksi['tanggal_checkout']; ?></td>
							<td>Rp <?php echo number_format($laporan_transaksi['total_biaya_kamar']); ?></td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3"><span class="lead">Total Pendapatan : <b>Rp <?php echo number_format($total_laporan_transaksi); ?></b></span></td>
					</tr>
				</tfoot>
				<script>
					window.print();
				</script>
			</table>
		</div>
	</div>
	<?php
	echo "Tanggal dan Waktu saat laporan ini dicetak : " . date("d-m-Y , h:i:sa") . "<br>";
	?>
<?php } ?>
