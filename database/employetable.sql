-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 09:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employetable`
--

CREATE TABLE `employetable` (
  `pno` int(11) NOT NULL,
  `eid` varchar(10) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `efname` varchar(15) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `edept` varchar(20) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `pshow` varchar(30) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employetable`
--

INSERT INTO `employetable` (`pno`, `eid`, `efname`, `edept`, `pshow`) VALUES
(499, 'e907215', 'Brian', 'Finance', 'Y'),
(500, 'e90721d', 'Christopher', 'Human Resources', 'Y'),
(501, 'e907218', 'Ricky', 'Marketing', 'Y'),
(502, 'e90721d', 'Walter', 'Finance', 'Y'),
(504, 'ePFFB10', 'Mary', 'Technology', 'Y'),
(505, 'e90721d', 'John', 'Management', 'Y'),
(506, 'e90721d2', 'Rupert', 'Risk Management', 'Y'),
(507, 'e90721d', 'William', 'Division', 'Y'),
(508, 'e90721d', 'Paul', 'Creativity', 'Y'),
(510, 'e90721d', 'Calvin', 'Sales', 'Y'),
(511, 'e90721d', 'Elle', 'Sales', 'Y'),
(512, 'e90721d', 'Hannah', 'Operations', 'Y'),
(513, 'e90721d', 'Ross', 'Engineering', 'Y'),
(514, 'e90720d', 'Bruce', 'Technical Support', 'Y'),
(515, 'e90721', 'Robin', 'Research', 'Y'),
(516, 'e90721d', 'Thomas', 'Production', 'Y'),
(517, 'e90721d', 'Orson', 'Quality', 'Y'),
(518, 'e90721d', 'Henry', 'Project Mgmt', 'Y'),
(519, 'e90721d', 'Keith', 'Creativity', 'Y'),
(520, 'e90721d', 'George', 'Business Develoment', 'Y'),
(521, 'e90721d', 'James', 'Asset Mgmt', 'Y'),
(522, 'e90721d', 'Dakota', 'Production', 'Y'),
(523, 'e80622', 'Rihanna', 'Quality', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employetable`
--
ALTER TABLE `employetable`
  ADD PRIMARY KEY (`pno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employetable`
--
ALTER TABLE `employetable`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=525;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
