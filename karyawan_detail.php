<!-- Printing -->
<link rel="stylesheet" href="css/printing.css">

<?php
include("sess_check.php");
include("dist/function/format_tanggal.php");
if ($_GET) {
	$kode = $_GET['code'];
	$sql = "SELECT * FROM employee WHERE npp='" . $_GET['code'] . "'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query);
} else {
	echo "Nomor Transaksi Tidak Terbaca";
	exit;
}
?>
<html>

<head>
</head>

<body>
	<div id="section-to-print">
		<div id="only-on-print">
		</div>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title" id="myModalLabel">File Cuti <?= $result['nama_emp'] ?> </h4>
		</div>
		<div><br />
			<table width="100%">
				<?php
				$Sql = "SELECT * FROM `cuti` WHERE npp=" . $result['npp'];
				$Qry = mysqli_query($conn, $Sql);
				$i = 1;
				while ($data = mysqli_fetch_array($Qry)) {
					// var_dump($data['tgl_pengajuan']);
					echo '<tr><td width="20%"><b>' . $i . '</b>&nbsp; &nbsp; ' . $data['tgl_pengajuan'] . ' </td>';
					echo '<td width="2%"><b>:</b></td>';
					echo '<td><a align="left" href="downloadcuti.php?file=' . $result['npp'] . $data['file_cuti'] . '">' . $data['file_cuti'] . '</a></td>';
					$i++;
				};


				?>
			</table>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

</body>

</html>