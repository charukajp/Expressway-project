-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 11:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expressway`
--

-- --------------------------------------------------------

--
-- Table structure for table `busdetails`
--

CREATE TABLE `busdetails` (
  `BusNo` varchar(8) NOT NULL,
  `BusName` varchar(30) NOT NULL,
  `BusRoot` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busdetails`
--

INSERT INTO `busdetails` (`BusNo`, `BusName`, `BusRoot`, `Contact`) VALUES
('SN01', 'Pehesara_Express', 'Makubura', '0786534567'),
('SN02', 'Ummda_Express', 'Kadawatha', '0767654345'),
('SN03', 'Kerala', 'Galle', '0775434567');

-- --------------------------------------------------------

--
-- Table structure for table `rootdetails`
--

CREATE TABLE `rootdetails` (
  `RootNum` varchar(8) NOT NULL,
  `Distance` varchar(20) NOT NULL,
  `TicketPrice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rootdetails`
--

INSERT INTO `rootdetails` (`RootNum`, `Distance`, `TicketPrice`) VALUES
('R01', '90km', '400'),
('R02', '100km', '800'),
('R03', '80km', '500');

-- --------------------------------------------------------

--
-- Table structure for table `shedule`
--

CREATE TABLE `shedule` (
  `Timeslot_Num` varchar(8) NOT NULL,
  `ArrivalTime` varchar(8) NOT NULL,
  `DepartureTime` varchar(8) NOT NULL,
  `EndTime` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shedule`
--

INSERT INTO `shedule` (`Timeslot_Num`, `ArrivalTime`, `DepartureTime`, `EndTime`) VALUES
('TM01', '08:30', '09:00', '14:30'),
('TM02', '10:30', '11:00', '17:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busdetails`
--
ALTER TABLE `busdetails`
  ADD PRIMARY KEY (`BusNo`);

--
-- Indexes for table `rootdetails`
--
ALTER TABLE `rootdetails`
  ADD PRIMARY KEY (`RootNum`);

--
-- Indexes for table `shedule`
--
ALTER TABLE `shedule`
  ADD PRIMARY KEY (`Timeslot_Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
