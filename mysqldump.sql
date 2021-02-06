-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2021 at 09:30 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `autumn`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(16) NOT NULL,
  `name` varchar(64) NOT NULL,
  `size` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `clicks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `size`, `date`, `clicks`) VALUES
(0, '01.jpg', 500, NULL, NULL),
(1, '02.jpg', 500, NULL, NULL),
(2, '03.jpg', 500, NULL, NULL),
(3, '04.jpg', 500, NULL, NULL),
(4, '05.jpg', 500, NULL, NULL),
(5, '06.jpg', 500, NULL, NULL),
(6, '07.jpg', 500, NULL, NULL),
(7, '08.jpg', 500, NULL, NULL),
(8, '09.jpg', 500, NULL, NULL),
(9, '10.jpg', 500, NULL, NULL),
(10, '11.jpg', 500, NULL, NULL),
(11, '12.jpg', 500, NULL, NULL),
(12, '13.jpg', 500, NULL, NULL),
(13, '14.jpg', 500, NULL, NULL),
(14, '15.jpg', 500, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);
