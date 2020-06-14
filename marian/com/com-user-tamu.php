<?php

//Add User Tamu

if (isset($_POST['tamu-add'])) {

	$password_hash = md5($_POST['password']);

	$database->insert('user_tamu', [
		'username' => $_POST['username'],
		'password' => $password_hash,
		'nama_depan' => $_POST['nama_depan'],
		'nama_belakang' => $_POST['nama_belakang'],
		'nomor_telp' => $_POST['nomor_telp'],
		'email' => $_POST['email']
	]);
}

if (isset($_POST['tamu-add'])) {

	$database->insert('tamu', [
		'prefix' => 0,
		'prefix' => $_POST['prefix'],
		'nama_depan' => $_POST['nama_depan'],
		'nama_belakang' => $_POST['nama_belakang'],
		'tipe_identitas' => 0,
		'nomor_identitas' => 0,
		'warga_negara' => 0,
		'alamat_jalan' => 0,
		'alamat_kabupaten' => 0,
		'alamat_provinsi' => 0,
		'nomor_telp' => $_POST['nomor_telp'],
		'email' => $_POST['email']
	]);
}
