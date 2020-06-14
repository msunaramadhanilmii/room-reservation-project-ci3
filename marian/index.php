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
		<div class="slider-area ">
			<!-- Mobile Menu -->
			<?php
			include('assets/slider_area.php');
			?>
		</div>
		<!-- slider Area End-->

		<!-- Booking Room Start-->
		<?php
		checks();
		?>
		<!-- Booking Room End-->

		<!-- Make customer Start-->
		<?php
		include('module/booking_best.php');
		?>
		<section class="make-customer-area customar-padding fix">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-xl-5 col-lg-6">
						<div class="customer-img mb-120">
							<img src="assets/img/customer/customar1.png" class="customar-img1" alt="">
							<img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
							<div class="service-experience heartbeat">
								<h3>25 Years of Service<br>Experience</h3>
							</div>
						</div>
					</div>
					<div class=" col-xl-4 col-lg-4">
						<div class="customer-caption">
							<span>About our company</span>
							<h2>Make the customer the hero of your story</h2>
							<div class="caption-details">
								<p class="pera-dtails">Lorem ipsum dolor sit amet, consectetur adipisic- ing elit, sed do eiusmod tempor inc. </p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Make customer End-->

		<!-- Room Start -->
		<?php
		include('assets/rooms.php');
		?>
		<!-- Room End -->

		<!-- Dining Start -->
		<?php
		include('assets/dining.php');
		?>
		<!-- Dining End -->

		<!-- Promo and Event Start -->
		<?php
		include('assets/promo.php');
		?>
		<!-- Promo and Event End -->

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

	<!-- JS here -->
	<?php
	include('assets/script_footer.php');
	?>
