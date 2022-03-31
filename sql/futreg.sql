-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 12:39 PM
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
-- Database: `futreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `jelentkezes`
--

CREATE TABLE `jelentkezes` (
  `rajtszam` int(10) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `szulido` date NOT NULL,
  `nem` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jelentkezes`
--

INSERT INTO `jelentkezes` (`rajtszam`, `nev`, `email`, `szulido`, `nem`) VALUES
(1, 'asd', 'sd@sd.com', '2022-03-07', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jelentkezes`
--
ALTER TABLE `jelentkezes`
  ADD PRIMARY KEY (`rajtszam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jelentkezes`
--
ALTER TABLE `jelentkezes`
  MODIFY `rajtszam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
