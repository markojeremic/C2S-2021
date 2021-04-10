-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 10:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c2s`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `faculty` varchar(45) NOT NULL,
  `grade` varchar(45) NOT NULL,
  `attend_why` varchar(255) NOT NULL,
  `attend_what` enum('Tech','Radionice','RadioniceAndTech') DEFAULT NULL,
  `radionice_which` varchar(155) DEFAULT NULL,
  `radionice_why` varchar(255) DEFAULT NULL,
  `radionice_experience` varchar(255) DEFAULT NULL,
  `tech_why` varchar(255) DEFAULT NULL,
  `tech_experience` enum('Da','Ne') DEFAULT NULL,
  `tech_interest` varchar(255) DEFAULT NULL,
  `meetup` enum('Da','Ne') DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `tech_team` enum('Tim','Polutim','Individualno') DEFAULT NULL,
  `fullname2` varchar(45) DEFAULT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `phone_number2` varchar(45) DEFAULT NULL,
  `faculty2` varchar(45) DEFAULT NULL,
  `grade2` varchar(45) DEFAULT NULL,
  `fullname3` varchar(45) DEFAULT NULL,
  `email3` varchar(45) DEFAULT NULL,
  `phone_number3` varchar(45) DEFAULT NULL,
  `faculty3` varchar(45) DEFAULT NULL,
  `grade3` varchar(45) DEFAULT NULL,
  `fullname4` varchar(45) DEFAULT NULL,
  `email4` varchar(45) DEFAULT NULL,
  `phone_number4` varchar(45) DEFAULT NULL,
  `faculty4` varchar(45) DEFAULT NULL,
  `grade4` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `fullname`, `email`, `phone_number`, `faculty`, `grade`, `attend_why`, `attend_what`, `radionice_which`, `radionice_why`, `radionice_experience`, `tech_why`, `tech_experience`, `tech_interest`, `meetup`, `cv`, `tech_team`, `fullname2`, `email2`, `phone_number2`, `faculty2`, `grade2`, `fullname3`, `email3`, `phone_number3`, `faculty3`, `grade3`, `fullname4`, `email4`, `phone_number4`, `faculty4`, `grade4`) VALUES
(1, 'Test Test', 'test8@gmail.com', '063333333', 'Fon', 'Treca', 'Testiram bato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
