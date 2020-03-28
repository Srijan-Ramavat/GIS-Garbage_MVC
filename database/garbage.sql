-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 05:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garbage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `number`, `address`, `category`) VALUES
(1, 'srijan', 'lol12345', '111111', 'unknown', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `solve` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(150) NOT NULL,
  `staff_assigned` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `user`, `image`, `solve`, `status`, `timestamp`, `address`, `staff_assigned`) VALUES
(1, 'aa', 'background.png', 'background.png', 2, '2018-03-12 21:07:33', 'DBIT,Kurla West', 0),
(2, 'aa', 'kiske urahara.png', 'SAO.png', 2, '2018-03-13 08:39:09', 'R Villa', 7),
(3, 'Harshil', 'UI goku.png', 'UI goku.png', 1, '2018-03-13 08:40:05', 'Ghatkopar', 0),
(4, 'aa', 'player.png', 'poulpi.png', 2, '2018-03-12 20:47:59', 'dfgh', 7);

-- --------------------------------------------------------

--
-- Table structure for table `contdetail`
--

CREATE TABLE `contdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contdetail`
--

INSERT INTO `contdetail` (`id`, `name`, `email`) VALUES
(1, 'srijan', 's@g.c'),
(2, 'glady', 'glady@co.in');

-- --------------------------------------------------------

--
-- Table structure for table `contmessage`
--

CREATE TABLE `contmessage` (
  `id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contmessage`
--

INSERT INTO `contmessage` (`id`, `message`) VALUES
(1, 'testing'),
(2, 'asdfggh');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `cpnt_asgn` int(10) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `email`, `password`, `address`, `cpnt_asgn`, `category`) VALUES
(1, 'John', 'Doe', NULL, 'DBIT, Kurla', 1, 'staff'),
(3, 'Ramesh', 'r@g.c', 'ramesh', 'R villa', 2, 'staff'),
(7, 'Richi', 'y@y.y', 'lol12345', 'kidhar bhi', 3, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `number`, `address`, `category`) VALUES
(2, 'aa', 'aa', '11', 'asdfg', 'user'),
(3, 'Harshil', '1234567', '9876543210', '213, qwerty ,qwerty', 'user'),
(4, 'he', 'he', '456789o', 'fghjk', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contdetail`
--
ALTER TABLE `contdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contmessage`
--
ALTER TABLE `contmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contdetail`
--
ALTER TABLE `contdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contmessage`
--
ALTER TABLE `contmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
