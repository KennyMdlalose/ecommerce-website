-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 12:04 PM
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
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` int(11) NOT NULL,
  `token_exipiry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `email`, `password`, `reset_token`, `token_exipiry`) VALUES
(6, 'Khalifa', 'khalifa84@gmail.com', '$2y$10$xlTRBhZh81jOd1qZHQEyT.aRblFF2BcodcUZ3hbLz2PvgMWUn7YJi', 0, 0),
(7, 'Khalifa', 'khalifa84@gmail.com', '$2y$10$wtWIQELJL1sY1ZSw2dTgiO10miw6XvX..tQaxoAIseDOGcfwCMBbC', 0, 0),
(8, 'Thabang', 'Thabang@gmail.com', '$2y$10$1/ed/FmnpRdP2mGlFdBem.OB7KPDaq1hC7ntLUWpaK3wovufHWSA2', 0, 0),
(9, 'Thabang', 'Thabang@gmail.com', '$2y$10$TVQKX.3EEJcM95DN/aMR3eJ/plZ2qJ86UJkdgrb3nZnUmqs1zo1ve', 0, 0),
(10, 'Thabang', 'Thabang@gmail.com', '$2y$10$69fOiTVZUEMJgvy1a8YV3uUjcmz4ZF.sP.j9qJetWzR.hbhtEe7Ae', 0, 0),
(15, 'Xola', 'Xola@gmail.com', '$2y$10$AD5fx.t4/WHs81RqRCAVE.cNATDF.GOtY57n9Jx0NxmHuCK4aCH6y', 0, 0),
(16, 'kari', 'kari@gmail.com', '$2y$10$RrQbQ3Za5IDAK4k51.ylHe2Wmmnm/sf9sAsK7OgVp0mnL0gaCzmem', 0, 0),
(17, 'admin', 'admin@HertCare.ac.za', 'Admin123', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
