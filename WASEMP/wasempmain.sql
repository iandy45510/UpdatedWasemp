-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 03:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasempmain`
--

-- --------------------------------------------------------

--
-- Table structure for table `backtracking`
--

CREATE TABLE `backtracking` (
  `Name` varchar(255) NOT NULL,
  `DATE` datetime NOT NULL,
  `LOCATION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backtracking`
--

INSERT INTO `backtracking` (`Name`, `DATE`, `LOCATION`) VALUES
('ARVI MENCHATE', '2011-12-21 00:00:00', 'FISHERMALL'),
('IAN Dy', '0000-00-00 00:00:00', 'SM NORTH'),
('Jayvee Galanto', '0000-00-00 00:00:00', 'Victory Mall');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `uname` varchar(64) NOT NULL,
  `pword` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `pword`) VALUES
(1, 'Administrator', 'admin', '12345'),
(2, 'Jayvee', 'usernum1', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `fname`, `sname`, `mname`, `caddress`, `paddress`, `age`, `mobile`, `barangay`, `email`, `password`) VALUES
(2, 'test1', 'test1', 'test1', 'test1', '121', 1212, '1212', '1212', 'test1@gmail.com', '12345'),
(3, 'test', 'test', 'test', 'test', '21', 1212121, '1212121', '12121', 'test@gmail.com', '12345'),
(4, 'dy', 'd', '59 9th ave', 'd', '21', 2121212, '2121212', '202', 'smengage@gmail.com', '12345'),
(7, 'Galanto', 'A', 'Address', 'Adress', '22', 12345, '12345', '105', 'testing11@gmail.com', '12345'),
(8, 'DY', 'BACANI', 'caloocan', 'caloocan', '22', 2147483647, '09352216949', '102', 'youtube@gmail.com', '12345'),
(9, 'Menchate', 'middle', 'caloocan', 'caloocan ', '23', 12354, '12354', '1212', 'arvi@gmail.com', '12345'),
(10, 'ian', 'dy', 'middle', '59 9th ave', 'address', 22, '00000', '123', 'smengage@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backtracking`
--
ALTER TABLE `backtracking`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
