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
            <h4 class="modal-title" id="myModalLabel">Detail Karyawan</h4>
        </div>
        <div><br />
            <table width="100%">
                <?php
                // var_dump($result); die;
                ?>
                <tr>
                    <td width="20%"><b>NPP</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['npp']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Nama</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['nama_emp']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Bidang</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['divisi']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Pangkat / Gol</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['pangkat']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Jabatan</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['jabatan']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Satuan Kerja</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['satker']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Kategori Pegawai</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['kategori_pgw']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Sidik Jari</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadsj.php?file=<?= $result['sidik_jari'] ?>"><?= $result['sidik_jari'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Karpeg</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadkarpeg.php?file=<?= $result['karpeg'] ?>"><?= $result['karpeg'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Kartu Taspen/Asabri</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadtaspen.php?file=<?= $result['taspen'] ?>"><?= $result['taspen'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Kartu Keluarga</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadkk.php?file=<?= $result['kk'] ?>"><?= $result['kk'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>NIK</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadnik.php?file=<?= $result['nik'] ?>"><?= $result['nik'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Karis/Karsu/KPI/KPS</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadkaris.php?file=<?= $result['karis'] ?>"><?= $result['karis'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>NPWP</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadnpwp.php?file=<?= $result['npwp'] ?>"><?= $result['npwp'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>BPJS</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadbpjs.php?file=<?= $result['bpjs'] ?>"><?= $result['bpjs'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>SIM</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadsim.php?file=<?= $result['sim'] ?>"><?= $result['sim'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Reg. Gaji (BRI)</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadgaji.php?file=<?= $result['gaji'] ?>"><?= $result['gaji'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>No Telepon 1</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['telp_emp']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>No Telepon 2</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['telp2_emp']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Akte Lahir</b></td>
                    <td width="2%"><b>:</b></td>
                    <td> <a align="left" href="<?php echo strtolower($result['hak_akses']); ?>/downloadakte.php?file=<?= $result['akte'] ?>"><?= $result['akte'] ?></a></td>
                    <td width="78%"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Jenis Kelamin</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['jk_emp']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Golongan Darah</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['goldar']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Agama</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['agama']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Warna Kulit</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['wrn_kulit']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Warna Rambut</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['wrn_rambut']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Alamat Domisili</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['alamat']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Alamat KTP</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['alamat_ktp']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Email Pribadi</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['email_prbd']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Email Dinas</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php echo $result['email_dinas']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Hak Akses</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><b><?php echo $result['hak_akses']; ?></b></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Aktif</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><?php
                                    if ($result['active'] == 1) {
                                        echo "Ya";
                                    } else {
                                        echo "Tidak";
                                    }
                                    ?></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td width="20%"><b>Foto</b></td>
                    <td width="2%"><b>:</b></td>
                    <td width="78%"><img src="foto/<?php echo $result['foto_emp']; ?>" width="70px"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</body>

</html>