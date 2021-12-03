-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 09:23 AM
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
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backtracking`
--

INSERT INTO `backtracking` (`fname`, `sname`, `date`, `time`, `location`) VALUES
('', '', '0000-00-00', '2012-12-11 16:00:00', 'adadasdas'),
('Ian', 'Dy', '0000-00-00', '2021-11-26 00:42:56', 'HAllo'),
('Jayvee', 'Galanto', '2021-11-25', '2021-11-25 19:34:55', 'SA PUSO mO');

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
(7, 'Galanto', 'A', 'Address', 'Adress', '22', 12345, '12345', '105', 'testing11@gmail.com', '12345'),
(8, 'DY', 'BACANI', 'caloocan', 'caloocan', '22', 2147483647, '09352216949', '102', 'youtube@gmail.com', '12345'),
(9, 'Menchate', 'middle', 'caloocan', 'caloocan ', '23', 12354, '12354', '1212', 'arvi@gmail.com', '12345'),
(10, 'ian', 'dy', 'middle', '59 9th ave', 'address', 22, '00000', '123', 'smengage@gmail.com', '12345'),
(11, 'Jayvee', 'Galanto', 'Matulina', '113A 9th Avenue West Caloocan City', '113A 9th Avenue West Caloocan City', 22, '09954127612', '60', 'galanto@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backtracking`
--
ALTER TABLE `backtracking`
  ADD PRIMARY KEY (`fname`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
