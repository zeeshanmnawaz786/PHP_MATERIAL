-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 09:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hs_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `p_name`, `d_name`, `day`, `start_time`, `end_time`) VALUES
(1, 'first patient', 'first doctor', 'monday', '12:30', '112'),
(5, 'Malik Lewis', 'Judah Boyle', 'Wednesday', '07:27', '19:51'),
(6, 'Caryn Wiggins', 'Dana Hale', 'Wednesday', '12:20', '12:57'),
(7, 'Maggy Bernard', 'Jorden Roberts', 'Tuesday', '17:39', '15:53'),
(8, 'aaaa', 'bbbb', 'Monday', '04:10', '13:10'),
(9, 'Keane Baker', 'Scarlet Lowery', 'Friday', '03:11', '19:10'),
(10, 'Branden Vance', 'Claudia Adkins', 'Monday', '10:08', '00:29');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `gender`) VALUES
(1, 'Dr. Haris', 'haris@gmail.com', 'male'),
(2, 'Jorden Roberts', 'kaxybunybo@mailinator.com', 'Nam consectetur inc'),
(7, 'Dana Hale', 'bevujid@mailinator.com', 'Lorem dignissimos co'),
(8, 'Kylee Cunningham', 'jenonolovu@mailinator.com', 'Fugiat tempore et '),
(9, 'Claudia Adkins', 'wojoqyz@mailinator.com', 'Est labore rerum dol'),
(10, 'Ginger Melton', 'poga@mailinator.com', 'Suscipit maxime magn'),
(11, 'Scarlet Lowery', 'pokuqekalu@mailinator.com', 'Magni sed doloremque'),
(12, 'bbbb', 'pokyra@mailinator.com', 'Sed irure repudianda');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `address`, `gender`) VALUES
(1, 'Dr. Haris', 'haris@gmail.com', 'house # 24', 'female'),
(7, 'Keane Baker', 'dawyvifi@mailinator.com', 'Dolore velit id exce', 'Incidunt est cupid'),
(8, 'Ivy Johns', 'fixi@mailinator.com', 'Velit et veniam ad', 'Consequatur Eos as'),
(9, 'Lunea Fernandez', 'botuje@mailinator.com', 'Totam quaerat exerci', 'Nostrum esse molesti'),
(10, 'Branden Vance', 'tepag@mailinator.com', 'Quidem incidunt nos', 'Ex et qui dolorem si'),
(11, 'Maggy Bernard', 'zemi@mailinator.com', 'Aut corporis dolore ', 'Aut eum eos vitae ut'),
(12, 'Rhiannon Berg', 'zifynimewy@mailinator.com', 'Cupidatat neque quis', 'Ea dolore et quia mo'),
(13, 'aaaa', 'letum@mailinator.com', 'Assumenda et tempora', 'Molestiae eiusmod co');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'zmnawaz', 'zeeshan@gmail.com', '12345'),
(2, 'xihatizi', 'purin@mailinator.com', 'Pa$$w0rd!'),
(3, 'gijovivu', 'kyfo@mailinator.com', 'Pa$$w0rd!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
