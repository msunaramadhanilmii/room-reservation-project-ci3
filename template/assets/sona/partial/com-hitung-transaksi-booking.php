<?php

// Hitung Transaksi Kamar

$checkin = date_create($transaksi_booking['tanggal_checkin']);

$checkout = date_create($transaksi_booking['tanggal_checkout']);

$durasi = date_diff($checkin, $checkout)->format('%a');

$subtotal_kamar = $durasi * $transaksi_booking['harga_malam'];

$subtotal = $subtotal_kamar;

$ppn = $subtotal * 0.05;

$grand_total = $subtotal + $ppn;
