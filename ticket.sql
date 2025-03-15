-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2025 at 11:40 PM
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
-- Database: `stadiumEntry`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `eventName` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `rowNumber` int(11) NOT NULL,
  `seatNumber` int(11) NOT NULL,
  `eventTime` varchar(15) NOT NULL,
  `ticketNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `eventName`, `price`, `rowNumber`, `seatNumber`, `eventTime`, `ticketNumber`) VALUES
(1, 'Argentina vs USA', 23, 12, 5, '8pm', 790379),
(2, 'Argentina vs USA', 23, 12, 5, '8pm', 955832),
(3, 'Argentina vs USA', 23, 12, 5, '8pm', 584218),
(4, 'Argentina vs USA', 23, 12, 5, '8pm', 525018),
(5, 'Argentina vs USA', 23, 12, 5, '8pm', 134880),
(6, 'Argentina vs USA', 23, 12, 5, '8pm', 362601),
(7, 'Argentina vs USA', 23, 12, 5, '8pm', 799687),
(8, 'Argentina vs USA', 23, 12, 5, '8pm', 773646),
(9, 'Argentina vs USA', 23, 12, 5, '8pm', 204774),
(10, 'World Cup Final', 100, 23, 5, '8pm', 134350),
(11, 'World Cup Final', 100, 23, 5, '8pm', 553818),
(12, 'World Cup Final', 100, 23, 5, '8pm', 832282),
(13, 'World Cup Final', 100, 23, 5, '8pm', 739365),
(14, 'World Cup Final', 100, 23, 5, '8pm', 185626),
(15, 'World Cup Final', 100, 23, 5, '8pm', 252322),
(16, 'World Cup Final', 100, 23, 5, '8pm', 759732),
(17, 'World Cup Final', 100, 23, 5, '8pm', 615807),
(18, 'World Cup Final', 100, 23, 5, '8pm', 277774),
(19, 'World Cup Final', 100, 23, 5, '8pm', 311748),
(20, 'ARGENTINAB', 12, 12, 12, '12:23 PM', 538151),
(21, 'ARGENTINAB', 12, 12, 12, '12:23 PM', 688135);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
