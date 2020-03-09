-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:44 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `samplee`
--

CREATE TABLE `samplee` (
  `Register` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Father_Name` varchar(500) NOT NULL,
  `Mother_Name` varchar(500) NOT NULL,
  `Gender` varchar(500) NOT NULL,
  `Date_Of_Birth` varchar(500) NOT NULL,
  `Class_Roll_No` varchar(500) NOT NULL,
  `Branch` varchar(500) NOT NULL,
  `Semester` varchar(500) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Phone_Number` bigint(10) NOT NULL,
  `Email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samplee`
--

INSERT INTO `samplee` (`Register`, `Name`, `Father_Name`, `Mother_Name`, `Gender`, `Date_Of_Birth`, `Class_Roll_No`, `Branch`, `Semester`, `Category`, `Address`, `Phone_Number`, `Email`) VALUES
('', 'qwert', 'uio', 'asd', 'Male', '2020-01-01', '12', 'Electrical', '4', 'SC', 'Addres', 123456789, ''),
('123456', 'qwerty', 'uiop', 'asdf', 'Male', '2020-01-03', '123', 'Computer', '1', 'ST', 'Address', 1234567890, 'ramanpreetsaini3035@gmail.com'),
('17017620253', 'erfv', 'dcsd', 'cfv v', 'Male', '2020-01-18', '106', 'Electrical', '2', 'SC', 'Address', 1234567890, 'email@gmail.com'),
('3', 'qwerty', 'e', 'rr43', 'Male', '2020-01-20', '64', 'Civil', '2', 'Fee Weavier', 'Kishore Nagar', 12345, 'gmail@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `samplee`
--
ALTER TABLE `samplee`
  ADD PRIMARY KEY (`Register`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
