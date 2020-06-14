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
				<div class="col-xl-8 col-lg-8">
						<div class="main-menu f-right d-none d-lg-block">
							<nav>
								<ul id="navigation">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="services.php">Service</a></li>
									<li><a href="rooms.php">Rooms</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="tamu-edit.php">My Profile</a>
									<ul class="submenu">
									<li><a href="#">My Booking</a></li>
									<li><a href="../logout_tamu.php">Logout</a></li>
									</ul>
								</li>
								</ul>
							</nav>
						</div>
				</div>';
		} else {
			echo '<div class="col-xl-8 col-lg-8">
						<div class="main-menu f-right d-none d-lg-block">
							<nav>
								<ul id="navigation">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="services.php">Service</a></li>
									<li><a href="rooms.php">Rooms</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="tamu-edit.php">My Profile</a>
									<ul class="submenu">
									<li><a href="#">My Booking</a></li>
									<li><a href="../logout_tamu.php">Logout</a></li>
									</ul>
								</li>
								</ul>
							</nav>
						</div>
				</div>';
		}
	} else {
		echo '<div class="col-xl-8 col-lg-8">
					<div class="main-menu f-right d-none d-lg-block">
						<nav>
							<ul id="navigation">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Service</a></li>
								<li><a href="rooms.php">Rooms</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="../login.php">Login</a></li>
								</ul>
							</li>
						</ul>
							</nav>
						</div>
				</div>';
	}
}

function checks()
{
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		if ($_SESSION['username']) {
			echo '
			<div class="booking-area">
			<div class="container">
				<div class="row ">
					<div class="col-12">
						<form action="">
							<div class="booking-wrap d-flex justify-content-between align-items-center">
		
								<!-- select in date -->
								<div class="single-select-box mb-30">
									<!-- select out date -->
									<div class="boking-tittle">
										<span> Check In Date:</span>
									</div>
									<div class="boking-datepicker">
										<input id="datepicker1" placeholder="10/12/2020" />
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<!-- select out date -->
									<div class="boking-tittle">
										<span>Check OutDate:</span>
									</div>
									<div class="boking-datepicker">
										<input id="datepicker2" placeholder="12/12/2020" />
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<div class="boking-tittle">
										<span>Adults:</span>
									</div>
									<div class="select-this">
										<form action="#">
											<div class="select-itms">
												<select name="select" id="select1">
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
													<option value="">4</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<div class="boking-tittle">
										<span>Children:</span>
									</div>
									<div class="select-this">
										<form action="#">
											<div class="select-itms">
												<select name="select" id="select2">
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
													<option value="">4</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<div class="boking-tittle">
										<span>Type Rooms:</span>
									</div>
									<div class="select-this">
										<form action="#">
											<div class="select-itms">
												<select name="select" id="select3">
													<option value="">STANDART</option>
													<option value="">GRAND</option>
													<option value="">SUITE</option>
													<option value="">PRES SUITE</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box pt-45 mb-30">
									<a href="#" class="btn select-btn">Check Availability</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>';
		} else {
			echo '<div class="booking-area">
			<div class="container">
				<div class="row ">
					<div class="col-12">
						<form action="">
							<div class="booking-wrap d-flex justify-content-between align-items-center">
		
								<!-- select in date -->
								<div class="single-select-box mb-30">
									<!-- select out date -->
									<div class="boking-tittle">
										<span> Check In Date:</span>
									</div>
									<div class="boking-datepicker">
										<input id="datepicker1" placeholder="10/12/2020" />
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<!-- select out date -->
									<div class="boking-tittle">
										<span>Check OutDate:</span>
									</div>
									<div class="boking-datepicker">
										<input id="datepicker2" placeholder="12/12/2020" />
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<div class="boking-tittle">
										<span>Adults:</span>
									</div>
									<div class="select-this">
										<form action="#">
											<div class="select-itms">
												<select name="select" id="select1">
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
													<option value="">4</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<div class="boking-tittle">
										<span>Children:</span>
									</div>
									<div class="select-this">
										<form action="#">
											<div class="select-itms">
												<select name="select" id="select2">
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
													<option value="">4</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box mb-30">
									<div class="boking-tittle">
										<span>Type Rooms:</span>
									</div>
									<div class="select-this">
										<form action="#">
											<div class="select-itms">
												<select name="select" id="select3">
													<option value="">STANDART</option>
													<option value="">GRAND</option>
													<option value="">SUITE</option>
													<option value="">PRES SUITE</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- Single Select Box -->
								<div class="single-select-box pt-45 mb-30">
									<a href="#" class="btn select-btn">Check Availability</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>';
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
