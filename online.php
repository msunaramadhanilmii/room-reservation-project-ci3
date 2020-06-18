<?php

session_start();

if (!isset($_SESSION['username'])) {
	header('location:online.php');
}

require('config/database.php');

include('config/app.php');

if (!empty($_GET['report'])) {

	include('template/module/_index.php');
} else {
	include('template/online.php');
}
