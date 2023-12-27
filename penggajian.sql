-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 11:02 PM
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
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(120) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tj_transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tj_transport`, `uang_makan`) VALUES
(1, 'Staff Marketing', '4000000', '800000', '500000'),
(2, 'Staff Finance', '5000000', '800000', '500000'),
(5, 'CEO', '999999999', '999999999', '1000000000'),
(6, 'Sekretaris CEO', '999999999', '999999999', '999999999'),
(11, 'Staff HR', '4500000', '800000', '500000'),
(12, 'Admin', '5000000', '5500000', '3000000'),
(13, 'Staff IT', '500000000', '999999999', '999999999');

-- --------------------------------------------------------

--
-- Table structure for table `data_kehadiran`
--

CREATE TABLE `data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kehadiran`
--

INSERT INTO `data_kehadiran` (`id_kehadiran`, `bulan`, `nik`, `nama_pegawai`, `jenis_kelamin`, `nama_jabatan`, `hadir`, `sakit`, `alpha`) VALUES
(2, '092023', '123321231213', 'Muhammad Ridzki Nugraha', 'Laki-laki', 'CEO', 20, 1, 1),
(3, '102023', '123321231213', 'Muhammad Ridzki Nugraha', 'Laki-laki', 'CEO', 4, 2, 2),
(4, '072023', '123321231213', 'Muhammad Ridzki Nugraha', 'Laki-laki', 'CEO', 8, 3, 4),
(5, '122023', '123321231213', 'Muhammad Ridzki Nugraha', 'Laki-laki', 'CEO', 10, 12, 8),
(6, '122023', '9120381209999', 'Admin', 'Laki-laki', 'Staff HR', 0, 0, 0),
(7, '122023', '888888888888', 'Ridzki', 'Laki-laki', 'Staff Marketing', 20, 8, 5),
(8, '122023', '696969696969', 'Tester', 'Perempuan', 'Staff Finance', 0, 0, 0),
(9, '122023', '9120381209990', 'TESTER', 'Perempuan', 'Staff Finance', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `is_active` int(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `username`, `password`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `photo`, `hak_akses`, `is_active`, `email`) VALUES
(10, '123321231213', 'Muhammad Ridzki Nugraha', 'ridzki', 'ec6a6536ca304edf844d1d248a4f08dc', 'Laki-laki', 'CEO', '2023-10-14', 'Pegawai Tetap', 'wallhaven-lqm8d2_1920x1080.png', 1, 1, 'ridzkynugraha08@gmail.com'),
(19, '9120381209990', 'TESTER', 'TESTER', '$2y$10$HJUJSgQFJS.6c15rDmFX8.ahKe2XJjldPHxLXSs2GLslDqBfGcWle', 'Perempuan', 'Staff Finance', '2023-12-18', 'Pegawai Tetap', 'default.jpg', 1, 1, 'awkawkawkawk@gmail.com'),
(21, '696969696969', 'Tester', 'Melisa', '$2y$10$ZE5psfAtOxvH9uk/j4MjVu3ABdxHTFcPkFAIEEqlDbB3eR96etw1K', 'Perempuan', 'Staff Finance', '2023-12-18', 'Pegawai Tetap', 'default.jpg', 2, 1, 'tester@gmail.com'),
(24, '7777777777777', 'Admin', 'Admin', '$2y$10$SKAy3H4JuevWnKu1BjEPv.ghSptnvi64rUaNX4xzLbrSvs5Lor4e2', 'Laki-laki', 'Staff Marketing', '2023-12-26', 'Pegawai Tetap', 'default.jpg', 1, 1, 'vexonajadeh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'pegawai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL,
  `potongan` varchar(120) NOT NULL,
  `jml_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id`, `potongan`, `jml_potongan`) VALUES
(1, 'Alpha', 200000),
(4, 'Izin', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `token` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(3, 'awkawkawkawk@gmail.com', '1Zl0+b8cJtfn2rhf4k4xsr2T7IbUFfVGB+GyBjj+Z80=', 1702884365),
(4, 'awkawkawkawk@gmail.com', 'MfIzwEKHaSLJBYR+Ba7GbhtNJcAMRMp6jZZnAu9/r58=', 1702884461),
(5, '666666666666@gmail.com', 'JZNFEciiPFWsOFTdZz6q3P03nqa3/faH/r/dpKq5+xM=', 1702885981),
(6, 'tester@gmail.com', 'wN2+yFtmgL5fyT2o2oIezcdi26VnRk66+es2n2HnrBQ=', 1702887957),
(9, 'vexonajadeh@gmail.com', 'kWhJaBVmfbl3d4LMkGQv/N6ti5SxJni/aiV7My8Mni8=', 1703583801);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `nik_idx` (`nik`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
