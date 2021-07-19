-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 02:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chattb`
--

CREATE TABLE `chattb` (
  `chatid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `chatbody` text NOT NULL,
  `chatdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colortb`
--

CREATE TABLE `colortb` (
  `colorid` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `colorbg` varchar(20) NOT NULL,
  `colortxt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colortb`
--

INSERT INTO `colortb` (`colorid`, `username`, `colorbg`, `colortxt`) VALUES
(1, 'aa', 'gray', 'yellow'),
(2, 'bb', 'brown', 'peach'),
(3, 'kel', 'brown', 'peach'),
(4, 'yokai', 'skyblue', 'white'),
(5, 'jsmith', 'red', 'peach'),
(6, 'jsmith', 'red', 'peach');

-- --------------------------------------------------------

--
-- Table structure for table `userstb`
--

CREATE TABLE `userstb` (
  `userid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstb`
--

INSERT INTO `userstb` (`userid`, `username`, `password`, `lname`, `fname`) VALUES
(1, 'admin', 'admin', 'admin', 'Admin Kel'),
(2, 'kel', 'kel', 'Kel', 'Kel'),
(3, 'bot', 'bot', 'bot', 'Bot'),
(9, 'yokai', 'yokai', 'yokai', 'yokai'),
(11, 'jsmith', 'jsmith123', 'Smith', 'John');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chattb`
--
ALTER TABLE `chattb`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `colortb`
--
ALTER TABLE `colortb`
  ADD PRIMARY KEY (`colorid`);

--
-- Indexes for table `userstb`
--
ALTER TABLE `userstb`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chattb`
--
ALTER TABLE `chattb`
  MODIFY `chatid` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colortb`
--
ALTER TABLE `colortb`
  MODIFY `colorid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userstb`
--
ALTER TABLE `userstb`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
