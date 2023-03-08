-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 03:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `turboaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carinfo`
--

CREATE TABLE `carinfo` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `bannovu` varchar(100) NOT NULL,
  `yurus` varchar(50) NOT NULL,
  `reng` varchar(50) NOT NULL,
  `qiymet` varchar(50) NOT NULL,
  `yanacaq` varchar(50) NOT NULL,
  `oturucu` varchar(50) NOT NULL,
  `suretqutusu` varchar(50) NOT NULL,
  `buraxilisili` varchar(20) NOT NULL,
  `muherrikinhecmi` varchar(20) NOT NULL,
  `muherrikingucu` varchar(20) NOT NULL,
  `elavemelumat` varchar(500) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `img_name2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carinfo`
--

INSERT INTO `carinfo` (`id`, `email`, `marka`, `model`, `bannovu`, `yurus`, `reng`, `qiymet`, `yanacaq`, `oturucu`, `suretqutusu`, `buraxilisili`, `muherrikinhecmi`, `muherrikingucu`, `elavemelumat`, `img_name`, `status`, `img_name2`) VALUES
(14, 'nese@gmail.com', 'KIA', 'S Class', 'Avtobus', '1000', 'Qara', '500', 'Benzin', 'Arxa', 'Mexaniki', '2022', '50', '600', '', 'batmobile.jfif', 1, 'batmobile1.jpg'),
(15, 'kamilo09ya@gmail.com', 'KIA', 'KIA', 'Kupe', '1000', 'Goy', '500', 'Benzin', 'On', 'Avtomat', '2019', '150', '700', 'Bomba Veziyyetdedir', 'FordMustang.jpg', 1, 'FordMustang1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fullname`, `email`, `number`, `city`, `password`) VALUES
(15, 'Kamal Əzizov', 'nese@gmail.com', '12564878', 'Sumqayıt', '$2y$10$VGuJrbguuNcRlNJpR80Yy.DagcxZ1SA3MWdqhWwl0FD8zmcgyCoAu'),
(16, 'Kamal Əzizov', 'kamilo09ya@gmail.com', '14', 'Sumqayıt', '$2y$10$8CVTDcfy1M1GEsU2RJXPpOMMLiXlG9kHbb427YexSPoRZAXCiMb7.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carinfo`
--
ALTER TABLE `carinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `number` (`number`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carinfo`
--
ALTER TABLE `carinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;
