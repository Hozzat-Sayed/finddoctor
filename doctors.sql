-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 03:59 PM
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
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `field` varchar(1000) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `qualification`, `field`, `hospital`, `district`) VALUES
(1, 'ডাঃ শামীমা আক্তার', 'এমবিবিএস, এফসিফিএস', 'Gynocology', 'যশোর সদর হাসপাতাল যশোর', 'Jashore'),
(2, 'ডাঃ খালেদ মাহমুদ', 'এমবিবিএস, এফসিপিএস পার্ট-২', 'Medicine', 'কুইন্স হাসাপাতাল', 'Jashore'),
(3, 'ডাঃ হালিমা খাতুন', 'এমবিবিএস, এফসিপিএস', 'Pediatrics', 'ইবনে সিনা হাসপাতাল, যশোর সদর', 'Jashore'),
(4, 'ডাঃ রমজান আলি', 'এমবিবিএস, এফসিপিএস', 'Eye', 'জেনেসিস হাসপাতাল, যশোর সদর', 'Jashore'),
(5, 'ডাঃ সুভাষ চন্দ্র', 'এমবিবিএস, এফসিফিএস', 'Nose, Ear and Neck', 'আদ দ্বীন মেডিকেল কলেজ এন্ড হসপিটাল, চিত্রা মোড়', 'Jashore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
