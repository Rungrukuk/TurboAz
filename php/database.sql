-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 05:23 PM
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
(4, 'tgrl@gmail.com', 'toyota', 'ae86', 'sedan', '0km', 'ag', '150000', 'benzin', 'on', 'mexaniki', '1986', '4l', '300', 'Togrulun masini', 'toyotaae.png', 1, 'toyotaae1.jpg'),
(6, 'yusif@gmail.com', 'zapi', '89', 'sedan', '120000', 'sari', '1000', 'dizel', 'arxa', 'mexaniki', '1989', '2l', '150', 'yusifin emaneti', 'zapi.jpg', 1, 'zapi1.jpg'),
(7, 'Zelenski@gmail.com', 'Tank', 'kkt2002', 'tank', '0km', 'sari', '1000001', 'dizel', 'her ikisi', 'avtomat', '2002', '10l', '300', 'Zelenskinin oz tanki barter var', 'tank.jpg', 1, 'tank1.jpg'),
(5, 'elesger@gmail.com', 'batmobile', 'io', 'sedan', '0km', 'qara', '999999', 'dizel', 'on', 'mexaniki', '2200', '7l', '600', 'batmabn Elesger', 'batmobile.jfif', 1, 'batmobile1.jpg'),
(1, 'kamilo09ya@gmail.com', 'Lexus', 'Smth', 'sedan', '150,000 km', 'mavi', '300000', 'benzin', 'Arxa', 'Mexaniki', '2022', '2.5 L', '300', 'qezasiz', 'lexus.jpg', 1, 'lexus1.jpg'),
(3, 'lkrimov54@gmail.com', 'ford', 'mustang', 'sedan', '0km', 'qara', '1000000', 'benzin', 'on', 'mexaniki', '1969', '3l', '300', 'Ela veziyyetdedir', 'FordMustang.jpg', 1, 'FordMustang1.jpg'),
(2, 'kamal@gmail.com', 'BMW', 'i8', 'sedan', '350,000 km', 'qirmizi', '250000', 'benzin', 'Arxa', 'Mexaniki', '2020', '3.5 L', '300', 'ela veziyyetdedir', 'BMW-i8-Coupe-2020.jpg', 1, 'bmwi8.jpg');

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
(6, 'Kamal Əzizov', 'kamilo09ya@gmail.com', '489', 'Sumqayıt', '$2y$10$OBhCI3ACvvppTFN2d5FJ1e3fhxVyL8MjrbDobjeQE4lWvY2qmUYg.'),
(8, 'admin', 'admin@gmail.com', '748912', 'admin', '$2y$10$HgopiidueICGXS3c6TT5YeqzRL1ZGJo5Qlm20hFzbOaNWsElJwxBu'),
(9, 'Togrul Suleymanov', 'tgrl@gmail.com', '4565', 'Baki', '$2y$10$0o1PSTsj8WLIkv9pW19cV.vdmyrPLVNCI1yF1jxsqPCW84JDjEp4m'),
(10, 'Ali Kerimov', 'lkrimov54@gmail.com', '459', 'Baki', '$2y$10$TYN7x./t385AFeZf2ypNIetXp.siwwdJ2v7frm6utmrkgBMPwWVF.'),
(11, 'Elesger Şükürzadə', 'elesger@gmail.com', '48597', 'Baki', '$2y$10$rQ3l1e8KfhE7I8f9iHDLoOIlgCX4lVvNt.ny/KvXeNj/IN6FDjag.'),
(12, 'Yusif Hesenov', 'yusif@gmail.com', '756', 'Baki', '$2y$10$.jlTKXXAXZTmK5tj2MXOsONW7F.rVYvdTCvXOufHUB/OyXvqHjS7K'),
(13, 'Zelenski pyotr', 'Zelenski@gmail.com', '7532', 'Krim', '$2y$10$KWxtwVVbJA8IT7GJpKPpiusjrbh9Od6e3DpE2EumkFmrpUkI.t7zi'),
(14, 'Kamal Əzizov', 'kamal@gmail.com', '48645', 'Sumqayıt', '$2y$10$wNQgMe9B0oqOyv0c5FmW9eUmAD0E8Nzo23gmEFpJFmbkCUNRaG7ay'),
(15, 'Kamal Əzizov', 'nese@gmail.com', '12564878', 'Sumqayıt', '$2y$10$VGuJrbguuNcRlNJpR80Yy.DagcxZ1SA3MWdqhWwl0FD8zmcgyCoAu');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;
