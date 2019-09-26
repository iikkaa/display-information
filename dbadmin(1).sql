-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 02:14 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_gambar` int(5) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `kd_pelatihan` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_gambar`, `deskripsi`, `file`, `kd_pelatihan`) VALUES
(5, '', 'Logo_Polnes_2015-sekarang.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `kd_pelatihan` int(11) NOT NULL,
  `npk` int(11) NOT NULL,
  `jam_absen` time DEFAULT NULL,
  `tgl_pelatihan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memiliki`
--

INSERT INTO `memiliki` (`kd_pelatihan`, `npk`, `jam_absen`, `tgl_pelatihan`) VALUES
(1, 100000, '07:00:00', '2019-09-25'),
(1, 100001, NULL, '2019-09-25'),
(1, 100002, NULL, '2019-09-25'),
(1, 100003, NULL, '2019-09-25'),
(1, 100004, NULL, '2019-09-25'),
(1, 100005, '07:33:00', '2019-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `kd_pelatihan` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `desc_judul` varchar(500) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `instruktur` varchar(50) NOT NULL,
  `fasilitator` varchar(50) NOT NULL,
  `nohp_fasilitator` varchar(13) NOT NULL,
  `nama_lembaga` varchar(11) NOT NULL,
  `kd_ruangan` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`kd_pelatihan`, `judul`, `desc_judul`, `tgl_mulai`, `tgl_selesai`, `instruktur`, `fasilitator`, `nohp_fasilitator`, `nama_lembaga`, `kd_ruangan`) VALUES
(0, 'aa', 'aaaaa', '2019-09-03', '2019-09-05', 'aaaa', 'aaaaa', '082234277345', 'aaa', 'a2'),
(1, 'Pelatihan Bahasa Inggris', 'Pelatihan Bahasa Inggris Pelatihan Bahasa Inggris Pelatihan Bahasa Inggris Pelatihan Bahasa Inggris Pelatihan Bahasa Inggris', '2019-09-26', '2019-09-27', 'Karyo Budi ', 'Rahayu Ningtyas', '082234277345', 'KMU', 'A2'),
(2, 'workshop interaksi komputer', 'workshop interaksi komputer', '2019-08-21', '2019-08-23', 'Budi', 'yoga', '082234277347', 'PT KMU', 'B3'),
(3, 'Pelatihan sekretaris', 'Pelatihan sekretaris', '2019-08-25', '2019-08-27', 'Budi', 'Yoga', '082234277347', 'polnes', 'a3'),
(4, 'pelatihan nnnnnnn', 'pelatihan nnnnnnn', '2019-09-11', '2019-09-13', 'ika', 'ilma', '082234277345', 'pkt', 'b4'),
(5, 'Pelatihan', 'Pelatihan Bahasa Inggris', '2019-09-13', '2019-09-14', 'Farandika ', 'RHNS', '082234277345', 'KMU', 'A2'),
(6, 'Pelatihan bahasa inggris 2', 'Pelatihan bahasa inggris 2 Pelatihan bahasa inggris 2 Pelatihan bahasa inggris 2', '2019-09-19', '2019-09-19', 'aku', 'dia', '0822342277347', 'PKT', 'a2'),
(7, 'bb', 'bbbbbbb', '2019-09-09', '2019-09-10', 'bbbb', 'bbbb', '082234277345', 'bbb', 'a2'),
(8, 'dddddddd', 'dddddddddddddddddddddddddddddddddddddd', '2019-09-20', '2019-09-21', 'Kita,S.H', 'Rahayu Ningtyas', '082234277345', 'PKT', 'a2');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `npk` int(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `kd_pelatihan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`npk`, `nama`, `unit_kerja`, `kd_pelatihan`) VALUES
(100000, 'tri ilma', 'Pabrik 1', 1),
(100001, 'Nur Sidah', 'Pabrik 1', 1),
(100002, 'Ika Lestari', 'Pabrik 1', 1),
(100003, 'Mawar', 'Pabrik 1', 1),
(100004, 'Aeni', 'Pabrik 3', 1),
(100005, 'Yoga P', 'Pabrik 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kd_ruangan` varchar(2) NOT NULL,
  `ruangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kd_ruangan`, `ruangan`) VALUES
('b2', 'aula b2'),
('b3', 'aula b3');

-- --------------------------------------------------------

--
-- Table structure for table `rundown`
--

CREATE TABLE `rundown` (
  `no` int(2) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `kd_pelatihan` int(4) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rundown`
--

INSERT INTO `rundown` (`no`, `materi`, `jam_mulai`, `jam_selesai`, `kd_pelatihan`, `tanggal`) VALUES
(3, 'Pembukaan', '07:30:00', '08:00:00', 1, '2019-09-25'),
(4, 'Motivasi Pembelajaran Pelatihan', '08:00:00', '09:00:00', 1, '2019-09-25'),
(5, 'Membangun Web Pembelajaran', '09:30:00', '10:30:00', 1, '2019-09-25'),
(6, 'Ujian 1', '10:30:00', '11:30:00', 1, '2019-09-25'),
(8, 'Istirahat', '11:30:00', '12:30:00', 1, '2019-09-25'),
(9, 'Materi kedua', '12:30:00', '14:00:00', 1, '2019-09-25'),
(10, 'empat', '18:06:00', '19:07:00', 1, '2019-09-23'),
(13, 'penutup', '15:45:00', '16:00:00', 1, '2019-09-25'),
(14, 'Ishoma', '15:30:00', '15:45:00', 1, '2019-09-25'),
(15, 'Ujian 2', '14:00:00', '15:30:00', 1, '2019-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `kd_status` varchar(2) NOT NULL,
  `status_absen` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`kd_status`, `status_absen`) VALUES
('1', 'Hadir'),
('2', 'Belum Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'ika', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD PRIMARY KEY (`kd_pelatihan`,`npk`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`kd_pelatihan`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`npk`),
  ADD KEY `kd_pelatihan` (`kd_pelatihan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kd_ruangan`);

--
-- Indexes for table `rundown`
--
ALTER TABLE `rundown`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`kd_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_gambar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rundown`
--
ALTER TABLE `rundown`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`kd_pelatihan`) REFERENCES `pelatihan` (`kd_pelatihan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
