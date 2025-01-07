-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 05:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `tanggal`, `gambar`, `username`) VALUES
(1, 'Sepak Bola Udinus', 'Visi	:	Tercapainya prestasi-prestasi demi mengharumkan nama Universitas Dian Nuswantoro\r\nMisi	:	1. Menyelenggarakan kegiatan yang berhubungan dengan Sepakbola. 2. Membentuk dan meningkatkan kualitas sumber daya anggota UKM Sepakbola dengan cara mengadakan', '2025-01-05', '20250105152434.jpg', 'admin'),
(2, 'Aldakawanaseta', 'Visi	:	mewujudkan cita-cita keluarga besar Aldakawanaseta yang berdasarkan ketuhanan Yang Maha Esa\r\nMisi	:	1. menyelenggarakan kegiatan yang bertujuan untuk kelestarian alam dengan profesional 2. memben', '2025-01-05', '20250105152252.jpg', 'admin'),
(3, 'TAE KWON DO ', 'Visi	:	Menciptakan rasa kekeluargaan,solidaritas,dan kedisiplinan antar anggota anggota Tae Kwon Do\r\nMisi	:	Menjadikan UKM Tae Kwon Do Universitas Dian Nuswantoro sebagai UKM yang mampu memberikan prestasi serta melahirkan Atlet-Atlet yang berkualitas dan', '2025-01-05', '20250105152534.jpg', 'admin'),
(4, 'Bola Basket Udinus', 'Visi	:	Menjadikan UKM Bola Basket Universitas Dian Nuswantoro sebagai organisasi yang berkualitas yang didasari oleh rasa kekeluargaan serta dapat dikenal dengan baik oleh masyarakat luas karena prestasinya.\r\nMisi	:	1. Mengoptimalkan peran UKM sebagai wad', '2025-01-05', '20250105152622.jpg', 'admin'),
(5, 'Musik ', 'Visi	:	Menjadikan UKM yang mampu menjunjung nama UKM dalam bermusik dan management event didalam maupun diluar Universitas menjalin organisasi yang kompak, profesional, disiplin dan tangguh\r\nMisi	:	Membuat program kerja terencana dan tepat waktu, melatih ', '2025-01-05', '20250105152652.jpg', 'admin'),
(6, 'Bulu Tangkis', 'Visi	:	Menjadikan UKM Bulutangkis “UDINUS” Semarang sebagai wadah untuk mengembangkan bakat dan prestasi dibidang olahraga bulutangkis,sehingga dapat melahirkan bibit-bibit yang berkompetensi serta mengasah kemampuan para anggota dalam berorganisasi.\r\nMis', '2025-01-05', '20250105152802.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT '1970-01-01 00:00:00',
  `gambar` text NOT NULL,
  `username` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `tanggal`, `gambar`, `username`) VALUES
(2, '2025-01-05 15:20:49', '20250105152049.jpg', 'admin'),
(3, '2025-01-05 15:20:41', '20250105152041.jpg', 'admin'),
(5, '2025-01-05 15:19:41', '20250105151941.jpg', 'admin'),
(6, '2025-01-05 15:20:55', '20250105152055.jpg', 'admin'),
(7, '2025-01-05 15:21:02', '20250105152102.jpg', 'admin'),
(8, '2025-01-05 15:21:09', '20250105152109.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(2, 'panji', 'd93591bdf7860e1e4ee2fca799911215', 'user'),
(3, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(7, 'andi', '202cb962ac59075b964b07152d234b70', 'user'),
(17, 'danny', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(18, 'tama', '202cb962ac59075b964b07152d234b70', 'user'),
(19, 'Agiligil', '202cb962ac59075b964b07152d234b70', 'user'),
(20, 'egi', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
