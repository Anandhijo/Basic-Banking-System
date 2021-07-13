-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 01:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Id` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Account_no` int(200) NOT NULL,
  `Balance` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Id`, `Name`, `Account_no`, `Balance`) VALUES
(1, 'Anandhi', 12345678, 200),
(2, 'Kishoo', 23456789, 320),
(3, 'Minu', 34567890, 270),
(4, 'Mini', 45678901, 600),
(5, 'Anki', 685849399, 19),
(6, 'Kishan', 22446688, 255),
(7, 'Augan', 27542754, 339),
(8, 'Moni', 63546354, 240),
(9, 'Nandhini', 81828182, 321),
(10, 'Kichu', 78785252, 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `sender` varchar(11) NOT NULL,
  `reciver` varchar(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `sender`, `reciver`, `balance`) VALUES
(4, 'Anki', 'Kishoo', 10),
(5, 'kishan', 'Kishan', 10),
(6, 'Anandhi', 'Anki', 10),
(7, 'Minu', 'Mini', 100),
(8, 'Mini', 'Minu', 10),
(9, 'kishoo', 'Anandhi', 100),
(10, 'Anandhi', 'Moni', 100),
(11, 'Moni', 'Nandhini', 1),
(12, 'Nandhini', 'Moni', 21),
(13, 'Anandhi', 'Anki', 20),
(14, 'Augan', 'Minu', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
