<?php
include("sess_check.php");

$npp	= $_SESSION['pegawai'];
$ajuan = date('Y-m-d');

$cekcuti = $_FILES["file_cuti"]["name"];



$id = date('dmYHis');

$pgw = "SELECT * FROM employee WHERE npp='$npp'";
$qpgw = mysqli_query($conn, $pgw);
$ress = mysqli_fetch_array($qpgw);


if ($cekcuti != "") {
	$upfile_cuti = $_FILES["file_cuti"]["name"];
	$sj = "file_cuti" . $npp . $upfile_cuti;
	move_uploaded_file($_FILES["file_cuti"]["tmp_name"], "file_cuti/" . $sj);
	$sql = "INSERT INTO cuti (no_cuti, npp, tgl_pengajuan, file_cuti) VALUES (
		'$id','$npp','$ajuan', '$upfile_cuti')";

	$query 	= mysqli_query($conn, $sql);
	if ($query) {
		echo "<script type='text/javascript'>
				alert('Pengajuan cuti berhasil!'); 
				document.location = 'cuti_app.php'; 
			</script>";
	} else {
		echo "<script type='text/javascript'>
				alert('Terjadi kesalahan, silahkan coba lagi!.'); 
				document.location = 'cuti_create.php'; 
			</script>";
	}
} else {
	echo "<script type='text/javascript'>
			alert('Gagal Upload.'); 
			document.location = 'cuti_create.php'; 
		</script>";
}
