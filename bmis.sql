-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 07:35 PM
-- Server version: 8.0.36
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `blotter_id` int NOT NULL,
  `blotter_complainant` varchar(30) NOT NULL,
  `blotter_victim` varchar(50) NOT NULL,
  `blotter_type` varchar(50) NOT NULL,
  `blotter_respondent` varchar(20) NOT NULL,
  `blotter_location` varchar(50) NOT NULL,
  `blotter_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`blotter_id`, `blotter_complainant`, `blotter_victim`, `blotter_type`, `blotter_respondent`, `blotter_location`, `blotter_date`) VALUES
(1, 'Mark', 'Jhules', 'Physical Assault', 'Kenneth', 'WVSU', '2024-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `official_id` int NOT NULL,
  `official_firstname` varchar(15) NOT NULL,
  `official_lastname` varchar(20) NOT NULL,
  `official_gender` varchar(20) NOT NULL,
  `official_position` varchar(20) NOT NULL,
  `official_dob` varchar(10) NOT NULL,
  `official_project` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`official_id`, `official_firstname`, `official_lastname`, `official_gender`, `official_position`, `official_dob`, `official_project`) VALUES
(3, 'Kenneth', 'Balayon', 'Male', 'Punong Baranggay', '2024-05-06', 'Project 1'),
(4, 'Kenneth', 'Balayon', 'Female', 'Punong Baranggay', '2024-05-06', 'Project 3');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `resident_id` int NOT NULL,
  `resident_firstname` varchar(20) NOT NULL,
  `resident_lastname` varchar(20) NOT NULL,
  `resident_gender` varchar(10) NOT NULL,
  `resident_dob` varchar(10) NOT NULL,
  `resident_civilstatus` varchar(10) NOT NULL,
  `resident_project` varchar(10) NOT NULL,
  `resident_contact` int NOT NULL,
  `resident_householdnumber` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`resident_id`, `resident_firstname`, `resident_lastname`, `resident_gender`, `resident_dob`, `resident_civilstatus`, `resident_project`, `resident_contact`, `resident_householdnumber`) VALUES
(1, 'mark', 'Servando', 'Male', '12313', 'Single', 'Project 1', 912324, '1231321');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_firstname` varchar(20) NOT NULL,
  `user_lastname` varchar(15) NOT NULL,
  `user_email` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`) VALUES
(7, 'Mark', 'Servando', 'mark@gmai.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`blotter_id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`official_id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `blotter_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `official_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `resident_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
