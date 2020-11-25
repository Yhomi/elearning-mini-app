-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 12:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `category`, `created_at`) VALUES
(1, 'Test One', 'test1@test.com', '$2y$10$6/.nBFiFDjBfT.tzdp4Qz.5K/DVpugTvfoXo7uYjgLrq9WGSZiw4y', 'mentee', '2020-11-24 20:39:18'),
(2, 'John Doe', 'jdoe@gmail.com', '$2y$10$3DVLZrwaghEzEVfil/K0gebsl//MAjmE8NiMTjAnG4hyGmqoJFG9S', 'mentor', '2020-11-24 20:49:29'),
(3, 'Sam Smith', 'sam@gmail.com', '$2y$10$NGSpkjxh.2ullxeV2fdRc.JMgmWNtVjtlGHl9VEYUxYpAKKJtMvrO', 'mentor', '2020-11-25 09:36:40'),
(4, 'Big Mom', 'bigmom@pirate.com', '$2y$10$gNBbMJC9RyxP3lppij6bYurn22FrigHTK6t7vLokwwgsAV715CCTi', 'mentor', '2020-11-25 09:38:49'),
(5, 'Test Two', 'test2@test.com', '$2y$10$SnLNJD2U3Pr9tCchnhwCEualPNvQrPmWfG5KchEdMtuYqFkuGx3/K', 'mentee', '2020-11-25 10:31:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
