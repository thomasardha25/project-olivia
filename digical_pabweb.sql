-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 02:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digical_pabweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `umur` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `penyakit` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `umur`, `alamat`, `penyakit`) VALUES
(36, 'joko', '16', 'padang', 'demam'),
(37, 'ariel', '17', 'banten', 'pusing'),
(38, 'adelio', '17', 'depok', 'batuk'),
(39, 'aditya', '18', 'makasar', 'batuk'),
(40, 'abian', '19', 'jakarta', 'pusing'),
(41, 'tono', '20', 'depok', 'demam'),
(42, 'toni', '21', 'bekasi', 'batuk'),
(43, 'zaki', '22', 'magelang', 'demam'),
(44, 'dadang', '22', 'bekasi', 'demam'),
(45, 'rudi', '20', 'bekasi', 'batuk'),
(46, 'dadi', '21', 'jakarta', 'pilek'),
(48, 'budi', '15', 'jakarta', 'batuk'),
(49, 'joko', '16', 'padang', 'demam'),
(50, 'ariel', '17', 'banten', 'pusing'),
(51, 'adelio', '17', 'depok', 'batuk'),
(52, 'aditya', '18', 'makasar', 'batuk'),
(53, 'abian', '19', 'jakarta', 'pusing'),
(54, 'tono', '20', 'depok', 'demam'),
(55, 'toni', '21', 'bekasi', 'batuk'),
(56, 'zaki', '22', 'magelang', 'demam'),
(57, 'dadang', '22', 'bekasi', 'demam'),
(58, 'budi', '15', 'jakarta', 'batuk'),
(59, 'joko', '16', 'padang', 'demam'),
(60, 'ariel', '17', 'banten', 'pusing'),
(61, 'adelio', '17', 'depok', 'batuk'),
(62, 'aditya', '18', 'makasar', 'batuk'),
(63, 'abian', '19', 'jakarta', 'pusing'),
(64, 'tono', '20', 'depok', 'demam'),
(65, 'toni', '21', 'bekasi', 'batuk'),
(66, 'zaki', '22', 'magelang', 'demam'),
(67, 'dadang', '22', 'bekasi', 'demam'),
(68, 'udin', '29', 'depok', 'pilek'),
(69, 'budi', '15', 'jakarta', 'batuk'),
(70, 'joko', '16', 'padang', 'demam'),
(71, 'ariel', '17', 'banten', 'pusing'),
(72, 'adelio', '17', 'depok', 'batuk'),
(73, 'aditya', '18', 'makasar', 'batuk'),
(74, 'abian', '19', 'jakarta', 'pusing'),
(75, 'tono', '20', 'depok', 'demam'),
(76, 'toni', '21', 'bekasi', 'batuk'),
(77, 'zaki', '22', 'magelang', 'pilek');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'abdul', 'alwahdi06@gmail.com', '01fdacd002c91d2036e0f5f8e8729312'),
(3, 'bedul', 'bedul@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(4, 'abdulla', 'abdullah@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'abdullah', 'abdulll@gmail.com', '01fdacd002c91d2036e0f5f8e8729312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
