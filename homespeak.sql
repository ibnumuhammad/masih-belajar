-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 06:20 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `homespeak`
--

-- --------------------------------------------------------

--
-- Table structure for table `controllers`
--

CREATE TABLE `controllers` (
  `id` varchar(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `input1` varchar(100) NOT NULL,
  `input2` varchar(100) NOT NULL,
  `input3` varchar(100) NOT NULL,
  `input4` varchar(100) NOT NULL,
  `input5` varchar(100) NOT NULL,
  `input6` varchar(100) NOT NULL,
  `input7` varchar(100) NOT NULL,
  `input8` varchar(100) NOT NULL,
  `output1` varchar(100) NOT NULL,
  `output2` varchar(100) NOT NULL,
  `output3` varchar(100) NOT NULL,
  `output4` varchar(100) NOT NULL,
  `output5` varchar(100) NOT NULL,
  `output6` varchar(100) NOT NULL,
  `output7` varchar(100) NOT NULL,
  `output8` varchar(100) NOT NULL,
  `extender1` varchar(100) NOT NULL,
  `extender2` varchar(100) NOT NULL,
  `extender3` varchar(100) NOT NULL,
  `extender4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `controllers`
--

INSERT INTO `controllers` (`id`, `name`, `phone`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `output1`, `output2`, `output3`, `output4`, `output5`, `output6`, `output7`, `output8`, `extender1`, `extender2`, `extender3`, `extender4`) VALUES
('HS0001', 'Tugas Akhir SK 2018', '082126229912', 'Input 1,1', 'Input 2,1', 'Input 3,1', 'Input 4,1', 'Input 5,0', 'Input 6,0', 'Input 7,0', 'Input 8,0', 'Output 1,1,8,17,0', 'Output 2,1,17,5,0', 'Output 3,2,17,5,0', 'Output 4,2,17,5,1', 'Output 5,0,17,5,0', 'Output 6,0,17,5,0', 'Output 7,0,17,5,0', 'Output 8,0,17,5,0', 'Extender 1', 'Extender 2', 'Extender 3', 'Extender 4');

-- --------------------------------------------------------

--
-- Table structure for table `ext_logs`
--

CREATE TABLE `ext_logs` (
  `no` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `id` varchar(10) NOT NULL,
  `ext_no` enum('1','2','3','4') NOT NULL,
  `type` enum('rfid_door','security_camera') NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `io_logs`
--

CREATE TABLE `io_logs` (
  `no` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `id` varchar(10) NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io_logs`
--

INSERT INTO `io_logs` (`no`, `time`, `id`, `data`) VALUES
(1, '2018-07-03 20:01:00', 'HS0001', '0100000001010000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `phone` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`phone`, `email`, `name`) VALUES
('082126229912', 'ismailsmakhus@gmail.com', 'Ismail'),
('082349889939', 'ibnumuhammadhamri@gmail.com', 'Ibnu Muhammad Hamri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controllers`
--
ALTER TABLE `controllers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `ext_logs`
--
ALTER TABLE `ext_logs`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `io_logs`
--
ALTER TABLE `io_logs`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ext_logs`
--
ALTER TABLE `ext_logs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `io_logs`
--
ALTER TABLE `io_logs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `controllers`
--
ALTER TABLE `controllers`
  ADD CONSTRAINT `controllers_ibfk_1` FOREIGN KEY (`phone`) REFERENCES `users` (`phone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ext_logs`
--
ALTER TABLE `ext_logs`
  ADD CONSTRAINT `ext_logs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `controllers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `io_logs`
--
ALTER TABLE `io_logs`
  ADD CONSTRAINT `io_logs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `controllers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
