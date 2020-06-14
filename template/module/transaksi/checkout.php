<?php

include('component/com-transaksi.php');

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Check Out <span class="small">Pilih kamar yang terpakai</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if (!empty($tamu_inhouse)) { ?>
				<div class="row">
					<?php foreach ($tamu_inhouse as $tamu_inhouse) { ?>
						<div class="col-sm-3">
							<div class="small-box bg-red">
								<div class="inner">
									<h4>Nomor Kamar : <?php echo $tamu_inhouse['nomor_kamar']; ?></h4>
									<p>Nama : <?php echo $tamu_inhouse['prefix'] . '. ' . $tamu_inhouse['nama_depan'] . '&nbsp;' . $tamu_inhouse['nama_belakang']; ?></p>
									<h5>Tanggal Check-out : <?php echo $tamu_inhouse['tanggal_checkout']; ?></h5>
									<h5>Waktu Check-out : <?php echo $tamu_inhouse['waktu_checkout']; ?></h5>
								</div>
								<div class="icon">
									<i class="fa fa-bed"></i>
								</div>
								<a class="small-box-footer" href="?module=transaksi/checkout-proses&transaksi=<?php echo $tamu_inhouse['id_transaksi_kamar']; ?>">Pilih Kamar</a>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } else { ?>
				<div class="alert alert-warning">
					<h4>Mohon Maaf</h4>
					Untuk sementara, tidak ada kamar yang terpakai.
				</div>
			<?php } ?>
		</div>
	</div>
</section>