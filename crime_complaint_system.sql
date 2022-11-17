-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:25 PM
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
-- Database: `crime_complaint_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `complaint_id` int(11) NOT NULL,
  `officer_id` int(11) NOT NULL,
  `actions` text NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`complaint_id`, `officer_id`, `actions`, `update_date`) VALUES
(2, 20, 'Case is registered ', '2022-11-19'),
(15, 1, 'Complaint filed as case. Some of the suspects are interrogated', '2022-10-22'),
(19, 21, 'Case is filed soon because is sesitive case and investigations are started from the child\'s house.', '2022-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `caseid` int(11) NOT NULL,
  `case_status` varchar(10) NOT NULL,
  `case_type` varchar(15) NOT NULL,
  `case_name` varchar(50) NOT NULL,
  `register_date` date NOT NULL,
  `finished_date` date DEFAULT NULL,
  `summary` text NOT NULL,
  `complaint_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `case_status`, `case_type`, `case_name`, `register_date`, `finished_date`, `summary`, `complaint_id`) VALUES
(1, 'new', 'theft', 'lost phone', '2022-10-20', NULL, 'Phone lost at market', 15),
(2, 'new', 'Theft', 'Loss purse', '2022-11-02', NULL, 'Case is filed on 2nd November', 2),
(95, 'new', 'kidnap', 'Kidnap child', '2022-11-04', NULL, 'Complainant statement 1', 19),
(226, 'new', 'Murder', 'Murder', '2022-11-17', NULL, 'complainant statement2 and investigation details', 10);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `user_id` varchar(20) NOT NULL,
  `complaint_date` date NOT NULL,
  `complaint_title` varchar(20) NOT NULL,
  `statement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `type`, `user_id`, `complaint_date`, `complaint_title`, `statement`) VALUES
(2, 'new', 'Keerthana19', '2022-11-01', 'money purse loss', 'I lost my purse at market'),
(10, 'new', 'Keerthana19', '2022-11-03', 'Murder at market', '2 people were found as dead bodies near the market.'),
(15, 'truth', 'Keerthana19', '2022-10-19', 'loss phone', 'Loss phone at my workplace'),
(17, 'new', 'Keerthana19', '2022-11-03', 'Bank robbery', 'Bank is attacked by masked 4 people and all the money was robbed'),
(19, 'new', 'Keerthana19', '2022-11-02', 'Kidnap', 'some people kidnapped little boy near my house'),
(29, 'new', 'Sangee21', '2022-11-16', 'Chain snatching', 'Snatched chain in public'),
(30, 'new', 'Sangee21', '2022-11-16', 'Chain snatching', 'Snatched chain in public'),
(31, 'new', 'Kamala2002', '2022-11-12', 'Robbery at house', 'Money was robbed in house\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `officer_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `post` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`officer_id`, `name`, `phone_no`, `post`, `user_id`, `password`) VALUES
(1, 'Sanjiv', 775581947, 'Senior officer', 'sangiv12', 'sfdbgfnbghngj'),
(20, 'Malini', 77854963, 'Junior Inspector', 'Malini18', '21232f297a57a5a743894a0e4a801fc3'),
(21, 'Nimalan', 778946321, 'Senior', 'nim12', 'c84258e9c39059a89ab77d846ddab909'),
(22, 'Malini', 7789456, 'junior', 'mal48', '26a91342190d515231d7238b0c5438e1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `name`, `occupation`, `address`, `phoneno`, `nic`, `type`) VALUES
('Kamala2002', '202cb962ac59075b964b07152d234b70', 'Kamala', 'Student', 'Kandy', 77558469, '985547891V', 'clean'),
('Keerthana19', '900150983cd24fb0d6963f7d28e17f72', 'Keerthana', 'Student', 'Trincomalee', 775571948, '975573496V', 'clean'),
('Sangee21', '81dc9bdb52d04dc20036dbd8313ed055', 'Sangeetha', 'Student', 'Jaffna', 77845963, '98554712V', 'clean');

-- --------------------------------------------------------

--
-- Table structure for table `witness`
--

CREATE TABLE `witness` (
  `witnessid` int(11) NOT NULL,
  `date` date NOT NULL,
  `statement` text NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `caseid` int(11) NOT NULL,
  `Trust` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `witness`
--

INSERT INTO `witness` (`witnessid`, `date`, `statement`, `user_id`, `caseid`, `Trust`) VALUES
(2, '2022-10-22', 'I saw some suspects roaming around before incident happened', 'Keerthana19', 1, 'clean'),
(7, '2022-11-26', 'I saw one suspect before last night', 'Kamala2002', 2, 'truth'),
(19, '2022-11-06', 'I saw one person was roaming around the kidnapped child\'s house for one week.', 'Kamala2002', 95, 'clean');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`complaint_id`,`officer_id`),
  ADD KEY `officer_id` (`officer_id`),
  ADD KEY `complaint_id` (`complaint_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseid`),
  ADD UNIQUE KEY `complaint_id` (`complaint_id`),
  ADD UNIQUE KEY `complaint_id_2` (`complaint_id`),
  ADD UNIQUE KEY `complaint_id_3` (`complaint_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`officer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `phone_no_2` (`phone_no`),
  ADD UNIQUE KEY `phone_no_3` (`phone_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `witness`
--
ALTER TABLE `witness`
  ADD PRIMARY KEY (`witnessid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `caseid` (`caseid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `officer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `witness`
--
ALTER TABLE `witness`
  MODIFY `witnessid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action_ibfk_1` FOREIGN KEY (`officer_id`) REFERENCES `officer` (`officer_id`),
  ADD CONSTRAINT `action_ibfk_2` FOREIGN KEY (`complaint_id`) REFERENCES `complaint` (`complaint_id`);

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `complaint` (`complaint_id`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `witness`
--
ALTER TABLE `witness`
  ADD CONSTRAINT `witness_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `witness_ibfk_2` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
