<?php
require_once("template/assets/sona/auth/func.php");
?>
<!DOCTYPE php>
<php lang="zxx">

	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Sona Template">
		<meta name="keywords" content="Sona, unica, creative, php">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Sona | Template</title>

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

		<!-- Css Styles -->
		<link rel="stylesheet" href="template/assets/sona/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/elegant-icons.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/flaticon.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/nice-select.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/jquery-ui.min.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/magnific-popup.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/slicknav.min.css" type="text/css">
		<link rel="stylesheet" href="template/assets/sona/css/style.css" type="text/css">
		<!-- Plugin Styl -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
	</head>

	<body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>

		<!-- Offcanvas Menu Section Begin -->
		<div class="offcanvas-menu-overlay"></div>
		<div class="canvas-open">
			<i class="icon_menu"></i>
		</div>
		<div class="offcanvas-menu-wrapper">
			<div class="canvas-close">
				<i class="icon_close"></i>
			</div>
			<div class="search-icon  search-switch">
				<i class="icon_search"></i>
			</div>
			<div class="header-configure-area">
				<div class="language-option">
					<img src="img/flag.jpg" alt="">
					<span>EN <i class="fa fa-angle-down"></i></span>
					<div class="flag-dropdown">
						<ul>
							<li><a href="#">Zi</a></li>
							<li><a href="#">Fr</a></li>
						</ul>
					</div>
				</div>
				<a href="#" class="bk-btn">Booking Now</a>
			</div>
			<nav class="mainmenu mobile-menu">
				<ul>
					<li class="active"><a href="./index.php">Home</a></li>
					<li><a href="./rooms.php">Rooms</a></li>
					<li><a href="./about.php">About Us</a></li>
					<li><a href="./pages.php">Pages</a>
						<ul class="dropdown">
							<li><a href="./room-details.php">Room Details</a></li>
							<li><a href="#">Deluxe Room</a></li>
							<li><a href="#">Family Room</a></li>
							<li><a href="#">Premium Room</a></li>
						</ul>
					</li>
					<li><a href="./blog.php">News</a></li>
					<li><a href="./contact.php">Contact</a></li>
				</ul>
			</nav>
			<div id="mobile-menu-wrap"></div>
			<div class="top-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-tripadvisor"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>
			<ul class="top-widget">
				<li><i class="fa fa-phone"></i> (12) 345 67890</li>
				<li><i class="fa fa-envelope"></i> skripsi.hbb@gmail.com</li>
			</ul>
		</div>
		<!-- Offcanvas Menu Section End -->

		<!-- Header Section Begin -->

		<?php
		checkss();
		?>


		<!-- Header End -->
