-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 07:46 PM
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
  `radionica1` varchar(45) DEFAULT NULL,
  `radionica2` varchar(45) DEFAULT NULL,
  `radionica3` varchar(45) DEFAULT NULL,
  `radionice_why` varchar(255) DEFAULT NULL,
  `radionice_experience` varchar(255) DEFAULT NULL,
  `panel` varchar(15) DEFAULT NULL,
  `speed_dating` varchar(15) DEFAULT NULL,
  `microsoft_teams` varchar(15) DEFAULT NULL,
  `spam` varchar(15) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `fullname`, `email`, `phone_number`, `faculty`, `grade`, `attend_why`, `radionica1`, `radionica2`, `radionica3`, `radionice_why`, `radionice_experience`, `panel`, `speed_dating`, `microsoft_teams`, `spam`, `cv`) VALUES
(1, 'Test Test', 'test8@gmail.com', '063333333', 'Fon', 'Treca', 'Testiram bato', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Uros Stanimirovic', '123@student.com', '12333333', 'Fon', 'Apsolvent', 'ggwp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Uros', 'blabla@gmail.com', '12323321321', 'Fon', 'Prva', 'Zatp', 'radionica1', 'radionica2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Dusko', 'puca@gmail.com', '0321312312', 'ETF', 'Treca', 'Onako bzvz volim prirodu', NULL, 'radionica2', NULL, 'Pa svaki dan gledam radionicu 2', 'Ne znam nista sorry', 'da', NULL, NULL, 'da', NULL),
(11, 'Paja', 'patak@gmail.com', '32131232', 'Raf', 'Prva', 'Volim', NULL, NULL, NULL, '', '', NULL, 'da', NULL, 'da', NULL),
(12, 'LOl', 'gg@gmail.com', '321321', 'Fon', 'Druga', 'Onako', NULL, NULL, NULL, '', '', 'da', NULL, 'da', NULL, NULL),
(13, 'njn', 'gg@gmail.com', 'jkkk', 'mmmm', 'Prva', 'mmm', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(14, '434', 'uross@gmail.com', 'ijijiji', 'jijiji', 'Prva', 'jijijijji', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(15, '123313', 'blabla@gmail.com', '2132121', 'ggwp', 'Treca', 'zato', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(16, 'blabla', 'ur@gmail.com', '030213', 'fon', 'Cetvrta', 'onako', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(17, 'hjhjhj', 'ghg@gmail.com', '1223132', 'fon', 'Prva', 'onako', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(18, 'nnjnjnj', 'ghg@gmail.com', '676767', 'ggwp', 'Treca', 'gghgh', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(19, 'jjnjnjn', 'ftffftf@gmail.com', '123', 'ggwp', 'Treca', 'onako', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(20, 'njnjnj', 'dsd@gmail.com', '1', '1', 'Prva', '1', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL),
(21, 'hhihihi', '3323232@gmail.com', '+554', 'fon', 'Apsolvent', 'onako', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/I-Usmeni-klk-2020.pdf'),
(22, 'Kafa pliz', '123@gmail.com', '0321232', 'Fon', 'Treca', 'Zato sto volim ovaj projekat', 'da', NULL, NULL, 'A volim bato', 'Jesam', 'da', 'da', 'da', 'da', '../uploads/OI2_teoretski_kol1.pdf'),
(23, 'Marko Jeremic', 'urosstan112@gmail.com', '123213', 'Fon', 'Treca', '#21321132', 'da', NULL, NULL, 'dwadwawda', 'dwadwawd', 'da', NULL, NULL, NULL, '../uploads/'),
(24, 'bhbhb', 'urosstan112@gmail.com', 'hbhbh', 'Fon', 'Treca', 'knkknknknknknk', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/'),
(25, 'mkmkmkmk', 'mkmkm@gmail.com', 'kmkmk', 'llplpl', 'Doktorske studije', 'loomomomo', NULL, NULL, NULL, '', '', 'da', NULL, NULL, NULL, '../uploads/'),
(26, '3213213123', 'dwa@dwa.com', 'dwada', 'dwadwa', 'Treca', 'dwadwa', NULL, NULL, NULL, '', '', NULL, 'da', NULL, NULL, '../uploads/OI2_teoretski_kol1.pdf'),
(27, '32132131', '312@gmail.com', '32131', '321312', 'Druga', 'dwaa', 'da', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/'),
(28, '1231232132', 'uross8@gmail.com', '23231', 'Fon', 'Treca', 'Onako', 'da', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/'),
(29, '12312321', '231313@gmail.com', '3213213', 'daw', 'Druga', 'dwa', 'da', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/'),
(30, '321312', '3213@gmail.com', '21312', 'd2q', 'Prva', 'd21321', 'da', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/'),
(31, '32131', 'uross8@gmail.com', '21313', 'dawd', 'Prva', 'dwadaw', NULL, 'da', NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/'),
(32, '3213123', '231313@gmail.com', '32131', '32131', 'Treca', '321312', 'da', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/'),
(33, '321312', '3213@gmail.com', '3213', '32131', 'Prva', '3231', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '../uploads/');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
