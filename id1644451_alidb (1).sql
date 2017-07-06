-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2017 at 08:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1644451_alidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apiNY` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `apikey` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `pass`, `apiNY`, `apikey`, `type`) VALUES
(15, 'testbank', '$2y$10$NURqZ9ipoz.evC02S6Oq7.VmCdmZILFPQFpMRYSu01YUqlJi.MjjG', '', '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967', 'bank'),
(16, 'testsocial', '$2y$10$Lj5hiBEgKBQ.1d/0Bc0JB.yIli.rMOtTitKpwNOkgDNUpZTvs62LK', '', 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc', 'social'),
(17, 'testShopping', '$2y$10$UgBXuRvZRaMngmxRJt5PGOmJAvoAPEeHJ7PItSuvFCZ99uFNGHQWi', '', '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8', 'shopping'),
(18, 'zxcv', '$2y$10$fZJ4KYB/GqN0DRdN1bAwPugGLfGCZmR.AG136U0bLoCQ5Dx1US/fa', '', '7a5f12749882351b2afa49101a4c9da77498a46a45aec0f9f2eb92a6a40f93c7', 'super');

-- --------------------------------------------------------

--
-- Table structure for table `Log`
--

CREATE TABLE `Log` (
  `id` int(100) NOT NULL,
  `agencyName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `queryDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `queryID` int(10) NOT NULL,
  `param1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `errorCode` int(3) NOT NULL,
  `message` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `param4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `id` int(100) NOT NULL,
  `year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `purcharse` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usercount` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agency` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `queryDate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id`, `year`, `purcharse`, `usercount`, `agency`, `queryDate`) VALUES
(1, '0001', '100,000', '1,000', 'testShopping', '2017-07-05 11:36:34p'),
(2, '0002', '100,000', '1,000', 'testShopping', '2017-07-05 11:41:36p'),
(3, '0003', '3,000', '2,000', 'testShopping', '2017-07-06 04:04:57a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'in',
  `birthDay` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prod_purchased` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agency` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `queryDate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credit` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_balance` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `sin`, `lastName`, `state`, `birthDay`, `prod_purchased`, `agency`, `queryDate`, `credit`, `address`, `bank_balance`) VALUES
(1, 'Hope', '358 640 555', 'Catron', 'in', '11/28/1972', NULL, NULL, NULL, '', NULL, NULL),
(4, 'Glen', '714 000 114', 'King', 'in', '5/30/1989', NULL, NULL, NULL, '', NULL, NULL),
(5, 'Wanda', '645 631 037', 'Palacio', 'out', '5/11/1938', NULL, NULL, NULL, '', NULL, NULL),
(6, 'Dorothy', '644 768 863', 'Peterson', 'in', '7/24/1989', NULL, NULL, NULL, '', NULL, NULL),
(7, 'Rodney', '174 567 313', 'Kilgo', 'in', '1/21/1953', NULL, NULL, NULL, '', NULL, NULL),
(8, 'William', '615 605 458', 'Burks', 'in', '4/25/1969', NULL, NULL, NULL, '', NULL, NULL),
(9, 'Hao', '547 927 814', 'Wu', 'in', '10/8/1941', NULL, NULL, NULL, '', NULL, NULL),
(10, 'Ranjog', '336 019 625', 'Virk', 'in', '10/11/1941', NULL, NULL, NULL, '', NULL, NULL),
(11, 'Harinder', '325 417 715', 'Toor', 'in', '6/25/1965', NULL, NULL, NULL, '', NULL, NULL),
(12, 'Rupinder', '388 879 041', 'Tiwana', 'in', '5/31/1949', NULL, NULL, NULL, '', NULL, NULL),
(13, 'Roman', '178 097 721', 'Sokolov', 'in', '3/22/1964', NULL, NULL, NULL, '', NULL, NULL),
(14, 'Tejinder', '006 131 551', 'Singh', 'in', '6/7/1968', NULL, NULL, NULL, '', NULL, NULL),
(15, 'Manmeet', '413 091 794', 'Singh', 'in', '6/16/1973', NULL, NULL, NULL, '', NULL, NULL),
(16, 'Harmeet', '300 298 916', 'Singh', 'in', '6/25/1966', NULL, NULL, NULL, '', NULL, NULL),
(17, 'Ramneet', '170 495 980', 'Shergill', 'in', '8/11/1939', NULL, NULL, NULL, '', NULL, NULL),
(18, 'Munish', '206 416 596', 'Saint', 'in', '6/15/1944', NULL, NULL, NULL, '', NULL, NULL),
(19, 'Pranath', '289 181 166', 'Reddy', 'in', '11/6/1967', NULL, NULL, NULL, '', NULL, NULL),
(20, 'Jaspreet', '025 106 501', 'Rai', 'in', '7/30/1986', NULL, NULL, NULL, '', NULL, NULL),
(21, 'Rohan', '390 164 333', 'Patel', 'in', '9/22/1957', NULL, NULL, NULL, '', NULL, NULL),
(22, 'Pyosang', '020 738 654', 'Park', 'in', '3/28/1945', NULL, NULL, NULL, '', NULL, NULL),
(23, 'Anupriya', '690 640 891', 'Pahwa', 'in', '4/8/1966', NULL, NULL, NULL, '', NULL, NULL),
(24, 'Yernar', '008 025 454', 'Murzaliyev', 'in', '1/1/1989', NULL, NULL, NULL, '', NULL, NULL),
(25, 'Geenu', '418 865 630', 'Mathai', 'in', '11/5/1995', NULL, NULL, NULL, '', NULL, NULL),
(26, 'Vikas', '343 693 586', 'Kumar', 'in', '11/19/1936', NULL, NULL, NULL, '', NULL, NULL),
(27, 'Santosh', '583 130 059', 'Konakanchi', 'in', '6/4/1970', NULL, NULL, NULL, '', NULL, NULL),
(28, 'Miju', '644 449 712', 'Jang', 'in', '11/25/1935', '60', 'testbank', '2017-07-06 07:07:39a', 'Good', 'torontoso. mewhere', '600,000'),
(29, 'Navdip', '166 523 902', 'Dolla', 'in', '7/6/1952', NULL, NULL, NULL, '', NULL, NULL),
(30, 'Parasmani', '448 656 942', 'Dhillon', 'in', '1/25/1997', NULL, NULL, NULL, '', NULL, NULL),
(31, 'Pierluigi', '095 540 936', 'Stasio', 'in', '1/1/1976', NULL, NULL, NULL, '', NULL, NULL),
(32, 'Krupa', '128 783 016', 'Contractor', 'in', '8/8/1985', NULL, NULL, NULL, '', NULL, NULL),
(33, 'Andrei', '170 451 835', 'Churkin', 'in', '12/4/1954', NULL, NULL, NULL, '', NULL, NULL),
(34, 'Navdeep', '574 624 565', 'Buttar', 'in', '8/23/1997', NULL, NULL, NULL, '', NULL, NULL),
(35, 'Nivin', '337 449 748', 'Boss', 'in', '7/30/1939', NULL, NULL, NULL, '', NULL, NULL),
(36, 'Jaspreet', '715 406 245', 'Aulakh', 'in', '1/9/1943', NULL, NULL, NULL, '', NULL, NULL),
(37, 'Ali', '404 018 756', 'Zahravi', 'in', '10/21/1986', NULL, NULL, NULL, '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Log`
--
ALTER TABLE `Log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sin` (`sin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Log`
--
ALTER TABLE `Log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
