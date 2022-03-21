-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 01:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Designet`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `name`, `email`, `subject`, `message`) VALUES
(1, 'dina', 'dina@gmail', 'try', 'hi'),
(2, 'dina', 'dina@gmail', 'try', 'hi'),
(3, 'dina', 'dina@gmail', 'try', 'hi'),
(4, 'di', 'gf@gmail.com', 'gfd', 'gif'),
(5, 'di', 'gf@gmail.com', 'gfd', 'gif'),
(6, 'gfds', 'f@gmail.com', 'gfd', 'hgfd'),
(7, 'gfds', 'f@gmail.com', 'gfd', 'hgfd'),
(8, 'gfds', 'f@gmail.com', 'gfd', 'hgfd'),
(9, 'gfd', 'gf@gmail.com', 'gd', 'gf'),
(10, 'leen', 'leen@gmail.com', 'hiii', 'hiii'),
(11, 'fsd', 'diddalloul@effat.edu.sa', 'New section', 'dfsas'),
(12, 'gfdfsd', 'diddalloul@effat.edu.sa', 'New section', 'fsd'),
(13, 'dw', 'diddalloul@effat.edu.sa', 'f', 'df'),
(14, 'Dina Dalloul', 'diddallou@effat.edu.sa', 'New section', 'h'),
(15, 'dina', 'diddallol@effat.edu.sa', 'New section', 'hi'),
(16, 'Dina Dalloul', 'diddalloul@effat.edu.sa', 'Whatsapp group', 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `Upload`
--

CREATE TABLE `Upload` (
  `file` blob NOT NULL,
  `ID` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `usertype`, `email`, `name`) VALUES
(1, 'Layan', '1234', 'admin', 'ladalloul@gmail.com', 'Layan Dalloul'),
(2, 'Alyazeed', '1234', 'VR', 'Alyazeed@gmail.com', 'alyazeed'),
(3, 'Dina', '1234', 'Customer', 'Dina@gmail.com', 'Dina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Upload`
--
ALTER TABLE `Upload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`Username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Upload`
--
ALTER TABLE `Upload`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
