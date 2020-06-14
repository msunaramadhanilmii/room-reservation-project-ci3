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
	<main>

		<!-- slider Area Start-->
		<?php
		include('module/booking_best.php');
		?>
		<div class="slider-area">
			<div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg">
				<div class="container">
					<div class="row ">
						<div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
							<div class="hero-caption">
								<span>Services</span>
								<h2>Services</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider Area End-->

		<!-- Dining Start -->
		<?php
		include('assets/dining.php');
		?>
		<!-- Dining End -->

		<!-- Gallery img Start-->
		<div class="gallery-area fix">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-md-12">
						<div class="gallery-active owl-carousel">
							<div class="gallery-img">
								<a href="#"><img src="assets/img/gallery/gallery1.jpg" alt=""></a>
							</div>
							<div class="gallery-img">
								<a href="#"><img src="assets/img/gallery/gallery2.jpg" alt=""></a>
							</div>
							<div class="gallery-img">
								<a href="#"><img src="assets/img/gallery/gallery3.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Gallery img End-->
	</main>

	<!-- Footer Start-->
	<?php
	include('assets/footer.php');
	?>
	<!-- Footer End-->

	<?php
	include('assets/script_footer.php');
	?>
