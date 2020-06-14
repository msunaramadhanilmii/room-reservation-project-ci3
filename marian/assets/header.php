<?php
session_start();
require_once("auth/func.php");
?>
<div class="header-area header-sticky">
	<div class="main-header ">
		<div class="container">
			<div class="row align-items-center">
				<!-- logo -->
				<div class="col-xl-2 col-lg-2">
					<div class="logo">
						<a href="index.php"><img src="" alt=""></a>
					</div>
				</div>
				<!-- main-menu -->
				<?php
				checkss();
				?>
				<!-- end main-menu -->
				<!-- Control Sidebar Toggle Button -->
				<div class="col-xl-2 col-lg-2">
					<!-- header-btn -->
					<div class="header-btn">
						<a href="booking_best.php" class="btn btn1 d-none d-lg-block">We Offer The Best</a>
					</div>
				</div>
				<!-- Mobile Menu -->
				<div class="col-12">
					<div class="mobile_menu d-block d-lg-none"></div>
				</div>
			</div>
		</div>
	</div>
</div>
