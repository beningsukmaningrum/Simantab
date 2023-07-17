<?php
include("sess_check.php");

$id = $sess_pegawaiid;


// deskripsi halaman
$pagedesc = "Beranda";
include("layout_top.php");
include("dist/function/format_rupiah.php");
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Karyawan</h1>
                <form class="form-horizontal">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a href="pegawai_edit.php" class="btn btn-warning">Edit</a>
                                        </div>
                                        <center><img src="../foto/<?php echo $res['foto_emp'] ?>" width="120px">
                                        </center>
                                        <hr />
                                        <td>
                                            <h2 align="center"><b>Data Pribadi</b></h2>
                                        </td>
                                        <table>
                                            <tr>
                                                <td align="right" width="300">
                                                    <h4>Nama</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['nama_emp']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Bidang</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['divisi']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Pangkat/Gol</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['pangkat']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Jabatan</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['jabatan']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Satuan Kerja</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['satker']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Kategori Pegawai</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['kategori_pgw']; ?></h4>
                                                </td>
                                            </tr>

                                        </table>
                                        <hr />
                                        <table>
                                            <tr>
                                                <td align="right" width="300">
                                                    <h4>Sidik Jari</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadsj.php?file=<?= $res['sidik_jari'] ?>"><?= $res['sidik_jari'] ?></a></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Karpeg/KTA</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadkarpeg.php?file=<?= $res['karpeg'] ?>"><?= $res['karpeg'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Kartu Taspen/Asabri</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadtaspen.php?file=<?= $res['taspen'] ?>"><?= $res['taspen'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Kartu Keluarga</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadkk.php?file=<?= $res['kk'] ?>"><?= $res['kk'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>NIK</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadnik.php?file=<?= $res['nik'] ?>"><?= $res['nik'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Karis/Karsu/KPI/KPS</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadkaris.php?file=<?= $res['karis'] ?>"><?= $res['karis'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>NPWP</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadnpwp.php?file=<?= $res['npwp'] ?>"><?= $res['npwp'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>BPJS</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadbpjs.php?file=<?= $res['bpjs'] ?>"><?= $res['bpjs'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>SIM</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadsim.php?file=<?= $res['sim'] ?>"><?= $res['sim'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Reg. Gaji (BRI)</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadgaji.php?file=<?= $res['gaji'] ?>"><?= $res['gaji'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>No Telepon 1</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['telp_emp']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>No Telepon 2</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['telp2_emp']; ?></h4>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr />
                                        <table>
                                            <tr>
                                                <td align="right" width="300">
                                                    <h4>Tempat Lahir</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['tmp_lahir']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Tanggal Lahir</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['tgl_lahir']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Akte Lahir</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <a align="left" href="downloadakte.php?file=<?= $res['akte'] ?>"><?= $res['akte'] ?></a></h4>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Jenis Kelamin</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['jk_emp']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Golongan Darah</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['goldar']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Agama</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['agama']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Warna Kulit</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['wrn_kulit']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Warna Rambut</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['wrn_rambut']; ?></h4>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr />
                                        <table>
                                            <tr>
                                                <td align="right" width="300">
                                                    <h4>Alamat Domisili</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['alamat']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Alamat KTP</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['alamat_ktp']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Email Pribadi</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['email_prbd']; ?></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right" width="200">
                                                    <h4>Email Dinas</h4>
                                                </td>
                                                <td width="80"></td>
                                                <td>
                                                    <h4>: <?php echo $res['email_dinas']; ?></h4>
                                                </td>
                                            </tr>
                                        </table>
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