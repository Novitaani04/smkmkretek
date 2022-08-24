-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 11:30 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkmkretek`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `judul` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`judul`, `foto`, `tanggal`, `isi`) VALUES
('web ', 'web_.png', '2022-05-21', 'sssss'),
('front', 'front.png', '2022-05-23', 'srfrgfvfv');

-- --------------------------------------------------------

--
-- Table structure for table `carousell`
--

CREATE TABLE `carousell` (
  `id_carousell` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousell`
--

INSERT INTO `carousell` (`id_carousell`, `image`, `title`, `deskripsi`) VALUES
(1, 'assdsads.jpg', 'assdsads', 'aaaaa'),
(2, 'assdsads.jpg', 'assdsads', 'aaaaa'),
(3, 'sdadaaa.PNG', 'sdadaaa', 'adsadd');

-- --------------------------------------------------------

--
-- Table structure for table `extrakurikuler`
--

CREATE TABLE `extrakurikuler` (
  `id_extra` int(11) NOT NULL,
  `jenis_extra` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extrakurikuler`
--

INSERT INTO `extrakurikuler` (`id_extra`, `jenis_extra`, `foto`) VALUES
(2, 'atletik', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `status_kepegawaian` text NOT NULL,
  `passfoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `tempat`, `tanggal_lahir`, `mapel`, `alamat`, `jk`, `status_kepegawaian`, `passfoto`) VALUES
('009384', 'riana', 'bantul', '1998-05-13', 'b.ing', 'ngedangan', 'L', 'pns', '009384.png'),
('022345', 'win', 'wonosari', '1986-03-03', 'b.ing', 'wonosari', 'L', 'pns', '022345.png'),
('0777895', 'Kastowo', 'wonogiri', '1879-02-18', 'b.arab', 'wonogiri', 'L', 'honorer', '0777895.png'),
('089875678', 'Endah', 'bantul', '1990-03-31', 'mtk', 'kretek', 'P', 'pns', '089875678.png'),
('0987890', 'Tiva', 'yogyakarta', '1987-11-04', 'b.arab', 'serang', 'P', 'pns', '0987890.png'),
('0987890654', 'Cahyo', 'bantul', '1890-05-11', 'b.ing', 'wonogiri', 'L', 'pns', '0987890654.png'),
('19876567', 'Anggit', 'sleman', '1987-08-17', 'b.arab', 'sleman', 'L', 'pns', '19876567.png'),
('23456', 'nikma', 'bantul', '1999-12-11', 'b.indo', 'wonosari', 'P', 'honorer', '23456.png');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `foto`) VALUES
(7, 'akuntansi', 'akuntansi.png'),
(8, 'rpl', 'rpl.png'),
(9, 'tbsm', 'tbsm.png');

-- --------------------------------------------------------

--
-- Table structure for table `master_alumni`
--

CREATE TABLE `master_alumni` (
  `nama` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `angkatan` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `pekerjaan_sekarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_alumni`
--

INSERT INTO `master_alumni` (`nama`, `foto`, `jk`, `angkatan`, `tahun_lulus`, `pekerjaan_sekarang`) VALUES
('Novita ', 'Novita_.png', 'P', 2013, 2018, 'pengusaha'),
('siwi', 'siwi.png', 'P', 2015, 2023, 'pengusaha');

-- --------------------------------------------------------

--
-- Table structure for table `master_siswa`
--

CREATE TABLE `master_siswa` (
  `nik` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `passfoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_siswa`
--

INSERT INTO `master_siswa` (`nik`, `nama_siswa`, `jk`, `jurusan`, `alamat`, `passfoto`) VALUES
(12345, 'dimas bayu', 'L', 'tkj', 'surabaya', 'placeholder.jpg'),
(4124135, 'dimas ', 'L', 'tkj', 'bandung', '4124135.png');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `nama`, `foto`) VALUES
(3, 'PRAMUKA', '3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousell`
--
ALTER TABLE `carousell`
  ADD PRIMARY KEY (`id_carousell`);

--
-- Indexes for table `extrakurikuler`
--
ALTER TABLE `extrakurikuler`
  ADD PRIMARY KEY (`id_extra`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `master_alumni`
--
ALTER TABLE `master_alumni`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `master_siswa`
--
ALTER TABLE `master_siswa`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousell`
--
ALTER TABLE `carousell`
  MODIFY `id_carousell` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `extrakurikuler`
--
ALTER TABLE `extrakurikuler`
  MODIFY `id_extra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
