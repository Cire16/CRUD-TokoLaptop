-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2024 at 01:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `datatoko`
--

CREATE TABLE `datatoko` (
  `id` int(11) NOT NULL,
  `namaBarang` varchar(100) DEFAULT NULL,
  `kodeBarang` varchar(100) DEFAULT NULL,
  `hargaBarang` varchar(100) DEFAULT NULL,
  `stokBarang` varchar(10) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datatoko`
--

INSERT INTO `datatoko` (`id`, `namaBarang`, `kodeBarang`, `hargaBarang`, `stokBarang`, `gambar`) VALUES
(15, 'ASUS ROG Strix SCAR 18', 'LPT001', '200000', '5', 'asusRog.png'),
(16, 'PREDATOR Helios 18', 'LPT002', '25000000', '10', 'Predator.png'),
(17, 'Nitro 5', 'LPT003', '30000000', '3', 'nitro.png'),
(18, ' MSI GE63 Raider RGB 8RE', 'LPT004', '20000000', '8', 'msi.png'),
(19, 'HP Omen 17-an002tx', 'LPT005', '25000000', '10', 'HP.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatoko`
--
ALTER TABLE `datatoko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatoko`
--
ALTER TABLE `datatoko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
