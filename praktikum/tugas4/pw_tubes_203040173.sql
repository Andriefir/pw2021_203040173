-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 03:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040173`
--

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `Picture`, `Name`, `Brand`, `Deskripsi`, `Category`, `Price`) VALUES
(1, 'Redmi 9A.png', 'Redmi 9A', 'Redmi ', 'Xiaomi Redmi 9A (2+32GB) Layar DorDrop 6.53 HD+ Baterai 5000mAh', 'Low-End', 'Rp 1.249.000'),
(2, 'Realme C15.png', 'Realme C15', 'Realme ', 'Realme C15 (4+64GB) 6000mAh, 18W Quick Charge, Ultra-Wide Quad', 'Middle-Range', 'Rp 2.199.000'),
(3, 'Poco X3 NFC.png', 'Poco X3', 'Poco', 'Poco X3 NFC (8GB+128GB) Snapdragon™ 732G, Layar 6.67', 'Middle-Range', 'Rp 3.599.000'),
(4, 'Redmi Note9.png', 'Redmi Note 9', 'Redmi ', 'Xiaomi Redmi Note 9 (6GB+128GB) Onyx Black 48MP Quad Kamera Helio G85', 'Middle-Range', 'Rp 2.899.000'),
(5, 'Realme 7Pro.png', 'Realme 7Pro', 'Realme ', 'Realme 7 Pro (8+128GB) Snapdragon™ 720G, NFC, Garansi Resmi', 'Middle-Range', 'Rp 4.599.000'),
(6, 'Vivo V17pro.png', 'Vivo V17pro', 'Vivo', 'Vivo V17 Pro (8+128GB) Garansi Resmi Vivo Indonesia', 'Middle-Range', 'Rp 4.999.000'),
(7, 'Samsung Galaxy M51.png', 'Samsung Galaxy M51', 'Samsung', 'Samsung Galaxy M51 (8GB+128GB) Original Bergaransi Resmi Samsung Indonesia', 'Middle-Range', 'Rp 4.999.000'),
(8, 'Xiaomi Mi10 Pro5G.png', 'Xiaomi Mi10 Pro5G', 'Xiaomi', 'Xiaomi Mi 10 Pro (12+256GB) Snapdragon™ 865G 5G Octacore 108MP Quad', 'High-End', 'Rp 8.999.000'),
(9, 'IPhone 12.png', 'iPhone 12', 'iPhone', 'Apple iPhone 128GB, Blue', 'High-End', 'Rp 14.499.000'),
(10, 'Oppo Find X2pro.png', 'Oppo Find X2pro', 'Oppo', 'Oppo Find X2pro (12+512GB) Garansi Resmi Oppo Indonesia', 'High-End', 'Rp 16.750.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
