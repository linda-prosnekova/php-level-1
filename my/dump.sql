-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 13, 2021 at 08:51 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `autumn`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `session_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(16) NOT NULL,
  `name` varchar(16) NOT NULL,
  `review` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `review`) VALUES
(1, 'Вася', 'Картинки огонь!'),
(2, 'Коля', 'Не интересно'),
(3, 'Ваня', 'так себе'),
(5, 'Стас', 'Матрас');

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

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `images` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(512) NOT NULL,
  `price` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `images`, `name`, `description`, `price`, `likes`) VALUES
(1, 'good1.jpg', 'кисточка', 'малярная полиамиадная', 100, 2),
(2, 'good2.jpg', 'ведро', 'малярное', 50, 1),
(3, 'good3.jpg', 'обои', 'белые', 400, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
