-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 10:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeday2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(9) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentupvotes`
--

CREATE TABLE `commentupvotes` (
  `commentID` int(9) NOT NULL,
  `userID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventcomments`
--

CREATE TABLE `eventcomments` (
  `eventID` int(9) NOT NULL,
  `commentD` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventgoing`
--

CREATE TABLE `eventgoing` (
  `eventID` int(9) NOT NULL,
  `userID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventinterest`
--

CREATE TABLE `eventinterest` (
  `eventID` int(9) NOT NULL,
  `userID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventowner`
--

CREATE TABLE `eventowner` (
  `usertID` int(9) NOT NULL,
  `eventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(9) NOT NULL,
  `eventName` varchar(32) NOT NULL,
  `descript` text NOT NULL,
  `donorInfo` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `location` varchar(32) NOT NULL,
  `moneyProposed` int(16) NOT NULL,
  `moneyRaised` int(16) NOT NULL,
  `imageFilePath` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `descript`, `donorInfo`, `startDate`, `endDate`, `location`, `moneyProposed`, `moneyRaised`, `imageFilePath`) VALUES
(1, 'Golf Tournament', 'Play golf over at Medinah Country Club on this week long competition.', 'Donating more than $20 guarantees a spot among the players and $10 and more as a viewer.\r\n\r\n$100 and more offers limited advertising, with less limitations with higher donations.', '2018-02-21', '2018-02-28', 'MCC', 2000, 62, 'golf.jpg'),
(2, 'Hamilton Play', 'Watch these up-rising self-starters in their all time famous play of Hamilton inside the Chicago Opera house.', 'Donating $50 or more guarantees a place inside the crowd. \r\n\r\n$200 and more allows advertising in a limited capacity\r\n\r\nfurther offers will be met with further advertising opportunities.', '2018-02-23', '2018-02-23', 'TechNexus Opera House', 5000, 982, 'hamilton.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eventsponsor`
--

CREATE TABLE `eventsponsor` (
  `eventID` int(9) NOT NULL,
  `userID` int(9) NOT NULL,
  `sponsorAmnt` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercomments`
--

CREATE TABLE `usercomments` (
  `userID` int(9) NOT NULL,
  `commentID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userfollow`
--

CREATE TABLE `userfollow` (
  `userID` int(9) NOT NULL,
  `followingUserID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(9) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `imageFilePath` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `email`, `password`, `imageFilePath`) VALUES
(1, 'Benjamin', 'Wagrez', 'benwagrez@gmail.com', '224244', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD UNIQUE KEY `eventID` (`eventID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
