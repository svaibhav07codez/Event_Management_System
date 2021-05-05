-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 08:37 AM
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
-- Database: `eventdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_tickets`
--

CREATE TABLE `booked_tickets` (
  `order_no` int(11) NOT NULL,
  `event_name` varchar(30) DEFAULT NULL,
  `UniqueId` int(11) DEFAULT NULL,
  `no_of_tickets` int(11) DEFAULT NULL,
  `userId` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_tickets`
--

INSERT INTO `booked_tickets` (`order_no`, `event_name`, `UniqueId`, `no_of_tickets`, `userId`) VALUES
(2, 'Mela', 27908828, 10, '3'),
(3, 'Invente', 83519241, 10, '3'),
(4, 'Mela', 98092184, 10, '3'),
(5, 'Mela', 81113696, 10, '3'),
(6, 'Mela', 32718101, 1, '3'),
(7, 'Invente', 77875896, 1, '3'),
(8, 'Invente', 45893104, 1, '3'),
(9, 'Invente', 20843530, 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

CREATE TABLE `eventlist` (
  `eventId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Short_desc` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `Venue` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlist`
--

INSERT INTO `eventlist` (`eventId`, `Name`, `Description`, `Short_desc`, `image`, `seats`, `Venue`, `price`) VALUES
(1, 'Sycon', 'Lakshya event where speakers give their speeches', 'Lakshya event where speakers give their speeches', 'sycon.jpg', 90, 'SSN', 100),
(2, 'Invente', 'Technical symposium', 'Technical symposium', 'invente.png', 167, 'SSN CSE dept', 150),
(3, 'Gaming tournament', 'Participate in daily tournaments of games like PUBG Mobile, Garena Free Fire, FIFA 20, 8 Ball Pool, Clash Royale, PUBG PC and many more!', 'Participate in daily tournaments of games', 'gaming.jpg', 30, 'Chennai', 60),
(4, 'Mela', 'SSN Lakshya\'s annual extravaganza \'MELA\' also lives up to the same reputation. Mela witnesses over 250 participants, who assume the role of entrepreneurs for the day by setting up stalls. ', 'SSN Lakshya\'s annual extravaganza \'MELA\' ', 'mela.jpg', 99, 'Bus bay', 50),
(5, 'Instincts', 'SSN INSTINCTS. (Virtual) National level Cultural Fest | SSNCE', 'SSN INSTINCTS. (Virtual) National level Cultural Fest | SSNCE', 'instincts.jpg', 300, 'SSN', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `status`) VALUES
(1, 'admin', 'admin', 101),
(3, 'user', 'user', 202);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_tickets`
--
ALTER TABLE `booked_tickets`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `eventlist`
--
ALTER TABLE `eventlist`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_tickets`
--
ALTER TABLE `booked_tickets`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `eventlist`
--
ALTER TABLE `eventlist`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
