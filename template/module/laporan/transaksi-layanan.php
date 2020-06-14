<?php

include('component/com-laporan.php');

?>

<section class="content-header">
	<h1>Laporan Transaksi Produk / Layanan</h1>
</section>

<section class="content">
	<form action="?module=laporan/transaksi-layanan-cetak" method="post">
		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					<input id="checkin" data-date-format="yyyy-mm-dd" class="form-control" name="tanggal-start" placeholder="Dari Tanggal" />
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<input id="checkout" data-date-format="yyyy-mm-dd" class="form-control" name="tanggal-end" placeholder="Sampai Tanggal" />
				</div>
			</div>
			<div class="col-sm-3">
				<button class="btn btn-success" type="submit" name="laporan-layanan">Lihat Laporan</button>
			</div>
		</div>
	</form>
</section>
