-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 12:43 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuis`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` int(8) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `jeniskelamin` varchar(4) DEFAULT NULL,
  `nomor` varchar(16) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `fb` varchar(64) DEFAULT NULL,
  `tempatkerja` varchar(64) DEFAULT NULL,
  `alamatkerja` varchar(64) DEFAULT NULL,
  `bidangusaha` varchar(64) DEFAULT NULL,
  `jabatan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `nama`, `jeniskelamin`, `nomor`, `email`, `fb`, `tempatkerja`, `alamatkerja`, `bidangusaha`, `jabatan`) VALUES
(1, 'coba', 'L', '085', '1@gmail.com', 'a', 'a', 'a', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensiduniakerja`
--

CREATE TABLE `kompetensiduniakerja` (
  `id` int(8) NOT NULL,
  `pengetahuanumum2` varchar(64) DEFAULT NULL,
  `pengetahuanteori2` varchar(64) DEFAULT NULL,
  `pengetahuanpraktis2` varchar(64) DEFAULT NULL,
  `bahasainggris2` varchar(64) DEFAULT NULL,
  `ilmudesain2` varchar(64) DEFAULT NULL,
  `programming2` varchar(64) DEFAULT NULL,
  `broadcasting2` varchar(64) DEFAULT NULL,
  `fav2` varchar(64) DEFAULT NULL,
  `lisan2` varchar(64) DEFAULT NULL,
  `laporan2` varchar(64) DEFAULT NULL,
  `kepemimpinan2` varchar(64) DEFAULT NULL,
  `organisasi2` varchar(64) DEFAULT NULL,
  `kerjasamatim2` varchar(64) DEFAULT NULL,
  `memecahkanmasalah2` varchar(64) DEFAULT NULL,
  `data2` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensiduniakerja`
--

INSERT INTO `kompetensiduniakerja` (`id`, `pengetahuanumum2`, `pengetahuanteori2`, `pengetahuanpraktis2`, `bahasainggris2`, `ilmudesain2`, `programming2`, `broadcasting2`, `fav2`, `lisan2`, `laporan2`, `kepemimpinan2`, `organisasi2`, `kerjasamatim2`, `memecahkanmasalah2`, `data2`) VALUES
(1, 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensisaatlulus`
--

CREATE TABLE `kompetensisaatlulus` (
  `id` int(8) NOT NULL,
  `pengetahuanumum` varchar(64) DEFAULT NULL,
  `pengetahuanteori` varchar(64) DEFAULT NULL,
  `pengetahuanpraktis` varchar(64) DEFAULT NULL,
  `bahasainggris` varchar(64) DEFAULT NULL,
  `ilmudesain` varchar(64) DEFAULT NULL,
  `programming` varchar(64) DEFAULT NULL,
  `broadcasting` varchar(64) DEFAULT NULL,
  `fav` varchar(64) DEFAULT NULL,
  `lisan` varchar(64) DEFAULT NULL,
  `laporan` varchar(64) DEFAULT NULL,
  `kepemimpinan` varchar(64) DEFAULT NULL,
  `organisasi` varchar(64) DEFAULT NULL,
  `kerjasamatim` varchar(64) DEFAULT NULL,
  `memecahkanmasalah` varchar(64) DEFAULT NULL,
  `data` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensisaatlulus`
--

INSERT INTO `kompetensisaatlulus` (`id`, `pengetahuanumum`, `pengetahuanteori`, `pengetahuanpraktis`, `bahasainggris`, `ilmudesain`, `programming`, `broadcasting`, `fav`, `lisan`, `laporan`, `kepemimpinan`, `organisasi`, `kerjasamatim`, `memecahkanmasalah`, `data`) VALUES
(1, 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting');

-- --------------------------------------------------------

--
-- Table structure for table `pengalamanbelajar`
--

CREATE TABLE `pengalamanbelajar` (
  `id` int(8) NOT NULL,
  `dikelas` varchar(64) DEFAULT NULL,
  `dilaboratorium` varchar(64) DEFAULT NULL,
  `diorganisasi` varchar(64) DEFAULT NULL,
  `diperusahaan` varchar(64) DEFAULT NULL,
  `dalampergaulan` varchar(64) DEFAULT NULL,
  `mandiri` varchar(64) DEFAULT NULL,
  `lingkunganmasyarakat` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalamanbelajar`
--

INSERT INTO `pengalamanbelajar` (`id`, `dikelas`, `dilaboratorium`, `diorganisasi`, `diperusahaan`, `dalampergaulan`, `mandiri`, `lingkunganmasyarakat`) VALUES
(1, 'Tidak Penting', 'Kurang Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting', 'Tidak Penting');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatpekerjaan`
--

CREATE TABLE `riwayatpekerjaan` (
  `id` int(8) NOT NULL,
  `aktivitassekarang` varchar(64) DEFAULT NULL,
  `berapalama` varchar(64) DEFAULT NULL,
  `sesuai` varchar(8) DEFAULT NULL,
  `xpindahkerja` varchar(32) DEFAULT NULL,
  `alasanpindah` varchar(128) DEFAULT NULL,
  `sempatmenganggur` varchar(64) DEFAULT NULL,
  `inginkerjalagi` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayatpekerjaan`
--

INSERT INTO `riwayatpekerjaan` (`id`, `aktivitassekarang`, `berapalama`, `sesuai`, `xpindahkerja`, `alasanpindah`, `sempatmenganggur`, `inginkerjalagi`) VALUES
(1, '', 'Kerja sebelum wisuda', 'Tidak', 'Sekali', 'Cari pengalaman / tantangan baru', 'Ya, Kurang dari 3 bulan', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatpendidikan`
--

CREATE TABLE `riwayatpendidikan` (
  `id` int(8) NOT NULL,
  `jenjang` varchar(4) DEFAULT NULL,
  `prodi` varchar(16) DEFAULT NULL,
  `tahunlulus` int(8) DEFAULT NULL,
  `lanjutstudi` varchar(8) DEFAULT NULL,
  `alasanya` varchar(128) DEFAULT NULL,
  `alasantidak` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayatpendidikan`
--

INSERT INTO `riwayatpendidikan` (`id`, `jenjang`, `prodi`, `tahunlulus`, `lanjutstudi`, `alasanya`, `alasantidak`) VALUES
(1, 'D4', 'Elka', 1990, 'Ya', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(8) NOT NULL,
  `satu` varchar(256) DEFAULT NULL,
  `dua` varchar(256) DEFAULT NULL,
  `tiga` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `satu`, `dua`, `tiga`) VALUES
(1, 'tes', 'aaa', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kompetensiduniakerja`
--
ALTER TABLE `kompetensiduniakerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kompetensisaatlulus`
--
ALTER TABLE `kompetensisaatlulus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalamanbelajar`
--
ALTER TABLE `pengalamanbelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayatpekerjaan`
--
ALTER TABLE `riwayatpekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayatpendidikan`
--
ALTER TABLE `riwayatpendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kompetensiduniakerja`
--
ALTER TABLE `kompetensiduniakerja`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kompetensisaatlulus`
--
ALTER TABLE `kompetensisaatlulus`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengalamanbelajar`
--
ALTER TABLE `pengalamanbelajar`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riwayatpekerjaan`
--
ALTER TABLE `riwayatpekerjaan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riwayatpendidikan`
--
ALTER TABLE `riwayatpendidikan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
