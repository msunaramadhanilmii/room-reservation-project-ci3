<?php

include('component/com-tamu.php');

?>

<center>
	<h3>Laporan Buku Tamu</h3>
</center>
<section class="content">
	<div class="box">
		<div class="box-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Negara</th>
						<th>Identitas</th>
						<th>Nomor Identitas</th>
						<th>Nomor Telpon</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tamu as $tamu) { ?>
						<tr>
							<td><?php echo $tamu['prefix'] . '. ' . $tamu['nama_depan'] . '&nbsp;' . $tamu['nama_belakang']; ?></td>
							<td><?php echo $tamu['warga_negara']; ?></td>
							<td><?php echo $tamu['tipe_identitas']; ?></td>
							<td><?php echo $tamu['nomor_identitas']; ?></td>
							<td><?php echo $tamu['nomor_telp']; ?></td>
							<td><?php echo $tamu['email']; ?></td>
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
