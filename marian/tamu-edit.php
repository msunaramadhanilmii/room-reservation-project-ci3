<?php
include('assets/script_header.php');
require('config/database.php');
include('config/app.php');
include('com/com-user.php');
?>

<?php
include('com/com-user.php');
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
	<?php if (isset($_POST['tamu-update'])) { ?>
		<div class="alert alert-success">
			<h4>Berhasil</h4>
			Anda telah berhasil melakukan perubahan data pengguna.
			<a href="?module=user/user-update&user=<?php echo $tamu['id_user_tamu']; ?>"><b>Ubah Lagi</b></a> /
			<a href="?module=user/user-list"><b>Kembali</b></a>
		</div>
	<?php } else { ?>
		<div class="section-top-border">
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<h3 class="mb-30">Form Reservastion</h3>
					<form action="#" style="text-align: justify;">
						<div class="form-group">
							<label>Nama Pengguna</label>
							<input class="form-control" name="email" value="<?php echo $tamu['id_user_tamu']; ?>" />
						</div>
					</form>
				</div>
			</div>
		</div>
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
