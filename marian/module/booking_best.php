		<?php
		include('auth/proses_booking_best.php');
		?>
		<!-- Modal -->
		<?php if (isset($_POST['booking'])) { ?>
			<div class="alert alert-success">
				<h4>Berhasil</h4>
				Sukses melakukan reservasi / booking : <?php echo $kamar_view['nomor_kamar']; ?>.
				<a href="?module=transaksi/booking-list"><b>Kembali</b></a>
			</div>
		<?php } else { ?>
			<div class="modal fade" id="newTamuModal" tabindex="-1" role="dialog" aria-labelledby="newTamuModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="marian/auth/proses_booking_best.php" method="post">
							<div class="modal-body">
								<div class="form-group">
									<select name="prefix" id="prefix" class="form-control">
										<option value="Mr">Mr</option>
										<option value="Mrs">Mrs</option>
										<option value="Ms">Ms</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="First Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Last Name">
								</div>
								<div class="form-group">
									<label> Identitas </label>
									<select name="tipe_identitas" id="tipe_identitas" class="form-control">
										<option value="KTP">KTP</option>
										<option value="SIM">SIM</option>
										<option value="PASPORT">PASPORT</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" placeholder="Nomor Indentitas">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="warga_negara" name="warga_negara" placeholder="Warga Negara">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan" placeholder="Alamat">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="alamat_kabupaten" name="alamat_kabupaten" placeholder="Kabupaten">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="alamat_provinsi" name="alamat_provinsi" placeholder="Provinsi">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nomor_telp" name="nomor_telp" placeholder="Nomor Telpon">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Add</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		<?php } ?>
