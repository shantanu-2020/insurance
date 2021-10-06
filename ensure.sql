-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 02:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ensure`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `reference_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `reference_type`, `discription`) VALUES
(1, 'qqqqq', 'qqqqqqqq'),
(2, 'ttttttttt', 'ttttttttttttt'),
(3, 'ssssssssssssssaaaaaaaa', 'ssssssssaaaaaaaaaaaaaa'),
(4, '444444', '4444444'),
(5, '111111', '11111111'),
(6, 'dkjdjd', 'djdjdjdjd');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `id` int(11) NOT NULL,
  `add_free` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`id`, `add_free`, `discription`) VALUES
(1, 'tttttttttt', 'tttttttttttt'),
(2, 'xxxxxxxxx', 'xxxxxxxx'),
(3, 'qqqqqqq', 'qqqqqqq'),
(4, 'djdjdjj', 'djdjd'),
(5, 'aaaaaaa', 'aaaaaaaaa'),
(6, 'xxxxxxxxx', 'aaaaaaaaaaa'),
(7, 'xxxxxxxxx', 'lllllllllllll'),
(8, 'xxxxxxxxx', 'wwwwww'),
(9, 'xxxxxxxxx', 'aaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `designation_name`, `discription`) VALUES
(1, 'chef de partie', 'yes'),
(9, 'data entry', 'ssssssssss'),
(10, 'branch manager', 'lllllllllllll'),
(11, 'hotelier', 'llllllllll'),
(12, 'Data processor', 'wwwwwwwww'),
(13, 'chef de partie', 'qqqqqqqqq'),
(14, 'branch manager', 'zzzzzz'),
(15, 'ssssss', 'ssssssss'),
(16, 'wwww', 'wwwwwwww'),
(17, 'rashmi', 'kdkdkkdkd'),
(18, 'vvvvvvvvv', 'dddddddd'),
(19, 'qqqqq', 'aaaaaaa'),
(20, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa'),
(21, 'ttttttttt', 'ttttttt'),
(22, 'rohan', 'qqqqqqqqqq'),
(23, 'sssssssss', 'aaaaaaaaaaaaaaaaaa'),
(24, 'hhhh', 'jjjj'),
(25, 'ooo', 'uuu'),
(26, 'rashmi panday', 'rashmi panday'),
(27, 'rohan', 'panday'),
(28, 'qqqqqqqqq', 'qqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `agent_advisor` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `agent_advisor`, `discription`) VALUES
(1, 'qqqqq', 'aaaaa'),
(2, 'qqqqqqqqq', 'aaaaaaaaaaaa'),
(3, 'wwwww', 'sssssss'),
(4, 'uuuuuu', 'yyyyyyyyy'),
(5, 'yyyyyyyyy', 'yyyyyyyyy'),
(6, '5555555', '555555555'),
(7, 'gggggggggg', 'ggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
