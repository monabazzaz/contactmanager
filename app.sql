-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2017 at 10:04 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstName`, `lastName`, `title`, `address`, `city`, `state`, `zip`, `phone`, `notes`) VALUES
(2, 'Ellen', 'Turner', '4', '140 East Longview Street', 'Chapel Hill', 'North Carolina', '27516', '919-384-6706', 'Best friend and super awesome duplex buddy! She\'s going to be famous one day.'),
(6, 'Mona', 'Bazzaz', '4', '205 Draymore Way', 'Cary', 'North Carolina', '27519', '919-802-2280', 'Senior journalism student with a huge affinity for British culture!'),
(8, 'Jesse', 'Mechanic', '3', '112 Noble Street', 'Chapel Hill', 'North Carolina', '27516', '919-794-1562', ' Jesse once fell out of a tree and nearly had his arm amputated. It was scary. But now he has a cool scar!'),
(9, 'Katie', 'Ryan', '4', '299 Lincoln Avenue', 'Rockville Centre', 'New York', '11570', '516-592-1009', 'Katie Ryan is a wonderful human being! We likes to play the soccer together and also drinks the alcohol and go dancing! (sometimes on tables)'),
(10, 'Kia', 'Bazzaz', '3', '205 Draymore Way', 'Cary', 'North Carolina', '27519', '919-599-4256', 'Kia is my brother !!! He\'s going to Costa Rica today. It\'s not fair. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
