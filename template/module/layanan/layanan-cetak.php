<?php

include('component/com-layanan.php');

?>

<center>
	<h3>Daftar Layanan Hotel Batung Batulis Banjarbaru</h3>
</center>
<section class="content">
	<div class="box">
		<div class="box-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama Layanan</th>
						<th>Kategori</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($layanan as $layanan) { ?>
						<tr>
							<td><?php echo $layanan['nama_layanan']; ?></td>
							<td><?php echo $layanan['nama_layanan_kategori']; ?></td>
							<td>Rp <?php echo number_format($layanan['harga_layanan']) . ' / ' . $layanan['satuan']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php
	echo "Tanggal dan Waktu saat laporan ini dicetak : " . date("d-m-Y , h:i:sa") . "<br>";
	?>
</section>
<script>
	window.print();
</script>
