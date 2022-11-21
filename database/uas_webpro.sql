-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 04:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` char(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `kelas`, `date_created`, `date_modified`) VALUES
(11, '3202016040', 'Rabuansah', '5A', '2022-11-21 18:27:23', '2022-11-21 18:27:23'),
(12, '3202016041', 'Annisa Parastika Adellia', '5A', '2022-11-21 18:27:30', '2022-11-21 18:27:30'),
(13, '3202016042', 'Egi Aenggi', '5A', '2022-11-21 18:27:38', '2022-11-21 18:27:38'),
(14, '3202016045', 'Jurina', '5A', '2022-11-21 18:28:24', '2022-11-21 18:28:24'),
(15, '3202016074', 'Feby Paramudia', '5A', '2022-11-21 18:28:45', '2022-11-21 18:28:45'),
(16, '3202016075', 'Susan', '5A', '2022-11-21 18:29:11', '2022-11-21 18:29:11'),
(17, '3202016076', 'Tari', '5A', '2022-11-21 18:29:47', '2022-11-21 18:29:47'),
(18, '3202016077', 'Jaka Adi Baskara', '5A', '2022-11-21 18:30:12', '2022-11-21 18:30:12'),
(19, '3202016078', 'Aris Adhadi', '5A', '2022-11-21 18:30:30', '2022-11-21 18:30:30'),
(20, '3202016079', 'Uray Ibnu Setiawan', '5A', '2022-11-21 18:30:48', '2022-11-21 18:30:48'),
(21, '3202016080', 'Elsadai Romyana Br Ginting', '5A', '2022-11-21 18:31:09', '2022-11-21 18:31:09'),
(22, '3202016098', 'Vizhianto Wahyu Xaverius', '5A', '2022-11-21 18:31:36', '2022-11-21 18:31:36'),
(23, '3202016103', 'Fika Astuti Sari', '5A', '2022-11-21 18:31:53', '2022-11-21 18:31:53'),
(24, '3202016104', 'Cherly Evangeli', '5A', '2022-11-21 18:32:11', '2022-11-21 18:32:11'),
(25, '3202016105', 'Vhika Wanasa Khosravi', '5A', '2022-11-21 18:32:34', '2022-11-21 18:32:34'),
(26, '3202016106', 'Chrystoper Brayen Krisna', '5A', '2022-11-21 18:32:56', '2022-11-21 18:32:56'),
(27, '3202016107', 'Ofendi', '5A', '2022-11-21 18:33:07', '2022-11-21 18:33:07'),
(28, '3202016108', 'Putra Satria Mujahid ', '5A', '2022-11-21 18:33:26', '2022-11-21 18:33:26'),
(29, '3202016110', 'Fandy Haryadi', '5A', '2022-11-21 18:33:51', '2022-11-21 18:33:51'),
(30, '3202016111', 'Rifqy Nurfaizi', '5A', '2022-11-21 18:34:12', '2022-11-21 18:34:12'),
(31, '3202016113', 'Alya Nabilah Dwianda', '5A', '2022-11-21 18:34:29', '2022-11-21 18:34:29'),
(32, '3202016114', 'Muklis Faridho Novianto', '5A', '2022-11-21 18:34:58', '2022-11-21 18:34:58'),
(33, '3202016115', 'Fikri Faizul Azka', '5A', '2022-11-21 18:35:17', '2022-11-21 18:35:17'),
(34, '3202016116', 'Muhammad Nazar BAyhaqi', '5A', '2022-11-21 18:35:39', '2022-11-21 18:35:39'),
(35, '3202016117', 'Siti Auliyah', '5A', '2022-11-21 18:35:53', '2022-11-21 18:35:53'),
(36, '3202016119', 'Affilah Fahrus Robby', '5A', '2022-11-21 18:36:11', '2022-11-21 18:36:11'),
(37, '3202016120', 'Abang Muhammad Fajar', '5A', '2022-11-21 18:36:30', '2022-11-21 18:36:30'),
(38, '3202016121', 'Syarif Fahrulrazi', '5A', '2022-11-21 18:36:46', '2022-11-21 18:36:46'),
(39, '3202016122', 'Muhammad David Firmansyah', '5A', '2022-11-21 18:37:18', '2022-11-21 18:37:18'),
(40, '3202016032', 'Dina Berliana Br Sitohang', '5B', '2022-11-21 20:52:52', '2022-11-21 20:52:52'),
(41, '3202016033', 'Vebri Sulitian', '5B', '2022-11-21 20:53:08', '2022-11-21 20:53:08'),
(42, '3202016035', 'Rangga Dwi Pangestu', '5B', '2022-11-21 20:53:23', '2022-11-21 20:53:23'),
(43, '3202016037', 'Berliana Putri Ceasadela', '5B', '2022-11-21 21:02:42', '2022-11-21 21:02:42'),
(44, '3202016039', 'Mihanda Gustiani', '5B', '2022-11-21 21:02:58', '2022-11-21 21:02:58'),
(45, '3202016050', 'Yopi Sulisttyo', '5B', '2022-11-21 21:03:17', '2022-11-21 21:03:17'),
(46, '3202016054', 'Mellanie Prasticia Yosita Putri', '5B', '2022-11-21 21:03:43', '2022-11-21 21:03:43'),
(47, '3202016056', 'Singgih Adipta Prayoga', '5B', '2022-11-21 21:04:02', '2022-11-21 21:04:02'),
(48, '320201659', 'Ibnu Yazzid Almanfaluthi', '5B', '2022-11-21 21:10:41', '2022-11-21 21:10:41'),
(49, '3202016065', 'Renaldi', '5B', '2022-11-21 21:10:52', '2022-11-21 21:10:52'),
(50, '3202016068', 'Irfanda Anugerah', '5B', '2022-11-21 21:11:14', '2022-11-21 21:11:14'),
(51, '3202016069', 'Dani Faturrahman', '5B', '2022-11-21 21:11:33', '2022-11-21 21:11:33'),
(52, '3202016070', 'Agapitus Ryan Permana', '5B', '2022-11-21 21:12:17', '2022-11-21 21:12:17'),
(53, '3202016071', 'Dela Pebriyani', '5B', '2022-11-21 21:12:32', '2022-11-21 21:12:32'),
(54, '302016072', 'Nia Rahayu Istiyani', '5B', '2022-11-21 21:12:49', '2022-11-21 21:12:49'),
(55, '3202016073', 'Sahanan', '5B', '2022-11-21 21:13:02', '2022-11-21 21:13:02'),
(56, '3202016084', 'Dewi Alawiyah', '5B', '2022-11-21 21:13:20', '2022-11-21 21:13:20'),
(57, '3202016090', 'Dwi Febrianto Halim', '5B', '2022-11-21 21:14:39', '2022-11-21 21:14:39'),
(58, '3202016092', 'Melati', '5B', '2022-11-21 21:14:53', '2022-11-21 21:14:53'),
(59, '3202016093', 'Melda Syafitri', '5B', '2022-11-21 21:15:10', '2022-11-21 21:15:10'),
(60, '3202016094', 'Fadhilah Muhammad', '5B', '2022-11-21 21:15:27', '2022-11-21 21:15:27'),
(61, '3202016096', 'Citra Aulia Putri', '5B', '2022-11-21 21:15:41', '2022-11-21 21:15:41'),
(62, '3202016097', 'Renaldy', '5B', '2022-11-21 21:15:52', '2022-11-21 21:15:52'),
(63, '3202016099', 'Hany Nur Alya', '5B', '2022-11-21 21:16:04', '2022-11-21 21:16:04'),
(64, '3202016010', 'MAyestiko Abimayu', '5B', '2022-11-21 21:16:18', '2022-11-21 21:16:18'),
(66, '3202016102', 'Syahrul Febriansyah', '5B', '2022-11-21 21:16:42', '2022-11-21 21:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `tgl_presensi` datetime NOT NULL,
  `makul` varchar(50) NOT NULL,
  `kelas` char(2) NOT NULL,
  `nim` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status_presensi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `tgl_presensi`, `makul`, `kelas`, `nim`, `nama`, `status_presensi`) VALUES
(1, '0000-00-00 00:00:00', 'Pemrograman Web', '5A', '3202016040', 'Rabuansah', 'Hadir'),
(2, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016041', 'Annisa Parastika Adellia', 'Hadir'),
(3, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016042', 'Egi Aenggi', 'Hadir'),
(4, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016045', 'Jurina', 'Hadir'),
(5, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016074', 'Feby Paramudia', 'Hadir'),
(6, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016075', 'Susan', 'Hadir'),
(7, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016076', 'Tari', 'Hadir'),
(8, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016077', 'Jaka Adi Baskara', 'Hadir'),
(9, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016078', 'Aris Adhadi', 'Hadir'),
(10, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016079', 'Uray Ibnu Setiawan', 'Hadir'),
(11, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016080', 'Elsadai Romyana Br Ginting', 'Hadir'),
(12, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016098', 'Vizhianto Wahyu Xaverius', 'Hadir'),
(13, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016103', 'Fika Astuti Sari', 'Hadir'),
(14, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016104', 'Cherly Evangeli', 'Hadir'),
(15, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016105', 'Vhika Wanasa Khosravi', 'Hadir'),
(16, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016106', 'Chrystoper Brayen Krisna', 'Hadir'),
(17, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016107', 'Ofendi', 'Hadir'),
(18, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016108', 'Putra Satria Mujahid ', 'Hadir'),
(19, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016110', 'Fandy Haryadi', 'Hadir'),
(20, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016111', 'Rifqy Nurfaizi', 'Hadir'),
(21, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016113', 'Alya Nabilah Dwianda', 'Hadir'),
(22, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016114', 'Muklis Faridho Novianto', 'Hadir'),
(23, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016115', 'Fikri Faizul Azka', 'Hadir'),
(24, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016116', 'Muhammad Nazar BAyhaqi', 'Hadir'),
(25, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016117', 'Siti Auliyah', 'Hadir'),
(26, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016119', 'Affilah Fahrus Robby', 'Hadir'),
(27, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016120', 'Abang Muhammad Fajar', 'Hadir'),
(28, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016121', 'Syarif Fahrulrazi', 'Hadir'),
(29, '2022-11-21 00:00:00', 'Pemrograman Web', '5A', '3202016122', 'Muhammad David Firmansyah', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(60) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` date NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `role`, `date_created`, `date_modified`, `photo`) VALUES
('admin@admin.com', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Admin', '2022-11-21 12:42:54', '2022-11-21', '316-Anissa-3 (1).jpg'),
('dosen@dosen.com', 'dosen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Dosen', '2022-11-21 22:22:24', '2022-11-21', '175-Anissa-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
