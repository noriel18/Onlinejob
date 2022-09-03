-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 09:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `itlogin_users`
--

CREATE TABLE `itlogin_users` (
  `user_id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `locations` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itlogin_users`
--

INSERT INTO `itlogin_users` (`user_id`, `firstname`, `lastname`, `middlename`, `email`, `locations`, `occupation`, `birthday`, `gender`) VALUES
(1, 'joshua', 'noriel', 'hugar', 'joshuanoriel14@gmail.com', 'brgy olla majayjay laguna', 'student', '1990-01-23', 'Male'),
(2, 'dsa', 'dsa', 'dsa', 'dasd', 'dasd', 'dsad', '0000-00-00', 'dsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itlogin_users`
--
ALTER TABLE `itlogin_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itlogin_users`
--
ALTER TABLE `itlogin_users`
  MODIFY `user_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
