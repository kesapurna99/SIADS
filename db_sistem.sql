-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 01:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disposisi`
--

CREATE TABLE `tbl_disposisi` (
  `id_disposisi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `indeks` int(10) NOT NULL,
  `klasifikasi` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kode` int(26) NOT NULL,
  `tgl_penyelesaian` date NOT NULL,
  `tgl_buat` date NOT NULL,
  `nomor_surat` varchar(16) NOT NULL,
  `dari` varchar(16) NOT NULL,
  `ringkasan_isi` text NOT NULL,
  `disposisi_kakanim` text NOT NULL,
  `diteruskan_kepada` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `status_kepala_kantor` tinyint(1) NOT NULL DEFAULT 0,
  `status_kepala_seksi` tinyint(1) NOT NULL DEFAULT 0,
  `status_kasubag_tu` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `tbl_disposisi`
--
DELIMITER $$
CREATE TRIGGER `status_disposisi` AFTER INSERT ON `tbl_disposisi` FOR EACH ROW BEGIN
UPDATE tbl_surat_masuk 
SET status_disposisi = 1
where nomor_surat = New.nomor_surat
;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendali_surat`
--

CREATE TABLE `tbl_kendali_surat` (
  `no_urut` int(10) NOT NULL,
  `jenis_surat` varchar(16) NOT NULL,
  `nomor_surat` int(10) NOT NULL,
  `indeks` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `pengolah` text NOT NULL,
  `catatan` text NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `dari` text NOT NULL,
  `kepada` text NOT NULL,
  `isi_ringkasan` text NOT NULL,
  `lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kendali_surat`
--

INSERT INTO `tbl_kendali_surat` (`no_urut`, `jenis_surat`, `nomor_surat`, `indeks`, `tanggal`, `pengolah`, `catatan`, `klasifikasi`, `kode`, `dari`, `kepada`, `isi_ringkasan`, `lampiran`) VALUES
(1, '', 1, 1, '2022-09-07', 'Gamalama', 'asd', 'PR.05', 'W11.IMI.IMI.3', 'Kantor imigrasi', 'dinas parisiwata', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `nomor_surat` int(10) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `lampiran` text NOT NULL,
  `perihal` text NOT NULL,
  `tgl` date NOT NULL,
  `dari` varchar(16) NOT NULL,
  `kepada` text NOT NULL,
  `isi_surat` text NOT NULL,
  `status_disposisi` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template`
--

CREATE TABLE `tbl_template` (
  `id_template` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `no_urut` int(10) NOT NULL,
  `jenis_surat` varchar(16) NOT NULL,
  `nomor_surat` int(12) NOT NULL,
  `lampiran` text NOT NULL,
  `perihal` text NOT NULL,
  `tgl` date NOT NULL,
  `dari` text NOT NULL,
  `kepada` text NOT NULL,
  `isi_surat` text NOT NULL,
  `status_kepala_seksi` tinyint(3) NOT NULL DEFAULT 0,
  `status_kepala_kantor` tinyint(3) NOT NULL DEFAULT 0,
  `status_kasubag_tu` tinyint(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tindak_lanjut_surat_masuk`
--

CREATE TABLE `tbl_tindak_lanjut_surat_masuk` (
  `id_tanggapan` int(10) NOT NULL,
  `id_disposisi` int(10) NOT NULL,
  `nomor_surat` int(10) NOT NULL,
  `perihal` text NOT NULL,
  `isi_ringkasan` varchar(255) NOT NULL,
  `dibuat_oleh` varchar(16) NOT NULL,
  `kepada` text NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `lampiran` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `tbl_tindak_lanjut_surat_masuk`
--
DELIMITER $$
CREATE TRIGGER `edit_status` AFTER INSERT ON `tbl_tindak_lanjut_surat_masuk` FOR EACH ROW BEGIN
update tbl_disposisi
SET status = 1
WHERE nomor_surat = NEW.nomor_surat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `NIP` int(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `jabatan` text NOT NULL,
  `divisi` text NOT NULL,
  `hak_akses` int(5) DEFAULT NULL,
  `paraf` text NOT NULL,
  `qr_code` text NOT NULL,
  `log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `NIP`, `password`, `nama`, `jenis_kelamin`, `ttl`, `no_hp`, `alamat`, `jabatan`, `divisi`, `hak_akses`, `paraf`, `qr_code`, `log`) VALUES
(12, 222, '222', 'aji masaid', 'P', 'asdasd', '0000000234234', 'fsdfasdfddfd', 'kepala', 'StaffTu', 2, '4235424323423.png', '4235424323423QR.png', '2022-09-06 23:45:05'),
(14, 76575, '76575', 'hj agus salim', 'L', 'bogor, 25-01-01', '08656423423', 'sdfsadf', 'Kepala Seksi', 'ff', 4, '76575.png', '76575QR.png', '2022-09-06 23:45:05'),
(15, 777, '777', 'gamalama', 'P', 'bogor, 25223234', '0000234234234', 'sukabumi', 'Staff', 'ff', 5, '777.png', '777QR.png', '2022-09-06 23:45:05'),
(16, 111, '111', 'Hj. Asep arifin ilham', 'L', 'bogor, 25223234', '0000000007456', 'bogor', 'Kepala kantor', 'ff', 1, '111.png', '111QR.png', '2022-09-06 23:45:05'),
(17, 333, '333', 'ridwan hidayat cuco', 'L', 'sukabumi ', '0004294967295', 'bogor', 'Staff', 'ff', 3, '333.png', '333QR.png', '2022-09-06 23:45:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD UNIQUE KEY `tgl/nomor_surat` (`nomor_surat`);

--
-- Indexes for table `tbl_kendali_surat`
--
ALTER TABLE `tbl_kendali_surat`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `Nomor_Surat` (`nomor_surat`);

--
-- Indexes for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`nomor_surat`),
  ADD KEY `Id_User` (`id_user`);

--
-- Indexes for table `tbl_template`
--
ALTER TABLE `tbl_template`
  ADD PRIMARY KEY (`id_template`),
  ADD UNIQUE KEY `Nomor_Surat` (`nomor_surat`);

--
-- Indexes for table `tbl_tindak_lanjut_surat_masuk`
--
ALTER TABLE `tbl_tindak_lanjut_surat_masuk`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `Nomor_Surat` (`nomor_surat`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_disposisi`
--
ALTER TABLE `tbl_disposisi`
  MODIFY `id_disposisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_kendali_surat`
--
ALTER TABLE `tbl_kendali_surat`
  MODIFY `no_urut` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `nomor_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_template`
--
ALTER TABLE `tbl_template`
  MODIFY `id_template` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_tindak_lanjut_surat_masuk`
--
ALTER TABLE `tbl_tindak_lanjut_surat_masuk`
  MODIFY `id_tanggapan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
