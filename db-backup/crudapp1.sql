-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 10:42 AM
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
-- Database: `crudapp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcourse`
--

CREATE TABLE `tbl_addcourse` (
  `course_id` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addcourse`
--

INSERT INTO `tbl_addcourse` (`course_id`, `coursename`) VALUES
(1, 'BCA'),
(2, 'MCA'),
(3, 'B.tech'),
(4, 'M.tech');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addstudents`
--

CREATE TABLE `tbl_addstudents` (
  `stid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addstudents`
--

INSERT INTO `tbl_addstudents` (`stid`, `firstname`, `lastname`, `email`, `phone`, `course_id`) VALUES
(1, 'dixit', 'pandya', 'dixi@gmail.com', 9998003879, 1),
(2, 'hiten', 'pandya', 'hiten@gmail.com', 88887965878, 2),
(3, 'yash', 'pandya', 'yash@gmail.com', 9998003879, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addcourse`
--
ALTER TABLE `tbl_addcourse`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_addstudents`
--
ALTER TABLE `tbl_addstudents`
  ADD PRIMARY KEY (`stid`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addcourse`
--
ALTER TABLE `tbl_addcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_addstudents`
--
ALTER TABLE `tbl_addstudents`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
