-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 11:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE IF NOT EXISTS `data1` (
  `id` int(11) NOT NULL,
  `date` varchar(55) COLLATE utf8_czech_ci NOT NULL,
  `note` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `name` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `account_number` varchar(55) COLLATE utf8_czech_ci NOT NULL,
  `value` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `usage1` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `usage2` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `amount` varchar(55) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `date`, `note`, `name`, `account_number`, `value`, `usage1`, `usage2`, `amount`) VALUES
(75, '19.06.2017', 'Fast Communication2', 'Fast Communication', '1392565667/2011', '19.06.2017', '31244', '', '-192'),
(76, '18.06.2017', 'Mr. XYZ Booking Holiday house date 11.07.2017 - 24.07.2017', 'Klára Tihelková', '1392565657/5010', '18.06.2017', '', '', '3610');

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE IF NOT EXISTS `data2` (
  `id` int(11) NOT NULL,
  `date` varchar(55) COLLATE utf8_czech_ci NOT NULL,
  `value` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `name1` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `name2` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `account_iban` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `bic_swift` varchar(555) COLLATE utf8_czech_ci NOT NULL,
  `note` varchar(900) COLLATE utf8_czech_ci NOT NULL,
  `currency` varchar(55) COLLATE utf8_czech_ci NOT NULL,
  `amount` varchar(55) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `date`, `value`, `name1`, `name2`, `account_iban`, `bic_swift`, `note`, `currency`, `amount`) VALUES
(2, '19.06.2017', '19.06.2017', 'SPORT SPEISER SHOP ', 'SPORT SPEISER SHOP HOERNERBAHN', 'DE45733699200200033281', 'GENODEH1SFO', 'BasislastschriftSPORT SPEISER SHOP ', 'EUR', '29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
