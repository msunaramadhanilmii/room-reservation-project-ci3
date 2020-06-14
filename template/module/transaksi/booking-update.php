<?php

include('component/com-kamar.php');

include('component/com-tamu.php');

include('component/com-booking.php');

include('component/com-hitung-transaksi-booking.php');
?>

<section class="content-header">
	<h1>Check In <span class="small">Input data tamu</span></h1>
</section>

<section class="content">
	<div class="box">
		<?php if (isset($_POST['refund'])) { ?>
			<div class="alert alert-success">
				<h4>Berhasil</h4>
				Sukses melakukan refund : <?php echo $kamar_view['nomor_kamar']; ?>.
				<a href="?module=transaksi/booking-list"><b>Kembali</b></a>
			</div>
		<?php } else { ?>
			<?php if (isset($_POST['del'])) { ?>
				<div class="alert alert-success">
					<h4>Berhasil</h4>
					Sukses menghapus data reservasi / booking : <?php echo $kamar_view['nomor_kamar']; ?>.
					<a href="?module=transaksi/booking-list"><b>Kembali</b></a>
				</div>
			<?php } else { ?>
				<?php if (isset($_POST['checkin'])) { ?>
					<div class="alert alert-success">
						<h4>Berhasil</h4>
						Sukses melakukan check-in : <?php echo $kamar_view['nomor_kamar']; ?>.
						<a href="?module=transaksi/booking-list"><b>Kembali</b></a>
					</div>
				<?php } else { ?>
					<div class="box-header">
						<h3 class="box-title">KAMAR NOMOR : <b><?php echo $kamar_view['nomor_kamar']; ?></b></h3>
					</div>
					<form action="" method="post">
						<div class="box-body">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label># INVOICE</label>
										<input class="form-control" name="nomor_invoice" value="<?php echo $transaksi_booking['nomor_invoice']; ?>" />
									</div>
									<div class="alert alert-info">
										<h4><?php echo $kamar_view['nama_kamar_tipe']; ?></h4>
										<ul class="list-unstyled">
											<li>Harga / Malam : <b>Rp <?php echo number_format($kamar_view['harga_malam']); ?></b></li>
											<li>Maximal Orang Dewasa : <b><?php echo $kamar_view['max_dewasa']; ?> Orang</b></li>
											<li>Maximal Anak-anak : <b><?php echo $kamar_view['max_anak']; ?> Orang</b></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="form-group">
										<label>Nama Tamu</label>
										<input class="form-control" value="<?php echo $transaksi_booking['prefix'] . '. ' . $transaksi_booking['nama_depan'] . '&nbsp;' . $transaksi_booking['nama_belakang']; ?>" readonly />
										<select class="form-control nama_tamu" name="id_tamu">
											<option selected="selected" value="<?php echo $transaksi_booking['id_tamu']; ?>">--Pilih--</option>
											<?php foreach ($tamu as $tamu) { ?>
												<option value="<?php echo $tamu['id_tamu']; ?>">
													<?php echo $tamu['prefix'] . '. ' . $tamu['nama_depan'] . '&nbsp;' . $tamu['nama_belakang']; ?>
												</option>
											<?php } ?>
										</select>
									</div>
									<div class="well">
										<a href="?module=tamu/tamu-add"><b>Klik disini</b></a> jika nama tamu yang dimaksud tidak ditemukan untuk ditambah pada daftar buku tamu.
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										<label>Jumlah Tamu</label>
										<div class="row">
											<div class="col-sm-6">
												<input class="form-control" value="<?php echo $transaksi_booking['jumlah_dewasa'] . ' Orang Dewasa'; ?>" readonly />
												<select class="form-control" name="jumlah_dewasa">
													<option value="<?php echo $transaksi_booking['jumlah_dewasa']; ?>">- Dewasa -</option>
													<option value="1">1 Orang</option>
													<option value="2">2 Orang</option>
													<option value="3">3 Orang</option>
													<option value="4">4 Orang</option>
													<option value="5">5 Orang</option>
												</select>
											</div>
											<div class="col-sm-6">
												<input class="form-control" value="<?php echo $transaksi_booking['jumlah_anak'] . ' Anak-anak'; ?>" readonly />
												<select class="form-control" name="jumlah_anak">
													<option value="<?php echo $transaksi_booking['jumlah_anak']; ?>">- Anak-anak -</option>
													<option value="1">1 Orang</option>
													<option value="2">2 Orang</option>
													<option value="3">3 Orang</option>
													<option value="4">4 Orang</option>
													<option value="5">5 Orang</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Tanggal / Waktu Check-In</label>
										<div class="row">
											<div class="col-sm-6">
												<input id="checkin" class="form-control" name="tanggal_checkin" data-date-format="yyyy-mm-dd" value="<?php echo $transaksi_booking['tanggal_checkin']; ?>" />
											</div>
											<div class="col-sm-6">
												<input class="form-control" name="waktu_checkin" value="<?php echo $transaksi_booking['waktu_checkin']; ?>" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Tanggal / Waktu Check-Out</label>
										<div class="row">
											<div class="col-sm-6">
												<input id="checkout" class="form-control" name="tanggal_checkout" data-date-format="yyyy-mm-dd" value="<?php echo $transaksi_booking['tanggal_checkout']; ?>" />
											</div>
											<div class="col-sm-6">
												<input class="form-control" name="waktu_checkout" value="<?php echo $transaksi_booking['waktu_checkout']; ?>" />
											</div>
										</div>
									</div>
									<h3>Rincian Tagihan</h3>
									<hr />
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Keterangan Reservasi / Booking</th>
												<th>Harga</th>
												<th>Qty</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Room reserved type : <?php echo $transaksi_booking['nama_kamar_tipe'] . ' ROOM'; ?></td>
												<td>Rp <?php echo number_format($transaksi_booking['harga_malam']); ?></td>
												<td><?php echo $durasi . ' malam'; ?></td>
												<td>Rp <?php echo number_format($subtotal_kamar); ?></td>
											</tr>
											<tr>
												<td rowspan="4"></td>
												<td colspan="2"><b>Sub-Total</b></td>
												<td><b>Rp <?php echo number_format($subtotal); ?></b></td>
											</tr>
											<tr>
												<td colspan="2">PPn 10%</td>
												<td>Rp <?php echo number_format($ppn); ?></td>
											</tr>
											<tr>
												<td colspan="2"><b>Grand Total</b></td>
												<td><b>Rp <?php echo number_format($grand_total); ?></b></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<input type="hidden" name="id_kamar" value="<?php echo $transaksi_booking['id_kamar']; ?>" />
							<input type="hidden" name="id_booking" value="<?php echo $transaksi_booking['id_booking']; ?>" />
							<button class="btn btn-danger" type="submit" name="del">Hapus</button>
							<button class="btn btn-primary" type="submit" name="refund">Refund</button>
							<button class="btn btn-success" type="submit" name="checkin">Check In</button>
							<a class="btn btn-primary" href="?report=transaksi-booking&booking=<?php echo $transaksi_booking['id_booking']; ?>" target="_blank">Cetak Invoice</a>
							<a class="btn btn-warning pull-right" href="?module=transaksi/booking-list">Kembali</a>
						</div>
					</form>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	</div>
</section>
