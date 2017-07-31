-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 05:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `sku` varchar(300) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `supplier` varchar(300) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `producttype` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `keywords` varchar(300) DEFAULT NULL,
  `imgurl` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `sku`, `title`, `supplier`, `price`, `quantity`, `producttype`, `description`, `keywords`, `imgurl`) VALUES
(3, 'B-03', 'Reindeer', 'Saco', 450, 10, 'Medicines', 'this medicine is very good.', NULL, NULL),
(4, 'D-02', 'Foodie Setu', 'Chrysla', 234, 12, 'Food', 'dfdsfsdf', NULL, NULL),
(5, 'E-45', 'adsd', 'Saco', 12, 345, 'Books', 'asds', NULL, NULL),
(6, 'g34', 'asc', 'Saco', 12, 123, 'Cooking', 'WFD', NULL, NULL),
(7, 'G-03', 'Gigabyte Harddisk', 'Saco', 12, 10, 'Books', 'hard disk', NULL, NULL),
(8, 'G-04', 'adsd', 'Chrysla', 342, 34, 'Books', 'sdssdf', NULL, NULL),
(9, 'G-09', 'Foodie Setu', 'Saco', 234, 123, 'Books', NULL, NULL, NULL),
(10, 'r-05', 'sdsse', 'Saco', 345, 123, 'Books', 'skdfnksf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `company` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `company`, `address`, `email`, `phone`) VALUES
(1, 'Saco', 'Detroit', 'asddfddfmfds', 'saco@gmail.com', '123456'),
(2, 'Chrysla', 'Detroit', 'dfsdtehfgh', 'chrysla@gmail.com', '123456'),
(3, 'Arifur Rahman', 'A Rahman Walkers', 'asfdsf', 'arif@gmail.com', '123343'),
(4, 'ASAD', 'CASF', 'SAFDA', 'ASDA@SDF', '123124');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lastActive` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `lastActive`, `emailConfirmed`, `creationDate`) VALUES
('admin', '1234', 'admin@gmail.com', '0000-00-00 00:00:00.000000', 1, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
