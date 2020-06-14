<?php
include('assets/script_header.php');
require('config/database.php');
include('config/app.php');
include('com/com-kamar.php');
include('com/com-booking.php');
$nomor_invoice = 'INV-' . date('Ymd') . '-' . (rand(10, 100));
?>

<body>

	<!-- Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<strong>Hotel</b>
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->

	<header>
		<!-- Header Start -->
		<?php
		include('assets/header.php');
		?>
		<!-- Header End -->
	</header>

	<!-- slider Area Start-->
	<div class="slider-area">
		<div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
			<div class="container">
				<div class="row ">
					<div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
						<div class="hero-caption">
							<span>We Offer The Best</span>
							<h2>Hotel Batung Batulis Banjarbaru</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- slider Area End-->

	<!-- ================ contact section start ================= -->
	<?php if (isset($_POST['booking'])) { ?>
		<div class="alert alert-success">
			<h4>Berhasil</h4>
			Sukses melakukan reservasi / booking .
			<a href="?module=transaksi/booking-list"><b>Kembali</b></a>
		</div>
	<?php } else { ?>
		<center>
			<form action="" method="post">
				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<label># INVOICE</label>
							<input class="form-control" name="nomor_invoice" value="<?php echo $nomor_invoice; ?>" readonly />
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
					<div class="col-sm-6">
						<select class="form-control" name="jumlah_dewasa">
							<option value="0">-- Pilih Tipe Kamar --</option>
							<?php foreach ($kamar_tersedia as $kamar_tersedia) { ?>
								<option value="<?php echo $kamar_tersedia['id_kamar']; ?>"><?php echo $kamar_tersedia['id_kamar']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="box-footer">
					<input type="hidden" name="id_kamar" value="<?php echo $kamar_tersedia['id_kamar']; ?>"><?php echo $kamar_tersedia['id_kamar']; ?>" />
					<button class="btn btn-success" type="submit" name="booking">Booking</button>
				</div>
			</form>
		</center>
	<?php } ?>
	<!-- ================ contact section end ================= -->

	<!-- Footer Start-->
	<?php
	include('assets/footer.php');
	?>
	<!-- Footer End-->

	<?php
	include('assets/script_footer.php');
	?>
