-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 11:43 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul`, `visi`, `misi`) VALUES
(1, 'VISI DAN MISI', '"MEBENTUK GENERASI PEMBELAJAR YANG BERTAQWA,BERAKHLAQ MULIA,KREATIF DAN TERAMPIL,BERJIWA WIRAUSAHA,SIAP MENJADI KADER MUHAMMADIYAH DAN BANGSA SERTA SIAGA BENCANA"', '<ol><li>Menanamkan pola pikir belajar sepanjang hayat pada setiap kegiatan peserta didik</li><li><span style="font-size: 1rem;">Menambahkan nilai-nilai islami dan ulkarimah pada setiap perikehidupan peserta didik</span></li><li>Menumbuhkembangkan akhlak mulia pada proses pembelajaran dan pada kegiatan peserta didik </li><li>Memberikan bekal keterampilan sejalan dengan perkembangan ilmu pengetahuan dan teknologi serta tuntutan dunia kerja </li><li>Menjalin kerjasama dengan IDUKA untuk terciptanya link and match antara sekolah dengan IDUKA</li><li>Mengembangkan kegiatanyang menumbuhan kreativitasdan jiwa usaha peserta didik </li><li>Menanamkan jiwa nasionalisme  dalam semua kegiatan peserta didik </li><li>Memberikan kompetensi kebencanaan sebagai bekal bagi warga sekolah untuk antisipasi dan pengamanan ketika terjadi bencana </li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `foto`, `tanggal`, `isi`) VALUES
(4, 'PPSB', 'PPSB.png', '2022-07-11', 'PPSB adalah penerimaan siswa baru yang di lakukan secara rutin oleh setiap tahun ajaran baru di smk mkretek'),
(5, 'Laporan PTS', 'Laporan_PTS.png', '2022-07-19', 'Laporan PTS akhir tahun di sampaikan kepada orang tua siswa agar mengetahui kemampuan siswa');

-- --------------------------------------------------------

--
-- Table structure for table `carousell`
--

CREATE TABLE `carousell` (
  `id_carousell` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousell`
--

INSERT INTO `carousell` (`id_carousell`, `foto`, `judul`, `deskripsi`) VALUES
(13, '13.png', 'PSB', 'pendaftaran siswa baru'),
(15, '15.png', 'Siap', 'Mengantarkan Menuju kesuksesan'),
(16, '16.png', 'SMKMKRETEK', 'smk muhammadiyah kretek');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `alamat`, `telepon`, `email`) VALUES
(2, 'Tegalsari,Donotirto,Kretek,Bantul', '081804300550', 'novitafit364@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `extrakurikuler`
--

CREATE TABLE `extrakurikuler` (
  `id_extra` int(11) NOT NULL,
  `jenis_extra` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extrakurikuler`
--

INSERT INTO `extrakurikuler` (`id_extra`, `jenis_extra`, `foto`, `deskripsi`) VALUES
(10, 'Tapak Suci', '10.png', 'HW adalah sistem pendidikan untuk anak, remaja, dan pemuda di luar lingkungan keluarga dan sekolah bersifat nasional, artinya ruang lingkup usaha HW meliputi seluruh wilayah Negara Kesatuan Repulik Indonesia.'),
(11, 'Tapak Suci', '11.png', 'Tapak Suci Putera Muhammadiyah atau biasa kita kenal dengan sebutan Tapak Suci merupakan sebuah aliran beladiri yang berada di bawah naungan organisai Muhammadiyah. Yang merupakan salah satu dari organisasi islam terbesar yang berada di Indonesia.'),
(14, 'Tilawah', '.png', 'Tilawah adalah salah satu istilah yang digunakan dalam mempelajari ilmu Al Quran. Secara umum, tilawah dikenal sebagai metode membaca ayat Al Quran dengan nada atau irama.');

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
('009384', 'sari', 'bantul', '1998-05-13', 'mtk', 'pundong', 'P', 'pns', '009384.png'),
('022345', 'jumadi', 'wonosari', '1986-03-03', 'mtk', 'wonosari', 'P', 'pns', '022345.png'),
('0777895', 'Kastowo', 'wonogiri', '1879-02-18', 'b.arab', 'wonogiri', 'L', 'honorer', '0777895.png'),
('089875678', 'Endah', 'bantul', '1990-03-31', 'mtk', 'kretek', 'P', 'pns', '089875678.png'),
('0987890', 'Tiara', 'yogyakarta', '1987-11-04', 'mtk', 'serang', 'P', 'pns', '0987890.png'),
('0987890654', 'Cahyo', 'bantul', '1890-05-11', 'b.ing', 'wonogiri', 'L', 'pns', '0987890654.png'),
('19876567', 'Angga', 'sleman', '1987-08-17', 'mtk', 'sleman', 'L', 'pns', '19876567.png'),
('23456', 'nurhayati', 'bantul', '1999-12-11', 'mtk', 'wonosari', 'P', 'honorer', '23456.png');

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'novita', 'c4ca4238a0b923820dcc509a6f75849b');

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
(423, 'asdasdasd', 'L', 'akl', 'Depok parangtritis', 'placeholder.jpg'),
(12345, 'dimas bayu', 'L', 'tkj', 'surabaya', 'placeholder.jpg'),
(23432, 'dewi', 'P', 'tbsm', 'watugajah', 'placeholder.jpg'),
(23443, 'lisa', 'P', 'rpl', 'parangtritis', '23443.png'),
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
(4, 'IPM', '4.png'),
(6, 'PRM', '.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`) VALUES
(1, 'Novita ', 'novitafit364@gmail.com', 'hhhhhhhhddd'),
(0, 'ssd', 'dcsdc@gmail.com', 'adsd'),
(0, 'Novita fitriani', 'novitafit364@gmail.com', 'dfdfdfs'),
(0, 'Novita fitriani', 'novitafit364@gmail.com', 'kkkkkkk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `carousell`
--
ALTER TABLE `carousell`
  ADD PRIMARY KEY (`id_carousell`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `carousell`
--
ALTER TABLE `carousell`
  MODIFY `id_carousell` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `extrakurikuler`
--
ALTER TABLE `extrakurikuler`
  MODIFY `id_extra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
