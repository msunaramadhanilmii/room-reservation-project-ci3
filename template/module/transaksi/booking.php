<?php

include('component/com-kamar.php');

include('component/com-tamu.php');

include('component/com-booking.php');

$nomor_invoice = 'INV-' . date('Ymd') . '-' . (rand(10, 100));

?>

<section class="content-header">
	<h1>Reservasi / Booking Kamar</h1>
</section>

<section class="content">
	<div class="box">
		<?php if (isset($_POST['booking'])) { ?>
			<div class="alert alert-success">
				<h4>Berhasil</h4>
				Sukses melakukan reservasi / booking : <?php echo $kamar_view['nomor_kamar']; ?>.
				<a href="?module=transaksi/booking-list"><b>Kembali</b></a>
			</div>
		<?php } else { ?>
			<div class="box-body">
				<?php if (!empty($_GET['kamar'])) { ?>
					<form action="" method="post">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label># INVOICE</label>
									<input class="form-control" name="nomor_invoice" value="<?php echo $nomor_invoice; ?>" />
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
									<select class="form-control nama_tamu" name="id_tamu">
										<option selected="selected">--Pilih--</option>
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
											<select class="form-control" name="jumlah_dewasa">
												<option value="0">- Dewasa -</option>
												<option value="1">1 Orang</option>
												<option value="2">2 Orang</option>
												<option value="3">3 Orang</option>
												<option value="4">4 Orang</option>
												<option value="5">5 Orang</option>
											</select>
										</div>
										<div class="col-sm-6">
											<select class="form-control" name="jumlah_anak">
												<option value="0">- Anak-anak -</option>
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
											<input id="checkin" class="form-control" name="tanggal_checkin" data-date-format="yyyy-mm-dd" />
										</div>
										<div class="col-sm-6">
											<input class="form-control" name="waktu_checkin" value="12:00" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Tanggal / Waktu Check-Out</label>
									<div class="row">
										<div class="col-sm-6">
											<input id="checkout" class="form-control" name="tanggal_checkout" data-date-format="yyyy-mm-dd" />
										</div>
										<div class="col-sm-6">
											<input class="form-control" name="waktu_checkout" value="12:00" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<input type="hidden" name="id_kamar" value="<?php echo $kamar_view['id_kamar']; ?>" />
							<button class="btn btn-success" type="submit" name="booking">Booking</button>
							<a class="btn btn-warning" href="?module=transaksi/booking">Batal</a>
						</div>
					</form>
				<?php } else { ?>
					<div class="row">
						<?php foreach ($kamar as $kamar) { ?>
							<div class="col-sm-3">
								<div class="small-box bg-blue">
									<div class="inner">
										<h2>Nomor Kamar : <?php echo $kamar['nomor_kamar']; ?></h2>
										<p>Tipe Kamar : <?php echo $kamar['nama_kamar_tipe']; ?></p>
									</div>
									<div class="icon">
										<i class="fa fa-bed"></i>
									</div>
									<a class="small-box-footer" href="<?php echo $url; ?>&kamar=<?php echo $kamar['id_kamar']; ?>">Lihat Selengkapnya</a>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
	</div>
<?php } ?>
</section>
