<?php

include('component/com-kamar.php');

?>
<center>
	<h3>Laporan Informasi Kamar</h3>
</center>

<section class="content">
	<div class="box">
		<div class="box-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nomor Kamar</th>
						<th>Tipe Kamar</th>
						<th>Harga / Malam</th>
						<th>Max. Dewasa</th>
						<th>Max. Anak-anak</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($kamar as $kamar) { ?>
						<tr>
							<td><?php echo $kamar['nomor_kamar']; ?></td>
							<td><?php echo $kamar['nama_kamar_tipe']; ?></td>
							<td>Rp <?php echo number_format($kamar['harga_malam']); ?></td>
							<td><?php echo $kamar['max_dewasa']; ?> Orang</td>
							<td><?php echo $kamar['max_anak']; ?> Orang</td>
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
