-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 09:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swiftair`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `mail` varchar(60) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`mail`, `id`) VALUES
('dulmini@gmail.com', 1),
('yeshmi@gmail.com', 2),
('thamasha@gmail.com', 3),
('shan@gmail.com', 4),
('dinendra@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phnNumber` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `emid` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstName`, `lastName`, `email`, `phnNumber`, `DOB`, `gender`, `emid`, `password`) VALUES
(1, 'Lalith', 'Herath', 'lalith@gmail.com', '0778965432', '1987-08-12', 'm', 'EM1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `flightNo` varchar(10) NOT NULL,
  `origin` varchar(60) NOT NULL,
  `destination` varchar(60) NOT NULL,
  `day` varchar(20) NOT NULL,
  `depTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `flightNo`, `origin`, `destination`, `day`, `depTime`) VALUES
(1, 'CM273', 'Colombo - Sri Lanka (CMB)', 'New York - United States (JFK)', 'Monday', '15:30:00'),
(2, 'JF123', 'New York - United States (JFK)', 'Dubai - United Arab Emirates (DXB)', 'Monday', '08:15:00'),
(3, 'CM345', 'Tokyo - Japan (HND)', 'Colombo - Sri Lanka (CMB)', 'Monday', '11:00:00'),
(4, 'DX190', 'Dubai - United Arab Emirates (DXB)', 'Tokyo - Japan (HND)', 'Monday', '19:30:00'),
(5, 'HN287', 'Colombo - Sri Lanka (CMB)', 'Tokyo - Japan (HND)', 'Tuesday', '10:00:00'),
(6, 'JF567', 'New York - United States (JFK)', 'Tokyo - Japan (HND)', 'Tuesday', '14:45:00'),
(7, 'HN678', 'Tokyo - Japan (HND)', 'Dubai - United Arab Emirates (DXB)', 'Tuesday', '12:20:00'),
(8, 'DX690', 'Dubai - United Arab Emirates (DXB)', 'Colombo - Sri Lanka (CMB)', 'Tuesday', '15:45:00'),
(9, 'CM870', 'Colombo - Sri Lanka (CMB)', 'Dubai - United Arab Emirates (DXB)', 'Wednesday', '09:00:00'),
(10, 'CM273', 'New York - United States (JFK)', 'Colombo - Sri Lanka (CMB)', 'Wednesday', '17:50:00'),
(11, 'DX450', 'Dubai - United Arab Emirates (DXB)', 'New York - United States (JFK)', 'Wednesday', '16:00:00'),
(12, 'HN180', 'New York - United States (JFK)', 'Tokyo - Japan (HND)', 'Wednesday', '13:00:00'),
(13, 'JF271', 'Colombo - Sri Lanka (CMB)', 'New York - United States (JFK)', 'Thursday', '09:15:00'),
(14, 'CM345', 'Colombo - Sri Lanka (CMB)', 'Tokyo - Japan (HND)', 'Thursday', '10:40:00'),
(15, 'DX190', 'Tokyo - Japan (HND)', 'Dubai - United Arab Emirates (DXB)', 'Thursday', '12:00:00'),
(16, 'JF567', 'Tokyo - Japan (HND)', 'New York - United States (JFK)', 'Thursday', '14:30:00'),
(17, 'DX690', 'Colombo - Sri Lanka (CMB)', 'Dubai - United Arab Emirates (DXB)', 'Friday', '11:15:00'),
(18, 'HN678', 'Dubai - United Arab Emirates (DXB)', 'Tokyo - Japan (HND)', 'Friday', '10:45:00'),
(19, 'HN180', 'Tokyo - Japan (HND)', 'New York - United States (JFK)', 'Saturday', '08:30:00'),
(20, 'JF271', 'New York - United States (JFK)', 'Colombo - Sri Lanka (CMB)', 'Saturday', '13:20:00'),
(21, 'JF123', 'Dubai - United Arab Emirates (DXB)', 'New York - United States (JFK)', 'Saturday', '18:30:00'),
(22, 'CM870', 'Dubai - United Arab Emirates (DXB)', 'Colombo - Sri Lanka (CMB)', 'Sunday', '11:00:00'),
(23, 'DX450', 'New York - United States (JFK)', 'Dubai - United Arab Emirates (DXB)', 'Sunday', '19:30:00'),
(24, 'HN287', 'Tokyo - Japan (HND)', 'Colombo - Sri Lanka (CMB)', 'Sunday', '14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobileNo` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `firstname`, `lastname`, `gender`, `dob`, `mobileNo`, `email`, `password`) VALUES
(1, 'mrs', 'Dinushika', 'Jayatissa', 'female', '1987-02-06', '0708960451', 'dinu@gmail.com', 'Dinu87'),
(2, 'mr', 'Kamal', 'Withanage', 'male', '1970-05-19', '0719876542', 'kamal@yahoo.com', 'Kk1970'),
(3, 'miss', 'Dilshani', 'Rajapaksha', 'female', '1986-02-07', '0771110987', 'dilshani@gmail.com', '1986Dr'),
(4, 'mrs', 'Navodhya', 'Samararathna', 'female', '1990-12-11', '0773980678', 'navo@gmail.com', '1234Ns');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
