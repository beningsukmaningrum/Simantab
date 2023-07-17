<?php
include("sess_check.php");

$id = $sess_pegawaiid;


// deskripsi halaman
$pagedesc = "Beranda";
include("layout_top.php");
include("dist/function/format_rupiah.php");
?>
<!-- top of file -->
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<form class="form-horizontal">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 align="center">Selamat Datang, <?php echo $res['nama_emp']; ?>!</h2>
							<hr />
							<center><img src="../foto/<?php echo $res['foto_emp'] ?>" width="120px"></center>
							<hr />
						</div>
					</div><!-- /.panel -->
				</form>
			</div><!-- /.col-lg-12 -->
		</div><!-- /.row -->



	</div><!-- /.row -->

</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
include("layout_bottom.php");
?>