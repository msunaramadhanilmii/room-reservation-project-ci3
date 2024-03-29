<?php

include('component/com-booking.php');

include('component/com-hitung-transaksi-booking.php');

?>

<div class="row">
	<div class="col-sm-6">
		Ditujukan Kepada :
		<address>
			<strong><?php echo $transaksi_booking['prefix'] . '. ' . $transaksi_booking['nama_depan'] . '&nbsp;' . $transaksi_booking['nama_belakang']; ?></strong><br />
			<?php echo $transaksi_booking['alamat_jalan']; ?><br />
			<?php echo $transaksi_booking['alamat_kabupaten'] . ' - ' . $transaksi_booking['alamat_provinsi']; ?><br />
			<br />
			Nomor Telp : <?php echo $transaksi_booking['nomor_telp']; ?><br />
		</address>
	</div>
	<div class="col-sm-6">
		<b>NOMOR INVOICE : </b><br />
		<span class="lead"><?php echo $transaksi_booking['nomor_invoice']; ?></span><br /><br />
		<b>Tanggal Terbit :</b><br />
		<span class="lead"><?php echo date('d M Y'); ?></span>
	</div>
</div>

<h3>RINCIAN TAGIHAN RESERVASI / BOOKING</h3>
<table class="table table-bordered table-striped table-responsive">
	<thead>
		<tr>
			<th>Produk / Layanan</th>
			<th>Harga</th>
			<th>Qty</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Room Type : <?php echo $transaksi_booking['nama_kamar_tipe']; ?></td>
			<td>Rp <?php echo number_format($transaksi_booking['harga_malam']); ?></td>
			<td><?php echo $durasi; ?> Malam</td>
			<td>Rp <?php echo number_format($transaksi_booking['total_biaya_kamar']); ?></td>
		</tr>
	</tbody>
</table>

<div class="row">
	<div class="col-sm-6">
		<p class="text-muted well well-sm no-shadow">
			<b>Catatan :</b> Mohon simpan bukti pembayaran ini sebaik mungkin. Pihak hotel tidak akan melayani keluhan-keluhan tamu yang tidak memiliki bukti pembayaran resmi oleh Pihak Hotel
		</p>
	</div>
	<div class="col-sm-6">
		<table class="table table-bordered table-responsive">
			<tr>
				<td><b>Sub-Total</b></td>
				<td>Rp <?php echo number_format($subtotal); ?></td>
			</tr>
			<tr>
				<td>PPn 10%</td>
				<td>Rp <?php echo number_format($ppn); ?></td>
			</tr>
			<tr>
				<td><b>Grand Total</b></td>
				<td><b>Rp <?php echo number_format($grand_total); ?></b></td>
			</tr>
		</table>
	</div>
</div>
