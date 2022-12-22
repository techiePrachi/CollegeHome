-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 05:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(255) NOT NULL,
  `pgname` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `pgIsFor` varchar(255) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `common` varchar(255) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `securityDeposit` varchar(50) NOT NULL,
  `noticePeriod` varchar(50) NOT NULL,
  `lastEntry` time(6) NOT NULL,
  `meals` varchar(255) NOT NULL,
  `visitors` varchar(255) NOT NULL,
  `oppGender` varchar(255) NOT NULL,
  `nonVeg` varchar(255) NOT NULL,
  `music` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `smoking` varchar(255) NOT NULL,
  `drinking` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sno` int(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `email`, `pass`) VALUES
(8, 'prachik9202@gmail.com', '$2y$10$nfexO9gHfjwzuqGM0FTk1e1mHeU9/h.ZMGyrYG3AJ1mefibvYyEu2'),
(9, ',msnfs,mf', '$2y$10$5FmlxXY/6rnTN7Bfs.aWqejxHIhHSoOxOe9zftEmEVWIeqBoR8EHO'),
(10, 'ksnvlkx@nlkfvn', '$2y$10$mTJGNZVGK9aK1nvfOygQ3.ZXc2WndimBs7YHxEDPARnEvGLLOwcLa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
