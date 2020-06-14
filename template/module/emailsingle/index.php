<?php

include('component/com-kamar.php');

include('component/com-transaksi.php');

?>
<section class="content-header">
	<h1>Kirim Email</h1>
</section>
<section class="content">

	<body>
		<main role="main" class="container">
			<div class="box">
				<form action="template/module/emailsingle/kirim.php" method="post">
					<div class="box-body">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" required />
								</div>
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" name="subjek" required />
								</div>
								<div class="form-group">
									<label>Pesan</label>
									<td><textarea class="form-control" name="pesan" cols="32" rows="5" required /> </textarea></td>
								</div>
								<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=a2ejttzrhha82pctej9grrrur846etltwrzxbfpn0nvrozrn"></script>
								<script>
									tinymce.init({
										selector: 'textarea'
									});
								</script>
								<!-- div class="form-group">
								<label>Select Your Resume</label>
								<input type="file" name="resume" accept=".doc,.docx, .pdf" required />
							</!-->
							</div>
							<div class="col-md-7">
								<div class="box">
									<div class="box-header with-border">
										<h3 class="box-title">History Tamu</h3>
									</div>
									<div class="box-body">
										<?php if (!empty($tamu_checkout)) { ?>
											<table class="table table-sriped" id="example2">
												<thead>
													<tr>
														<th>Nama Tamu</th>
														<th>Email</th>
														<th>Terakhir Check Out</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($tamu_checkout as $tamu_checkout) { ?>
														<tr>
															<td><?php echo $tamu_checkout['prefix'] . '. ' . $tamu_checkout['nama_depan'] . '&nbsp;' . $tamu_checkout['nama_belakang']; ?></td>
															<td><?php echo $tamu_checkout['email']; ?></td>
															<td><?php echo $tamu_checkout['tanggal_checkout']; ?></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										<?php } else { ?>
											<div class="alert alert-warning">
												<h4>Mohon maaf</h4>
												Untuk sementara tidak ada tamu yang sedang check-out hari ini.
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success" type="submit" name="kirim">Kirim</button>
					</div>
				</form>
			</div>
		</main>
</section>
<script>
	$(function() {
		$("#example1").DataTable();
		$('#example2').DataTable();
	});
</script>
