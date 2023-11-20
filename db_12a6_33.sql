-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 02:52 AM
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
-- Database: `db_12a6_33`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fsupp`
--

CREATE TABLE `tb_fsupp` (
  `id` int(11) NOT NULL,
  `kode` text NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` text NOT NULL,
  `kota` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fsupp`
--

INSERT INTO `tb_fsupp` (`id`, `kode`, `nama`, `email`, `no_hp`, `alamat`, `kota`, `status`) VALUES
(18, 'gaaaaa', 'g a a a', 'g', 'g', 'g a a a ', 'g', 'g'),
(23, 'TESTRUN', '14', '44', '144', '44', '4144', 'UPDATED'),
(24, '0001', 'PBPDFIUBff', 'gojbsdPFUBDSF', 'dsfdfds', 'sdffdssdf', 'sdffds', 'sdfsdf'),
(26, 'S0001', 'VINCENTIUS DANIEL', 'apojPBDIJBA', 'QW07Y8YG', 'SRG', 'JAKARTA', 'STATUS GANTI'),
(29, 'UNTUK SCREENSHOT', 'AAAAAAAAAA', 'AAA', 'AAAA', 'AAAA', 'AAA', 'AAA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fsupp`
--
ALTER TABLE `tb_fsupp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fsupp`
--
ALTER TABLE `tb_fsupp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
