-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2021 at 07:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sn` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sn`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studentbio`
--

CREATE TABLE `studentbio` (
  `sn` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL DEFAULT '-',
  `phone` varchar(15) NOT NULL DEFAULT '-',
  `mail` varchar(50) NOT NULL DEFAULT '-',
  `dob` varchar(10) NOT NULL DEFAULT '-',
  `placeofbirth` varchar(50) NOT NULL DEFAULT '-',
  `state` varchar(50) NOT NULL,
  `religion` varchar(15) NOT NULL DEFAULT '-',
  `contactaddress` varchar(100) NOT NULL DEFAULT '-',
  `homeaddress` varchar(100) NOT NULL DEFAULT '-',
  `bloodgroup` varchar(3) NOT NULL DEFAULT '-',
  `disability` varchar(20) NOT NULL DEFAULT '-',
  `sponsor` varchar(15) NOT NULL DEFAULT '-',
  `nk_name` varchar(40) NOT NULL DEFAULT '-',
  `nk_phone` varchar(15) NOT NULL DEFAULT '-',
  `nk_relationship` varchar(50) NOT NULL,
  `nk_address` varchar(70) NOT NULL DEFAULT '-',
  `regno` varchar(25) NOT NULL DEFAULT '-',
  `currentLevel` varchar(15) NOT NULL DEFAULT '',
  `profilepic` varchar(200) NOT NULL DEFAULT '../profilePics/trust.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentbio`
--

INSERT INTO `studentbio` (`sn`, `fname`, `sname`, `oname`, `gender`, `phone`, `mail`, `dob`, `placeofbirth`, `state`, `religion`, `contactaddress`, `homeaddress`, `bloodgroup`, `disability`, `sponsor`, `nk_name`, `nk_phone`, `nk_relationship`, `nk_address`, `regno`, `currentLevel`, `profilepic`) VALUES
(0, 'muhammed', 'garba', 'other', 'Male', '08169895827', 'muhdmuhd158@gmail.com', '2000-01-01', 'Misau', 'Bauchi', 'Islam', 'Contact', 'Home', 'O-', 'None', 'Parent', 'sadi garba', '08169895827', 'Brother', 'Home', '1023', '2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
