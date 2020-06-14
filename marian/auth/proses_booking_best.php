<?php
// Reservasi atau Booking

if (isset($_POST['booking'])) {

	$tanggal_checkin = date_create($_POST['tanggal_checkin']);

	$tanggal_checkout = date_create($_POST['tanggal_checkout']);

	$durasi = date_diff($tanggal_checkin, $tanggal_checkout)->format('%a');

	$total_biaya_kamar = $durasi * $kamar_view['harga_malam'];

	$database->insert('booking', [
		'id_user_tamu' => $_SESSION['id_user_tamu'],
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
