-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 08:05 PM
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
-- Database: `deliveryman`
--

-- --------------------------------------------------------

--
-- Table structure for table `complainfile`
--

CREATE TABLE `complainfile` (
  `customerOrderId` int(30) NOT NULL,
  `orderDate` varchar(30) NOT NULL,
  `complainFile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainfile`
--

INSERT INTO `complainfile` (`customerOrderId`, `orderDate`, `complainFile`) VALUES
(1, '2021-12-16', 'dcfgvbh'),
(2, '2021-12-14', 'Didn\'t pay'),
(3, '2021-12-22', 'jkhg');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryhistory`
--

CREATE TABLE `deliveryhistory` (
  `OrderID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `MedicineCodes` varchar(50) NOT NULL,
  `Quantities` varchar(50) NOT NULL,
  `GrandTotal` varchar(50) NOT NULL,
  `deliveryStatus` varchar(50) NOT NULL,
  `deliveredBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deliverymaninfo`
--

CREATE TABLE `deliverymaninfo` (
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `gender` varchar(19) NOT NULL,
  `dateOfBirth` varchar(30) NOT NULL,
  `religion` varchar(19) NOT NULL,
  `presentAddress` varchar(70) NOT NULL,
  `permanentAddress` varchar(70) NOT NULL,
  `phone` varchar(19) NOT NULL,
  `email` varchar(50) NOT NULL,
  `personalWebsiteLink` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(19) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverymaninfo`
--

INSERT INTO `deliverymaninfo` (`firstName`, `lastName`, `gender`, `dateOfBirth`, `religion`, `presentAddress`, `permanentAddress`, `phone`, `email`, `personalWebsiteLink`, `username`, `password`, `role`) VALUES
('Api', 'Alam', 'Male', '2021-12-08', 'Islam', 'iouhjg', 'dfg', '87654321q', 'api@gmail.com', 'file:///C:/xampp/htdocs/form-submission/form.html', 'api', '123', 'Delivery man'),
('Arpi', 'Saha', 'Female', '2021-12-14', 'Hindu', 'sdfr', 'yghujkl', '765', 'ar@gmail.com', 'http://localhost/mid-project/deliveryRegistration.', 'ar', '123', 'Delivery man'),
('Ayesha', 'Akhtar', 'Female', '2021-11-16', 'Islam', 'Dhaka', 'Dhaka', '3454567', 'ayesha@gmail.com', 'http://localhost/mid-project/views/deliveryRegistr', 'ayesha', '123', 'Delivery man'),
('Dibya', 'Jyoti', 'Male', '2021-11-16', 'Hindu', 'tangail', 'Tangail', '76543', 'dibyajyotihore.djh16@gmail.com', 'file:///C:/xampp/ht-submission/form.htm', 'Dipto', '123', 'Delivery man'),
('Rajib', 'Hassan', 'Male', '2021-11-09', 'Islam', 'dfghj', 'jhbgfd', '87654', 'rajib@gmail.com', 'file:///C:/xampp/ht-susion/form.htm', 'rajib', '123', 'Delivery man'),
('Riyad', 'Khan', 'Male', '2021-12-14', 'Islam', 'sxdcf', 'fds', '098765', 'riyad@gmail.com', 'http://localhost/phpmyadmin/', 'riyad', '123', 'Delivery man');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `OrderID` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `MedicineCodes` varchar(30) NOT NULL,
  `Quantities` varchar(30) NOT NULL,
  `GrandTotal` varchar(50) NOT NULL,
  `deliveryStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`OrderID`, `Username`, `MedicineCodes`, `Quantities`, `GrandTotal`, `deliveryStatus`) VALUES
('1', 'ayesha', '123', '5', '150', 'Accept'),
('10', 's2', '347', '5', '380', 'Canceled'),
('2', 'dibya', '234', '3', '100', 'Delivered'),
('3', 'r1', '654', '2', '70', 'Accept'),
('4', 's1', '789', '7', '700', 'Accept'),
('5', 'd1', '654', '4', '300', 'Delivered'),
('6', 't1', '098', '1', '50', 'Canceled'),
('7', 'tonmoy', '765', '4', '321', 'Canceled'),
('8', 'abid', '746', '6', '890', 'Delivered'),
('9', 'rayhan', '546', '987', '230', 'Delivered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complainfile`
--
ALTER TABLE `complainfile`
  ADD PRIMARY KEY (`customerOrderId`);

--
-- Indexes for table `deliverymaninfo`
--
ALTER TABLE `deliverymaninfo`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `personalWebsiteLink` (`personalWebsiteLink`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`OrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complainfile`
--
ALTER TABLE `complainfile`
  MODIFY `customerOrderId` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
