-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 03:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_siswa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `no_id` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `alamat_wali` text NOT NULL,
  `tgl_reg` varchar(100) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `no_hpwali` varchar(50) NOT NULL,
  `nama_atlet` varchar(150) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tingkat` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `foto_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`no_id`, `kelas`, `alamat_wali`, `tgl_reg`, `bb`, `tb`, `no_hp`, `ttl`, `no_hpwali`, `nama_atlet`, `nama_wali`, `jenis_kelamin`, `tingkat`, `ket`, `foto_siswa`) VALUES
(15, 'Datel', '530 km', '3', '3', '203 997 jiwa', '32.465', '25.134', '6.912', 'Pendidikan, Hotel, Wisata, Industri, Perkebunan, Pemerintahan', 'Indosat, XL, Biznet, First Media, MNC, MyRepublic', '', 'Batu', '', '20180930_130342_HDR.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa2`
--

CREATE TABLE `data_siswa2` (
  `no_id` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `alamat_wali` text NOT NULL,
  `tgl_reg` varchar(100) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `no_hpwali` varchar(50) NOT NULL,
  `nama_atlet` varchar(150) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tingkat` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `ketw` varchar(255) NOT NULL,
  `foto_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa2`
--

INSERT INTO `data_siswa2` (`no_id`, `kelas`, `alamat_wali`, `tgl_reg`, `bb`, `tb`, `no_hp`, `ttl`, `no_hpwali`, `nama_atlet`, `nama_wali`, `jenis_kelamin`, `tingkat`, `ket`, `ketw`, `foto_siswa`) VALUES
(24, 'Hero', 'Widya Galuh s/950444', 'HERO SGS-LWG', '12', '8', '15', '300', '1.8 M', '12.290', '9.665', '2.625', 'Batu', 'Black 69\r\nGreen 294\r\nYellow 297\r\nRed 811\r\n', 'First Media, My Republic', 'IMG-20200110-WA0006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `no_id` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `kepsek` varchar(100) NOT NULL,
  `nis_kepsek` varchar(100) NOT NULL,
  `wakil_kepsek` varchar(100) NOT NULL,
  `nis_wakil` varchar(100) NOT NULL,
  `logo_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`no_id`, `nama_sekolah`, `alamat_sekolah`, `no_tlp`, `kepsek`, `nis_kepsek`, `wakil_kepsek`, `nis_wakil`, `logo_sekolah`) VALUES
(1, 'Crisis Center Witel Malang', 'Jl.Ahmad Yani', '0341-1234', 'Dwi Wijayanto', '20203729', 'Suntari Waluyo', '20203729', 'telkom.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `idspp` int(11) NOT NULL,
  `idsiswa` text NOT NULL,
  `bulan` date NOT NULL,
  `keterangan` text NOT NULL,
  `tglbayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`idspp`, `idsiswa`, `bulan`, `keterangan`, `tglbayar`) VALUES
(8, '5', '2021-01-10', 'Lunas', '2021-10-29'),
(9, '5', '2021-02-10', 'Lunas', '2021-10-29'),
(10, '5', '2021-03-10', 'Lunas', '2021-10-29'),
(11, '5', '2021-04-10', 'Lunas', '2021-10-29'),
(12, '5', '2021-05-10', 'Lunas', '2021-10-29'),
(13, '5', '2021-06-10', 'Lunas', '2021-10-29'),
(14, '5', '2021-07-10', 'Lunas', '2021-10-31'),
(15, '9', '2021-01-10', 'Lunas', '2021-11-02'),
(16, '9', '2021-02-10', 'Lunas', '2021-11-02'),
(17, '9', '2021-03-10', 'Lunas', '2021-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `no_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`no_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `data_siswa2`
--
ALTER TABLE `data_siswa2`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`idspp`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_siswa2`
--
ALTER TABLE `data_siswa2`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `idspp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
