-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 03:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
(7, 'EDITD', 'asdasda', 'dsa', 'dsa', 'dsa', 'das', 'dsa'),
(11, '778867131', 'sdfsdf', 'sdfsdaf', 'asdfasdf', 'asasdfa', 'asasdsda', 'assdfsdafasdf'),
(12, 'TEST2', 'DSG', 'SDFHG', 'AGFSD', 'AFGSD', 'ADFG', 'ADFG');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
