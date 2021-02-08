-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 08, 2021 at 09:48 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `autumn`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
