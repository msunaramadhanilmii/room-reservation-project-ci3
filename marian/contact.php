<?php
include('assets/script_header.php');
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
	<?php
	include('module/booking_best.php');
	?>
	<div class="slider-area">
		<div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
			<div class="container">
				<div class="row ">
					<div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
						<div class="hero-caption">
							<span>Contact</span>
							<h2>Hotel Batung Batulis Banjarbaru</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- slider Area End-->

	<!-- ================ contact section start ================= -->
	<section class="contact-section">
		<div class="container">
			<div class="d-none d-sm-block mb-5 pb-4">
				<center>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6132735636825!2d114.83806751530044!3d-3.443854942757475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47860f19aa524bf9!2sBatung%20Batulis!5e0!3m2!1sid!2sid!4v1591494883361!5m2!1sid!2sid" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</center>
				<script>
					function initMap() {
						var uluru = {
							lat: -25.363,
							lng: 131.044
						};
						var grayStyles = [{
								featureType: "all",
								stylers: [{
										saturation: -90
									},
									{
										lightness: 50
									}
								]
							},
							{
								elementType: 'labels.text.fill',
								stylers: [{
									color: '#ccdee9'
								}]
							}
						];
						var map = new google.maps.Map(document.getElementById('map'), {
							center: {
								lat: -31.197,
								lng: 150.744
							},
							zoom: 9,
							styles: grayStyles,
							scrollwheel: false
						});
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
				</script>

			</div>


			<div class="row">
				<div class="col-12">
					<h2 class="contact-title">Hotel Batung Batulis Banjarbaru</h2>
				</div>
				<div class="col-lg-8">
					<a href="rooms.html"><img src="img/contact_depan.png" alt="" width="800" height="400"></a>
				</div>
				<div class="col-lg-3 offset-lg-1">
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-home"></i></span>
						<div class="media-body">
							<h3>Kalimantan Selatan, Kota Banjarbaru. Indonesia.</h3>
							<p>Jl. Ahmad Yani KM. 36,5, Loktabat Sel., Kec. Martapura, Kota Banjar Baru, Kalimantan Selatan 70711</p>
						</div>
					</div>
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-tablet"></i></span>
						<div class="media-body">
							<h3>+625114772451</h3>
							<p>Monday to Saturday 9am to 6pm</p>
						</div>
					</div>
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-email"></i></span>
						<div class="media-body">
							<h3>skripsi.hbb@gmail.com</h3>
							<p>Send us your query anytime!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ contact section end ================= -->

	<!-- Footer Start-->
	<?php
	include('assets/footer.php');
	?>
	<!-- Footer End-->

	<?php
	include('assets/script_footer.php');
	?>
