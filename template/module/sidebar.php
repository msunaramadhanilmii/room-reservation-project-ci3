<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="template/images/<?php echo $_SESSION['images']; ?>" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p><?php echo $_SESSION['nama']; ?></p>
				<span class="small"><?php echo date('l. d M Y'); ?></span>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">TRANSAKSI HOTEL</li>
			<li>
				<a href="index.php">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-key"></i>
					<span>Check In / Out</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=transaksi/checkin"><i class="fa fa-circle-o"></i> Check In</a></li>
					<li><a href="?module=transaksi/checkout"><i class="fa fa-circle-o"></i> Check Out</a></li>
					<li><a href="?module=transaksi/checkin-list"><i class="fa fa-circle-o"></i> Tamu In-House</a></li>
					<li><a href="?module=transaksi/checkout-list"><i class="fa fa-circle-o"></i> Tamu Check-out</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-key"></i>
					<span>Reservasi / Booking</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=transaksi/booking"><i class="fa fa-circle-o"></i> Reservasi / Booking</a></li>
					<li><a href="?module=transaksi/booking-list"><i class="fa fa-circle-o"></i> List Reservasi / Booking</a></li>
					<li><a href="?module=transaksi/booking-refund"><i class="fa fa-circle-o"></i> List Refund</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-shopping-cart"></i>
					<span>Layanan Hotel</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=transaksi/pesan-layanan"><i class="fa fa-circle-o"></i> Pesan Layanan / Produk</a></li>
					<li><a href="?module=kamar/kamar-kotor"><i class="fa fa-circle-o"></i> Pembersihan Kamar</a></li>
				</ul>
			</li>
			<?php if ($_SESSION['batasan'] <= 3) { ?>
				<li class="header">MASTER HOTEL</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-suitcase"></i>
						<span>Buku Tamu</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=tamu/tamu-list"><i class="fa fa-circle-o"></i> Data Tamu</a></li>
						<li><a href="?module=tamu/tamu-add"><i class="fa fa-circle-o"></i> Tambahkan Tamu Baru</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-cutlery"></i>
						<span>Layanan</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=layanan/layanan-list"><i class="fa fa-circle-o"></i> Data Layanan</a></li>
						<li><a href="?module=layanan/layanan-add"><i class="fa fa-circle-o"></i> Tambahkan Layanan</a></li>
						<li><a href="?module=layanan/kategori-list"><i class="fa fa-circle-o"></i> Tambahkan Kategori Layanan</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-bed"></i>
						<span>Kamar</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=kamar/kamar-list"><i class="fa fa-circle-o"></i> Data Kamar</a></li>
						<li><a href="?module=kamar/kamar-add"><i class="fa fa-circle-o"></i> Tambahkan Kamar</a></li>
						<li><a href="?module=kamar/tipe-list"><i class="fa fa-circle-o"></i> Tambahkan Tipe Kamar</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-book"></i>
						<span>Laporan</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=laporan/transaksi"><i class="fa fa-circle-o"></i> Laporan Transaksi Kamar</a></li>
						<li><a href="?module=laporan/transaksi-layanan"><i class="fa fa-circle-o"></i> Laporan Transaksi Layanan</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-user"></i>
						<span>User Manager</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=user/user-list"><i class="fa fa-circle-o"></i> Data User</a></li>
						<li><a href="?module=user/user-add"><i class="fa fa-circle-o"></i> Tambahkan User Baru</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-envelope"></i>
						<span>Email</span>
						<i class="fa fa-angle-left pull-right"></i>
					</a>
					<ul class="treeview-menu">
						<li><a href="?module=emailsingle/index"><i class="fa fa-circle-o"></i> Send Single Email</a></li>
						<li><a href="?module=emailgateway/sendEmail"><i class="fa fa-circle-o"></i> Email Gateway</a></li>
					</ul>
				</li>
				<?php if ($_SESSION['batasan'] == 1) { ?>
					<li><a href="?module=perusahaan/perusahaan"><i class="fa fa-building"></i> Informasi Hotel</a></li>
			<?php }
			} ?>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
