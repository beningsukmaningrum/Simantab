<?php
include("sess_check.php");

if (isset($_GET['npp'])) {
	$sql = "SELECT * FROM employee WHERE npp='" . $_GET['npp'] . "'";
	$ress = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($ress);
}
// deskripsi halaman
$pagedesc = "Data Karyawan";
$menuparent = "master";
include("layout_top.php");
?>
<script type="text/javascript">
	function checkNppAvailability() {
		$("#loaderIcon").show();
		jQuery.ajax({
			url: "check_nppavailability.php",
			data: 'npp=' + $("#npp").val(),
			type: "POST",
			success: function(data) {
				$("#user-availability-status").html(data);
				$("#loaderIcon").hide();
			},
			error: function() {}
		});
	}
</script>
<!-- top of file -->
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Karyawan</h1>
			</div><!-- /.col-lg-12 -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<form class="form-horizontal" action="pegawai_update.php" method="POST" enctype="multipart/form-data">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Edit Data</h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label class="control-label col-sm-3">NPP</label>
								<div class="col-sm-4">
									<input type="text" name="npplama" class="form-control" placeholder="NPP" value="<?php echo $res['npp'] ?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Nama</label>
								<div class="col-sm-4">
									<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $res['nama_emp'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Bidang</label>
								<div class="col-sm-4">
									<input type="text" name="divisi" class="form-control" placeholder="Divisi" value="<?php echo $res['divisi'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Pangkat/Gol</label>
								<div class="col-sm-4">
									<input type="text" name="pangkat" class="form-control" placeholder="Pangkat/Gol" value="<?php echo $res['pangkat'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Jabatan</label>
								<div class="col-sm-4">
									<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $res['jabatan'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Satuan Kerja</label>
								<div class="col-sm-4">
									<input type="text" name="satker" class="form-control" placeholder="Satuan Kerja" value="<?php echo $res['satker'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Kategori Pegawai</label>
								<div class="col-sm-4">
									<select name="kategori_pgw" id="kategori_pgw" class="form-control" required selected> >
										<option value="<?php echo $res['kategori_pgw'] ?>" selected><?php echo $res['kategori_pgw'] ?></option>
										<option value="Organik">Organik</option>
										<option value="Diperbatukan(TNI/POLRI)">Diperbantukan(TNI/POLRI)</option>
										<option value="PPNPM">PPNPM</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Sidik Jari (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="sidik_jari" id="sidik_jari" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Karpeg/KTA (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="karpeg" id="karpeg" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Kartu Taspen/Asabri (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="taspen" id="taspen" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Kartu Keluarga (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="kk" id="kk" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">NIK (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="nik" id="nik" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Karis/Karsu/KPI/KPS (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="karis" id="karis" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">NPWP (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="npwp" id="npwp" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">BPJS (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="bpjs" id="bpjs" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">SIM (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="sim" id="sim" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Rek. Gaji 'BRI' (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="gaji" id="gaji" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Telepon 1</label>
								<div class="col-sm-4">
									<input type="number" name="telp_emp" min="0" class="form-control" placeholder="Telepon" value="<?php echo $res['telp_emp'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Telepon 2</label>
								<div class="col-sm-4">
									<input type="number" name="telp2_emp" min="0" class="form-control" placeholder="Telepon" value="<?php echo $res['telp2_emp'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Tempat Lahir</label>
								<div class="col-sm-4">
									<input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $res['tmp_lahir'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Tanggal Lahir</label>
								<div class="col-sm-4">
									<input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $res['tgl_lahir'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Akte Lahir (pdf)</label>
								<div class="col-sm-4">
									<input action="" type="file" name="akte" id="akte" class="form-control" method="POST" enctype="multipart/form-data" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Jenis Kelamin</label>
								<div class="col-sm-4">
									<select name="jk" id="jk" class="form-control" required selected>
										<option value="<?php echo $res['jk_emp'] ?>" selected><?php echo $res['jk_emp'] ?></option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Golongan Darah</label>
								<div class="col-sm-4">
									<select name="goldar" id="goldar" class="form-control" required>
										<option value="<?php echo $res['goldar'] ?>" selected><?php echo $res['goldar'] ?></option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="AB">AB</option>
										<option value="O">O</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Agama</label>
								<div class="col-sm-4">
									<select name="agama" id="agama" class="form-control" required>
										<option value="<?php echo $res['agama'] ?>" selected><?php echo $res['agama'] ?></option>
										<option value="Islam">Islam</option>
										<option value="Hindu">Hindu</option>
										<option value="Budha">Budha</option>
										<option value="Katolik">Katolik</option>
										<option value="Protestan">Protestan</option>
										<option value="Konghucu">Konghucu</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Warna Kulit</label>
								<div class="col-sm-4">
									<input type="text" name="wrn_kulit" class="form-control" placeholder="Warna Kulit" value="<?php echo $res['wrn_kulit'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Warna Rambut</label>
								<div class="col-sm-4">
									<input type="text" name="wrn_rambut" class="form-control" placeholder="Warna Rambut" value="<?php echo $res['wrn_rambut'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Alamat Domisili</label>
								<div class="col-sm-4">
									<textarea name="alamat" class="form-control" placeholder="Alamat" rows="3" required><?php echo $res['alamat'] ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Alamat KTP</label>
								<div class="col-sm-4">
									<textarea name="alamat_ktp" class="form-control" placeholder="Alamat KTP" rows="3"><?php echo $res['alamat_ktp'] ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Email Pribadi</label>
								<div class="col-sm-4">
									<input type="email" name="email_prbd" class="form-control" placeholder="Email Pribadi" value="<?php echo $res['email_prbd'] ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Email Dinas</label>
								<div class="col-sm-4">
									<input type="email" name="email_dinas" class="form-control" placeholder="Email Dinas" value="<?php echo $res['email_dinas'] ?>" required>
								</div>
							</div>
							<div class="form-group" hidden>
								<label class="control-label col-sm-3">Hak Akses (Wajib isi)</label>
								<div class="col-sm-4">
									<select name="hak_akses" id="hak_akses" class="form-control" required>
										<option value="Pegawai" selected>Pegawai</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Foto (Abaikan Jika Tidak Diubah)</label>
								<div class="col-sm-4">
									<input type="file" name="foto" class="form-control" accept="image/*">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3"><u>*Dokumen wajib .pdf</u></label>
							</div>
						</div>
						<div class="panel-footer">
							<button type="submit" name="perbarui" class="btn btn-success">Update</button>
						</div>
					</div><!-- /.panel -->
				</form>
			</div><!-- /.col-lg-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
include("layout_bottom.php");
?>