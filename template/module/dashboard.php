<?php

include('component/com-kamar.php');

include('component/com-transaksi.php');

include('component/com-booking.php');

?>
<section class="content-header">
	<h1>Dashboard <span>Hotel Batung Batulis Banjarbaru</span></h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-3">
			<div class="small-box bg-green">
				<div class="inner">
					<h3><?php echo $total_tersedia; ?></h3>
					<p>Kamar Tersedia</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/checkin">Lihat Selengkapnya</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-red">
				<div class="inner">
					<h3><?php echo $total_terpakai; ?></h3>
					<p>Kamar Terpakai</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/checkout">Lihat Selengkapnya</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3><?php echo $total_kotor; ?></h3>
					<p>Kamar Kotor</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="?module=kamar/kamar-kotor">Lihat Selengkapnya</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?php echo $total_booking; ?></h3>
					<p>Reservasi / Booking</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/booking-list">Lihat Selengkapnya</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-blue">
				<div class="inner">
					<h3><?php echo $history; ?></h3>
					<p>History Tamu</p>
				</div>
				<div class="icon">
					<i class="fa fa-users"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/checkout-list">Lihat Selengkapnya</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-purple">
				<div class="inner">
					<h3>Pesan Layanan</h3>
					<p>Food & Drink</p>
				</div>
				<div class="icon">
					<i class="fa fa-cutlery"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/pesan-layanan">Lihat Selengkapnya</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-gray">
				<div class="inner">
					<h3><?php echo $total_refund; ?></h3>
					<p>Transaksi Refund</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/booking-refund">Lihat Selengkapnya</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Tamu yang sedang menginap</h3>
				</div>
				<div class="box-body">
					<?php if (!empty($tamu_inhouse)) { ?>
						<table class="table table-sriped" id="example1">
							<thead>
								<tr>
									<th>Nama Tamu</th>
									<th># Kamar</th>
									<th>Kedatangan</th>
									<th>Kepulangan</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tamu_inhouse as $tamu_inhouse) { ?>
									<tr>
										<td><?php echo $tamu_inhouse['prefix'] . '. ' . $tamu_inhouse['nama_depan'] . '&nbsp;' . $tamu_inhouse['nama_belakang']; ?></td>
										<td><?php echo $tamu_inhouse['nomor_kamar']; ?></td>
										<td><?php echo $tamu_inhouse['tanggal_checkin'] . ' - ' . $tamu_inhouse['waktu_checkin']; ?></td>
										<td><?php echo $tamu_inhouse['tanggal_checkout'] . ' - ' . $tamu_inhouse['waktu_checkout']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php } else { ?>
						<div class="alert alert-warning">
							<h4>Mohon maaf</h4>
							Untuk sementara tidak ada tamu yang sedang menginap di hotel.
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">List Reservasi / Booking</h3>
				</div>
				<div class="box-body">
					<?php if (!empty($tamu_booking)) { ?>
						<table class="table table-sriped" id="example2">
							<thead>
								<tr>
									<th>Nomor Invoice</th>
									<th>Nama Tamu</th>
									<th>Kedatangan</th>
									<th>Kepulangan</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($tamu_booking as $tamu_booking) { ?>
									<tr>
										<td><?php echo $tamu_booking['nomor_invoice']; ?></td>
										<td><?php echo $tamu_booking['prefix'] . '. ' . $tamu_booking['nama_depan'] . '&nbsp;' . $tamu_booking['nama_belakang']; ?></td>
										<td><?php echo $tamu_booking['tanggal_checkin'] . ' - ' . $tamu_booking['waktu_checkin']; ?></td>
										<td><?php echo $tamu_booking['tanggal_checkout'] . ' - ' . $tamu_booking['waktu_checkin']; ?></td>
										<td><?php echo $tamu_booking['status']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php } else { ?>
						<div class="alert alert-warning">
							<h4>Mohon maaf</h4>
							Untuk sementara tidak ada tamu yang sedang reseravsi / booking hari ini.
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$(function() {
		$("#example1").DataTable();
		$('#example2').DataTable();
	});
</script>
