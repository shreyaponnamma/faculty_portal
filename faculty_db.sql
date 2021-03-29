-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 11:49 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(10) NOT NULL,
  `eventname` varchar(30) NOT NULL,
  `eventstartdate` date NOT NULL,
  `eventenddate` date NOT NULL,
  `totalexpenditure` float NOT NULL,
  `eventtype` text NOT NULL,
  `targetaudience` varchar(30) NOT NULL,
  `eventreport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `eventname`, `eventstartdate`, `eventenddate`, `totalexpenditure`, `eventtype`, `targetaudience`, `eventreport`) VALUES
(5, 'Induction', '2020-05-22', '2020-06-22', 2000, '1st Day', '1st years', 'xyz'),
(6, 'Induction', '2021-01-01', '2021-01-05', 2000, 'dance', '1st years', 'asd'),
(8, 'Induction', '2021-01-01', '2020-12-29', 0, '', '', ''),
(9, 'Bootcamp', '2021-01-04', '2021-01-11', 2000, 'dance', '1st years', 'qwe'),
(10, 'Marathon', '2020-07-11', '2020-07-11', 3000, 'Heath Care', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_sub`
--

CREATE TABLE `event_sub` (
  `id` int(225) NOT NULL,
  `eid` varchar(225) NOT NULL,
  `fid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_sub`
--

INSERT INTO `event_sub` (`id`, `eid`, `fid`) VALUES
(14, '5', '1'),
(15, '5', '8'),
(16, '5', '4'),
(17, '6', '1'),
(18, '6', '8'),
(22, '8', '1'),
(23, '8', '5'),
(24, '8', '8'),
(25, '9', '1'),
(26, '9', '2'),
(27, '10', '9');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(10) NOT NULL,
  `facultyname` varchar(30) NOT NULL,
  `dateofjoining` date NOT NULL,
  `profile_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `facultyname`, `dateofjoining`, `profile_image`) VALUES
(1, 'Ananya', '2012-05-20', '1611237393-img.jpg'),
(2, 'Smith', '2012-05-20', '1611467953-mask.jpg'),
(4, 'Ramesh', '2012-12-12', '1611150333-mask2.jpg'),
(5, 'Suresh', '2012-12-12', '1611150561-poster.jpg'),
(8, 'Joseph', '2012-12-12', '1611212826-img.jpg'),
(9, 'Apoorva', '0000-00-00', '1611979077-mask2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(50) NOT NULL,
  `filename` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `name`, `password`, `role`) VALUES
(101, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `profile_image` varchar(225) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_image`, `bio`) VALUES
(1, '1611134545-mask.jpg', 'abc'),
(2, '1611150149-mask.jpg', 'abc'),
(3, '1611150170-mask2.jpg', 'hey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `event_sub`
--
ALTER TABLE `event_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event_sub`
--
ALTER TABLE `event_sub`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
