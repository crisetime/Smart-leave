-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 03:11 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-leavesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_leave`
--

CREATE TABLE `apply_for_leave` (
  `emp_id` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `reason` text,
  `address_when_out_of_station` text,
  `contact_no` varchar(10) DEFAULT NULL,
  `date_of_apply` date NOT NULL,
  `leave_type` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_for_leave`
--

INSERT INTO `apply_for_leave` (`emp_id`, `department`, `leave_from`, `leave_to`, `reason`, `address_when_out_of_station`, `contact_no`, `date_of_apply`, `leave_type`, `status`) VALUES
('2016ca78', 'csed', '2018-11-03', '2018-11-06', 'going to submit the research papers.', 'kerela', '8081857340', '2018-11-02', 'commuted', 'sanctioned'),
('2016ca78', 'csed', '2018-11-15', '2018-11-17', 'fever', 'varanasi', '8081857340', '2018-11-15', 'commuted', 'pending'),
('2016ca78', 'csed', '2018-11-16', '2018-11-19', 'CGHHFTRT', '218c/3a jayantipur sulem-sarai, 218c/3a jayantipur', '4475100021', '2018-11-15', 'commuted', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `emp_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `department` varchar(30) NOT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`emp_id`, `fname`, `lname`, `email_id`, `password`, `designation`, `department`, `gender`) VALUES
('2016ca78', 'sangeetha', 'ps', 'sangeethaps2894@gmail.com', 'sangeetha', 'associate_professor', 'csed', 'female'),
('2016ca89', 'tripti', 'verma', 'vermatripti31@gmail.com', '12345678', 'lecturar', 'csed', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `s_no` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`s_no`, `name`, `contact_no`, `category`, `feedback`) VALUES
(1, 'fnjuyt', 1000000002, 'complain', 'do good.'),
(2, 'fnjuyt', 1000000002, 'complain', 'do good.'),
(4, 'qwerty', 1000000002, 'complain', 'do hurry up!'),
(5, 'tripti', 1000000006, 'Other', 'proceed '),
(6, 'manu', 1000000004, 'complain', 'nbhytreswqa'),
(7, 'komal', 8563856320, 'Other', 'good UI'),
(8, 'tripti', 0, 'complain', 'fdjnhjhnjdshnujh');

-- --------------------------------------------------------

--
-- Table structure for table `leave_details`
--

CREATE TABLE `leave_details` (
  `name_of_leave` varchar(100) NOT NULL,
  `days` smallint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_providers`
--

CREATE TABLE `leave_providers` (
  `head_id` varchar(20) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remaining_leave`
--

CREATE TABLE `remaining_leave` (
  `emp_id` varchar(20) NOT NULL,
  `commuted` tinyint(4) NOT NULL DEFAULT '16',
  `earn` tinyint(4) NOT NULL DEFAULT '30',
  `half_pay` tinyint(4) NOT NULL,
  `medical` tinyint(4) NOT NULL DEFAULT '30',
  `special_cl` tinyint(4) NOT NULL DEFAULT '15',
  `restricted` tinyint(4) NOT NULL DEFAULT '2',
  `vacation` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remaining_leave`
--

INSERT INTO `remaining_leave` (`emp_id`, `commuted`, `earn`, `half_pay`, `medical`, `special_cl`, `restricted`, `vacation`) VALUES
('2016ca78', 5, 15, 15, 15, 15, 2, 28),
('2016ca89', 8, 15, 15, 15, 15, 2, 28);

-- --------------------------------------------------------

--
-- Table structure for table `request_for_consent`
--

CREATE TABLE `request_for_consent` (
  `emp_id` varchar(255) NOT NULL,
  `req_id` varchar(255) NOT NULL,
  `date_of_req` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tinetable`
--

CREATE TABLE `tinetable` (
  `semester` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinetable`
--

INSERT INTO `tinetable` (`semester`, `file`, `path`) VALUES
(1, 'sem1', 'C:\\xampp\\htdocs\\e-leave\\sample\\tmtl\\sem1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
  ADD PRIMARY KEY (`emp_id`,`leave_from`,`leave_to`,`leave_type`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `s_no` (`s_no`);

--
-- Indexes for table `leave_details`
--
ALTER TABLE `leave_details`
  ADD PRIMARY KEY (`name_of_leave`) USING BTREE;

--
-- Indexes for table `remaining_leave`
--
ALTER TABLE `remaining_leave`
  ADD PRIMARY KEY (`emp_id`) USING BTREE;

--
-- Indexes for table `request_for_consent`
--
ALTER TABLE `request_for_consent`
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
  ADD CONSTRAINT `apply_for_leave_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `faculty` (`emp_id`);

--
-- Constraints for table `remaining_leave`
--
ALTER TABLE `remaining_leave`
  ADD CONSTRAINT `remaining_leave_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `faculty` (`emp_id`) ON DELETE CASCADE;

--
-- Constraints for table `request_for_consent`
--
ALTER TABLE `request_for_consent`
  ADD CONSTRAINT `request_for_consent_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `faculty` (`emp_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
