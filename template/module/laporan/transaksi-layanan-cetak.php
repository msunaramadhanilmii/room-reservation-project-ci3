<?php

include('component/com-laporan.php');

?>
<?php if (isset($_POST['laporan-layanan'])) { ?>
	<center>
		<h3>Laporan Transaksi Layanan</h3>
	</center>
	<div class="box">
		<div class="box-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Tanggal / Waktu</th>
						<th>Operator</th>
						<th>Nomor Kamar</th>
						<th>Produk / Layanan</th>
						<th>Harga Satuan</th>
						<th>Jumlah</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($laporan_layanan as $laporan_layanan) { ?>
						<tr>
							<td><?php echo $laporan_layanan['tanggal'] . ' - ' . $laporan_layanan['waktu']; ?></td>
							<td><?php echo $laporan_layanan['nama']; ?></td>
							<td><?php echo $laporan_layanan['nomor_kamar']; ?></td>
							<td><?php echo $laporan_layanan['nama_layanan']; ?></td>
							<td>Rp <?php echo number_format($laporan_layanan['harga_layanan']); ?></td>
							<td><?php echo $laporan_layanan['jumlah'] . '&nbsp;' . $laporan_layanan['satuan']; ?></td>
							<td>Rp <?php echo number_format($laporan_layanan['total']); ?></td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3"><span class="lead">Total Pendapatan : <b>Rp <?php echo number_format($total_laporan_layanan); ?></b></span></td>
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
