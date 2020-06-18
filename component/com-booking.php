<?php


// Reservasi atau Booking

if (isset($_POST['booking'])) {

	$tanggal_checkin = date_create($_POST['tanggal_checkin']);

	$tanggal_checkout = date_create($_POST['tanggal_checkout']);

	$durasi = date_diff($tanggal_checkin, $tanggal_checkout)->format('%a');

	$total_biaya_kamar = $durasi * $kamar_view['harga_malam'];

	$database->insert('booking', [
		'id_user' => $_SESSION['id_user'],
		'nomor_invoice' => $_POST['nomor_invoice'],
		'tanggal' => date('Y-m-d'),
		'id_tamu' => $_POST['id_tamu'],
		'id_kamar' => $_POST['id_kamar'],
		'jumlah_dewasa' => $_POST['jumlah_dewasa'],
		'jumlah_anak' => $_POST['jumlah_anak'],
		'tanggal_checkin' => $_POST['tanggal_checkin'],
		'waktu_checkin' => $_POST['waktu_checkin'],
		'tanggal_checkout' => $_POST['tanggal_checkout'],
		'waktu_checkout' => $_POST['waktu_checkout'],
		'total_biaya_kamar' => $total_biaya_kamar,
		'status' => 'Menunggu'
	]);
}

// Update reservasi atau booking

if (isset($_POST['booking-update'])) {

	$tanggal_checkin = date_create($_POST['tanggal_checkin']);

	$tanggal_checkout = date_create($_POST['tanggal_checkout']);

	$durasi = date_diff($tanggal_checkin, $tanggal_checkout)->format('%a');

	$total_biaya_kamar = $durasi * $kamar_view['harga_malam'];

	$database->update('booking', [
		'nomor_invoice' => $_POST['nomor_invoice'],
		'id_kamar' => $_POST['id_kamar'],
		'id_tamu' => $_POST['id_tamu'],
		'tanggal_checkin' => $_POST['tanggal_checkin'],
		'waktu_checkin' => $_POST['waktu_checkin'],
		'tanggal_checkout' => $_POST['tanggal_checkout'],
		'waktu_checkout' => $_POST['waktu_checkout'],
		'jumlah_dewasa' => $_POST['jumlah_dewasa'],
		'jumlah_anak' => $_POST['jumlah_anak'],
		'status' => $_POST['status'],
		'total_biaya_kamar' => $total_biaya_kamar
	], [
		'id_booking' => $_POST['id_booking']
	]);
}

// Tamu reservasi atau booking

$tamu_booking = $database->select('booking', [
	'[><]tamu' => 'id_tamu',
	'[><]kamar' => 'id_kamar'
], [
	'booking.id_booking',
	'booking.nomor_invoice',
	'booking.id_tamu',
	'booking.id_kamar',
	'booking.tanggal_checkin',
	'booking.waktu_checkin',
	'booking.tanggal_checkout',
	'booking.waktu_checkout',
	'booking.status',
	'tamu.id_tamu',
	'tamu.prefix',
	'tamu.nama_depan',
	'tamu.nama_belakang',
	'tamu.tipe_identitas',
	'tamu.nomor_identitas',
	'tamu.warga_negara',
	'tamu.nomor_telp',
	'tamu.email',
	'kamar.id_kamar',
	'kamar.nomor_kamar'
], [
	'status' => 'Menunggu'
]);

// Tamu refund

$tamu_refund = $database->select('booking', [
	'[><]tamu' => 'id_tamu',
	'[><]kamar' => 'id_kamar'
], [
	'booking.id_booking',
	'booking.nomor_invoice',
	'booking.id_tamu',
	'booking.id_kamar',
	'booking.tanggal_checkin',
	'booking.waktu_checkin',
	'booking.tanggal_checkout',
	'booking.waktu_checkout',
	'booking.status',
	'tamu.id_tamu',
	'tamu.prefix',
	'tamu.nama_depan',
	'tamu.nama_belakang',
	'tamu.tipe_identitas',
	'tamu.nomor_identitas',
	'tamu.warga_negara',
	'tamu.nomor_telp',
	'tamu.email',
	'kamar.id_kamar',
	'kamar.nomor_kamar'
], [
	'status' => 'REFUND'
]);


// Tamu booking online

$booking_online = $database->select('booking_on', [
	'booking_on.id_booking_tamu',
	'booking_on.id_user_tamu',
	'booking_on.nomor_invoice',
	'booking_on.tanggal',
	'booking_on.id_kamar_tipe',
	'booking_on.id_kamar',
	'booking_on.jumlah_dewasa',
	'booking_on.jumlah_anak',
	'booking_on.tanggal_checkin',
	'booking_on.tanggal_checkout',
	'booking_on.total_biaya_kamar',
	'booking_on.status',
], [
	'status' => 'Menunggu'
]);

if (!empty($_GET['booking'])) {

	$transaksi_booking = $database->get('booking', [
		'[><]kamar' => 'id_kamar',
		'[><]kamar_tipe' => 'id_kamar_tipe',
		'[><]tamu' => 'id_tamu'
	], [
		'kamar.id_kamar',
		'kamar.nomor_kamar',
		'kamar.max_dewasa',
		'kamar.max_anak',
		'kamar_tipe.id_kamar_tipe',
		'kamar_tipe.nama_kamar_tipe',
		'kamar_tipe.harga_malam',
		'tamu.id_tamu',
		'tamu.prefix',
		'tamu.nama_depan',
		'tamu.nama_belakang',
		'tamu.alamat_jalan',
		'tamu.alamat_kabupaten',
		'tamu.alamat_provinsi',
		'tamu.nomor_telp',
		'booking.id_booking',
		'booking.nomor_invoice',
		'booking.jumlah_anak',
		'booking.jumlah_dewasa',
		'booking.tanggal_checkin',
		'booking.waktu_checkin',
		'booking.tanggal_checkout',
		'booking.waktu_checkout',
		'booking.total_biaya_kamar',
		'booking.status',
	], [
		'id_booking' => $_GET['booking']
	]);
}



// Check In Tamu

if (isset($_POST['checkin'])) {

	$tanggal_checkin = date_create($_POST['tanggal_checkin']);

	$tanggal_checkout = date_create($_POST['tanggal_checkout']);

	$durasi = date_diff($tanggal_checkin, $tanggal_checkout)->format('%a');

	$total_biaya_kamar = $durasi * $kamar_view['harga_malam'];

	$database->insert('transaksi_kamar', [
		'id_user' => $_SESSION['id_user'],
		'nomor_invoice' => $_POST['nomor_invoice'],
		'tanggal' => date('Y-m-d'),
		'id_tamu' => $_POST['id_tamu'],
		'id_kamar' => $_POST['id_kamar'],
		'jumlah_dewasa' => $_POST['jumlah_dewasa'],
		'jumlah_anak' => $_POST['jumlah_anak'],
		'tanggal_checkin' => $_POST['tanggal_checkin'],
		'waktu_checkin' => $_POST['waktu_checkin'],
		'tanggal_checkout' => $_POST['tanggal_checkout'],
		'waktu_checkout' => $_POST['waktu_checkout'],
		'total_biaya_kamar' => $total_biaya_kamar,
		'status' => 'CHECK IN'
	]);

	$database->update('kamar', [
		'status_kamar' => 'TERPAKAI'
	], [
		'id_kamar' => $_POST['id_kamar']
	]);
}

// Update reservasi atau booking

if (isset($_POST['checkin'])) {

	$tanggal_checkin = date_create($_POST['tanggal_checkin']);

	$tanggal_checkout = date_create($_POST['tanggal_checkout']);

	$durasi = date_diff($tanggal_checkin, $tanggal_checkout)->format('%a');

	$total_biaya_kamar = $durasi * $kamar_view['harga_malam'];

	$database->update('booking', [
		'nomor_invoice' => $_POST['nomor_invoice'],
		'id_kamar' => $_POST['id_kamar'],
		'id_tamu' => $_POST['id_tamu'],
		'tanggal_checkin' => $_POST['tanggal_checkin'],
		'waktu_checkin' => $_POST['waktu_checkin'],
		'tanggal_checkout' => $_POST['tanggal_checkout'],
		'waktu_checkout' => $_POST['waktu_checkout'],
		'jumlah_dewasa' => $_POST['jumlah_dewasa'],
		'jumlah_anak' => $_POST['jumlah_anak'],
		'status' => 'CHECK IN',
		'total_biaya_kamar' => $total_biaya_kamar
	], [
		'id_booking' => $_POST['id_booking']
	]);
}

// Refund atau update status refund

if (isset($_POST['refund'])) {

	$tanggal_checkin = date_create($_POST['tanggal_checkin']);

	$tanggal_checkout = date_create($_POST['tanggal_checkout']);

	$durasi = date_diff($tanggal_checkin, $tanggal_checkout)->format('%a');

	$total_biaya_kamar = $durasi * $kamar_view['harga_malam'];

	$database->update('booking', [
		'nomor_invoice' => $_POST['nomor_invoice'],
		'id_kamar' => $_POST['id_kamar'],
		'id_tamu' => $_POST['id_tamu'],
		'tanggal_checkin' => $_POST['tanggal_checkin'],
		'waktu_checkin' => $_POST['waktu_checkin'],
		'tanggal_checkout' => $_POST['tanggal_checkout'],
		'waktu_checkout' => $_POST['waktu_checkout'],
		'jumlah_dewasa' => $_POST['jumlah_dewasa'],
		'jumlah_anak' => $_POST['jumlah_anak'],
		'status' => 'REFUND',
		'total_biaya_kamar' => $total_biaya_kamar
	], [
		'id_booking' => $_POST['id_booking']
	]);
}

$total_refund = $database->count('booking', ['status' => 'REFUND']);

if (!empty($_GET['refund'])) {

	$kamar_view = $database->get('booking', [], [
		'booking.id_booking'
	], [
		'id_kamar' => $_GET['refund'],
	]);
}

// Delete reservasi atau booking

if (isset($_POST['del'])) {

	$database->delete('booking', ['id_booking' => $_POST['id_booking']]);
}
