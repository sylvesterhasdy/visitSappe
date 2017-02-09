-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 06:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `kodepos` int(10) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`kodepos`, `kota`, `kabupaten`, `kecamatan`, `kelurahan`) VALUES
(10000, 'Tangerang', 'Tangerang', 'Gambir', 'Gambir'),
(10110, 'Jakarta', 'Jakarta Pusat', 'Gambir', 'Gambir'),
(10120, 'Jakarta', 'Jakarta Pusat', 'Gambir', 'Kebon Kelapa'),
(11710, 'Jakarta', 'Jakarta Barat', 'Cengkareng', 'Kedaung Kali Angke'),
(11720, 'Jakarta', 'Jakarta Barat', 'Cengkareng', 'Kapuk'),
(12110, 'Jakarta', 'Jakarta Selatan', 'Kebayoran Baru', 'Selong'),
(12120, 'Jakarta', 'Jakarta Selatan', 'Kebayoran Baru', 'Gunung'),
(13110, 'Jakarta', 'Jakarta Timur', 'Matraman', 'Pisangan Baru'),
(13120, 'Jakarta', 'Jakarta Timur', 'Matraman', 'Utan Kayu Selatan'),
(14210, 'Jakarta', 'Jakarta Utara', 'Koja', 'Koja Utara'),
(14220, 'Jakarta', 'Jakarta Utara', 'Koja', 'Koja Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `jenistoko`
--

CREATE TABLE `jenistoko` (
  `idtoko` varchar(50) NOT NULL,
  `namatoko` varchar(50) NOT NULL,
  `ketertoko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`kodepos`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
