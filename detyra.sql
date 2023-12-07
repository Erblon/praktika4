-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 12:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detyra`
--

-- --------------------------------------------------------

--
-- Table structure for table `puntoret`
--

CREATE TABLE `puntoret` (
  `id` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fjalekalimi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `puntoret`
--

INSERT INTO `puntoret` (`id`, `emri`, `mbiemri`, `email`, `fjalekalimi`) VALUES
(1, 'Erblon', 'Fazliu', 'erblonfaliu9@gmail.com', 'Erbloni15'),
(2, 'Erblon', 'Fazliu', 'erblonfaliu9@gmail.com', 'Erbloni15'),
(3, 'Leonard', 'Jerliu', 'leonardi16@gmail.com', 'Leonardi16'),
(4, '', '', '', ''),
(5, 'Erton', 'Islami', 'ertoni23@ggmail.com', 'Ertoni16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `puntoret`
--
ALTER TABLE `puntoret`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `puntoret`
--
ALTER TABLE `puntoret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
