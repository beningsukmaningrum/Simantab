-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 02:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_simantab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_adm` int(11) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `telp_adm` varchar(15) NOT NULL,
  `user_adm` varchar(50) NOT NULL,
  `pass_adm` varchar(100) NOT NULL,
  `foto_adm` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `telp_adm`, `user_adm`, `pass_adm`, `foto_adm`) VALUES
(1, 'Administrator', '08962878534', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
  `no_cuti` varchar(30) NOT NULL,
  `npp` varchar(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `file_cuti` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`no_cuti`, `npp`, `tgl_pengajuan`, `file_cuti`) VALUES
('12112021194159', '4444', '2021-11-12', 'eeee.pdf'),
('12112021194542', '4444', '2021-11-12', 'eeee.pdf'),
('12112021194823', '4444', '2021-11-12', 'Paper UAS IOT.pdf'),
('12112021194842', '4444', '2021-11-12', 'eeee.pdf'),
('12112021194900', '4444', '2021-11-12', 'SURAT PERSETUJUAN ORANGTUA.pdf'),
('12112021195837', '2222', '2021-11-12', 'eeee.pdf'),
('12112021200952', '2222', '2021-11-12', 'eeee.pdf'),
('12112021201011', '2222', '2021-11-12', 'SURAT PERSETUJUAN MAHASISWA.pdf'),
('12112021202144', '1111', '2021-11-12', 'M15_SPK_Fuzzy Sugeno.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `npp` varchar(20) NOT NULL,
  `nama_emp` varchar(100) NOT NULL,
  `jk_emp` varchar(20) NOT NULL,
  `telp_emp` varchar(20) NOT NULL,
  `telp2_emp` varchar(25) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `pangkat` varchar(25) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `satker` varchar(25) NOT NULL,
  `kategori_pgw` varchar(25) NOT NULL,
  `sidik_jari` varchar(150) NOT NULL,
  `karpeg` varchar(150) NOT NULL,
  `taspen` varchar(150) NOT NULL,
  `kk` varchar(150) NOT NULL,
  `nik` varchar(150) NOT NULL,
  `karis` varchar(150) NOT NULL,
  `npwp` varchar(150) NOT NULL,
  `bpjs` varchar(150) NOT NULL,
  `sim` varchar(150) NOT NULL,
  `gaji` varchar(150) NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `akte` varchar(150) NOT NULL,
  `goldar` varchar(25) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `wrn_kulit` varchar(25) NOT NULL,
  `wrn_rambut` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_ktp` varchar(25) NOT NULL,
  `email_prbd` varchar(25) NOT NULL,
  `email_dinas` varchar(25) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `jml_cuti` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto_emp` text NOT NULL,
  `active` varchar(20) NOT NULL,
  `id_adm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`npp`, `nama_emp`, `jk_emp`, `telp_emp`, `telp2_emp`, `divisi`, `pangkat`, `jabatan`, `satker`, `kategori_pgw`, `sidik_jari`, `karpeg`, `taspen`, `kk`, `nik`, `karis`, `npwp`, `bpjs`, `sim`, `gaji`, `tmp_lahir`, `tgl_lahir`, `akte`, `goldar`, `agama`, `wrn_kulit`, `wrn_rambut`, `alamat`, `alamat_ktp`, `email_prbd`, `email_dinas`, `hak_akses`, `jml_cuti`, `password`, `foto_emp`, `active`, `id_adm`) VALUES
('0002', 'Brama Tri Yoga AL. S.I.Kom', 'Perempuan', '08139212092554', '08765444343', 'Subbag Umum', 'III/c', 'Kasubbag Umum', 'BNN Kabupaten Malang', 'Diperbatukan(TNI/POLRI)', 'sidik_jari7.pdf', 'karpeg3.pdf', '', '', '', '', '', '', '', '', 'Malang', '2021-09-01', '', 'A', 'Hindu', 'coklat', 'hitam', 'Permanu', 'Ngawi', 'bramatriyoga@gmail.com', 'brama.tri@bnn.go.id', 'Pegawai', 365, '0002', 'foto100w.png', 'Aktif', 1),
('1111', 'megan', 'Perempuan', '465845327', '864868468', 'tukang overthingking', 'presiden', 'Tukang Tidurr', 'penggaguran', 'Organik', 'sidik_jari1111M15_SPK_Fuzzy Sugeno.pdf', 'karpeg1111SURAT PERSETUJUAN ORANGTUA.pdf', 'taspen1111M15_SPK_Mamdani.pdf', 'kk1111eeee.pdf', 'nik1111eeee.pdf', '', '', 'bpjs1111Paper UAS IOT.pdf', '', '', 'mataram', '2021-11-02', '', 'B', 'Islam', 'hitam', 'coklat', 'sdrtfhyukl', 'ygujfdhrtdhn', 'bening@gmail.com', 'bening@bnn.co', 'Pegawai', 0, '1111', 'foto1111.jpeg', 'Aktif', 1),
('2222', 'Sukma ', 'Perempuan', '084125882', '84658456', 'Konsumsi lagi', 'presiden', 'Tukang Tidur', 'penggaguran', 'Diperbatukan(TNI/POLRI)', 'sidik_jari2222eeee.pdf', 'karpeg2222eeee.pdf', 'taspen2222eeee.pdf', 'kk2222eeee.pdf', '', '', 'npwp2222eeee.pdf', '', 'sim2222eeee.pdf', '', 'sampit tengah', '2021-11-15', '', 'B', 'Hindu', 'hitam', 'hitam', 'dfghnjk,l;', 'dfghnbhhh', 'bening@gmail.com', 'bening@bnn.co', 'Pegawai', 0, '2222', 'foto2222.jpeg', 'Aktif', 1),
('4444', 'Sehun', 'Laki-Laki', '083851180437', '02582058', 'beban', 'presiden', 'Mahasiswa', 'penggaguran', 'Diperbatukan(TNI/POLRI)', 'sidik_jari4444eeee.pdf', 'karpeg4444eeee.pdf', 'taspen4444eeee.pdf', 'kk4444eeee.pdf', 'nik4444eeee.pdf', 'karis4444eeee.pdf', 'npwp4444eeee.pdf', 'bpjs4444eeee.pdf', 'sim4444eeee.pdf', 'gaji4444eeee.pdf', 'sampit', '2021-11-02', 'akte4444eeee.pdf', 'B', 'Islam', 'hitam', 'coklat', 'okayyy', 'etryuhjikolp;[', 'bening@gmail.com', 'bening@bnn.co', 'Pegawai', 0, '4444', 'foto4444.jpeg', 'Aktif', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
 ADD PRIMARY KEY (`no_cuti`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`npp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
