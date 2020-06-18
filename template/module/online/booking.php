<?php
include('template/assets/sona/partial/com-kamar.php');
$nomor_invoice = 'INV-ON-' . date('Ymd') . '-' . (rand(10, 1000));
include('template/assets/sona/partial/com-kamar.php');
include('template/assets/sona/partial/com-booking.php');
?>
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
	<?php if (isset($_POST['booking'])) { ?>
		<div class="alert alert-success">
			<h4>Berhasil</h4>
			Sukses melakukan reservasi / booking.
		</div>
	<?php } else { ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-text">
						<h2>Our Rooms</h2>
						<div class="bt-option">
							<a href="index.php">Home</a>
							<span>Rooms</span>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- Breadcrumb Section End -->

<!-- Room Details Section Begin -->
<section class="room-details-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="room-details-item">
					<img src="template/assets/sona/img/room/room-details.jpg" alt="">
					<div class="rd-text">
						<div class="rd-title">
							<h3>Standart</h3>
						</div>
						<h2>159$<span>/Pernight</span> Max 3 adults 3 kids</h2>
						<div class="rd-title">
							<h3>Standart</h3>
						</div>
						<h2>159$<span>/Pernight</span></h2>
						<div class="rd-title">
							<h3>Standart</h3>
						</div>
						<h2>159$<span>/Pernight</span></h2>
						<div class="rd-title">
							<h3>Standart</h3>
						</div>
						<h2>159$<span>/Pernight</span></h2>
						<table>
							<tbody>
								<tr>
									<td class="r-o">Size:</td>
									<td>30 ft</td>
								</tr>
								<tr>
									<td class="r-o">Capacity:</td>
									<td>Max persion 5</td>
								</tr>
								<tr>
									<td class="r-o">Bed:</td>
									<td>King Beds</td>
								</tr>
								<tr>
									<td class="r-o">Services:</td>
									<td>Wifi, Television, Bathroom,...</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="room-booking">
					<h3>Your Reservation</h3>
					<form action="" method="post">
						<input class="form-control" name="nomor_invoice" value="<?php echo $nomor_invoice; ?>" readonly hidden />
						<input class="form-control" name="id_user_tamu" value="<?php echo $_SESSION['id_user_tamu']; ?>" readonly hidden />
						<div class="check-date">
							<!-- Date input -->
							<label>Check In:</label>
							<input class="date" id="checkin" class="form-control" name="tanggal_checkin" data-date-format="Y-m-d" />
							<i class="icon_calendar"></i>
						</div>
						<div class="check-date">
							<label>Check Out:</label>
							<input class="date" id="checkout" class="form-control" name="tanggal_checkout" data-date-format="Y-m-d" />
							<i class="icon_calendar"></i>
						</div>
						<div class="select-option">
							<label>Tipe Kamar</label>
							<select class="form-control" name="id_kamar_tipe">
								<?php foreach ($kamar_tipe as $kamar_tipe) { ?>
									<option value="<?php echo $kamar_tipe['id_kamar_tipe']; ?>"><?php echo $kamar_tipe['nama_kamar_tipe']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="select-option">
							<label>Adults:</label>
							<select class="form-control" name="jumlah_dewasa">
								<option value="1">1 Adults</option>
								<option value="2">2 Adults</option>
								<option value="3">3 Adults</option>
							</select>
						</div>
						<div class="select-option">
							<label>Kids:</label>
							<select class="form-control" name="jumlah_anak">
								<option value="1">1 Kids</option>
								<option value="2">2 Kids</option>
								<option value="3">3 Kids</option>
							</select>
						</div>
						<button class="btn btn-success" type="submit" name="booking">Booking</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
</section>
