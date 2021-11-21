-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 10:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id_crud` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pimpinan` varchar(30) NOT NULL,
  `rilis_kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_layanan`
--

CREATE TABLE `db_layanan` (
  `id` int(20) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `daftar_hadir` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `rilis_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_layanan`
--

INSERT INTO `db_layanan` (`id`, `nama_kegiatan`, `daftar_hadir`, `lokasi`, `rilis_kegiatan`) VALUES
(15, 'BIMBINGAN TEKNIS DAN SERTIFIKASI BERBASIS STANDAR KOMPETENSI KERJA NASIONAL INDONESIA (SKKNI) BIDANG KOMINFO BAGI ANGKATAN KERJA MUDA (VSGA LURING 24 JP) SKEMA JUNIOR NETWORK ADMINISTRATOR DAN SKEMA JUNIOR WEB DEVELOPER DI KABUPATEN SUKABUMI', 'H. MAERWAN HAMAMI, MM', 'PENDOPO SUKABUMI', ''),
(18, 'gjbchdsb', 'bsdhhsb', 'jkdh,kdhku', ''),
(19, 'gdcysdcs', 'gjdgfkiudf', 'gdeuheauhf', ''),
(20, 'sinta', 'h', 'PENDOPO SUKABUMI', ''),
(21, 'sinta', 'H. MAERWAN HAMAMI, MM', 'PENDOPO SUKABUMI', 'UTS_MPI.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id_crud`);

--
-- Indexes for table `db_layanan`
--
ALTER TABLE `db_layanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id_crud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_layanan`
--
ALTER TABLE `db_layanan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
