<?php
include("sess_check.php");

// query database memperbarui data pada database

$npp = $_POST['npplama'];

$sqlcek = "SELECT * FROM employee WHERE npp='$npp'";
$ress = mysqli_query($conn, $sqlcek);
$rows = mysqli_fetch_array($ress);

// ambil data dari database

$npp = $rows['npp'];
$nama = $rows['nama_emp'];
$divisi = $rows['divisi'];
$jml = $rows[''];
$jk = $rows['jk_emp'];
$pangkat = $rows['pangkat'];
$jabatan = $rows['jabatan'];
$satker = $rows['satker'];
$kategori_pgw = $rows['kategori_pgw'];
$telp_emp = $rows['telp_emp'];
$telp2_emp = $rows['telp2_emp'];
$tmp_lahir = $rows['tmp_lahir'];
$tgl_lahir = $rows['tgl_lahir'];
$goldar = $rows['goldar'];
$agama = $rows['agama'];
$wrn_kulit = $rows['wrn_kulit'];
$wrn_rambut = $rows['wrn_rambut'];
$alamat = $rows['alamat'];
$alamat_ktp = $rows['alamat_ktp'];
$email_prbd = $rows['email_prbd'];
$email_dinas = $rows['email_dinas'];
$hak_akses = $rows['hak_akses'];

//file dari database
$sj = $rows['sidik_jari'];
$karpeg = $rows['karpeg'];
$taspen = $rows['taspen'];
$kk = $rows['kk'];
$nik = $rows['nik'];
$karis = $rows['karis'];
$npwp = $rows['npwp'];
$bpjs = $rows['bpjs'];
$sim = $rows['sim'];
$gaji = $rows['gaji'];
$foto = $rows['foto_emp'];
$akte = $rows['akte'];


//buat memperbaruhi data

if (isset($_POST['perbarui'])) {
	// $npplama = $_POST['npplama'];
	$npp = $_POST['npplama'];
	$nama = $_POST['nama'];
	$divisi = $_POST['divisi'];
	$jml = $_POST['jml'];
	$jk = $_POST['jk'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$satker = $_POST['satker'];
	$kategori_pgw = $_POST['kategori_pgw'];
	$telp_emp = $_POST['telp_emp'];
	$telp2_emp = $_POST['telp2_emp'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$goldar = $_POST['goldar'];
	$agama = $_POST['agama'];
	$wrn_kulit = $_POST['wrn_kulit'];
	$wrn_rambut = $_POST['wrn_rambut'];
	$alamat = $_POST['alamat'];
	$alamat_ktp = $_POST['alamat_ktp'];
	$email_prbd = $_POST['email_prbd'];
	$email_dinas = $_POST['email_dinas'];
	$hak_akses = $_POST['hak_akses'];

	//files
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
	$cekfoto = $_FILES["foto"]["name"];
	$cekakte = $_FILES["akte"]["name"];

	// if ($rows < 2) {
	if ($ceksj != "") {
		$upsidik_jari = $_FILES["sidik_jari"]["name"];
		$sj = "sidik_jari" . $npp . $upsidik_jari;
		var_dump($upsidik_jari);
		move_uploaded_file($_FILES["sidik_jari"]["tmp_name"], "sidik_jari/" . $sj);
	}
	if ($cekkarpeg != "") {
		$upkarpeg = $_FILES["karpeg"]["name"];
		$karpeg = "karpeg" . $npp . $upkarpeg;
		move_uploaded_file($_FILES["karpeg"]["tmp_name"], "karpeg/" . $karpeg);
	}
	if ($cektaspen != "") {
		$uptaspen = $_FILES["taspen"]["name"];
		$taspen = "taspen" . $npp . $uptaspen;
		move_uploaded_file($_FILES["taspen"]["tmp_name"], "taspen/" . $taspen);
	}
	if ($cekkk != "") {
		$upkk = $_FILES["kk"]["name"];
		$kk = "kk" . $npp . $upkk;
		move_uploaded_file($_FILES["kk"]["tmp_name"], "kk/" . $kk);
	}
	if ($ceknik != "") {
		$upnik = $_FILES["nik"]["name"];
		$nik = "nik" . $npp . $upnik;
		move_uploaded_file($_FILES["nik"]["tmp_name"], "nik/" . $nik);
	}
	if ($cekkaris != "") {
		$upkaris = $_FILES["karis"]["name"];
		$karis = "karis" . $npp . $upkaris;
		move_uploaded_file($_FILES["karis"]["tmp_name"], "karis/" . $karis);
	}
	if ($ceknpwp != "") {
		$upnpwp = $_FILES["npwp"]["name"];
		$npwp = "npwp" . $npp . $upnpwp;
		move_uploaded_file($_FILES["npwp"]["tmp_name"], "npwp/" . $npwp);
	}
	if ($cekbpjs != "") {
		$upbpjs = $_FILES["bpjs"]["name"];
		$bpjs = "bpjs" . $npp . $upbpjs;
		move_uploaded_file($_FILES["bpjs"]["tmp_name"], "bpjs/" . $bpjs);
	}
	if ($ceksim != "") {
		$upsim = $_FILES["sim"]["name"];
		$sim = "sim" . $npp . $upsim;
		move_uploaded_file($_FILES["sim"]["tmp_name"], "sim/" . $sim);
	}
	if ($cekgaji != "") {
		$upgaji = $_FILES["gaji"]["name"];
		$gaji = "gaji" . $npp . $upgaji;
		move_uploaded_file($_FILES["gaji"]["tmp_name"], "gaji/" . $gaji);
	}
	if ($cekakte != "") {
		$upakte = $_FILES["akte"]["name"];
		$akte = "akte" . $npp . $upakte;
		move_uploaded_file($_FILES["akte"]["tmp_name"], "akte/" . $akte);
	}
	if ($cekfoto != "") {
		$upfoto = $_FILES["foto"]["name"];
		$foto = "foto" . $npp . $upfoto;
		move_uploaded_file($_FILES["foto"]["tmp_name"], "foto/" . $foto);
	}
	$sql = "UPDATE employee SET
					npp='" . $npp . "',
					nama_emp='" . $nama . "',
					jk_emp='" . $jk . "',
					divisi='" . $divisi . "',
					pangkat='" . $pangkat . "',
					jabatan='" . $jabatan . "',
					satker='" . $satker . "',
					kategori_pgw='" . $kategori_pgw . "',
					sidik_jari='" . $sj . "',
					karpeg='" . $karpeg . "',
					taspen='" . $taspen . "',
					kk='" . $kk . "',
					nik='" . $nik . "',
					karis='" . $karis . "',
					npwp='" . $npwp . "',
					bpjs='" . $bpjs . "',
					sim='" . $sim . "',
					gaji='" . $gaji . "',
					telp_emp='" . $telp_emp . "',
					telp2_emp='" . $telp2_emp . "',
					tmp_lahir='" . $tmp_lahir . "',
					tgl_lahir='" . $tgl_lahir . "',
					akte='" . $akte . "',
					goldar='" . $goldar . "',
					agama='" . $agama . "',
					wrn_kulit='" . $wrn_kulit . "',
					wrn_rambut='" . $wrn_rambut . "',
					alamat='" . $alamat . "',
					alamat_ktp='" . $alamat_ktp . "',
					email_prbd='" . $email_prbd . "',
					email_dinas='" . $email_dinas . "',
					hak_akses='" . $hak_akses . "',
					foto_emp='" . $foto . "'
					WHERE npp='" . $npp . "'";
	
	$ress = mysqli_query($conn, $sql);
	header("location: data_pegawai.php?act=update&msg=success");
	// }
}
// }
