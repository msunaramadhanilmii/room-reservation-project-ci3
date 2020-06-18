<?php


//Thong bao
function alert($msg)
{
	echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

// Logout
function logout()
{
	session_start();
	if (isset($_SESSION['username'])) {
		unset($_SESSION['username']); // session login
		unset($_SESSION['nama']);
		header("Location: index.php");
	}
}
//Check session
function checkss()
{
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		if ($_SESSION['username']) {
			echo '
			<header class="header-section">
			<div class="top-nav">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<ul class="tn-left">
								<li><i class="fa fa-phone"></i> (+62) 5114772451</li>
								<li><i class="fa fa-envelope"></i> skripsi.hbb@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-2">
							<div class="logo">
								<a href="_index.php">
									<img src="img/logo.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="nav-menu">
								<nav class="mainmenu">
									<ul>
										<li class="active"><a href="?module=online/_index">Home</a></li>
										<li><a href="?module=online/rooms">Rooms</a></li>
										<li><a href="?module=online/booking">Booking</a></li>
										<li><a href="?module=online/about">About Us</a></li>
										<li><a href="?module=online/contact">Contact</a></li>
										<li><a>My Profile</a>
                                        <ul class="dropdown">
                                            <li><a href=".">My Booking</a></li>
                                            <li><a href="logout_tamu.php">Logout</a></li>
                                        </ul>
                                    	</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>';
		} else {
			echo '<header class="header-section">
			<div class="top-nav">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<ul class="tn-left">
								<li><i class="fa fa-phone"></i> (+62) 5114772451</li>
								<li><i class="fa fa-envelope"></i> skripsi.hbb@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-2">
							<div class="logo">
								<a href="./_index.php">
									<img src="img/logo.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="nav-menu">
								<nav class="mainmenu">
									<ul>
										<li class="active"><a href="?module=online/_index">Home</a></li>
										<li><a href="?module=online/rooms">Rooms</a></li>
										<li><a href="?module=online/booking">Booking</a></li>
										<li><a href="./about.php">About Us</a></li>
										<li><a href="./contact.php">Contact</a></li>
										<li><a>My Profile</a>
                                        <ul class="dropdown">
                                            <li><a href=".">My Booking</a></li>
                                            <li><a href="logout_tamu.php">Logout</a></li>
                                        </ul>
                                    	</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>';
		}
	} else {
		echo '		<header class="header-section">
		<div class="top-nav">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<ul class="tn-left">
							<li><i class="fa fa-phone"></i> (+62) 5114772451</li>
							<li><i class="fa fa-envelope"></i> skripsi.hbb@gmail.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-item">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div class="logo">
							<a href="./_index.php">
								<img src="img/logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="nav-menu">
							<nav class="mainmenu">
								<ul>
									<li class="active"><a href="?module=online/_index">Home</a></li>
									<li><a href="?module=online/rooms">Rooms</a></li>
									<li><a href="?module=online/about">About Us</a></li>
									<li><a href="?module=online/contact">Contact</a></li>
									<li><a href="login.php">Login</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>';
	}
}

function checks()
{
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		if ($_SESSION['username']) {
			echo '
			<div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
			<div class="booking-form">
				<h3>Booking Your Hotel</h3>
				<form action="#">
					<div class="check-date">
						<label for="date-in">Check In:</label>
						<input type="text" class="date-input" id="date-in">
						<i class="icon_calendar"></i>
					</div>
					<div class="check-date">
						<label for="date-out">Check Out:</label>
						<input type="text" class="date-input" id="date-out">
						<i class="icon_calendar"></i>
					</div>
					<div class="select-option">
						<label for="room">Room:</label>
						<select id="room">
							<option value="">Standart Room</option>
							<option value="">Grand Room</option>
						</select>
					</div>
					<button type="submit">Check Availability</button>
				</form>
			</div>
		</div>';
		} else {
			echo '
			<div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
			<div class="booking-form">
				<h3>Booking Your Hotel</h3>
				<form action="#">
					<div class="check-date">
						<label for="date-in">Check In:</label>
						<input type="text" class="date-input" id="date-in">
						<i class="icon_calendar"></i>
					</div>
					<div class="check-date">
						<label for="date-out">Check Out:</label>
						<input type="text" class="date-input" id="date-out">
						<i class="icon_calendar"></i>
					</div>
					<div class="select-option">
						<label for="guest">Guests:</label>
						<select id="guest">
							<option value="">2 Adults</option>
							<option value="">3 Adults</option>
						</select>
					</div>
					<div class="select-option">
						<label for="room">Room:</label>
						<select id="room">
							<option value="">1 Room</option>
							<option value="">2 Room</option>
						</select>
					</div>
					<button type="submit">Check Availability</button>
				</form>
			</div>
		</div>
			';
		}
	} else {
		echo '';
	}
}


//Thêm phòng//
function addroom()
{
	if (
		isset($_POST["room"]) && isset($_POST["category"]) && isset($_POST["floor"])
		&& isset($_POST["isready"]) && isset($_POST["edate"])
	) {
		require_once("../conn.php");
		$room = $_POST["room"];
		$idcat = $_POST["category"];
		$idfloor = $_POST["floor"];
		$price = $_POST["price"];
		$isready = $_POST["isready"];
		$edate = $_POST["edate"];
		/*
				$target_dir = "../uploads/";
				$file_name = basename($_FILES["fileUpload"]["name"]);
				$target_file = $target_dir . $file_name;
				*/
		$sqlroom = "SELECT room FROM room WHERE 
						room = '$room'";
		$r = $conn->query($sqlroom);
		if ($r->num_rows > 0) {
			echo alert("Phòng đã tồn tại");
		} else {
			//	if (!move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
			//	die("Sorry, there was an error uploading your file.");
			//}

			$sql = "INSERT INTO room (room, idcat, idfloor, isready, edate)
						VALUES ('$room', '$idcat','$idfloor', '$isready', '$edate')";
			$result = $conn->query($sql);
			echo alert("Thêm thành công!");
		}
	}
}
