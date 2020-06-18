<?php

//List & View User

$tamu = $database->select('user_tamu', [
	'user_tamu.id_user_tamu',
	'user_tamu.username',
	'user_tamu.password',
	'user_tamu.prefix',
	'user_tamu.nama_depan',
	'user_tamu.nama_belakang',
	'user_tamu.nomor_telp',
	'user_tamu.email'
]);

if (!empty($_GET['tamu'])) {

	$tamu = $database->get('user_tamu', [
		'user_tamu.id_user_tamu',
		'user_tamu.username',
		'user_tamu.password',
		'user_tamu.prefix',
		'user_tamu.nama_depan',
		'user_tamu.nama_belakang',
		'user_tamu.nomor_telp',
		'user_tamu.email'
	], [
		'id_user_tamu' => $_GET['tamu']
	]);
}

//Update User

if (isset($_POST['tamu-update'])) {

	$password_hash = md5($_POST['password']);

	$database->update('user_tamu', [
		'username' => $_POST['username'],
		'password' => $password_hash,
		'prefix' => $_POST['prefix'],
		'nama_depan' => $_POST['nama_depan'],
		'nama_belakang' => $_POST['nama_belakang'],
		'nomor_telp' => $_POST['nomor_telp'],
		'email' => $_POST['nomor_telp']
	], [
		'id_user_tamu' => $_POST['id_user_tamu']
	]);
}
