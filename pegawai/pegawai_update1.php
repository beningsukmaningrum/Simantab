<?php
include("sess_check.php");

// query database memperbarui data pada database
if (isset($_POST['perbarui'])) {
	$npplama = $_POST['npplama'];
	$npp = $_POST['npp'];
	$nama = $_POST['nama'];
	$divisi = $_POST['divisi'];
	$jml = $_POST['jml'];
	$jk = $_POST['jk'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$satker = $_POST['satker'];
	$kategori_pgw = $_POST['kategori_pgw'];
	$ceksj = $_FILES["sidik_jari"]["name"];
	$cekkarpeg = $_FILES["karpeg"]["name"];
	$cektaspen = $_FILES["taspen"]["name"];
	$cekkk = $_FILES["kk"]["name"];
	$ceknik = $_FILES["nik"]["name"];
	$cekkaris = $_FILES["karis"]["name"];
	$ceknpwp = $_FILES["npwp"]["name"];
	$cekbpjs = $_FILES["bpjs"]["name"];
	$ceksim = $_FILES["sim"]["name"];
	$cekgaji = $_FILES["gaji"]["name"];
	$telp_emp = $_POST['telp_emp'];
	$telp2_emp = $_POST['telp2_emp'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$cekakte = $_FILES["akte"]["name"];
	$goldar = $_POST['goldar'];
	$agama = $_POST['agama'];
	$wrn_kulit = $_POST['wrn_kulit'];
	$wrn_rambut = $_POST['wrn_rambut'];
	$alamat = $_POST['alamat'];
	$alamat_ktp = $_POST['alamat_ktp'];
	$email_prbd = $_POST['email_prbd'];
	$email_dinas = $_POST['email_dinas'];
	$hak_akses = $_POST['hak_akses'];
	$cekfoto = $_FILES["foto"]["name"];

	if ($npp != "") {
		$sqlcek = "SELECT * FROM employee WHERE npp='$npp'";
		$ress = mysqli_query($conn, $sqlcek);
		$rows = mysqli_num_rows($ress);
		if ($rows < 1) {
			if ($ceksj != "") {
				$sidik_jari = substr($_FILES["sidik_jari"]["name"], -5);
				$newsj = "sidik_jari" . $npp . $sidik_jari;
				move_uploaded_file($_FILES["sidik_jari"]["tmp_name"], "sidik_jari/" . $newsj);
				if ($cekkarpeg != "") {
					$karpeg = substr($_FILES["karpeg"]["name"], -5);
					$newkarpeg = "karpeg" . $npp . $karpeg;
					move_uploaded_file($_FILES["karpeg"]["tmp_name"], "karpeg/" . $newkarpeg);
					if ($cektaspen != "") {
						$taspen = substr($_FILES["taspen"]["name"], -5);
						$newtaspen = "taspen" . $npp . $taspen;
						move_uploaded_file($_FILES["taspen"]["tmp_name"], "taspen/" . $newtaspen);
						if ($cekkk != "") {
							$kk = substr($_FILES["kk"]["name"], -5);
							$newkk = "kk" . $npp . $kk;
							move_uploaded_file($_FILES["kk"]["tmp_name"], "kk/" . $newkk);
							if ($ceknik != "") {
								$nik = substr($_FILES["nik"]["name"], -5);
								$newnik = "nik" . $npp . $nik;
								move_uploaded_file($_FILES["nik"]["tmp_name"], "nik/" . $newnik);
								if ($cekkaris != "") {
									$karis = substr($_FILES["karis"]["name"], -5);
									$newkaris = "karis" . $npp . $karis;
									move_uploaded_file($_FILES["karis"]["tmp_name"], "karis/" . $newkaris);
									if ($ceknpwp != "") {
										$npwp = substr($_FILES["npwp"]["name"], -5);
										$newnpwp = "npwp" . $npp . $npwp;
										move_uploaded_file($_FILES["npwp"]["tmp_name"], "npwp/" . $newnpwp);
										if ($cekbpjs != "") {
											$bpjs = substr($_FILES["bpjs"]["name"], -5);
											$newbpjs = "bpjs" . $npp . $bpjs;
											move_uploaded_file($_FILES["bpjs"]["tmp_name"], "bpjs/" . $newbpjs);
											if ($ceksim != "") {
												$sim = substr($_FILES["sim"]["name"], -5);
												$newsim = "sim" . $npp . $sim;
												move_uploaded_file($_FILES["sim"]["tmp_name"], "sim/" . $newsim);
												if ($cekgaji != "") {
													$gaji = substr($_FILES["gaji"]["name"], -5);
													$newgaji = "gaji" . $npp . $gaji;
													move_uploaded_file($_FILES["gaji"]["tmp_name"], "gaji/" . $newgaji);
													if ($cekakte != "") {
														$akte = substr($_FILES["akte"]["name"], -5);
														$newakte = "akte" . $npp . $akte;
														move_uploaded_file($_FILES["akte"]["tmp_name"], "akte/" . $newakte);
														if ($cekfoto != "") {
															$foto = substr($_FILES["foto"]["name"], -5);
															$newfoto = "foto" . $npp . $foto;
															move_uploaded_file($_FILES["foto"]["tmp_name"], "foto/" . $newfoto);
															$sql = "UPDATE employee SET
															npp='" . $npp . "',
															nama_emp='" . $nama . "',
															jk_emp='" . $jk . "',
															divisi='" . $divisi . "',
															pangkat='" . $pangkat . "',
															jabatan='" . $jabatan . "',
															satker='" . $satker . "',
															kategori_pgw='" . $kategori_pgw . "',
															sidik_jari='" . $newsj . "',
															karpeg='" . $newkarpeg . "',
															taspen='" . $newtaspen . "',
															kk='" . $newkk . "',
															nik='" . $newnik . "',
															karis='" . $newkaris . "',
															npwp='" . $newnpwp . "',
															bpjs='" . $newbpjs . "',
															sim='" . $newsim . "',
															gaji='" . $newgaji . "',
															telp_emp='" . $telp_emp . "',
															telp2_emp='" . $telp2_emp . "',
															tmp_lahir='" . $tmp_lahir . "',
															tgl_lahir='" . $tgl_lahir . "',
															akte='" . $newakte . "',
															goldar='" . $goldar . "',
															agama='" . $agama . "',
															wrn_kulit='" . $wrn_kulit . "',
															wrn_rambut='" . $wrn_rambut . "',
															alamat='" . $alamat . "',
															alamat_ktp='" . $alamat_ktp . "',
															email_prbd='" . $email_prbd . "',
															email_dinas='" . $email_dinas . "',
															hak_akses='" . $hak_akses . "'
															foto_emp='" . $newfoto . "'
															WHERE npp='" . $npplama . "'";
															$ress = mysqli_query($conn, $sql);
															header("location: data_pegawai.php?act=update&msg=success");
														} else {
															$sql = "UPDATE employee SET
															npp='" . $npp . "',
															nama_emp='" . $nama . "',
															jk_emp='" . $jk . "',
															divisi='" . $divisi . "',
															pangkat='" . $pangkat . "',
															jabatan='" . $jabatan . "',
															satker='" . $satker . "',
															kategori_pgw='" . $kategori_pgw . "',
															sidik_jari='" . $newsj . "',
															karpeg='" . $newkarpeg . "',
															taspen='" . $newtaspen . "',
															kk='" . $newkk . "',
															nik='" . $newnik . "',
															karis='" . $newkaris . "',
															npwp='" . $newnpwp . "',
															bpjs='" . $newbpjs . "',
															sim='" . $newsim . "',
															gaji='" . $newgaji . "',
															telp_emp='" . $telp_emp . "',
															telp2_emp='" . $telp2_emp . "',
															tmp_lahir='" . $tmp_lahir . "',
															tgl_lahir='" . $tgl_lahir . "',
															akte='" . $newakte . "',
															goldar='" . $goldar . "',
															agama='" . $agama . "',
															wrn_kulit='" . $wrn_kulit . "',
															wrn_rambut='" . $wrn_rambut . "',
															alamat='" . $alamat . "',
															alamat_ktp='" . $alamat_ktp . "',
															email_prbd='" . $email_prbd . "',
															email_dinas='" . $email_dinas . "',
															hak_akses='" . $hak_akses . "'
															WHERE npp='" . $npplama . "'";
															$ress = mysqli_query($conn, $sql);
															header("location: data_pegawai.php?act=update&msg=success");
														}
													} else {
														$sql = "UPDATE employee SET
														npp='" . $npp . "',
														nama_emp='" . $nama . "',
														jk_emp='" . $jk . "',
														divisi='" . $divisi . "',
														pangkat='" . $pangkat . "',
														jabatan='" . $jabatan . "',
														satker='" . $satker . "',
														kategori_pgw='" . $kategori_pgw . "',
														sidik_jari='" . $newsj . "',
														karpeg='" . $newkarpeg . "',
														taspen='" . $newtaspen . "',
														kk='" . $newkk . "',
														nik='" . $newnik . "',
														karis='" . $newkaris . "',
														npwp='" . $newnpwp . "',
														bpjs='" . $newbpjs . "',
														sim='" . $newsim . "',
														gaji='" . $newgaji . "',
														telp_emp='" . $telp_emp . "',
														telp2_emp='" . $telp2_emp . "',
														tmp_lahir='" . $tmp_lahir . "',
														tgl_lahir='" . $tgl_lahir . "',
														akte='" . $newakte . "',
														goldar='" . $goldar . "',
														agama='" . $agama . "',
														wrn_kulit='" . $wrn_kulit . "',
														wrn_rambut='" . $wrn_rambut . "',
														alamat='" . $alamat . "',
														alamat_ktp='" . $alamat_ktp . "',
														email_prbd='" . $email_prbd . "',
														email_dinas='" . $email_dinas . "',
														hak_akses='" . $hak_akses . "'
														WHERE npp='" . $npplama . "'";
														$ress = mysqli_query($conn, $sql);
														header("location: data_pegawai.php?act=update&msg=success");
													}
												} else {
													$sql = "UPDATE employee SET
													npp='" . $npp . "',
													nama_emp='" . $nama . "',
													jk_emp='" . $jk . "',
													divisi='" . $divisi . "',
													pangkat='" . $pangkat . "',
													jabatan='" . $jabatan . "',
													satker='" . $satker . "',
													kategori_pgw='" . $kategori_pgw . "',
													sidik_jari='" . $newsj . "',
													karpeg='" . $newkarpeg . "',
													taspen='" . $newtaspen . "',
													kk='" . $newkk . "',
													nik='" . $newnik . "',
													karis='" . $newkaris . "',
													npwp='" . $newnpwp . "',
													bpjs='" . $newbpjs . "',
													sim='" . $newsim . "',
													gaji='" . $newgaji . "',
													telp_emp='" . $telp_emp . "',
													telp2_emp='" . $telp2_emp . "',
													tmp_lahir='" . $tmp_lahir . "',
													tgl_lahir='" . $tgl_lahir . "',
													akte='" . $newakte . "',
													goldar='" . $goldar . "',
													agama='" . $agama . "',
													wrn_kulit='" . $wrn_kulit . "',
													wrn_rambut='" . $wrn_rambut . "',
													alamat='" . $alamat . "',
													alamat_ktp='" . $alamat_ktp . "',
													email_prbd='" . $email_prbd . "',
													email_dinas='" . $email_dinas . "',
													hak_akses='" . $hak_akses . "'
													WHERE npp='" . $npplama . "'";
													$ress = mysqli_query($conn, $sql);
													header("location: data_pegawai.php?act=update&msg=success");
												}
											} else {
												$sql = "UPDATE employee SET
												npp='" . $npp . "',
												nama_emp='" . $nama . "',
												jk_emp='" . $jk . "',
												divisi='" . $divisi . "',
												pangkat='" . $pangkat . "',
												jabatan='" . $jabatan . "',
												satker='" . $satker . "',
												kategori_pgw='" . $kategori_pgw . "',
												sidik_jari='" . $newsj . "',
												karpeg='" . $newkarpeg . "',
												taspen='" . $newtaspen . "',
												kk='" . $newkk . "',
												nik='" . $newnik . "',
												karis='" . $newkaris . "',
												npwp='" . $newnpwp . "',
												bpjs='" . $newbpjs . "',
												sim='" . $newsim . "',
												gaji='" . $newgaji . "',
												telp_emp='" . $telp_emp . "',
												telp2_emp='" . $telp2_emp . "',
												tmp_lahir='" . $tmp_lahir . "',
												tgl_lahir='" . $tgl_lahir . "',
												akte='" . $newakte . "',
												goldar='" . $goldar . "',
												agama='" . $agama . "',
												wrn_kulit='" . $wrn_kulit . "',
												wrn_rambut='" . $wrn_rambut . "',
												alamat='" . $alamat . "',
												alamat_ktp='" . $alamat_ktp . "',
												email_prbd='" . $email_prbd . "',
												email_dinas='" . $email_dinas . "',
												hak_akses='" . $hak_akses . "'
												WHERE npp='" . $npplama . "'";
												$ress = mysqli_query($conn, $sql);
												header("location: data_pegawai.php?act=update&msg=success");
											}
										} else {
											$sql = "UPDATE employee SET
											npp='" . $npp . "',
											nama_emp='" . $nama . "',
											jk_emp='" . $jk . "',
											divisi='" . $divisi . "',
											pangkat='" . $pangkat . "',
											jabatan='" . $jabatan . "',
											satker='" . $satker . "',
											kategori_pgw='" . $kategori_pgw . "',
											sidik_jari='" . $newsj . "',
											karpeg='" . $newkarpeg . "',
											taspen='" . $newtaspen . "',
											kk='" . $newkk . "',
											nik='" . $newnik . "',
											karis='" . $newkaris . "',
											npwp='" . $newnpwp . "',
											bpjs='" . $newbpjs . "',
											sim='" . $newsim . "',
											gaji='" . $newgaji . "',
											telp_emp='" . $telp_emp . "',
											telp2_emp='" . $telp2_emp . "',
											tmp_lahir='" . $tmp_lahir . "',
											tgl_lahir='" . $tgl_lahir . "',
											akte='" . $newakte . "',
											goldar='" . $goldar . "',
											agama='" . $agama . "',
											wrn_kulit='" . $wrn_kulit . "',
											wrn_rambut='" . $wrn_rambut . "',
											alamat='" . $alamat . "',
											alamat_ktp='" . $alamat_ktp . "',
											email_prbd='" . $email_prbd . "',
											email_dinas='" . $email_dinas . "',
											hak_akses='" . $hak_akses . "'
											WHERE npp='" . $npplama . "'";
											$ress = mysqli_query($conn, $sql);
											header("location: data_pegawai.php?act=update&msg=success");
										}
									} else {
										$sql = "UPDATE employee SET
										npp='" . $npp . "',
										nama_emp='" . $nama . "',
										jk_emp='" . $jk . "',
										divisi='" . $divisi . "',
										pangkat='" . $pangkat . "',
										jabatan='" . $jabatan . "',
										satker='" . $satker . "',
										kategori_pgw='" . $kategori_pgw . "',
										sidik_jari='" . $newsj . "',
										karpeg='" . $newkarpeg . "',
										taspen='" . $newtaspen . "',
										kk='" . $newkk . "',
										nik='" . $newnik . "',
										karis='" . $newkaris . "',
										npwp='" . $newnpwp . "',
										bpjs='" . $newbpjs . "',
										sim='" . $newsim . "',
										gaji='" . $newgaji . "',
										telp_emp='" . $telp_emp . "',
										telp2_emp='" . $telp2_emp . "',
										tmp_lahir='" . $tmp_lahir . "',
										tgl_lahir='" . $tgl_lahir . "',
										akte='" . $newakte . "',
										goldar='" . $goldar . "',
										agama='" . $agama . "',
										wrn_kulit='" . $wrn_kulit . "',
										wrn_rambut='" . $wrn_rambut . "',
										alamat='" . $alamat . "',
										alamat_ktp='" . $alamat_ktp . "',
										email_prbd='" . $email_prbd . "',
										email_dinas='" . $email_dinas . "',
										hak_akses='" . $hak_akses . "'
										WHERE npp='" . $npplama . "'";
										$ress = mysqli_query($conn, $sql);
										header("location: data_pegawai.php?act=update&msg=success");
									}
								} else {
									$sql = "UPDATE employee SET
									npp='" . $npp . "',
									nama_emp='" . $nama . "',
									jk_emp='" . $jk . "',
									divisi='" . $divisi . "',
									pangkat='" . $pangkat . "',
									jabatan='" . $jabatan . "',
									satker='" . $satker . "',
									kategori_pgw='" . $kategori_pgw . "',
									sidik_jari='" . $newsj . "',
									karpeg='" . $newkarpeg . "',
									taspen='" . $newtaspen . "',
									kk='" . $newkk . "',
									nik='" . $newnik . "',
									karis='" . $newkaris . "',
									npwp='" . $newnpwp . "',
									bpjs='" . $newbpjs . "',
									sim='" . $newsim . "',
									gaji='" . $newgaji . "',
									telp_emp='" . $telp_emp . "',
									telp2_emp='" . $telp2_emp . "',
									tmp_lahir='" . $tmp_lahir . "',
									tgl_lahir='" . $tgl_lahir . "',
									akte='" . $newakte . "',
									goldar='" . $goldar . "',
									agama='" . $agama . "',
									wrn_kulit='" . $wrn_kulit . "',
									wrn_rambut='" . $wrn_rambut . "',
									alamat='" . $alamat . "',
									alamat_ktp='" . $alamat_ktp . "',
									email_prbd='" . $email_prbd . "',
									email_dinas='" . $email_dinas . "',
									hak_akses='" . $hak_akses . "'
									WHERE npp='" . $npplama . "'";
									$ress = mysqli_query($conn, $sql);
									header("location: data_pegawai.php?act=update&msg=success");
								}
							} else {
								$sql = "UPDATE employee SET
								npp='" . $npp . "',
								nama_emp='" . $nama . "',
								jk_emp='" . $jk . "',
								divisi='" . $divisi . "',
								pangkat='" . $pangkat . "',
								jabatan='" . $jabatan . "',
								satker='" . $satker . "',
								kategori_pgw='" . $kategori_pgw . "',
								sidik_jari='" . $newsj . "',
								karpeg='" . $newkarpeg . "',
								taspen='" . $newtaspen . "',
								kk='" . $newkk . "',
								nik='" . $newnik . "',
								karis='" . $newkaris . "',
								npwp='" . $newnpwp . "',
								bpjs='" . $newbpjs . "',
								sim='" . $newsim . "',
								gaji='" . $newgaji . "',
								telp_emp='" . $telp_emp . "',
								telp2_emp='" . $telp2_emp . "',
								tmp_lahir='" . $tmp_lahir . "',
								tgl_lahir='" . $tgl_lahir . "',
								akte='" . $newakte . "',
								goldar='" . $goldar . "',
								agama='" . $agama . "',
								wrn_kulit='" . $wrn_kulit . "',
								wrn_rambut='" . $wrn_rambut . "',
								alamat='" . $alamat . "',
								alamat_ktp='" . $alamat_ktp . "',
								email_prbd='" . $email_prbd . "',
								email_dinas='" . $email_dinas . "',
								hak_akses='" . $hak_akses . "'
								WHERE npp='" . $npplama . "'";
								$ress = mysqli_query($conn, $sql);
								header("location: data_pegawai.php?act=update&msg=success");
							}
						} else {
							$sql = "UPDATE employee SET
							npp='" . $npp . "',
							nama_emp='" . $nama . "',
							jk_emp='" . $jk . "',
							divisi='" . $divisi . "',
							pangkat='" . $pangkat . "',
							jabatan='" . $jabatan . "',
							satker='" . $satker . "',
							kategori_pgw='" . $kategori_pgw . "',
							sidik_jari='" . $newsj . "',
							karpeg='" . $newkarpeg . "',
							taspen='" . $newtaspen . "',
							kk='" . $newkk . "',
							nik='" . $newnik . "',
							karis='" . $newkaris . "',
							npwp='" . $newnpwp . "',
							bpjs='" . $newbpjs . "',
							sim='" . $newsim . "',
							gaji='" . $newgaji . "',
							telp_emp='" . $telp_emp . "',
							telp2_emp='" . $telp2_emp . "',
							tmp_lahir='" . $tmp_lahir . "',
							tgl_lahir='" . $tgl_lahir . "',
							akte='" . $newakte . "',
							goldar='" . $goldar . "',
							agama='" . $agama . "',
							wrn_kulit='" . $wrn_kulit . "',
							wrn_rambut='" . $wrn_rambut . "',
							alamat='" . $alamat . "',
							alamat_ktp='" . $alamat_ktp . "',
							email_prbd='" . $email_prbd . "',
							email_dinas='" . $email_dinas . "',
							hak_akses='" . $hak_akses . "'
							WHERE npp='" . $npplama . "'";
							$ress = mysqli_query($conn, $sql);
							header("location: data_pegawai.php?act=update&msg=success");
						}
					} else {
						$sql = "UPDATE employee SET
							npp='" . $npp . "',
							nama_emp='" . $nama . "',
							jk_emp='" . $jk . "',
							divisi='" . $divisi . "',
							pangkat='" . $pangkat . "',
							jabatan='" . $jabatan . "',
							satker='" . $satker . "',
							kategori_pgw='" . $kategori_pgw . "',
							sidik_jari='" . $newsj . "',
							karpeg='" . $newkarpeg . "',
							taspen='" . $newtaspen . "',
							kk='" . $newkk . "',
							nik='" . $newnik . "',
							karis='" . $newkaris . "',
							npwp='" . $newnpwp . "',
							bpjs='" . $newbpjs . "',
							sim='" . $newsim . "',
							gaji='" . $newgaji . "',
							telp_emp='" . $telp_emp . "',
							telp2_emp='" . $telp2_emp . "',
							tmp_lahir='" . $tmp_lahir . "',
							tgl_lahir='" . $tgl_lahir . "',
							akte='" . $newakte . "',
							goldar='" . $goldar . "',
							agama='" . $agama . "',
							wrn_kulit='" . $wrn_kulit . "',
							wrn_rambut='" . $wrn_rambut . "',
							alamat='" . $alamat . "',
							alamat_ktp='" . $alamat_ktp . "',
							email_prbd='" . $email_prbd . "',
							email_dinas='" . $email_dinas . "',
							hak_akses='" . $hak_akses . "'
							WHERE npp='" . $npplama . "'";
						$ress = mysqli_query($conn, $sql);
						header("location: data_pegawai.php?act=update&msg=success");
					}
				} else {
					$sql = "UPDATE employee SET
					npp='" . $npp . "',
					nama_emp='" . $nama . "',
					jk_emp='" . $jk . "',
					divisi='" . $divisi . "',
					pangkat='" . $pangkat . "',
					jabatan='" . $jabatan . "',
					satker='" . $satker . "',
					kategori_pgw='" . $kategori_pgw . "',
					sidik_jari='" . $newsj . "',
					karpeg='" . $newkarpeg . "',
					taspen='" . $newtaspen . "',
					kk='" . $newkk . "',
					nik='" . $newnik . "',
					karis='" . $newkaris . "',
					npwp='" . $newnpwp . "',
					bpjs='" . $newbpjs . "',
					sim='" . $newsim . "',
					gaji='" . $newgaji . "',
					telp_emp='" . $telp_emp . "',
					telp2_emp='" . $telp2_emp . "',
					tmp_lahir='" . $tmp_lahir . "',
					tgl_lahir='" . $tgl_lahir . "',
					akte='" . $newakte . "',
					goldar='" . $goldar . "',
					agama='" . $agama . "',
					wrn_kulit='" . $wrn_kulit . "',
					wrn_rambut='" . $wrn_rambut . "',
					alamat='" . $alamat . "',
					alamat_ktp='" . $alamat_ktp . "',
					email_prbd='" . $email_prbd . "',
					email_dinas='" . $email_dinas . "',
					hak_akses='" . $hak_akses . "'
					WHERE npp='" . $npplama . "'";
					$ress = mysqli_query($conn, $sql);
					header("location: data_pegawai.php?act=update&msg=success");
				}
			} else {
				if ($cekfoto != "") {
					$foto = substr($_FILES["foto"]["name"], -5);
					$newfoto = "foto" . $npp . $foto;
					move_uploaded_file($_FILES["foto"]["tmp_name"], "foto/" . $newfoto);
					$sql = "UPDATE employee SET
						npp='" . $npp . "',
						nama_emp='" . $nama . "',
						jk_emp='" . $jk . "',
						divisi='" . $divisi . "',
						pangkat='" . $pangkat . "',
						jabatan='" . $jabatan . "',
						satker='" . $satker . "',
						kategori_pgw='" . $kategori_pgw . "',
						telp_emp='" . $telp_emp . "',
						telp2_emp='" . $telp2_emp . "',
						tmp_lahir='" . $tmp_lahir . "',
						tgl_lahir='" . $tgl_lahir . "',
						goldar='" . $goldar . "',
						agama='" . $agama . "',
						wrn_kulit='" . $wrn_kulit . "',
						wrn_rambut='" . $wrn_rambut . "',
						alamat='" . $alamat . "',
						alamat_ktp='" . $alamat_ktp . "',
						email_prbd='" . $email_prbd . "',
						email_dinas='" . $email_dinas . "',
						hak_akses='" . $hak_akses . "',
						foto_emp='" . $newfoto . "'
						WHERE npp='" . $npplama . "'";
					$ress = mysqli_query($conn, $sql);
					header("location: data_pegawai.php?act=update&msg=success");
				} else {
					$sql = "UPDATE employee SET
						npp='" . $npp . "',
						nama_emp='" . $nama . "',
						jk_emp='" . $jk . "',
						divisi='" . $divisi . "',
						pangkat='" . $pangkat . "',
						jabatan='" . $jabatan . "',
						satker='" . $satker . "',
						kategori_pgw='" . $kategori_pgw . "',
						telp_emp='" . $telp_emp . "',
						telp2_emp='" . $telp2_emp . "',
						tmp_lahir='" . $tmp_lahir . "',
						tgl_lahir='" . $tgl_lahir . "',
						goldar='" . $goldar . "',
						agama='" . $agama . "',
						wrn_kulit='" . $wrn_kulit . "',
						wrn_rambut='" . $wrn_rambut . "',
						alamat='" . $alamat . "',
						alamat_ktp='" . $alamat_ktp . "',
						email_prbd='" . $email_prbd . "',
						email_dinas='" . $email_dinas . "',
						hak_akses='" . $hak_akses . "'
						WHERE npp='" . $npplama . "'";
					$ress = mysqli_query($conn, $sql);
					header("location: data_pegawai.php?act=update&msg=success");
				}
			}
		} else {
			header("location: pegawai_edit.php?npp=$npplama&act=add&msg=double");
		}
	} else {
		if ($ceksj != "") {
			$ceksj = substr($_FILES["sidik_jari"]["name"], -5);
			$newsj = "sidik_jari" . $npp . $ceksj;
			var_dump($newsj);
			// if (is_dir($tmp_name = $_FILES['sidik_jari']['tmp_name'])) {
			// 	echo 'the temporary folder exists<br>';
			// } else {
			// 	echo 'the temp folder doesn\'t exist<br>';
			// }
			move_uploaded_file($_FILES["sidik_jari"]["tmp_name"], "sidik_jari/" . $newsj);
			die;
			if ($cekkarpeg != "") {
				$cekkarpeg = substr($_FILES["karpeg"]["name"], -5);
				
				$newkarpeg = "karpeg" . $npp . $cekkarpeg;
				move_uploaded_file($_FILES["karpeg"]["tmp_name"], "karpeg/" . $newkarpeg);
				if ($cektaspen != "") {
					$cektaspen = substr($_FILES["taspen"]["name"], -5);
					$newtaspen = "taspen" . $npp . $cektaspen;
					move_uploaded_file($_FILES["taspen"]["tmp_name"], "taspen/" . $newtaspen);
					if ($cekkk != "") {
						$cekkk = substr($_FILES["kk"]["name"], -5);
						$newkk = "kk" . $npp . $cekkk;
						move_uploaded_file($_FILES["kk"]["tmp_name"], "kk/" . $newkk);
						if ($ceknik != "") {
							$ceknik = substr($_FILES["nik"]["name"], -5);
							$newnik = "nik" . $npp . $ceknik;
							move_uploaded_file($_FILES["nik"]["tmp_name"], "nik/" . $newnik);
							if ($cekkaris != "") {
								$cekkaris = substr($_FILES["karis"]["name"], -5);
								$newkaris = "karis" . $npp . $cekkaris;
								move_uploaded_file($_FILES["karis"]["tmp_name"], "karis/" . $newkaris);
								if ($ceknpwp != "") {
									$ceknpwp = substr($_FILES["npwp"]["name"], -5);
									$newnpwp = "npwp" . $npp . $ceknpwp;
									move_uploaded_file($_FILES["npwp"]["tmp_name"], "npwp/" . $newnpwp);
									if ($cekbpjs != "") {
										$cekbpjs = substr($_FILES["bpjs"]["name"], -5);
										$newbpjs = "bpjs" . $npp . $cekbpjs;
										move_uploaded_file($_FILES["bpjs"]["tmp_name"], "bpjs/" . $newbpjs);
										if ($ceksim != "") {
											$ceksim = substr($_FILES["sim"]["name"], -5);
											$newsim = "sim" . $npp . $ceksim;
											move_uploaded_file($_FILES["sim"]["tmp_name"], "sim/" . $newsim);
											if ($cekgaji != "") {
												$cekgaji = substr($_FILES["gaji"]["name"], -5);
												$newgaji = "gaji" . $npp . $cekgaji;
												move_uploaded_file($_FILES["gaji"]["tmp_name"], "gaji/" . $newgaji);
												if ($cekakte != "") {
													$cekakte = substr($_FILES["akte"]["name"], -5);
													$newakte = "akte" . $npp . $cekakte;
													move_uploaded_file($_FILES["akte"]["tmp_name"], "akte/" . $newakte);
													if ($cekfoto != "") {
														$foto = substr($_FILES["foto"]["name"], -5);
														$newfoto = "foto" . $npp . $foto;
														move_uploaded_file($_FILES["foto"]["tmp_name"], "foto/" . $newfoto);
														$sql = "UPDATE employee SET
														nama_emp='" . $nama . "',
														jk_emp='" . $jk . "',
														divisi='" . $divisi . "',
														pangkat='" . $pangkat . "',
														jabatan='" . $jabatan . "',
														satker='" . $satker . "',
														kategori_pgw='" . $kategori_pgw . "',
														sidik_jari='" . $newsj . "',
														karpeg='" . $newkarpeg . "',
														taspen='" . $newtaspen . "',
														kk='" . $newkk . "',
														nik='" . $newnik . "',
														karis='" . $newkaris . "',
														npwp='" . $newnpwp . "',
														bpjs='" . $newbpjs . "',
														sim='" . $newsim . "',
														gaji='" . $newgaji . "',
														telp_emp='" . $telp_emp . "',
														telp2_emp='" . $telp2_emp . "',
														tmp_lahir='" . $tmp_lahir . "',
														tgl_lahir='" . $tgl_lahir . "',
														akte='" . $newakte . "',
														goldar='" . $goldar . "',
														agama='" . $agama . "',
														wrn_kulit='" . $wrn_kulit . "',
														wrn_rambut='" . $wrn_rambut . "',
														alamat='" . $alamat . "',
														alamat_ktp='" . $alamat_ktp . "',
														email_prbd='" . $email_prbd . "',
														email_dinas='" . $email_dinas . "',
														hak_akses='" . $hak_akses . "',
														foto_emp='" . $newfoto . "'
														WHERE npp='" . $npplama . "'";
														$ress = mysqli_query($conn, $sql);
														header("location: data_pegawai.php?act=update&msg=success");
													} else {
														$sql = "UPDATE employee SET
														nama_emp='" . $nama . "',
														jk_emp='" . $jk . "',
														divisi='" . $divisi . "',
														pangkat='" . $pangkat . "',
														jabatan='" . $jabatan . "',
														satker='" . $satker . "',
														kategori_pgw='" . $kategori_pgw . "',
														sidik_jari='" . $newsj . "',
														karpeg='" . $newkarpeg . "',
														taspen='" . $newtaspen . "',
														kk='" . $newkk . "',
														nik='" . $newnik . "',
														karis='" . $newkaris . "',
														npwp='" . $newnpwp . "',
														bpjs='" . $newbpjs . "',
														sim='" . $newsim . "',
														gaji='" . $newgaji . "',
														telp_emp='" . $telp_emp . "',
														telp2_emp='" . $telp2_emp . "',
														tmp_lahir='" . $tmp_lahir . "',
														tgl_lahir='" . $tgl_lahir . "',
														akte='" . $newakte . "',
														goldar='" . $goldar . "',
														agama='" . $agama . "',
														wrn_kulit='" . $wrn_kulit . "',
														wrn_rambut='" . $wrn_rambut . "',
														alamat='" . $alamat . "',
														alamat_ktp='" . $alamat_ktp . "',
														email_prbd='" . $email_prbd . "',
														email_dinas='" . $email_dinas . "',
														hak_akses='" . $hak_akses . "',
														WHERE npp='" . $npplama . "'";
														$ress = mysqli_query($conn, $sql);
														header("location: data_pegawai.php?act=update&msg=success");
													}
												} else {
													$sql = "UPDATE employee SET
													nama_emp='" . $nama . "',
													jk_emp='" . $jk . "',
													divisi='" . $divisi . "',
													pangkat='" . $pangkat . "',
													jabatan='" . $jabatan . "',
													satker='" . $satker . "',
													kategori_pgw='" . $kategori_pgw . "',
													sidik_jari='" . $newsj . "',
													karpeg='" . $newkarpeg . "',
													taspen='" . $newtaspen . "',
													kk='" . $newkk . "',
													nik='" . $newnik . "',
													karis='" . $newkaris . "',
													npwp='" . $newnpwp . "',
													bpjs='" . $newbpjs . "',
													sim='" . $newsim . "',
													gaji='" . $newgaji . "',
													telp_emp='" . $telp_emp . "',
													telp2_emp='" . $telp2_emp . "',
													tmp_lahir='" . $tmp_lahir . "',
													tgl_lahir='" . $tgl_lahir . "',
													akte='" . $newakte . "',
													goldar='" . $goldar . "',
													agama='" . $agama . "',
													wrn_kulit='" . $wrn_kulit . "',
													wrn_rambut='" . $wrn_rambut . "',
													alamat='" . $alamat . "',
													alamat_ktp='" . $alamat_ktp . "',
													email_prbd='" . $email_prbd . "',
													email_dinas='" . $email_dinas . "',
													hak_akses='" . $hak_akses . "'
													WHERE npp='" . $npplama . "'";
													$ress = mysqli_query($conn, $sql);
													header("location: data_pegawai.php?act=update&msg=success");
												}
											} else {
												$sql = "UPDATE employee SET
												nama_emp='" . $nama . "',
												jk_emp='" . $jk . "',
												divisi='" . $divisi . "',
												pangkat='" . $pangkat . "',
												jabatan='" . $jabatan . "',
												satker='" . $satker . "',
												kategori_pgw='" . $kategori_pgw . "',
												sidik_jari='" . $newsj . "',
												karpeg='" . $newkarpeg . "',
												taspen='" . $newtaspen . "',
												kk='" . $newkk . "',
												nik='" . $newnik . "',
												karis='" . $newkaris . "',
												npwp='" . $newnpwp . "',
												bpjs='" . $newbpjs . "',
												sim='" . $newsim . "',
												gaji='" . $newgaji . "',
												telp_emp='" . $telp_emp . "',
												telp2_emp='" . $telp2_emp . "',
												tmp_lahir='" . $tmp_lahir . "',
												tgl_lahir='" . $tgl_lahir . "',
												akte='" . $newakte . "',
												goldar='" . $goldar . "',
												agama='" . $agama . "',
												wrn_kulit='" . $wrn_kulit . "',
												wrn_rambut='" . $wrn_rambut . "',
												alamat='" . $alamat . "',
												alamat_ktp='" . $alamat_ktp . "',
												email_prbd='" . $email_prbd . "',
												email_dinas='" . $email_dinas . "',
												hak_akses='" . $hak_akses . "'
												WHERE npp='" . $npplama . "'";
												$ress = mysqli_query($conn, $sql);
												header("location: data_pegawai.php?act=update&msg=success");
											}
										} else {
											$sql = "UPDATE employee SET
											nama_emp='" . $nama . "',
											jk_emp='" . $jk . "',
											divisi='" . $divisi . "',
											pangkat='" . $pangkat . "',
											jabatan='" . $jabatan . "',
											satker='" . $satker . "',
											kategori_pgw='" . $kategori_pgw . "',
											sidik_jari='" . $newsj . "',
											karpeg='" . $newkarpeg . "',
											taspen='" . $newtaspen . "',
											kk='" . $newkk . "',
											nik='" . $newnik . "',
											karis='" . $newkaris . "',
											npwp='" . $newnpwp . "',
											bpjs='" . $newbpjs . "',
											sim='" . $newsim . "',
											gaji='" . $newgaji . "',
											telp_emp='" . $telp_emp . "',
											telp2_emp='" . $telp2_emp . "',
											tmp_lahir='" . $tmp_lahir . "',
											tgl_lahir='" . $tgl_lahir . "',
											akte='" . $newakte . "',
											goldar='" . $goldar . "',
											agama='" . $agama . "',
											wrn_kulit='" . $wrn_kulit . "',
											wrn_rambut='" . $wrn_rambut . "',
											alamat='" . $alamat . "',
											alamat_ktp='" . $alamat_ktp . "',
											email_prbd='" . $email_prbd . "',
											email_dinas='" . $email_dinas . "',
											hak_akses='" . $hak_akses . "'
											WHERE npp='" . $npplama . "'";
											$ress = mysqli_query($conn, $sql);
											header("location: data_pegawai.php?act=update&msg=success");
										}
									} else {
										$sql = "UPDATE employee SET
										nama_emp='" . $nama . "',
										jk_emp='" . $jk . "',
										divisi='" . $divisi . "',
										pangkat='" . $pangkat . "',
										jabatan='" . $jabatan . "',
										satker='" . $satker . "',
										kategori_pgw='" . $kategori_pgw . "',
										sidik_jari='" . $newsj . "',
										karpeg='" . $newkarpeg . "',
										taspen='" . $newtaspen . "',
										kk='" . $newkk . "',
										nik='" . $newnik . "',
										karis='" . $newkaris . "',
										npwp='" . $newnpwp . "',
										bpjs='" . $newbpjs . "',
										sim='" . $newsim . "',
										gaji='" . $newgaji . "',
										telp_emp='" . $telp_emp . "',
										telp2_emp='" . $telp2_emp . "',
										tmp_lahir='" . $tmp_lahir . "',
										tgl_lahir='" . $tgl_lahir . "',
										akte='" . $newakte . "',
										goldar='" . $goldar . "',
										agama='" . $agama . "',
										wrn_kulit='" . $wrn_kulit . "',
										wrn_rambut='" . $wrn_rambut . "',
										alamat='" . $alamat . "',
										alamat_ktp='" . $alamat_ktp . "',
										email_prbd='" . $email_prbd . "',
										email_dinas='" . $email_dinas . "',
										hak_akses='" . $hak_akses . "'
										WHERE npp='" . $npplama . "'";
										$ress = mysqli_query($conn, $sql);
										header("location: data_pegawai.php?act=update&msg=success");
									}
								} else {
									$sql = "UPDATE employee SET
									nama_emp='" . $nama . "',
									jk_emp='" . $jk . "',
									divisi='" . $divisi . "',
									pangkat='" . $pangkat . "',
									jabatan='" . $jabatan . "',
									satker='" . $satker . "',
									kategori_pgw='" . $kategori_pgw . "',
									sidik_jari='" . $newsj . "',
									karpeg='" . $newkarpeg . "',
									taspen='" . $newtaspen . "',
									kk='" . $newkk . "',
									nik='" . $newnik . "',
									karis='" . $newkaris . "',
									npwp='" . $newnpwp . "',
									bpjs='" . $newbpjs . "',
									sim='" . $newsim . "',
									gaji='" . $newgaji . "',
									telp_emp='" . $telp_emp . "',
									telp2_emp='" . $telp2_emp . "',
									tmp_lahir='" . $tmp_lahir . "',
									tgl_lahir='" . $tgl_lahir . "',
									akte='" . $newakte . "',
									goldar='" . $goldar . "',
									agama='" . $agama . "',
									wrn_kulit='" . $wrn_kulit . "',
									wrn_rambut='" . $wrn_rambut . "',
									alamat='" . $alamat . "',
									alamat_ktp='" . $alamat_ktp . "',
									email_prbd='" . $email_prbd . "',
									email_dinas='" . $email_dinas . "',
									hak_akses='" . $hak_akses . "'
									WHERE npp='" . $npplama . "'";
									$ress = mysqli_query($conn, $sql);
									header("location: data_pegawai.php?act=update&msg=success");
								}
							} else {
								$sql = "UPDATE employee SET
								nama_emp='" . $nama . "',
								jk_emp='" . $jk . "',
								divisi='" . $divisi . "',
								pangkat='" . $pangkat . "',
								jabatan='" . $jabatan . "',
								satker='" . $satker . "',
								kategori_pgw='" . $kategori_pgw . "',
								sidik_jari='" . $newsj . "',
								karpeg='" . $newkarpeg . "',
								taspen='" . $newtaspen . "',
								kk='" . $newkk . "',
								nik='" . $newnik . "',
								karis='" . $newkaris . "',
								npwp='" . $newnpwp . "',
								bpjs='" . $newbpjs . "',
								sim='" . $newsim . "',
								gaji='" . $newgaji . "',
								telp_emp='" . $telp_emp . "',
								telp2_emp='" . $telp2_emp . "',
								tmp_lahir='" . $tmp_lahir . "',
								tgl_lahir='" . $tgl_lahir . "',
								akte='" . $newakte . "',
								goldar='" . $goldar . "',
								agama='" . $agama . "',
								wrn_kulit='" . $wrn_kulit . "',
								wrn_rambut='" . $wrn_rambut . "',
								alamat='" . $alamat . "',
								alamat_ktp='" . $alamat_ktp . "',
								email_prbd='" . $email_prbd . "',
								email_dinas='" . $email_dinas . "',
								hak_akses='" . $hak_akses . "'
								WHERE npp='" . $npplama . "'";
								$ress = mysqli_query($conn, $sql);
								header("location: data_pegawai.php?act=update&msg=success");
							}
						} else {
							$sql = "UPDATE employee SET
							nama_emp='" . $nama . "',
							jk_emp='" . $jk . "',
							divisi='" . $divisi . "',
							pangkat='" . $pangkat . "',
							jabatan='" . $jabatan . "',
							satker='" . $satker . "',
							kategori_pgw='" . $kategori_pgw . "',
							sidik_jari='" . $newsj . "',
							karpeg='" . $newkarpeg . "',
							taspen='" . $newtaspen . "',
							kk='" . $newkk . "',
							nik='" . $newnik . "',
							karis='" . $newkaris . "',
							npwp='" . $newnpwp . "',
							bpjs='" . $newbpjs . "',
							sim='" . $newsim . "',
							gaji='" . $newgaji . "',
							telp_emp='" . $telp_emp . "',
							telp2_emp='" . $telp2_emp . "',
							tmp_lahir='" . $tmp_lahir . "',
							tgl_lahir='" . $tgl_lahir . "',
							akte='" . $newakte . "',
							goldar='" . $goldar . "',
							agama='" . $agama . "',
							wrn_kulit='" . $wrn_kulit . "',
							wrn_rambut='" . $wrn_rambut . "',
							alamat='" . $alamat . "',
							alamat_ktp='" . $alamat_ktp . "',
							email_prbd='" . $email_prbd . "',
							email_dinas='" . $email_dinas . "',
							hak_akses='" . $hak_akses . "'
							WHERE npp='" . $npplama . "'";
							$ress = mysqli_query($conn, $sql);
							header("location: data_pegawai.php?act=update&msg=success");
						}
					} else {
						$sql = "UPDATE employee SET
						nama_emp='" . $nama . "',
						jk_emp='" . $jk . "',
						divisi='" . $divisi . "',
						pangkat='" . $pangkat . "',
						jabatan='" . $jabatan . "',
						satker='" . $satker . "',
						kategori_pgw='" . $kategori_pgw . "',
						sidik_jari='" . $newsj . "',
						karpeg='" . $newkarpeg . "',
						taspen='" . $newtaspen . "',
						kk='" . $newkk . "',
						nik='" . $newnik . "',
						karis='" . $newkaris . "',
						npwp='" . $newnpwp . "',
						bpjs='" . $newbpjs . "',
						sim='" . $newsim . "',
						gaji='" . $newgaji . "',
						telp_emp='" . $telp_emp . "',
						telp2_emp='" . $telp2_emp . "',
						tmp_lahir='" . $tmp_lahir . "',
						tgl_lahir='" . $tgl_lahir . "',
						akte='" . $newakte . "',
						goldar='" . $goldar . "',
						agama='" . $agama . "',
						wrn_kulit='" . $wrn_kulit . "',
						wrn_rambut='" . $wrn_rambut . "',
						alamat='" . $alamat . "',
						alamat_ktp='" . $alamat_ktp . "',
						email_prbd='" . $email_prbd . "',
						email_dinas='" . $email_dinas . "',
						hak_akses='" . $hak_akses . "'
						WHERE npp='" . $npplama . "'";
						$ress = mysqli_query($conn, $sql);
						header("location: data_pegawai.php?act=update&msg=success");
					}
				} else {
					$sql = "UPDATE employee SET
						nama_emp='" . $nama . "',
						jk_emp='" . $jk . "',
						divisi='" . $divisi . "',
						pangkat='" . $pangkat . "',
						jabatan='" . $jabatan . "',
						satker='" . $satker . "',
						kategori_pgw='" . $kategori_pgw . "',
						sidik_jari='" . $newsj . "',
						karpeg='" . $newkarpeg . "',
						taspen='" . $newtaspen . "',
						kk='" . $newkk . "',
						nik='" . $newnik . "',
						karis='" . $newkaris . "',
						npwp='" . $newnpwp . "',
						bpjs='" . $newbpjs . "',
						sim='" . $newsim . "',
						gaji='" . $newgaji . "',
						telp_emp='" . $telp_emp . "',
						telp2_emp='" . $telp2_emp . "',
						tmp_lahir='" . $tmp_lahir . "',
						tgl_lahir='" . $tgl_lahir . "',
						akte='" . $newakte . "',
						goldar='" . $goldar . "',
						agama='" . $agama . "',
						wrn_kulit='" . $wrn_kulit . "',
						wrn_rambut='" . $wrn_rambut . "',
						alamat='" . $alamat . "',
						alamat_ktp='" . $alamat_ktp . "',
						email_prbd='" . $email_prbd . "',
						email_dinas='" . $email_dinas . "',
						hak_akses='" . $hak_akses . "'
						WHERE npp='" . $npplama . "'";
					$ress = mysqli_query($conn, $sql);
					header("location: data_pegawai.php?act=update&msg=success");
				}
			} else {
				$sql = "UPDATE employee SET
					nama_emp='" . $nama . "',
					jk_emp='" . $jk . "',
					divisi='" . $divisi . "',
					pangkat='" . $pangkat . "',
					jabatan='" . $jabatan . "',
					satker='" . $satker . "',
					kategori_pgw='" . $kategori_pgw . "',
					sidik_jari='" . $newsj . "',
					karpeg='" . $newkarpeg . "',
					taspen='" . $newtaspen . "',
					kk='" . $newkk . "',
					nik='" . $newnik . "',
					karis='" . $newkaris . "',
					npwp='" . $newnpwp . "',
					bpjs='" . $newbpjs . "',
					sim='" . $newsim . "',
					gaji='" . $newgaji . "',
					telp_emp='" . $telp_emp . "',
					telp2_emp='" . $telp2_emp . "',
					tmp_lahir='" . $tmp_lahir . "',
					tgl_lahir='" . $tgl_lahir . "',
					akte='" . $newakte . "',
					goldar='" . $goldar . "',
					agama='" . $agama . "',
					wrn_kulit='" . $wrn_kulit . "',
					wrn_rambut='" . $wrn_rambut . "',
					alamat='" . $alamat . "',
					alamat_ktp='" . $alamat_ktp . "',
					email_prbd='" . $email_prbd . "',
					email_dinas='" . $email_dinas . "',
					hak_akses='" . $hak_akses . "'
					WHERE npp='" . $npplama . "'";
				$ress = mysqli_query($conn, $sql);
				header("location: data_pegawai.php?act=update&msg=success");
			}
		} else {
			if ($cekfoto != "") {
				$foto = substr($_FILES["foto"]["name"], -5);
				$newfoto = "foto" . $npp . $foto;
				move_uploaded_file($_FILES["foto"]["tmp_name"], "foto/" . $newfoto);
				$sql = "UPDATE employee SET
						nama_emp='" . $nama . "',
						jk_emp='" . $jk . "',
						divisi='" . $divisi . "',
						pangkat='" . $pangkat . "',
						jabatan='" . $jabatan . "',
						satker='" . $satker . "',
						kategori_pgw='" . $kategori_pgw . "',
						telp_emp='" . $telp_emp . "',
						telp2_emp='" . $telp2_emp . "',
						tmp_lahir='" . $tmp_lahir . "',
						tgl_lahir='" . $tgl_lahir . "',
						goldar='" . $goldar . "',
						agama='" . $agama . "',
						wrn_kulit='" . $wrn_kulit . "',
						wrn_rambut='" . $wrn_rambut . "',
						alamat='" . $alamat . "',
						alamat_ktp='" . $alamat_ktp . "',
						email_prbd='" . $email_prbd . "',
						email_dinas='" . $email_dinas . "',
						hak_akses='" . $hak_akses . "',
						foto_emp='" . $newfoto . "'
						WHERE npp='" . $npplama . "'";
				$ress = mysqli_query($conn, $sql);
				header("location: data_pegawai.php?act=update&msg=success");
			} else {
				$sql = "UPDATE employee SET
						nama_emp='" . $nama . "',
						jk_emp='" . $jk . "',
						divisi='" . $divisi . "',
						pangkat='" . $pangkat . "',
						jabatan='" . $jabatan . "',
						satker='" . $satker . "',
						kategori_pgw='" . $kategori_pgw . "',
						telp_emp='" . $telp_emp . "',
						telp2_emp='" . $telp2_emp . "',
						tmp_lahir='" . $tmp_lahir . "',
						tgl_lahir='" . $tgl_lahir . "',
						goldar='" . $goldar . "',
						agama='" . $agama . "',
						wrn_kulit='" . $wrn_kulit . "',
						wrn_rambut='" . $wrn_rambut . "',
						alamat='" . $alamat . "',
						alamat_ktp='" . $alamat_ktp . "',
						email_prbd='" . $email_prbd . "',
						email_dinas='" . $email_dinas . "',
						hak_akses='" . $hak_akses . "'
						WHERE npp='" . $npplama . "'";
				$ress = mysqli_query($conn, $sql);
				header("location: data_pegawai.php?act=update&msg=success");
			}
		}
	}
}
